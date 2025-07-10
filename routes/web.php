<?php

use App\Http\Controllers\FAQController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\NotificacionController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Ususario //

Route::get("/usuario/miperfil",[UsuarioController::class,'mostrar']);
 
Route::get("/usuario/crear",[UsuarioController::class,'crear']);

Route::get("/usuario/actualizar",[UsuarioController::class,'editar']);

Route::put("/usuario/guardar",[UsuarioController::class,'guardar']);

// Tareas //

Route::get("usuario/tarea/crear",[TareaController::class,'crear']);

Route::get("/usuario/tarea/ver",[TareaController::class,'mostrar']);

Route::get("/usuario/tarea/modificar",[TareaController::class,'editar']);

Route::put("/usuario/tarea/guardar",[TareaController::class,'guardar']);

// Actividad //
// Notificacion //
Route::get("/usuario/notificacion",[NotificacionController::class, 'mostrar']);
// FAQ //
Route::get("/FAQ",[FAQController::class,'mostrar'])->name('FAQ');

// Reporte //

Route::get("/usuario/reporte",[ReporteController::class, 'mostrar']);
////
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas bloquedas //

 Route::middleware('auth')->group(function () {
         Route::get('/usuario/miperfil', [UsuarioController::class, 'mostrar'])->name('usuario.miperfil');
         Route::get('/usuario/tarea/ver', [TareaController::class, 'mostrar'])->name('usuario.tarea.ver');
         Route::get('/usuario/reporte', [ReporteController::class, 'mostrar'])->name('usuario.reporte');
         Route::get('/usuario/notificacion', [NotificacionController::class, 'mostrar'])->name('usuario.notificacion');        
     });