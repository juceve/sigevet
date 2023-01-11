@extends('adminlte::page')

@section('title', 'Nuevo Medicamento | ')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-indigo mt-3">
                    <div class="card-header">
                        <span class="card-title">Nuevo Medicamento</span>
                        <div class="float-right">
                            <a class="btn btn-indigo" href="javascript:history.back()"><i class="far fa-arrow-alt-circle-left"></i> Volver</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('medicamentos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('medicamento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
