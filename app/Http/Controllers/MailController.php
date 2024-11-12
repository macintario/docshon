<?php

namespace App\Http\Controllers;

use App\Mail\Comunicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Models\User;

class MailController extends Controller
{
    public function index()
    {
        Mail::to('macintario@gmail.com')->send(new TestMail([
            'title' => 'Buenas noticias',
            'body' => 'Sirva la presente, para ......',
            'signature' => 'La técnica al servicio de la patria'
        ]));
    }

    public function comunicacion(Request $request,string $id)
    {
        $usr=User::find($id);
        return view('correo.comunicacion',compact('usr'));
    }

    public function enviar(Request $request)
    {
        $destinatario="macintario@gmail.com";
        $destinatario = "kgonzalezt2001@alumno.ipn.mx";
        //$destinatario= $request->mailto;


        $mail = Mail::to($destinatario)->send(new comunicacion([
            'destinatario'=> $request->destinatario,
            'body'=> nl2br($request->msg),
        ]));


        return redirect('/dashboard');
    }
}
