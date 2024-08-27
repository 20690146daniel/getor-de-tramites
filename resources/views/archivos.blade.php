@extends('layouts.app')

@section('title'.'Archivos')
@section('content')

<h3>
    Archivos
</h3>
@include('layouts.secretaria')



<div class="container">
    <h1>Subir Archivo</h1>
    <form action="{{ route('files.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="file">Seleccione un archivo</label>
            <input type="file" class="form-control" name="file" required>
        </div>
        <button type="submit" class="btn btn-primary">Subir</button>
    </form>
</div>

@endsection