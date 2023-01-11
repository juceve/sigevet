@extends('adminlte::page')

@section('title', 'Editar aplicacion de Anticonceptivo | ')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-info mt-3">
                    <div class="card-header">
                        <span class="card-title">Editar Aplicación de Anticonceptivo</span>
                        <div class="float-right">
                            <a class="btn btn-info btn-sm" href="javascript:history.back()"><i
                                class="far fa-arrow-alt-circle-left"></i> Volver</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('anticonceptivos.update', $anticonceptivo->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('anticonceptivo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
