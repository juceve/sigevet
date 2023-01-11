@extends('adminlte::page')

@section('title', 'Nuevo Paciente | ')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default mt-3">
                    <div class="card-header">
                        <span class="card-title">Nuevo Paciente</span>
                        <div class="float-right">
                            <a class="btn btn-secondary" href="javascript:history.back()"><i
                                    class="far fa-arrow-alt-circle-left"></i> Volver</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('pacientes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('paciente.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @section('js')
        <script>
            $(document).ready(function() {
                $('.select2').select2();
            });
        </script>
    @endsection
@endsection
