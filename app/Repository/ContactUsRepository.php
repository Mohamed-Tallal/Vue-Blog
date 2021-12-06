<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;
use App\Interfaces\ContactUsInterface;
use App\Mail\ContactMail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class ContactUsRepository {

    public function get_contact_data(){
        $contact = DB::table('emails')->select('number','email','address','location')->orderBy('id', 'desc')->first();
        return $contact ;
    }
    public function create_contact_data($data){
        $contact = DB::table('emails')->insert([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'subject'=>$data['subject'],
            'msg'=>$data['msg'],
            'created_at' => Carbon::now()
        ]);
        Mail::to('mohamedtallal28@gmail.com')->send(new ContactMail($data['name'],$data['email'],$data['subject'],$data['msg']));
        return $contact ;
    }



}
