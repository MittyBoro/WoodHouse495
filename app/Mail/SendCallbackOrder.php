<?php

namespace App\Mail;

use App\Models\CallbackOrder;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendCallbackOrder extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $subject;

    public function __construct(CallbackOrder $order)
    {
        $this->order = $order;
        $this->subject = 'Новая заявка #' . $order->id;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(subject: $this->subject);
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.callbackorder',
            with: [
                'bgColor' => '#f5f5f5',
                'primaryColor' => '#f2a250',
                'secondaryColor' => '#84c57a',
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
        return [];
        return $this->order->files->toArray();
    }
}
