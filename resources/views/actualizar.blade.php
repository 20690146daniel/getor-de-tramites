@extends('layouts.app')

@section('title'.'Cambiar Contrasena')
@section('content')

<section>
    
<h3>
    Cambio de contrasena
</h3>

<div class="row justify-content-center">
  <div class="col-md-4">

      @if ($errors->any())
          @foreach ($errors->all() as $error)
              <div class="alert alert-danger">{{ $error }}</div>
          @endforeach
      @endif

      
      @if(session('repeatPassword'))
          <div class="alert alert-danger" role="alert">
              {{ session('repeatPassword') }}
          </div>
      @endif

      
      @if(session('notification'))
          <div class="alert alert-success" role="alert">
              {{ session('notification') }}
          </div>
      @endif

      
      <form method="POST" action="{{ route('actualizar') }}" enctype="multipart/form-data">
          @csrf

          <div class="card">
              <div class="card-header">{{ 'Cambio de contraseña' }}</div>
              <div class="card-body">
                  
                  <div class="form-group">
                      <label for="current_password">Antigua contraseña</label>
                      <input id="current_password" type="password" class="form-control" name="current_password" required>
                  </div>

                  <div class="form-group">
                      <label for="new_password">Nueva contraseña</label>
                      <input id="new_password" type="password" class="form-control" name="new_password" required>
                  </div>

              
                  <div class="form-group">
                      <label for="new_password_confirmation">Confirma contraseña</label>
                      <input id="new_password_confirmation" type="password" class="form-control" name="new_password_confirmation" required>
                  </div>
              </div>
              <div class="d-flex justify-content-between">
                  <button type="submit" class="btn btn-primary">
                      {{ __('Confirmar') }}
                  </button>
                  
                    <button type="button" class="btn btn-danger" onclick="window.location.href='{{ route('perfil') }}'">
                        {{ __('Cancelar') }}
                    </button>
                
                
              </div>
          </div>
      </form>

  </div>
</div>


</section>

@endsection