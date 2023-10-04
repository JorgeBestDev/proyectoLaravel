<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\ComputadorController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;





Route::view('/', 'login')->name('login');


Route::view('/register', 'auth.register')->name('register');
Route::post('/register',[RegisteredUserController::class,'store']);


Route::get('/index',[ComputadorController::class, 'index'])->name('index');


Route::get('/persona',[PersonaController::class, 'index'])->name('posts.persona');
Route::post('/createPersona',[PersonaController::class, 'store'])->name('posts.createPersona');
Route::get('/editPersona',[PersonaController::class, 'update'])->name('posts.editPersona');



Route::get('/index', [ComputadorController::class, 'index'])->name('posts.index');
Route::get('/index/{computador}', [ComputadorController::class, 'show'])->name('posts.show');
Route::get('/index/{computador}/edit', [ComputadorController::class, 'edit'])->name('posts.editPc');
Route::put('/index/{computador}', [ComputadorController::class, 'update'])->name('posts.updatePc');
Route::delete('/index/{computador}', [ComputadorController::class, 'destroy'])->name('posts.destroy');



Route::get('/computador',[ComputadorController::class, 'create'])->name('posts.pc');
Route::post('/createPc',[ComputadorController::class, 'store'])->name('posts.createPc');


Route::post('/',[AuthenticatedSessionController::class, 'store'])->name('validate');
Route::post('/logout',[AuthenticatedSessionController::class, 'destroy'])->name('logout');



?>
