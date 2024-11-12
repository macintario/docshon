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
use Illuminate\Support\Facades\Auth;


class DatosPersonalesController extends Controller
{
    public function edit($id)
    {
        $datosPersonales = User::find($id);
        $regimenFiscales = RegimenFiscal::all();

        return view('personales.edit', compact('datosPersonales'), compact('regimenFiscales'));
        //        return $datosPersonales;
    }
    public function update(Request $request, $id)
    {
        $usr = User::find($id);
        $usr->update($request->all());
        if (Auth::user()->tipo == 2) {
            if ($usr->tipo == 3) {
                $ruta = "personas.base";
            } else {
                $ruta = "personas.pura";
            }
        } else {

            $ruta = "dashboard";
        }
        return redirect()->route($ruta);
    }
    public function aviso(){
        return view('privacidad');
    }
}
