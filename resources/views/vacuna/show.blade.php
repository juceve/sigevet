@extends('adminlte::page')

@section('title', 'Info Vacunación | ')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-warning mt-3">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Información de vacunación</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-warning" href="javascript:history.back()"><i
                                class="far fa-arrow-alt-circle-left"></i> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>Fecha Aplicación:</strong>
                            {{ Str::substr($vacuna->created_at, 0, 10) }}
                        </div>
                        <div class="form-group">
                            <strong>Medicamento:</strong>
                            {{ $vacuna->medicamento }}
                        </div>
                        <div class="form-group">
                            <strong>Dosis:</strong>
                            {{ $vacuna->numdosis }}
                        </div>
                        <div class="form-group">
                            <strong>Proxima dosis:</strong>
                            {{ substr($vacuna->proxdosis,0,10) }}
                        </div>
                        <div class="form-group">
                            <strong>Paciente:</strong>
                            {{ $vacuna->consulta->paciente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Propietario:</strong>
                            {{ $vacuna->consulta->paciente->cliente->nombre }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
                        <h5>OPERACIONES CON EL PROPIETARIO</h5>
                        <div class="form-group row">
                            <div class="col-12 col-md-2 mb-2">
                                <a href="https://api.whatsapp.com/send?phone=591{{$vacuna->consulta->paciente->cliente->telefono}}" target="_blank" class="btn btn-success btn-block"><i class="fab fa-whatsapp"></i> Enviar mensaje</a>
                            </div>
                            <div class="col-12 col-md-3 mb-2">
                                @php
                                    $menReconsulta = "https://api.whatsapp.com/send?phone=591". $vacuna->consulta->paciente->cliente->telefono ."&text=Buenos%20d%C3%ADas%2C%20le%20escribo%20de%20Veterinaria%20Tom%26Jerry.%0ALe%20hacemos%20recuerdo%20que%20tiene%20programado%20para%20hoy%20una%20vacunación%20para%20su%20mascota%3A%20".$vacuna->consulta->paciente->nombre.".";
                                @endphp
                                <a href="{{$menReconsulta}}" target="_blank" class="btn btn-primary btn-block"><i class="fab fa-whatsapp"></i> Recordatorio Vacunación</a>
                            </div>
                            <div class="col-12 col-md-2">
                                <a class="btn btn-info btn-block" href="tel:{{$vacuna->consulta->paciente->cliente->telefono}}"><i class="fas fa-phone-alt"></i> Llamar</a>
                            </div>
                            
                        </div>
    </section>
@endsection
