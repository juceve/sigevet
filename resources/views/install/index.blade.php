@extends('adminlte::page')
@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body text-center">
              <div class="alert alert-success" role="alert">
                Instalar generado correctamente!
              </div>
              <a href="{{asset('/descargas//instalador/sigevet_setup.bat')}}"><img src="{{asset('descargas/install.png')}}" alt="" width="70px"> Descargar Instalador</a>  
            </div>
           
        </div>
    </div>
@endsection
<?php

    // Abrir el archivo, creándolo si no existe:
    $archivo = fopen('descargas/instalador/sigevet_setup.bat', 'w+b');
    if ($archivo == false) {
        echo 'Error al crear el archivo';
    } else {
        $ip_server = $_SERVER['SERVER_ADDR'];
        // Escribir en el archivo:
        fwrite($archivo, 'echo ' . $ip_server . " sigevet.test >> C:\Windows\System32\drivers\etc\hosts");
        // Fuerza a que se escriban los datos pendientes en el buffer:
        fflush($archivo);

    }
    // Cerrar el archivo:
    fclose($archivo);

?>
