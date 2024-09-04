@extends('layouts.app')


@section('content')
<h3>
    Crea el tramite
</h3>

<div class="container mt-5">

    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('tramites.store') }}" method="POST">
                @csrf 
            
                <div class="form-group">
                    <label style="margin-bottom: 0.5rem;">Nombre Completo</label>
                    <input type="text" class="form-control" name="nombre" required>
                </div>
            
                <div class="form-group">
                    <label style="margin-bottom: 0.5rem;">Dirección</label>
                    <input type="text" class="form-control" name="direccion" required>
                </div>
            
                <div class="form-group">
                    <label style="margin-bottom: 0.5rem;">Teléfono</label>
                    <input type="text" class="form-control" name="telefono" required>
                </div>
            
                <div class="form-group">
                    <label style="margin-bottom: 0.5rem;">Descripción</label>
                    <input type="text" class="form-control" name="descripcion" required>
                </div>
            
                <div class="form-group">
                    <label style="margin-bottom: 0.5rem;">Tipo de Trámite</label>
                    <select class="form-control" name="tipo_tramite" required>
                        @foreach ($tiposTramite as $tipo)
                        <option value="{{ $tipo->nombre }}">{{ $tipo->nombre }}</option>
                    @endforeach
                    </select>
                </div>
            
                <div class="form-group">
                    <label style="margin-bottom: 0.5rem;">Observaciones</label>
                    <input type="text" class="form-control" name="observaciones" required>
                </div>
            
                <div class="form-group">
                    <label style="margin-bottom: 0.5rem;">Designar a Secretaría</label>
                    <select class="form-control" name="secretaria_designada" required>
                        @foreach ($secretaria as $tipo)
                        <option value="{{ $tipo->nombre }}">{{ $tipo->nombre }}</option>
                    @endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Guardar') }}
                    </button>
                  
                    <button type="button" class="btn btn-danger" onclick="window.location.href='{{ route('tramites') }}'">
                        {{ __('Salir') }}
                    </button>
              </div>
            
              
            </form>
            
            

            
            </div>
          
        </div>



</div>



@endsection
