<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App;
use App\Contacto;
use Mail;


class MessageController extends Controller
{
    public function create(){
        return view('contacto');
    }


    public function store(Request $request){

        request()->validate([
            'nombre' => 'required | min: 15',
            'email' => 'required | email',
            'asunto' =>'required',
            'mensaje'=>'required | min: 30'
        ], [

            'nombre.required' => 'Nombre Completo es requerido para continuar',
            'nombre.min' => 'Nombre demasiado corto, minimo 15 caracteres',
             'email.required' => 'Email es requerido para continuar',
             'email.email' => 'Email debe ser valido para poder continuar',
             'asunto.required' => 'El asunto del mensaje es requerido para continuar',
             'mendaje.required' =>'El mensaje es requerido para continuar',
             'mensaje.min' => 'Mensaje demasiado corto, minimo 30 caracteres'

        ]);

        $contacto = new Contacto ();
        $contacto->nombre = $request->nombre;
        $contacto->email = $request->email;
        $contacto->asunto = $request->asunto;
        $contacto->mensaje = $request->mensaje;

        $contacto->save();

        $subject = "mensaje";
        $for = "kelsymaradiaga96@gmail.com";
        Mail::send('layouts.email',$request->all(), function($msj) use($subject,$for){
           $msj->from("onmediagrouphn02@gmail.com","ON MEDIA GROUP");
           $msj->subject($subject);
            $msj->to($for);
        });
        return view('layouts.SuccesMessage');

    }
}
