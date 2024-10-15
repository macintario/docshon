<?php

namespace App\Http\Controllers;

use App\Models\DocumentoNecesario;
use Illuminate\Http\Request;

class DocumentoNecesarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index_b()
    {
        //
        $documentos = DocumentoNecesario::query()->when('puro_base',function($query){
                return $query->where('puro_base',3);
        })->paginate(15);
        return view('documentos_b.index',compact('documentos'));
    }

    public function index_p()
    {
        //
        $documentos = DocumentoNecesario::query()->when('puro_base',function($query){
                return $query->where('puro_base',4);
        })->paginate(15);
        return view('documentos_b.index',compact('documentos'));
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
    public function show(DocumentoNecesario $documentoNecesario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DocumentoNecesario $documentoNecesario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DocumentoNecesario $documentoNecesario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DocumentoNecesario $documentoNecesario)
    {
        //
    }
}
