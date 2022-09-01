@extends('plantillas.plantilla01')

@section('titulo', 'Usuarios')

@section('contenido')
            <h1>Prueba con la Vista USUARIOS</h1>

            <a href="{{route('usuarios.create')}}">Crear Usuaio</a>

            <ul>
                @foreach ($usuarios as $item)
                    <li>
                       <a href="{{route('usuarios.show', $item)}}">{{$item->nombre}}</a><br>
                      
                    </li>

                @endforeach
            </ul>


            {{-- //para agregar la paginacion --}}
            {{$usuarios->links()}}


    {{-- <?php foreach ($usuariosArray as $key): ?>
         <li> <?php echo $key;  ?> </li>
    <?php endforeach; ?> --}}


@endsection


