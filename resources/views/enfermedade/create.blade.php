@extends('adminlte::page')

@section('title', 'Nueva Enfermedad | ')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <span class="card-title">Registro de enfermedad</span>
                        <div class="float-right">
                        <a class="btn btn-primary btn-sm" href="javascript:history.back()"><i class="far fa-arrow-alt-circle-left"></i> Volver</a>
                    </div>
                    </div>
                    
                    <div class="card-body">
                        <form method="POST" action="{{ route('enfermedades.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('enfermedade.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
