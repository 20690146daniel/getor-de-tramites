<?php

namespace App\Http\Controllers;

use App\Models\Tramite;

use App\Models\TipoTramite;
use App\Models\Secretarias;

use Illuminate\Http\Request;


class TramiteController extends Controller
{
    
    public function mostrarFormulario()
    {

        $tiposTramite = TipoTramite::all();
        $secretaria = Secretarias::all();
        
    
        return view('tramitesviews.crear', compact('tiposTramite','secretaria'));
    }

   
    
    public function index()
    {
        return view('tramites');


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
