@extends('adminlte::page')

@section('title', 'Datos Raza |')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-olive mt-3">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Datos Raza</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-olive" href="{{ route('razas.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $raza->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $raza->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Animal:</strong>
                            {{ $raza->animale->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
