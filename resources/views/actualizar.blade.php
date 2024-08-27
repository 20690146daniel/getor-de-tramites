@extends('layouts.app')

@section('title'.'Cambiar Contrasena')
@section('content')

<section>
    
<h3>
    Cambio de contrasena
</h3>

<div class ="row justify-content-center"  >
    <div class="col-md-4">
        <div class="card">
          <div class="card-header">{{'Cambio de contrasena'}}</div>
          <div class="card-body">
            <a>Antigua contrasena</a>
            <input id="password" type="password" class="form-control"> 
            <a>Nueva contrasena</a>
            <input id="password" type="password" class="form-control"> 
            <a>Confirma contrasena</a>
            <input id="password" type="password" class="form-control"> </div>

            <button type="button" class="btn btn-primary" onclick="window.location.href='{{ route('perfil') }}'">
                {{ __('Confirmar') }}
            </button>
          </div> 
        </div>
     
        
      </div>
</div>

<div class="d-flex justify-content-center w-100">
    <button type="button" class="btn btn-danger" onclick="window.location.href='{{ route('perfil') }}'">
        {{ __('Cancelar') }}
    </button>
</div>
</section>

@endsection