<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyRegistration extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    // variabel di bawah bersifat public dapat diakses pada bagian view pada fungsi build
    public $name;
    public $hashed;
    public $mail_hashed;
    public $id;

    public function __construct($send_data)
    {
        $this->name = $send_data['name'];
        $this->hashed = $send_data['hashed'];
        $this->mail_hashed = $send_data['mail_hashed'];
        $this->id = $send_data['id'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.mail');
    }
}
