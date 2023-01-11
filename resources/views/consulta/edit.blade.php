@extends('adminlte::page')

@section('title', 'Editar Consulta |')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-success mt-3">
                    <div class="card-header">
                        <span class="card-title">Editar Consulta</span>
                        <div class="float-right">
                            <a class="btn btn-success" href="javascript:history.back()"><i
                                    class="far fa-arrow-alt-circle-left"></i> Volver</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('consultas.update', $consulta->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('consulta.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
