<?php

namespace App\Http\Controllers;

use App\Models\Notificacion;
use Illuminate\Http\Request;

class NotificacionController extends Controller
{
    public function mostrar()
    {
        $notificaciones = Notificacion::all();
        return view('notificacion.verNotificacion')->with('notificaciones', $notificaciones);
    }

    public function crear()
    {
        return view('notificacion.crearNotificacion');
    }

    public function guardar(Request $request)
    {
        $notificacion = new Notificacion();
        $notificacion->mensaje = $request->input('mensaje');
        $notificacion->fechaNotificacion= $request->input('fechaNotificacion');
        $notificacion->idUsuario = $request->input('idUsuario');
        $notificacion->idTarea = $request->input('idTarea');
        $notificacion->save();
        return "Notificación guardada";
    }

    public function seleccionar($id)
    {
        $notificacion = Notificacion::find($id);
        return view('notificacion.verNotificacion')->with('notificacion', $notificacion);
    }

    public function editar($id)
    {
        $notificacion = Notificacion::find($id);
        return view('notificacion.actualizarNotificacion')->with('notificacion', $notificacion);
    }

    public function actualizar(Request $request, $id)
    {
        $notificacion = Notificacion::find($id);
        $notificacion->mensaje = $request->input('mensaje');
        $notificacion->fechaNotificacion= $request->input('fechaNotificacion');
        $notificacion->idUsuario = $request->input('idUsuario');
        $notificacion->idTarea = $request->input('idTarea');
        $notificacion->save();
        return "Notificación actualizada";
    }

    public function eliminar($id)
    {
        $notificacion = Notificacion::find($id);
        $notificacion->delete();
        return "Notificación eliminada";
    }
}