@extends('adminlte::page')

@section('title', 'Editar Cliente | ')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-yellow mt-3">
                    <div class="card-header">
                        <span class="card-title">Editar unidad de medida</span>
                        <div class="float-right">
                            <a class="btn btn-yellow" href="javascript:history.back()"><i class="far fa-arrow-alt-circle-left"></i> Volver</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('unimedidas.update', $unimedida->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('unimedida.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
