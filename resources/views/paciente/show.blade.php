@extends('adminlte::page')

@section('title', 'Datos Paciente | ')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Datos del Paciente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="javascript:history.back()"><i
                                    class="far fa-arrow-alt-circle-left"></i> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $paciente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $paciente->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Animal:</strong>
                            {{ $paciente->raza->animale->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Raza:</strong>
                            {{ $paciente->raza->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $paciente->sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $paciente->edad($paciente->fecnacimiento) }}
                        </div>
                        <div class="form-group">
                            <strong>Propietario:</strong>
                            <a href="../clientes/{{ $paciente->cliente_id }}"
                                title="Ver datos del propietario">{{ $paciente->cliente->nombre }}</a>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-success mt-3">
                            <div class="card-header">
                                <div class="float-left">
                                    <span class="card-title">HISTORIAL CLINICO</span>
                                </div>
                            </div>

                            <div class="card-body">
                                @livewire('historial', ['paciente_id' => $paciente->id])
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card card-warning mt-3">
                            <div class="card-header">
                                <div class="float-left">
                                    <span class="card-title">HISTORIAL VACUNACIÓN</span>
                                </div>
                            </div>

                            <div class="card-body">
                                @livewire('historial-vacunacion', ['id' => $paciente->id])
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card card-info mt-3">
                            <div class="card-header">
                                <div class="float-left">
                                    <span class="card-title">HISTORIAL ANTICONCEPTIVOS</span>
                                </div>
                            </div>

                            <div class="card-body">
                                @livewire('historial-anticonceptivo', ['id' => $paciente->id])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
