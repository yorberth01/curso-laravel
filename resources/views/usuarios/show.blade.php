@extends('plantillas.plantilla01')

@section('titulo', 'Mostrar Usuario '. $id)

@section('contenido')
        <h1>Bienvenido Usuario #{{$id}}</h1>
@endsection


