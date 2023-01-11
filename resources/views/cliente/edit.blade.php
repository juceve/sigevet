@extends('adminlte::page')

@section('title', 'Editar Cliente | ')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-info mt-3">
                    <div class="card-header">
                        <span class="card-title">Editar Cliente</span>
                        <div class="float-right">
                            <a class="btn btn-info" href="javascript:history.back()"><i class="far fa-arrow-alt-circle-left"></i> Volver</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('clientes.update', $cliente->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('cliente.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
