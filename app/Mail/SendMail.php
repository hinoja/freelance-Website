<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data=[];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $user)
    {
      $this->data=$user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('hinoja2@gmail.com')
                    ->subject('Mon objet Personnalisé')
                     ->view('emails.testmail')->attach('Assets/images/cake.jpg');
    }
}
