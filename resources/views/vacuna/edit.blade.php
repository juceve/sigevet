@extends('adminlte::page')

@section('title', 'Actualiza Vacunación | ')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-warning mt-3">
                    <div class="card-header">
                        <span class="card-title">Actualizar datos Vacunación</span>
                        <div class="float-right">
                            <a class="btn btn-warning" href="javascript:history.back()"><i
                                class="far fa-arrow-alt-circle-left"></i> Volver</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('vacunas.update', $vacuna->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('vacuna.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
