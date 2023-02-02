<?php
namespace App\Helpers;

use App\Mail\SimpleMail;
use Illuminate\Support\Facades\Mail;

class EmailHelper
{
    protected $sender;
    protected $senderName;
    protected $recipient;
    protected $recipientName;
    protected $subject;
    protected $messageBody;

    public function send(): void
    {
        Mail::raw($this->messageBody, function ($message) {
            $message->from($this->sender, $this->senderName);
            $message->to($this->recipient, $this->recipientName);
            $message->subject($this->subject);
            $message->priority(3);
        });
    }

    public function getSender(): string
    {
        return $this->sender;
    }

    public function getRecipient(): string
    {
        return $this->recipient;
    }

    public function getRecipientName(): string
    {
        return $this->recipientName;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function getMessageBody(): string
    {
        return $this->messageBody;
    }

    public function setSender($sender): void
    {
        $this->sender = $sender;
    }

    public function setSenderName($senderName): void
    {
        $this->senderName = $senderName;
    }

    public function setRecipient($recipient): void
    {
        $this->recipient = $recipient;
    }

    public function setRecipientName($recipientName): void
    {
        $this->recipientName = $recipientName;
    }

    public function setSubject($subject): void
    {
        $this->subject = $subject;
    }

    public function setMessageBody($messageBody): void
    {
        $this->messageBody = $messageBody;
    }
}
