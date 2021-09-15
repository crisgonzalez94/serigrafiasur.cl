<?php

namespace App\Http\Controllers;
//Importar clase mail
use App\Mail\MessageReceive;
//Importar clase mensaje de consulta
use App\Mail\MessageConsulta;
//Facade para mail
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class ContactoController extends Controller{
    

    public function contacto(){
        return view('contacto');
    }

    //Mensaje de Consulta
    public function mensajeContacto(Request $request){

        //Recibir el json
        $email = $request->input("email");
        $number = $request->input("whatsapp");
        $message = $request->input("mensaje");



        //Enviar mensaje
        Mail::to('ventas@serigrafiasur.cl')->send(new MessageConsulta($message , $email , $number));
        //Revisar el correo (en produccion debe comnentarse)
        //return new MessageConsulta($message , $email , $number);
        return view('contacto');

        
        
    }
    
}
