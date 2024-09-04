<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoTramite extends Model
{
    use HasFactory;
    protected $table = 'tipos_tramite'; 
    protected $fillable = ['nombre'];
    
}
