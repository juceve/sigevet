@extends('adminlte::page')

@section('title', 'Datos Cliente | ')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info mt-3">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Datos del Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-info" href="javascript:history.back()"><i
                                    class="far fa-arrow-alt-circle-left"></i> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $cliente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $cliente->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $cliente->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $cliente->correo }}
                        </div>
                        <div class="form-group">
                            <a class="btn btn-info" href="tel:{{$cliente->telefono}}"><i class="fas fa-phone-alt"></i> Llamar</a>
                            <a href="https://api.whatsapp.com/send?phone=591{{$cliente->telefono}}" target="_blank" class="btn btn-success"><i class="fab fa-whatsapp"></i> Enviar mensaje</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
   
<section class="content container-fluid">
    <strong>Pacientes a su cargo:</strong>
</section>
    
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>

                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Raza</th>
                                        <th>Servicio</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pacientes as $paciente)
                                        <tr>
                                            <td>{{ $paciente->nombre }}</td>
                                            <td>{{ $paciente->descripcion }}</td>
                                            <td>{{ $paciente->raza->nombre }}</td>
                                            <td><a href="../atencion-consulta/{{ $paciente->id }}" class="btn  btn-success" title="Atencion Consulta"><i class="fas fa-user-md"></i> </a>
                                            <a class="btn btn-warning" href="../vacunacion/{{$paciente->id}}" title="Realizar Vacunación" ><i class="fas fa-syringe"></i> </a>
                                            <a class="btn btn-info" href="../nuevo-anticonceptivo/{{$paciente->id}}" title="Aplicar Anticonceptivo" ><i class="fas fa-vial"></i> </a>
                                            <a class="btn btn-primary " href="{{ route('pacientes.show',$paciente->id) }}" title="Ver datos del paciente" ><i class="fa fa-fw fa-eye"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
