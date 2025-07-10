<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    public function mostrar()
    {
        $actividades = Actividad::all();
        return view('actividad.verActividad')->with('actividades', $actividades);
    }

    public function crear()
    {
        return view('actividad.crearActividad');
    }

    public function guardar(Request $request)
    {
        $actividad = new Actividad();
        $actividad->tipo = $request->input('tipo');
        $actividad->fecha = $request->input('descripcion');
        $actividad->idUsuario = $request->input('idusuario');
        $actividad->save();
        return "Actividad guardada";
    }

    public function seleccionar($id)
    {
        $actividad = Actividad::find($id);
        return view('actividad.verActividad')->with('actividad', $actividad);
    }

    public function editar($id)
    {
        $actividad = Actividad::find($id);
        return view('actividad.actualizarActividad')->with('actividad', $actividad);
    }

    public function actualizar(Request $request, $id)
    {
        $actividad = Actividad::find($id);
        $actividad->tipo = $request->input('tipo');
        $actividad->fecha = $request->input('descripcion');
        $actividad->idUsuario = $request->input('idusuario');
        $actividad->save();
        return "Actividad actualizada";
    }

    public function eliminar($id)
    {
        $actividad = Actividad::find($id);
        $actividad->delete();
        return "Actividad eliminada";
    }
}