@extends('layouts.master')

@section('content')

<div class="row">

    <div class="col-sm-4">
        <img src="../../{{$capa->imagen}}" alt="{{$capa->nombre}}" style="height:200px"/>
    </div>
    <div class="col-sm-8">
		<h2>{{$capa->nombre}}</h2>
		<p>{{$capa->descripcion}}</p>
		<!-- Indicates a successful or positive action -->
		<a href="{{ url('/catalog/edit/'.$capa->id) }}" class="btn btn-success">Editar</a>
		<!-- Standard button -->
		<a href="{{ url('/catalog') }}" class="btn btn-default">Volver</a>
    </div>

</div>


@stop