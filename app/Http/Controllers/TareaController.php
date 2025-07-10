<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTareaRequest;
use App\Http\Requests\UpdateTareaRequest;

class TareaController extends Controller
{
     public function mostrar()
    {
        $tareas = Tarea::all();
        return view('tarea.verTarea')->with('tareas', $tareas);
    }

    public function crear()
    {
        return view('tarea.crearTarea');
    }

    public function guardar(Request $request)
    {
        $tarea = new Tarea();
        $tarea->titulo = $request->input('titulo');
        $tarea->descripcion = $request->input('descripcion');
        $tarea->tipo = $request->input('tipo');
        $tarea->estado = $request->input('estado');
        $tarea->idUsuario = $request->input('idusuario');
        $tarea->save();
        return "Tarea guardada";
    }

    public function seleccionar($id)
    {
        $tarea = Tarea::find($id);
        return view('tarea.verTarea')->with('tarea', $tarea);
    }

    public function editar($id)
    {
        $tarea = Tarea::find($id);
        return view('tarea.actualizarTarea')->with('tarea', $tarea);
    }

    public function actualizar(Request $request, $id)
    {
        $tarea = Tarea::find($id);
        $tarea->titulo = $request->input('titulo');
        $tarea->descripcion = $request->input('descripcion');
        $tarea->tipo = $request->input('tipo');
        $tarea->estado = $request->input('estado');
        $tarea->idUsuario = $request->input('idusuario');
        $tarea->save();
        return "Tarea actualizada";
    }

    public function eliminar($id)
    {
        $tarea = Tarea::find($id);
        $tarea->delete();
        return "Tarea eliminada";
    }
}
