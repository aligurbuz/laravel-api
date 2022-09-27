<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyEmailForUser extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var array
     */
    protected array $data = [];

    /**
     * Create a new message instance.
     *
     * @param array $data
     */
    public function __construct(array $data = [])
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
        return $this
            ->view('mail.user-verifying-email')
            ->subject('User Verifying Email');
    }
}
