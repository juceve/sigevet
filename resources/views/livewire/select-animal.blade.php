<div>
    @if (is_null($razaPaciente))
        <div class="form-group">
            {{ Form::label('Animal') }}
            {{-- {{ Form::text('cliente_id', $paciente->cliente_id, ['class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Cliente Id']) }} --}}
            <select wire:model="selectedAnimale" name="animale_id" class="form-control">
                <option value="0" disabled>-- Seleccione un tipo de animal --</option>
                @foreach ($animales as $animale)
                    <option value="{{ $animale->id }}">{{ $animale->nombre }}</option>
                @endforeach
            </select>
            {!! $errors->first('animale_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    @endif

    @if (!is_null($razas))


        <div class="form-group">
            {{ Form::label('Raza') }}
            {{-- {{ Form::text('cliente_id', $paciente->cliente_id, ['class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Cliente Id']) }} --}}
            <select name="raza_id" name="raza_id" class="form-control">
                @foreach ($razas as $raza)
                    @php
                        $selRaza = '';
                    @endphp
                    @if (!is_null($razaPaciente))
                        @php
                            if ($razaPaciente == $raza->id) {
                                $selRaza="selected";
                            }
                        @endphp
                    @endif
                    <option value="{{ $raza->id }}" {{ $selRaza }}>{{ $raza->nombre }}</option>
                @endforeach
            </select>

            {!! $errors->first('raza_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    @else
        <div class="form-group">
            {{ Form::label('Raza') }}
            {{-- {{ Form::text('cliente_id', $paciente->cliente_id, ['class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Cliente Id']) }} --}}
            <select name="raza_id" class="form-control">
                <option value="0" disabled selected>-- Seleccione primero un animal --</option>
            </select>

            {!! $errors->first('raza_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    @endif



</div>
