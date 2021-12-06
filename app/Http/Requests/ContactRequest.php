<?php

namespace App\Http\Requests;

use App\Http\Requests\Api\FormRequest;

class ContactRequest  extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $k = count($this->segments());
        $endPoint = $this->segment($k);
        switch ($endPoint) {
            case 'create-post':
                return  $this->createValidation();
            case 'delete':
                return $this->idValidation();;
            default:
                return [];
        }

    }
    private function createValidation(){
        return [
            'email'   => 'required',
            'name'    => 'required',
            'msg'     => 'required',
            'subject' => 'required',
        ];
    }
}
