@extends('adminlte::page')

@section('template_title')
    {{ $animale->name ?? 'Show Animale' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-navy mt-3">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Info animal</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-navy" href="{{ route('animales.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $animale->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
