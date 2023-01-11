<div>
    @extends('adminlte::page')

@section('title', 'Nuevo Paciente | ')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')
                <div class="card card-primary card-default mt-3">
                    <div class="card-header">
                        <span class="card-title">Nuevo Paciente</span>
                        <div class="float-right">
                            <a class="btn btn-primary" href="javascript:history.back()"><i
                                    class="far fa-arrow-alt-circle-left"></i> Volver</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('pacientes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="box box-info padding-1">
                                <div class="box-body">
                                    
                                    <div class="form-group">
                                        {{ Form::label('nombre') }}
                                        {{ Form::text('nombre', $paciente->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                                        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('descripcion') }}
                                        {{ Form::textarea('descripcion', $paciente->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion', 'rows' => '3']) }}
                                        {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                            
                                    @livewire('select-animal', [$paciente->raza_id]) 
                                    
                                    <div class="form-group">
                                        <label class="">Sexo</label>
                                        <select name="sexo" id="sexo" class="form-control">
                                            <option value="">Seleccione un Sexo</option>
                                            @php
                                                $selMacho = '';
                                                $selHembra = '';
                                            @endphp
                                            @if ($paciente)
                                                @php
                                                    if ($paciente->sexo == 'Hembra') {
                                                        $selHembra = 'selected';
                                                    }
                                                    if ($paciente->sexo == 'Macho') {
                                                        $selMacho = 'selected';
                                                    }
                                                @endphp
                                            @endif
                                            <option value="Macho" {{ $selMacho }}>Macho</option>
                                            <option value="Hembra" {{ $selHembra }}>Hembra</option>
                                        </select>
                                        @error('sexo')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('Fecha nacimiento') }}
                                        {{ Form::date('fecnacimiento', $paciente->fecnacimiento, ['class' => 'form-control' . ($errors->has('fecnacimiento') ? ' is-invalid' : ''), 'placeholder' => 'fecnacimiento']) }}
                                        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                            
                                    <div class="form-group">
                                        {{ Form::label('Cliente Propietario') }}
                                        {{-- {{ Form::text('cliente_id', $paciente->cliente_id, ['class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Cliente Id']) }} --}}
                                        <select name="cliente_id" id="cliente_id" class="form-control">
                                            <option value="0" disabled selected>-- Seleccione un propietario --</option>
                                            @foreach ($clientes as $cliente)
                                                @php
                                                    $selected = '';
                                                    if ($cliente_id == $cliente->id) {
                                                        $selected = 'selected';
                                                    }
                                                @endphp
                                                <option value="{{ $cliente->id }}" {{ $selected }}>{{ $cliente->nombre }}</option>
                                            @endforeach
                                        </select>
                            
                                        {!! $errors->first('cliente_id', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                            
                                </div>
                                <div class="box-footer mt20">
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
                                </div>
                                
                            </div>

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

</div>
