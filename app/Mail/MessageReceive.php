<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageReceive extends Mailable
{
    use Queueable, SerializesModels;
    public $msg;

    //Asunto del correo
    public $subject = 'Serigrafiasur Presupuesto';

    /**Create a new message instance.
     * @return void*/
    public function __construct($mensaje){
        //Recibimos el mensaje
        $this->msg = $mensaje;
    }

    /*Este metodo envia el mensaje*/
    public function build(){
        //Vista para enviar al correo
        return $this->view('emails.message-received');
    }
}
