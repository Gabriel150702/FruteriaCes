@extends('Plantilla')


@section('contenido')
@include('modalInsertar')
@if (session()->has('confirmacion'))
        {!! "<script>Swal.fire(
            'Correcto!',
            'Tu fruta se guardo!',
            'OK'
      )     </script>"!!}

    @endif 


    @if (session()->has('Eliminar'))
        {!! "<script>Swal.fire(
            'Correcto!',
            'Tu fruta se elimino!',
            'OK'
      )     </script>"!!}

    @endif 


    @if (session()->has('Actualizar'))
        {!! "<script>Swal.fire(
            'Correcto!',
            'Tu fruta se actualizo!',
            'OK'
      )     </script>"!!}

    @endif 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRUTERIA</title>
</head>
<body>
    

<h1 class="display-3 mt-4 mb-4 text-center">FRUTERIA DON GARBANZO-FRESCURA </h1>
    <div class="container col-md-6 mb-5 d-grid gap-2">
                    <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalInsertar">
                     Insertar Fruta <i class="bi bi-shop"></i>
                    </button> 
    </div>

    <div class="container col-md-6 mb-6"> 
    <div class="card text-center">
  <div class="card-header">
    CONSULTAR FRUTAS
  </div>
  
    <div class="">
        <table class="table table-sm">
        <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Temporada</th>
                <th>Precio</th>
                <th>Stock</th>
                
                <th>Editar</th>
                <th>Borrar</th>
            </thead>
            <tbody>
              @foreach($consultafrutas as $consulta)
                <tr>
                    <td>{{$consulta->idFruta}}</td>
                    <td>{{$consulta->nombre}}</td>
                    <td>{{$consulta->temporada}}</td>
                    <td>${{$consulta->precio}}</td>
                    <td>{{$consulta->st}}</td>



                    <td><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalactualizar-{{$consulta->idFruta}}">
                     Actualizar  
                    </button></td>
                    <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modaleliminar-{{$consulta->idFruta}}">
                     Eliminar 
                    </button></td>
                    @include('modalactualizar')
                    @include('modaleliminar')
                   
                </tr>
              @endforeach
            </tbody>
        </table>
    
    </div>
</div>  
</div>


</body>
</html>

    @stop