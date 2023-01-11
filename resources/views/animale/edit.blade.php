@extends('adminlte::page')

@section('title', 'Editar animal |')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-navy mt-3">
                    <div class="card-header">
                        <span class="card-title">Editar Animal</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('animales.update', $animale->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('animale.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
