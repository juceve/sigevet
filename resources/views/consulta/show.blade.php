@extends('adminlte::page')

@section('title', 'Datos Consulta |')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-success mt-3">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">DATOS CONSULTA</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-success" href="javascript:history.back()"><i
                                    class="far fa-arrow-alt-circle-left"></i> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-sm">
                                <tr>
                                    <td><strong>PACIENTE:</strong></td>
                                    <td>{{ $consulta->paciente->nombre }}</td>
                                    <td><strong>PROPIETARIO:</strong></td>
                                    <td>{{ $consulta->paciente->cliente->nombre }}</td>
                                </tr>
                                <tr>
                                    <td><strong>FECHA CONSULTA</strong></td>
                                    <td colspan="3">{{ $consulta->dateConsulta }}</td>
                                </tr>
                                <tr>
                                    <td style="width:150px;"><strong>NRO. CONSULTA</strong></td>
                                    <td>{{ $consulta->id }}</td>
                                    <td style="width:150px;"><strong>Atendido por:</strong></td>
                                    <td>{{ $consulta->user->name }}</td>
                                </tr>
                                <tr>
                                    <td><strong>ANAMNESIS</strong></td>
                                    <td colspan="3">{{ $consulta->anamnesis }}</td>
                                </tr>
                                <tr>
                                    <td><strong>DIAG. PRESUNTIVO</strong></td>
                                    <td colspan="3">{{ $consulta->diagpresuntivo }}</td>
                                </tr>
                                <tr>
                                    <td><strong>DIAG.CONCLUSIVO</strong></td>
                                    <td colspan="3">{{ $consulta->diagconclusivo }}</td>
                                </tr>
                                <tr>
                                    <td><strong>RECOMENDACIONES</strong></td>
                                    <td colspan="3">{{ $consulta->recomendaciones }}</td>
                                </tr>
                                <tr>
                                    <td><strong>RECONSULTA</strong></td>
                                    <td colspan="3">{{ substr($consulta->fecreconsulta, 0, 10) }}</td>
                                </tr>
                                <tr>
                                    <td><strong>IMPORTE</strong></td>
                                    <td colspan="3">{{ $consulta->importe }}</td>
                                </tr>
                                @if (count($consulta->tratamientos) > 0)
                                    <tr>
                                        <td colspan="4">
                                            <strong>TRATAMIENTO</strong>
                                            <table class="table table-warning">
                                                <thead>
                                                    <tr>
                                                        <th>Medicamento</th>
                                                        <th>Indicaciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($consulta->tratamientos as $item)
                                                        <tr>
                                                            <td>{{ $item->medicacion }}</td>
                                                            <td>{{ $item->indicaciones }}</td>
                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>


                                        </td>
                                    </tr>
                                @endif
                            </table>
                        </div>
                        <hr>
                        <h5>OPERACIONES CON EL PROPIETARIO</h5>
                        <div class="form-group row">
                            <div class="col-12 col-md-2 mb-2">
                                <a href="https://api.whatsapp.com/send?phone=591{{$consulta->paciente->cliente->telefono}}" target="_blank" class="btn btn-success btn-block"><i class="fab fa-whatsapp"></i> Enviar mensaje</a>
                            </div>
                            <div class="col-12 col-md-3 mb-2">
                                @php
                                    $menReconsulta = "https://api.whatsapp.com/send?phone=591". $consulta->paciente->cliente->telefono ."&text=Buenos%20d%C3%ADas%2C%20le%20escribo%20de%20Veterinaria%20Tom%26Jerry.%0ALe%20hacemos%20recuerdo%20que%20tiene%20programado%20para%20hoy%20una%20consulta%20para%20su%20mascota%3A%20".$consulta->paciente->nombre.".";
                                @endphp
                                <a href="{{$menReconsulta}}" target="_blank" class="btn btn-primary btn-block"><i class="fab fa-whatsapp"></i> Recordatorio reconsulta</a>
                            </div>
                            <div class="col-12 col-md-2">
                                <a class="btn btn-info btn-block" href="tel:{{$consulta->paciente->cliente->telefono}}"><i class="fas fa-phone-alt"></i> Llamar</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
