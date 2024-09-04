<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\TramiteController;



Route::get('/', function () {
    return view('welcome');
});
Route::view('/loginn', 'login')-> name ('login');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/home', [App\Http\Controllers\InicioController::class, 'index'])->name('home');





Route::get('/archivos', [App\Http\Controllers\ArchivosController::class, 'index'])->name('archivos');

Route::get('/perfil', [App\Http\Controllers\PerfilController::class, 'index'])->name('perfil');


Route::get('/contrasena', [App\Http\Controllers\PerfilController::class, 'cambiar'])->name('cambio');
Route::post('/actualizar', [App\Http\Controllers\PerfilController::class, 'updatepassword'])->name('actualizar');

Route::get('/tramites', [App\Http\Controllers\TramiteController::class, 'index'])->name('tramites');



Route::get('/CrearTramite', [App\Http\Controllers\CreateTramiteController::class, 'index'])->name('crear');
Route::get('/CrearTramite', [TramiteController::class, 'mostrarFormulario'])->name('formulario');
Route::post('/tramites', [TramiteController::class, 'store'])->name('tramites.store');





Route::resource('files', FileController::class);
