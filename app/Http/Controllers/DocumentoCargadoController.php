<?php

namespace App\Http\Controllers;

use App\Models\DocumentoCargado;
use Illuminate\Http\Request;

class DocumentoCargadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index_b()
    {
        //
        $documentosCargados = DocumentoCargado::paginate(10);
        return view('personas.index_b',compact('documentosCargados'));
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
    public function show(DocumentoCargado $documentoCargado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DocumentoCargado $documentoCargado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DocumentoCargado $documentoCargado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DocumentoCargado $documentoCargado)
    {
        //
    }
}
