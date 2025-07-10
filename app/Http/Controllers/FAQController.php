<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFAQRequest;
use App\Http\Requests\UpdateFAQRequest;

class FAQController extends Controller
{
    public function mostrar()
    {
        $faqs = Faq::all();
        return view('faq.verFAQ')->with('faqs', $faqs);
    }

    public function crear()
    {
        return view('faq.crearFAQ');
    }

    public function guardar(Request $request)
    {
        $faq = new Faq();
        $faq->pregunta = $request->input('pregunta');
        $faq->respuesta = $request->input('respuesta');
        $faq->save();
        return "FAQ guardada";
    }

    public function seleccionar($id)
    {
        $faq = Faq::find($id);
        return view('faq.verFAQ')->with('faq', $faq);
    }

    public function editar($id)
    {
        $faq = Faq::find($id);
        return view('faq.actualizarFAQ')->with('faq', $faq);
    }

    public function actualizar(Request $request, $id)
    {
        $faq = Faq::find($id);
      $faq->pregunta = $request->input('pregunta');
        $faq->respuesta = $request->input('respuesta');
        $faq->save();
        return "FAQ actualizada";
    }

    public function eliminar($id)
    {
        $faq = Faq::find($id);
        $faq->delete();
        return "FAQ eliminada";
    }
}
