@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      @can('view', $chamado)
        <h2>Detalhes: </h2>
        <span>título: </span> {{$chamado->titulo}}
      @else
        <h3>Não autorizado!</h3>
      @endcan
      
    </div>
</div>
@endsection
