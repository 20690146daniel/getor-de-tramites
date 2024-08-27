@extends('layouts.app')

@section('title'.'Perfil')

@section('content')
<h3>
    Perfil de Usuario
</h3>
@include('layouts.secretaria')

<div class="container">
    <div class="row">
     
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">{{Auth::user()->rol}}</div>
          <div class="card-body">
          </div>
        </div>
        <div class="card">
            <div class="card-header">{{ __('Menu principal') }}</div>
            <div class="card-body">
              <button type="button" class="btn btn-primary" onclick="window.location.href='{{ route('actualizar') }}'">
                {{ __('Cambiar contraseña') }}
            </button>
              
            </div>
          </div>
        
      </div>
  
      
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Datos de perfil') }}</div>
          <div class="card-body">
            <p>{{Auth::user()->name}}</p>
            <p>{{Auth::user()->email}}</p>
           <p>{{Auth::user()->rol}}</p> 
            
         
          </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection