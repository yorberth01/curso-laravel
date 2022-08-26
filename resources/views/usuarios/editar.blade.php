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
            <input type="text" name="nombre" value="{{old('nombre', $id->nombre)}}">
          </label><br><br>

          @error('nombre') {{-- se coloca @error para poder mandar un mensaje de error --}}
              <small>*{{$message}}</small>
              <br>
          @enderror

          <label>
            Apellido:
            <input type="text" name="apellido" value="{{old('apellido', $id->apellido)}}">
          </label><br><br>

          @error('apellido') {{-- se coloca @error para poder mandar un mensaje de error --}}
              <small>*{{$message}}</small>
              <br>
          @enderror

          <button type="submit">Editar</button>
        </form>
@endsection