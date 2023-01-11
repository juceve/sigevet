@extends('adminlte::page')

@section('template_title')
    {{ $tratamiento->name ?? 'Show Tratamiento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-secondary mt-3">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Info Tratamiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-secondary btn-sm" href="{{ route('tratamientopreds.index') }}">
                               <i class="far fa-arrow-alt-circle-left"></i> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $tratamientopred->name }}
                        </div>
                        <div class="card card-olive">
                            <div class="card-header">

                                <label><i class="fas fa-pills"></i> TRATAMIENTO
                                </label>

                            </div>
                            <div class="card-body">

                                <div class="form-group table-responsive">
                                    <table class="table table-sm table-hover table-bordered" id="tb_tratamiento">
                                        <thead>
                                            <tr class="table-info">
                                                <th style="width: 35px">ID.</th>
                                                <th>Medicamento</th>
                                                <th>Indicaciones</th>
                                            </tr>
                                        </thead>
                                        @if (!is_null($tratamientos))

                                            <tbody>
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach ($tratamientos as $item)
                                                    <tr>
                                                        <td>{{ $item->medicamento_id }}</td>
                                                        <td>{{ $item->medicamento->nombre }}</td>

                                                        <td>{{ $item->indicaciones }}</td>

                                                        
                                                    </tr>
                                                    @php
                                                        $i++;
                                                    @endphp
                                                @endforeach

                                            </tbody>
                                        @endif

                                    </table>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
