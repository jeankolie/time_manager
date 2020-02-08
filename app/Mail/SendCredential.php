<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendCredential extends Mailable
{
    use Queueable, SerializesModels;

    protected $personnel;
    protected $password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($personnel, $password)
    {
        $this->personnel = $personnel;
        $this->password = $password;
        $this->subject("Creation de compte");
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config('mail.username'), 'Time manager')->markdown('emails.personnel.create')->with([
            'personnel' => $this->personnel,
            'password' => $this->password
        ]);
    }
}
