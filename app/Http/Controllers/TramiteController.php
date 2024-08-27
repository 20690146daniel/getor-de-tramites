<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TramiteController extends Controller
{
    public function index()
    {
        return view('tramites');
    }
}
