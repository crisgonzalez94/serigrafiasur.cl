<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageConsulta extends Mailable{

    use Queueable, SerializesModels;

    //Parametros
    public $msg;
    public $email;
    public $number;

    //Asunto del correo
    public $subject = 'Consulta';

    /**Create a new message instance.
     * @return void*/
    public function __construct($mensaje , $correo , $telefono){
        //Recibimos el mensaje
        $this->msg = $mensaje;
        $this->email = $correo;
        $this->number = $telefono;
    }

    /*Este metodo envia el mensaje*/
    public function build(){
        //Vista para enviar al correo
        return $this->view('emails.message-consulta');
    }
}
