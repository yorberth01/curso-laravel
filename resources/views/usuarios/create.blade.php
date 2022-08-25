@extends('plantillas.plantilla01')

@section('titulo', 'Nuevo Usuario')

@section('contenido')
<a href="{{route('usuarios.index')}}">Volver</a>
        <h1>Pagina Para Crear Nuevos USUARIOS</h1>

      
        <form action="{{route('usuarios.store')}}" method="POST">

          @csrf {{-- @csrf es obligatorio para poder enviar informacion del formulario a la base de datos --}}

          <label>
            Nombre:
            <input type="text" name="nombre">
          </label><br><br>

          <label>
            Apellido:
            <input type="text" name="apellido">
          </label><br><br>

          <button type="submit">Crear</button>
        </form>
@endsection

