<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ForgotPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    private $passwordResetLink;
    private $user;

    /**
     * Create a new message instance.
     *
     * ForgotPasswordMail constructor.
     * @param $passwordResetLink
     */
    public function __construct($passwordResetLink, $user)
    {
        $this->passwordResetLink = $passwordResetLink;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.forgot_password')->with([
            'passwordResetLink' => $this->passwordResetLink,
            'user' => $this->user
        ]);
    }
}
