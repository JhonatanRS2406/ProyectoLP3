<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Ususario //

Route::get("/usuario/miperfil",function(){
    return view("usuario.verUsuario");
});

Route::get("/usuario/crear",function(){
    return view("usuario.crearUsuario");
});

Route::get("/usuario/actualizar",function(){
    return view("usuario.actualizarUsuario");
});

Route::put("/usuario/guardar",function(){
            return view("usuario.crearUsuario");
});

// Tareas //

Route::get("usuario/tarea/crear",function(){
    return view("tarea.crearTarea");
});

Route::get("/usuario/tarea/ver",function(){
    return view("tarea.verTarea");
});

Route::get("/usuario/tarea/modificar",function(){
    return view("tarea.actualizarTarea");
});

Route::put("/usuario/tarea/guardar",function(){
            return view("tarea.crearTarea");
});

// Actividad //
// Notificacion //
Route::get("/usuario/notificacion",function(){
    return view("notificacion.verNotificacion");
});
// FAQ //
Route::get("/FAQ",function(){
    return view("faq.verFAQ");
});

// Reporte //

Route::get("/usuario/reporte",function(){
    return view("reporte.verReporte");
});
////
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
