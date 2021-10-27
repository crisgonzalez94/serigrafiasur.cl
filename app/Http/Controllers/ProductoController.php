<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function productos(){
        //Obteniendo las fotos de manera aleatoria desde la galeria
        $productos = DB::table('producto')->get()->shuffle();


        return view('productos' , ['productos' => $productos]);
    }

    public function catalogoPdf(){
        return redirect('http://www.serigrafiasur.cl/catalogo.pdf');
    }

    public function catalogo(){
        return view('catalogo');
    }

}
