@extends('layouts.app')

@section('template_title')
    {{ $medxtrat->name ?? 'Show Medxtrat' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Medxtrat</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('medxtrats.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tratamientopred Id:</strong>
                            {{ $medxtrat->tratamientopred_id }}
                        </div>
                        <div class="form-group">
                            <strong>Medicamento Id:</strong>
                            {{ $medxtrat->medicamento_id }}
                        </div>
                        <div class="form-group">
                            <strong>Indicaciones:</strong>
                            {{ $medxtrat->indicaciones }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
