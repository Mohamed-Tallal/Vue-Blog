<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name ;
    public $email ;
    public $msg ;
    public $subject ;
    public function __construct($name = '',$email = '',$msg = '',$subject = '')
    {
        $this->name = $name;
        $this->email = $email;
        $this->msg = $msg;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('Email.contact')
        ->with(['name' => $this->name ,
            'email' => $this->email,
            'subject' => $this->subject,
            'msg' => $this->msg  ]);
    }
}
