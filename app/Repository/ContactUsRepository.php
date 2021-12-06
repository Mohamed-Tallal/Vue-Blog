<?php

namespace App\Repository;

use App\Interfaces\ContactUsInterface;
use App\Model\ContactUs;

class ContactUsRepository {

    public function get_contact_data(){
        $contact = ContactUs::select('number','email','address','location')->orderBy('id', 'desc')->first();
        return $contact ;
    }



}
