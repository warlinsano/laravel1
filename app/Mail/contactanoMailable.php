<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contactanoMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "INFORMACION DE CONCTACTO";
    public $contacto;
    /**
     * Create a new message instance.
     *
     * @return void
     */

    //$contacto esta es la varriable o array que le estamos mandando al contructor en el mentodo store del ContactoController 
    public function __construct($contacto)
    {
        $this->contacto = $contacto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contactanos');
    }
}
