@extends('plantillas.plantilla01')

@section('titulo', 'Usuarios')

@section('contenido')
            <h1>Prueba con la Vista USUARIOS</h1>

    <?php foreach ($usuariosArray as $key): ?>

         <li> <?php echo $key;  ?> </li>


    <?php endforeach; ?>
@endsection


