<?php

namespace App\Mail;

use App\Models\User;
use App\Models\Reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReservationMail extends Mailable
{
    use Queueable, SerializesModels;
public   User $client;
public   Reservation $reservation;
    /**
     * Create a new message instance.
     */
    public function __construct(User $user, Reservation $reservation)
    {
            $this->client= $user;
            $this->reservation= $reservation;
    }

    /**
     * Get the message envelope.
     */
    public function  build()
    {
        return $this->from('evans.degbe@gmail.com')
                    ->subject('RESERATION COCTAIL ROY')
                    ->view('emails.email-success');
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.email-success',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
