<?php

namespace App\Http\Controllers;

use App\Models\Reporte;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function mostrar()
    {
        $reportes = Reporte::all();
        return view('reporte.verReporte')->with('reportes', $reportes);
    }

    public function crear()
    {
        return view('reporte.crearReporte');
    }

    public function guardar(Request $request)
    {
        $reporte = new Reporte();
        $reporte->tipo = $request->input('tipo');
        $reporte->semanaReporte = $request->input('semanaReporte');
        $reporte->estadisticas = $request->input('estadisticas');
        $reporte->recomendacion = $request->input('recomendacion');
        $reporte->idUsuario = $request->input('idUsuario');
        $reporte->save();
        return "Reporte guardado";
    }

    public function seleccionar($id)
    {
        $reporte = Reporte::find($id);
        return view('reporte.verReporte')->with('reporte', $reporte);
    }

    public function editar($id)
    {
        $reporte = Reporte::find($id);
        return view('reporte.actualizarReporte')->with('reporte', $reporte);
    }

    public function actualizar(Request $request, $id)
    {
        $reporte = new Reporte();
        $reporte->tipo = $request->input('tipo');
        $reporte->semanaReporte = $request->input('semanaReporte');
        $reporte->estadisticas = $request->input('estadisticas');
        $reporte->recomendacion = $request->input('recomendacion');
        $reporte->idUsuario = $request->input('idUsuario');
        $reporte->save();
        return "Reporte actualizado";
    }

    public function eliminar($id)
    {
        $reporte = Reporte::find($id);
        $reporte->delete();
        return "Reporte eliminado";
    }
}