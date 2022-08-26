@extends('plantillas.plantilla01')

@section('titulo', 'Nuevo Usuario')

@section('contenido')
<a href="{{route('usuarios.index')}}">Volver</a>
        <h1>Pagina Para Crear Nuevos USUARIOS</h1>

      
        <form action="{{route('usuarios.store')}}" method="POST">

          @csrf {{-- @csrf es obligatorio para poder enviar informacion del formulario a la base de datos --}}

          <label>
            Nombre:
            <input type="text" name="nombre" value="{{old('nombre')}}">{{-- el metodo ool se coloca para que cuando se valide un campo no se borre la informacion introducida anteriormente  --}}
          </label><br>

          @error('nombre') {{-- se coloca @error para poder mandar un mensaje de error --}}
              <small>*{{$message}}</small>
              <br>
          @enderror

          {{-- Para que los mensajes de las validaciones se muestren en español se debe crear una carpeta "es" en la carpeta lang y copiar todos los datos que estan en el repositorio de git laravel en español y despues ir a la carpeta config/app.php y cambiar la opcion locale => "es" --}}

          <label>
            Apellido:
            <input type="text" name="apellido"  value="{{old('apellido')}}">
          </label><br>

           @error('apellido')
              <small>*{{$message}}</small>
              <br>
          @enderror

          <button type="submit">Crear</button>
        </form>
@endsection

