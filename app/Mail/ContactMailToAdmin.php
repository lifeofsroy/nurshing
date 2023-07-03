<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMailToAdmin extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $email;
    protected $phone;
    protected $purpose;
    protected $desc;

    public function __construct($name, $email, $phone, $purpose, $desc)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->purpose = $purpose;
        $this->desc = $desc;
    }

    public function envelope()
    {
        return new Envelope(
            subject: 'Contact Request',
        );
    }

    public function content()
    {
        return new Content(
            view: 'emails.contact-admin',

            with: [
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'purpose' => $this->purpose,
                'desc' => $this->desc,
            ],
        );
    }

    public function attachments()
    {
        return [];
    }
}
