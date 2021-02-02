@extends('layouts.master')
@section('content')
<div class="row">
<div class="col-sm-4">
<img src="{{$peliculainfo->poster}}">


</div>
<div class="col-sm-8">
	<h2>{{$peliculainfo->title}}</h2>
	<h5>Año: {{$peliculainfo->year}}</h5>
	<h5>Director: {{$peliculainfo->director}}</h5>
	<p><strong>Resumen:</strong> {{$peliculainfo->synopsis}}</p>
	<p><strong>Estado: </strong>
		@if ($peliculainfo->rented)
			Película actualmente alquilada</p>
			<a class="btn btn-danger text-white">Devolver pelicula</a>
		@else
    		Pelicula disponible</p>
    		<a class="btn btn-primary text-white">Alquilar pelicula</a>
		@endif
		<a class="btn btn-warning text-white">Editar pelicula</a>
		<a class="btn btn-light" href="/catalog">Volver al listado</a>
</div>
</div>
@stop