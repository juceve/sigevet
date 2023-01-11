@extends('adminlte::page')

@section('title', 'Nuevo animal |')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-navy mt-3">
                    <div class="card-header">
                        <span class="card-title">Nuevo animal</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('animales.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('animale.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
