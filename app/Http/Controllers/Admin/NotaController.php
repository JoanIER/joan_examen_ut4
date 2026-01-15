<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;

class NotaController extends Controller
{
    public function create()
    {
        return view('students.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'mensaje' => 'required|string|min:8',
        ]);

        $nota = new Nota();   
        $nota->nombre = $datos['nombre'];
        $nota->apellidos = $datos['apellidos'];
        $nota->mensaje = $datos['mensaje'];
        
        $nota->save();

        return redirect()->route('admin.students.index')
        ->with('success', 'Calificación guardada');
    }
}
