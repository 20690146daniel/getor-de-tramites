@extends('layouts.app')

@section('title'.'Tramites')
@section('content')
<h3>
    Listado de tramites
</h3>
@include('layouts.secretaria')
<div class="container mt-5">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Numero</th>
                <th>Tramite</th>
                <th>Estado</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td></td>
                <td></td>
                <td>
                 <button type="button" class="btn btn-primary" onclick="window.location.href='{{ route('perfil') }}'">{{ __('Crear') }}</button>
                 <button type="button" class="btn btn-danger" onclick="window.location.href='{{ route('perfil') }}'">{{ __('Eleminar') }}</button>
                <button type="button" class="btn btn-warning" onclick="window.location.href='{{ route('perfil') }}'">{{ __('Editar') }}</button>
                <button type="button" class="btn btn-success" onclick="window.location.href='{{ route('perfil') }}'">{{ __('Derivar') }}</button></td>
            </tr>
          
        </tbody>
    </table>
</div>

@endsection