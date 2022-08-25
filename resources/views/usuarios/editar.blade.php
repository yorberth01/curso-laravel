@extends('plantillas.plantilla01')

@section('titulo', 'Editar Usuario')

@section('contenido')
<a href="{{route('usuarios.index')}}">Volver</a>
        <h1>Pagina Para Editar un USUARIO</h1>

      
        <form action="{{route('usuarios.update', $id)}}" method="POST">

          @csrf {{-- @csrf es obligatorio para poder enviar informacion del formulario a la base de datos --}}
          @method('put') {{-- Se coloca @method('put') cuando en la ruta se coloco put--}}

          <label>
            Nombre:
            <input type="text" name="nombre" value="{{$id->nombre}}">
          </label><br><br>

          <label>
            Apellido:
            <input type="text" name="apellido" value="{{$id->apellido}}">
          </label><br><br>

          <button type="submit">Editar</button>
        </form>
@endsection