<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class DatosPersonalesController extends Controller
{
    public function edit($id)
    {
        $datosPersonales = User::find($id);

        return view('personales.edit',compact('datosPersonales'));
    }

}   
