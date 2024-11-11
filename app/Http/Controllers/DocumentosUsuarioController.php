<?php

namespace App\Http\Controllers;

use App\Models\DocumentosUsuario;
use Illuminate\Http\Request;

class DocumentosUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index_b()
    {
        $documentosUsuarios = DocumentosUsuario::query()->when('tipo', function ($query) {
            return $query->where('tipo', 3);
        })->paginate(15);
//        return $documentosUsuarios;
        return view('personas.index_b', compact('documentosUsuarios'));
    }

    public function index_p()
    {
        $documentosUsuarios = DocumentosUsuario::query()->when('tipo', function ($query) {
            return $query->where('tipo', 4);
        })->paginate(15);
        return view('personas.index_b', compact('documentosUsuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DocumentosUsuario $documentosUsuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DocumentosUsuario $documentosUsuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DocumentosUsuario $documentosUsuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DocumentosUsuario $documentosUsuario)
    {
        //
    }
}
