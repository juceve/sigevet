@extends('adminlte::page')

@section('title', 'Editar Raza |')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-olive mt-3">
                    <div class="card-header">
                        <span class="card-title">Editar Raza</span>
                        <div class="float-right">
                            <a class="btn btn-olive" href="{{ route('razas.index') }}"> Volver</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('razas.update', $raza->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('raza.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
