<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Cloud Computing 2025 - Registration Confirmation',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'registration-email-template',
            with: [
                'name' => $this->data["name"],
                'email' => $this->data["email"],
                'birthdate' => $this->data["birthdate"]
            ]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}