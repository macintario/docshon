<?php

namespace App\Http\Controllers;

use App\Models\DocumentoCargado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

use function Pest\Laravel\get;

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
            $anteriores=DocumentoCargado::where([['user_id',$documento->user_id],['documento_necesario_id',$request->document_id]]);
            $anteriores->delete();
            $documento->save();
            return back()->with('success', ' ')->with('file', $filePath);
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
    public function  muestra(Request $request)
    {
        $the_url = url()->full();
        $pos1 = strpos($the_url, "muestra_documento/") + 18;
        $pos2 = strpos($the_url, "/", $pos1);
        $id_usr = substr($the_url, $pos1, $pos2 - $pos1);
        $id_doc = substr($the_url, $pos2 + 1);
        $doc = DB::table('documento_cargados')->where('user_id', $id_usr)->where('documento_necesario_id', $id_doc)->first();
        if(is_null($doc)){
            $url="logo_ipn.png";
            return "Archivo no cargado";
        }else{
            $file = $doc->nombre_interno;
            $url = Storage::url("{$file}");
            $url = $file;
        }
        //return $url;
        return view('carga.muestra', ["file" => $url]);
    }
    
}

