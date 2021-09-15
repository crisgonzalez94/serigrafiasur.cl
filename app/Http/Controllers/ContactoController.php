<?php

namespace App\Http\Controllers;
//Importar clase mail
use App\Mail\MessageReceive;
//Importar clase mensaje de consulta
use App\Mail\MessageConsulta;
//Facade para mail
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    

    public function store(Request $request){

        //Recibir el json
        $mensaje = $request->input("mensaje");
        $email = $request->input("email");
        //Enviar correo
        Mail::to($email)->send(new MessageReceive($mensaje));

        //Revisar el correo (en produccion debe comnentarse)
        //return new MessageReceive($mensaje);

        return view('presupuesto');
    }
    
}
