<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tramite extends Model

{
    use HasFactory;
    
    protected $fillable = [ 'nombre',
    'direccion',
    'telefono',
    'descripcion',
    'tipo_tramite',
    'observaciones',  
    'secretaria_designada',
    'estado',];

    
    public static function crearNuevo($data)
    {
        return self::create([
            'nombre' => $data['nombre'],
            'direccion' => $data['direccion'],
            'telefono' => $data['telefono'],
            'descripcion' => $data['descripcion'],
            'tipo_tramite' => $data['tipo_tramite'],
            'observaciones' => $data['observaciones'],
            'secretaria_designada' => $data['secretaria_designada'],
            'estado' => $data['estado'] ?? 'pendiente',
        ]);
    }
}
