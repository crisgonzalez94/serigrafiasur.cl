<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class GaleriaController extends Controller{
    //
    public function galeria(){
        //Obteniendo las fotos de manera aleatoria desde la galeria
        $fotos = DB::table('galeria')->get()->shuffle();


        return view('galeria' , ['fotos' => $fotos]);
    }
    
}
