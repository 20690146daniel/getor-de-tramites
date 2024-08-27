@extends('layouts.app')

@section('title'.'Menu Principal')
  

@section('content')
<h3>Bienvenido de nuevo {{ Auth::user()->name }}</h3> 
@include('layouts.secretaria')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Menu') }}</div>

        <div class="card-body">
          @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
          @endif

        </div>
      </div>
    </div>
  </div>
</div>
@endsection