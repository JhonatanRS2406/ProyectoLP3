<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function mostrar()
    {
        $usuarios = User::all();
        return view('usuario.verUsuario')->with('usuarios', $usuarios);
    }

    public function crear()
    {
        return view('auth.register');
    }

    public function guardar(Request $request)
    {
        $usuario = new User();
        $usuario->nombre = $request->input('nombre');
        $usuario->apellido = $request->input('apellido');
        $usuario->email = $request->input('email');
        $usuario->password = bcrypt($request->input('password'));
        $usuario->nacionalidad = $request->input('nacionalidad');
        $usuario->save();
        return "Usuario guardado";
    }

    public function seleccionar($id)
    {
        $usuario = User::find($id);
        return view('usuario.verUsuario')->with('usuario', $usuario);
    }

    public function editar($id)
    {
        $usuario = User::find($id);
        return view('usuario.actualizarUsuario')->with('usuario', $usuario);
    }

    public function actualizar(Request $request, $id)
    {
        $usuario = User::findOrFail($id);
        $usuario->nombre = $request->input('nombre');
        $usuario->apellido = $request->input('apellido');
        $usuario->email = $request->input('email');
        if ($request->input('password')) {
            $usuario->password = bcrypt($request->input('password'));
        }
        $usuario->nacionalidad = $request->input('nacionalidad');
        $usuario->save();
        return "Usuario actualizado";
    }

    public function eliminar($id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        return "Usuario eliminado";
    }
}