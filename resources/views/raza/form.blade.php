<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $raza->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $raza->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('animale_id') }}
            {{-- {{ Form::text('animale_id', $raza->animale_id, ['class' => 'form-control' . ($errors->has('animale_id') ? ' is-invalid' : ''), 'placeholder' => 'Animale Id']) }} --}}

            <select name="animale_id" id="animale_id" class="form-control select2">
                <option value="0" disabled selected>-- Seleccione un animal --</option>
                @php
                    $selected = '';
                @endphp
                @foreach ($animales as $animale)
                    @php
                        if ($raza->animale_id == $animale->id) {
                            $selected = 'selected';
                        }
                    @endphp
                    <option value="{{ $animale->id }}" >{{ $animale->nombre }}</option>
                @endforeach
            </select>

            {!! $errors->first('animale_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>