@extends('layouts.app')

@section('template_title')
    {{ $receta->name ?? 'Show Receta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Receta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('recetas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Medicamento Id:</strong>
                            {{ $receta->medicamento_id }}
                        </div>
                        <div class="form-group">
                            <strong>Dosificacion:</strong>
                            {{ $receta->dosificacion }}
                        </div>
                        <div class="form-group">
                            <strong>Periodo:</strong>
                            {{ $receta->periodo }}
                        </div>
                        <div class="form-group">
                            <strong>Consulta Id:</strong>
                            {{ $receta->consulta_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
