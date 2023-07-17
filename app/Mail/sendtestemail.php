<?php

namespace App\Mail;

// use Faker\Provider\ar_EG\Address;

use App\Models\Personal;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;

class sendtestemail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public Personal $personal)
    {
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Sendtestemail',
            from: new Address('rutulsheladiya2731@gmail.com', 'Rutul Sheladiya'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        // By Simple Way
        // return new Content(
        //     view: 'email.testemail',
        // );

        return new Content(
            view: 'email.testemail',
            with: [
                'name' => $this->personal->name,
                'email' => $this->personal->email,
                'MobileNumber' => $this->personal->mobilenumber,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            // Attachment::fromStorage('/public/image/bee.png'),
            // Attachment::fromStorage('/public/test.txt'),
            Attachment::fromStorage('/public/test.txt')->as('index.txt')->withMime('text/plain'),

        ];
    }
}
