<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\TestMail;

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
}