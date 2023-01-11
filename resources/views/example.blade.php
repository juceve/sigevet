@extends('adminlte::page')

@section('title', 'Clientes | ')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-info mt-3">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Clientes registrados Example') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('clientes.create') }}" class="btn btn-info btn-sm float-right"  data-placement="left">
                                    <i class="fas fa-plus-circle"></i>
                                  {{ __('Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        @livewire('clientes.tabla')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
