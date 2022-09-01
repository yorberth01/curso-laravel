@extends('plantillas.plantilla01')

@section('titulo', 'Mostrar Usuario '. $id_usuario)

@section('contenido')
    <a href="{{route('usuarios.index')}}">Volver</a><br>
    <a href="{{route('usuarios.edit', $id_usuario->id)}}">Editar Usuario</a>


        <h3>Bienvenido Usuario: </h3> <h1>{{$id_usuario->nombre}},</h1> <h3>con el ID #:</h3> <h1>{{$id_usuario->id}}</h1>

        <form action="{{route('usuarios.eliminar', $id_usuario->id)}}" method="POST"> {{-- para poder acceder a la url del delete se debe usar un formulario --}}
          
          @method('delete')
          @csrf
          <button type="submit">Eliminar</button>
        </form>
@endsection

