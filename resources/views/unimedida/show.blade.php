@extends('layouts.app')

@section('template_title')
    {{ $unimedida->name ?? 'Show Unimedida' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Unimedida</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('unimedidas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $unimedida->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Abreviatura:</strong>
                            {{ $unimedida->abreviatura }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
