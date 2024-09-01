<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tramite;

class TramiteController extends Controller
{
    public function index()
    {
        return view('tramites');
    }

    public function guardar(Request $request)
    {
        
        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string',
            'telefono' => 'required|date',
            'descripcion' => 'required|string',
            'observaciones' => 'required|string',
            'usuario_id' => 'required|integer',
        ]);

        
        Tramite::crearNuevo($request->all());

        
        return redirect()->back()->with('success', 'Trámite guardado exitosamente');
    }
    public function store(Request $request)
{
    
    $request->validate([
        'nombre' => 'required|string|max:255',
        'direccion' => 'required|string|max:255',
        'telefono' => 'required|string|max:20',
        'descripcion' => 'required|string',
        'tipo_tramite' => 'required|string',
        'observaciones' => 'required|string',
        'secretaria_designada' => 'required|string',
    ]);

    
    Tramite::create($request->all());

    return redirect()->back()->with('success', 'Trámite guardado exitosamente.');
}

    
}
