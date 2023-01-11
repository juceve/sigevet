<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $medicamento->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('prospecto') }}
            {{ Form::textarea('prospecto', $medicamento->prospecto, ['class' => 'form-control' . ($errors->has('prospecto') ? ' is-invalid' : ''), 'placeholder' => 'Prospecto', 'rows' => '3']) }}
            {!! $errors->first('prospecto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Unidad de medida') }}
            {{-- {{ Form::text('unimedida_id', $medicamento->unimedida_id, ['class' => 'form-control' . ($errors->has('unimedida_id') ? ' is-invalid' : ''), 'placeholder' => 'Unimedida Id']) }} --}}
            <select name="unimedida_id" id="unimedida_id" class="form-control">
                <option value="0" selected>-- Seleccione una medida --</option>
                @foreach ($unimedidas as $unimedida)
                    <option value="{{$unimedida->id}}">{{$unimedida->abreviatura}}</option>
                @endforeach
            </select>

            {!! $errors->first('unimedida_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
    </div>
</div>