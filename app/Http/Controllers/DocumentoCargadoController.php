<?php

namespace App\Http\Controllers;

use App\Models\DocumentoCargado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class DocumentoCargadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index_b()
    {
        //
        $documentosCargados = DocumentoCargado::paginate(10);
        return view('personas.index_b', compact('documentosCargados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('carga.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'file' => 'required|mimes:png,jpg,pdf|max:2048'
        ]);
//        return $request->all();
        if ($request->file('file')->isValid()) {
            // Store the file in the 'uploads' directory on the 'public' disk
            $filePath = $request->file('file')->store('uploads', 'public');
            // Return success response
            $documento = new DocumentoCargado();
            $documento->user_id = Auth::user()->id;
            $documento->documento_necesario_id = $request->document_id;
            $documento->nombre_subida = $filePath;
            $documento->nombre_interno = $filePath;
            $documento->save();
            return back()->with('success', 'Archivo cargado')->with('file', $filePath);
        }
        // Return error response
        return back()->with('error', 'No se pudo subir el archivo');
    }

    /**
     * Display the specified resource.
     */
    public function show(DocumentoCargado $documentoCargado)
    {
        $url = Storage::url("uploads/{$filename}");

        return view('carga.show', ['url' => $url]);
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
