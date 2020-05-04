<?php

namespace App\Http\Controllers;

use App\Mail\MensajeRecibido;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    public function store(){

        $mensaje= request()->validate([
                'name' => 'required',
                'email' => 'required|email',
                'fono' => 'required|digits:9',
                'mensaje' => 'required|min:5',
            
        ]);
        
        Mail::to('felipei.mancilla@gmail.com')->queue(new MensajeRecibido($mensaje));
        
        // para previsualizar el mail sin mandarlo
        // return new MensajeRecibido($mensaje);
        // return view("mensajeenviado");
        // return request(); 
        // return request('name');
        // return "Mensaje enviado"; 
        return back()->with('estatus', 'Su mensaje se ha enviado con éxito.');
    }
}
