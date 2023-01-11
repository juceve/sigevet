@extends('adminlte::page')

@section('title', 'Info Medicamento | ')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-indigo mt-3">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Datos del Medicamento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-indigo" href="javascript:history.back()"><i class="far fa-arrow-alt-circle-left"></i> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $medicamento->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Prospecto:</strong>
                            {{ $medicamento->prospecto }}
                        </div>
                        <div class="form-group">
                            <strong>Uni. Medida:</strong>
                            {{ $medicamento->unimedida->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
