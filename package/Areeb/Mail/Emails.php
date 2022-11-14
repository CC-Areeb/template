<?php

namespace Areeb\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Queue\SerializesModels;

class Emails extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $validated;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($validated)
    {
        $this->validated = $validated;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {
        return $this->from($this->validated['sender'])
                    ->subject($this->validated['subject'])
                    ->to($this->validated['to'])
                    ->markdown('areeb::emails.welcome');
    }
}