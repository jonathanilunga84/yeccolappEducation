<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $Data = [];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $data)
    {
        $this->Data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('jonathandoc411@gmail.com')
                    ->subject('Formation Yeccolapp')
                    ->view('mails.formationMail');
    }
}
