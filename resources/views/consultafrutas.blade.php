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
                     Insertar Recuerdo <i class="bi bi-shop"></i>
                    </button> 



    </div>


</body>
</html>

    @stop