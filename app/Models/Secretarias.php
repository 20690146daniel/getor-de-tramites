<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secretarias extends Model
{
    use HasFactory;
    protected $table = 'secretarias_'; 
    protected $fillable = ['nombre'];
}
