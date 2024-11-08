<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\RegimenFiscal;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rules;
use Illuminate\View\View;


class DatosPersonalesController extends Controller
{
    public function edit($id)
    {
        $datosPersonales = User::find($id);
        $regimenFiscales = RegimenFiscal::all();

        return view('personales.edit',compact('datosPersonales'),compact('regimenFiscales'));
//        return $datosPersonales;
    }
    public function update(Request $request, $id){
        $post = User::find($id);
        $post->update($request->all());
        

        return redirect()->route('dashboard')
        ->with('success', 'Datos Guardados.'); 
    }
}   
