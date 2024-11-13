<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Mail\TestMail;
use App\Http\Controllers\MailController;
use App\Models\DocumentoNecesario;
use App\Http\Controllers\DocumentoNecesarioController;
use App\Http\Controllers\DocumentosUsuarioController;
use App\Http\Controllers\DocumentoCargadoController;
use App\Http\Controllers\DatosPersonalesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('send-mail', [MailController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::any('/personas/base',[DocumentosUsuarioController::class,'index_b'])->name('personas.base');
Route::any('/personas/pura',[DocumentosUsuarioController::class,'index_p'])->name('personas.pura');


Route::get('/personales/{user}',[DatosPersonalesController::class,'edit'])->name('personales.edit');
Route::post('/personales/{user}/update',[DatosPersonalesController::class,'update'])->name('personales.update');

Route::any('/doc_b/{user}',[DocumentoNecesarioController::class,'index_b'])->name('documentos_b.index');
Route::any('/doc_p/{user}',[DocumentoNecesarioController::class,'index_p'])->name('documentos_p.index');

Route::get('/sube_documento/{user}/{documento}',[DocumentoCargadoController::class,'create'])->name('carga.create');
Route::post('/sube_documento/guardar',[DocumentoCargadoController::class,'store'])->name('carga.store');

Route::get('/muestra_documento/{user}/{documento}',[DocumentoCargadoController::class,'muestra'])->name('carga.muestra');

Route::get('/comunica/{user}',[MailController::class,'comunicacion'])->name('correo.comunicacion');
Route::post('/enviacorreo',[MailController::class,'enviar'])->name('correo.enviar');
Route::any('/privacidad',[DatosPersonalesController::class,'privacidad'])->name('privacidad');
Route::post('/aprobar_privacidad',[DatosPersonalesController::class,'aprobar_privacidad'])->name('aprobar_privacidad');

require __DIR__.'/auth.php';
