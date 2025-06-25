<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Ususario//

Route::get("/usuario/miperfil",function(){
    return view("usuario.verUsuario");
});

Route::post("/usuario/crear",function(){
    return view("usuario.crearUsuario");
});


// Tareas //

Route::post("usuario/tarea/crear",function(){
    return view("tarea.crearTarea");
});

Route::get("/usuario/tarea/ver",function(){
    return view("tarea.verTarea");
});

// Actividad //
// Notificacion //
// FAQ //
// Reporte //
////