<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class welcomeMail extends Mailable
{
    use Queueable, SerializesModels;
    public $get_user_email;
    public $get_user_name;
    public $validToken;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($get_user_email, $get_user_name, $validToken)
    {
        $this->get_user_email = $get_user_email;
        $this->get_user_name = $get_user_name;
        $this->validToken = $validToken;
    }



    public function build()
    {
        return $this->view('emails.welcome')->with([
            'user_mail' => $this->get_user_email,
            'validToken' => $this->validToken,
            'user' => $this->get_user_name,


        ]);

    }
}