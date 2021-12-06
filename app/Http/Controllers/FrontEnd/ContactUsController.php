<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Traits\ShowDatalTrait;
use App\Http\Controllers\Controller;
use App\Repository\ContactUsRepository;

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
}
