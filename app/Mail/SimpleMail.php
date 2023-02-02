<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SimpleMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $sender;
    protected $senderName;
    protected $recipientName;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sender, $senderName, $recipientName)
    {
        $this->sender        = $sender;
        $this->senderName    = $senderName;
        $this->recipientName = $recipientName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->sender)
            ->view('mail.simple')
            ->with(
                [
                    'recipient' => $this->recipientName,
                    'sender'    => $this->senderName
                ]
            );
    }
}
