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
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.personnel.create')->with([
            'personnel' => $this->personnel,
            'password' => $this->password
        ]);
    }
}
