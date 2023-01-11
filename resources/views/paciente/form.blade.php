<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $paciente->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::textarea('descripcion', $paciente->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion', 'rows' => '2']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        @livewire('select-animal', [$paciente->raza_id])

        <div class="form-group">
            {{ Form::label('Fecha nacimiento') }}
            {{ Form::date('fecnacimiento', $paciente->fecnacimiento, ['class' => 'form-control' . ($errors->has('fecnacimiento') ? ' is-invalid' : ''), 'placeholder' => 'fecnacimiento']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

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
            {{ Form::label('Cliente propietario') }}
            {{-- {{ Form::text('cliente_id', $paciente->cliente_id, ['class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Cliente Id']) }} --}}
            <select name="cliente_id" id="cliente_id" class="form-control select2">
                <option value="0" disabled selected>-- Seleccione un propietario --</option>
                @foreach ($clientes as $cliente)
                    @php
                        $selected = '';
                        if ($paciente->cliente_id == $cliente->id) {
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
