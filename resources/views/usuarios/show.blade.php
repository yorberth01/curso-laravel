@extends('plantillas.plantilla01')

@section('titulo', 'Mostrar Usuario '. $id_usuario)

@section('contenido')
    <a href="{{route('usuarios.index')}}">Volver</a>
        <h1>Bienvenido Usuario: {{$id_usuario->nombre}}, con el ID # {{$id_usuario->id}}</h1>
@endsection


