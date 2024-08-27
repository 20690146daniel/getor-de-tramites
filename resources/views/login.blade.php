@extends('layouts.layout')

@section('title'.'Iniciar sesion')
@section('content')
<section class="login">
    <h1> Datos de Usuario</h1>
   <div> <label>Nombre</label>
    <input type="text" placeholder="Escriba su nombre">
   </div>\
   <div>
    <label>Correo</label>
    <input type='text' placeholder="Escriba su correo">
   </div>
   <div>
    <label>contrasena</label>
    <div>
    <input type='text' placeholder="Escriba su contrasena">
   </div>
   <button type="submit" class="button is-success">Iniciar sesión </button>
</section>
@endsection
