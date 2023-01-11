@extends('adminlte::page')

@section('title', 'Nueva Raza | ')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-olive mt-3">
                    <div class="card-header">
                        <span class="card-title">Nueva Raza</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('razas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('raza.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
