<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactData;

  
    public function __construct($contactData)
    {
        $this->contactData = $contactData;
    }

  
    public function build()
    {
        return $this->from('niaruma20@gmail.com')
                    ->subject('New Contact Message')
                    ->view('emails.contact')
                    ->with('contactData', $this->contactData);
    }
}
