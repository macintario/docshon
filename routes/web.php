<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Mail\TestMail;
use App\Http\Controllers\MailController;
use App\Models\DocumentoNecesario;
use App\Http\Controllers\DocumentoNecesarioController;
use App\Http\Controllers\DocumentosUsuarioController;
use App\Http\Controllers\DocumentoCargadoController;

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

Route::get('/doc_b/{user}',[DocumentoNecesarioController::class,'index_b'])->name('documentos_b.index');
Route::get('/doc_p/{user}',[DocumentoNecesarioController::class,'index_p'])->name('documentos_p.index');

Route::get('/personas/base',[DocumentosUsuarioController::class,'index_b'])->name('personas.index_b');
Route::get('/personas/pura',[DocumentosUsuarioController::class,'index_p'])->name('personas.index_p');


Route::get('/sube_documento/{user}/{documento}',[DocumentoCargadoController::class,'create'])->name('carga.create');
Route::post('/sube_documento/guardar',[DocumentoCargadoController::class,'store'])->name('carga.store');


require __DIR__.'/auth.php';
