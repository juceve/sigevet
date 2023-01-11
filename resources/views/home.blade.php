@extends('adminlte::page')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2">
                <h1>
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3><i class="fas fa-paw"></i> {{ $cPacientes }}</h3>

                        <p>Pacientes</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="pacientes" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><i class="fas fa-users"></i> {{ $cClientes }}</h3>

                        <p>Clientes registrados</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="clientes" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><i class="fas fa-syringe"></i> {{ $cVacunas }}</h3>

                        <p>Vacunaciones</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="vacunas" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><i class="fas fa-hand-holding-medical"></i> {{ $cConsultas }}</h3>

                        <p>Consultas realizadas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="consultas" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->

        </div>
        <hr>
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-success">
                    <div class="card-header">
                        RECONSULTAS PROGRAMADAS
                    </div>
                    <div class="card-body">
                        @if (count($lReconsultas) > 0)
                            <ul class="list-group">
                                @foreach ($lReconsultas as $consulta)
                                    <li class="list-group-item">
                                        <div>
                                            <strong>Paciente: </strong> {{ $consulta->paciente->nombre }}
                                        </div>
                                        <div>
                                            <strong>Propietario: </strong> {{ $consulta->paciente->cliente->nombre }}
                                            <div class="float-right">
                                                <a href="{{ route('consultas.show', $consulta->id) }}">
                                                    <span class="badge badge-pill badge-success">Revisar caso</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <span>No se encontraron registros</span>
                        @endif

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-warning">
                    <div class="card-header">
                        VACUNACIONES PROGRAMADAS
                    </div>
                    <div class="card-body">
                        @if (count($lReconsultas) > 0)
                            <ul class="list-group">
                                @foreach ($lVacunas as $vacuna)
                                    <li class="list-group-item">
                                        <div>
                                            <strong>Paciente: </strong> {{ $vacuna->consulta->paciente->nombre }}
                                        </div>
                                        <div>
                                            <strong>Propietario: </strong>
                                            {{ $vacuna->consulta->paciente->cliente->nombre }}
                                            <div class="float-right">
                                                <a href="vacunas/{{ $vacuna->id }}">
                                                    <span class="badge badge-pill badge-warning">Revisar caso</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <span>No se encontraron registros</span>
                        @endif

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-info">
                    <div class="card-header">
                        ANTICONCEPTIVOS PROGRAMADOS
                    </div>
                    <div class="card-body">
                        @if (count($lAnticonceptivos) > 0)
                            <ul class="list-group">
                                @foreach ($lAnticonceptivos as $anticonceptivo)
                                    <li class="list-group-item">
                                        <div>
                                            <strong>Paciente: </strong> {{ $anticonceptivo->consulta->paciente->nombre }}
                                        </div>
                                        <div>
                                            <strong>Propietario: </strong>
                                            {{ $anticonceptivo->consulta->paciente->cliente->nombre }}
                                            <div class="float-right">
                                                <a href="{{ route('anticonceptivos.show', $anticonceptivo->id) }}">
                                                    <span class="badge badge-pill badge-info">Revisar caso</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <span>No se encontraron registros</span>
                        @endif

                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection
