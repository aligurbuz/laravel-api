<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyEmailForUser extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var string
     */
    protected string $mail;

    /**
     * @var string
     */
    protected string $hash;

    /**
     * Create a new message instance.
     *
     * @param string $mail
     * @param string $hash
     */
    public function __construct(string $mail,string $hash)
    {
        $this->mail = $mail;
        $this->hash = $hash;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('verifiedMailAddress','name')
            ->to([$this->mail])
            ->view('mail.verify-email',[
                'hash' => $this->hash
            ])
            ->subject('test message');
    }
}
