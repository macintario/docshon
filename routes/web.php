<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Mail\TestMail;
use App\Http\Controllers\MailController;
use App\Models\DocumentoNecesario;
use App\Http\Controllers\DocumentoNecesarioController;

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

Route::get('/doc_b/{user}',[DocumentoNecesarioController::class,'index'])->name('documentos_b.index');


require __DIR__.'/auth.php';
