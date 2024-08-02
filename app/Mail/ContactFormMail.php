<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contact@hotellesorchidees.com') // Mise à jour de l'adresse de l'expéditeur
                    ->subject($this->data['subject'])
                    ->markdown('emails.contact.contact-form', [
                        'firstname' => $this->data['firstname'],
                        'email' => $this->data['email'],
                        'subject' => $this->data['subject'],
                        'messageBody' => $this->data['message'],
                    ]);
    }
}
