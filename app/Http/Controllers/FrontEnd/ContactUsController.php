<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Traits\ShowDatalTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Repository\ContactUsRepository;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    use ShowDatalTrait ;
    private $contact = '';
    public function __construct(ContactUsRepository $contactRepository)
    {
        $this->contact =  $contactRepository ;
    }
    public function contactUs(){
        $contact = $this->contact->get_contact_data();
        return $this->SuccessWithData('Contact Us Page ',$contact);
    }

    public function create(ContactRequest $request){
        $contact = $this->contact->create_contact_data($request->all());
        return $this->Succes('Thanks . <br> soon , we will contact with you  .' );

    }
    private function rules(){
        return [
            'email'   => 'required',
            'name'    => 'required',
            'msg'     => 'required',
            'subject' => 'required',
        ];
    }
}
