<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Medicamento') }}
            {{ Form::text('medicamento', $vacuna->medicamento, ['class' => 'form-control' . ($errors->has('medicamento') ? ' is-invalid' : ''), 'placeholder' => 'Medicamento']) }}
            {!! $errors->first('medicamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dosis') }}
            {{ Form::text('numdosis', $vacuna->numdosis, ['class' => 'form-control' . ($errors->has('numdosis') ? ' is-invalid' : ''), 'placeholder' => 'Numdosis']) }}
            {!! $errors->first('numdosis', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Proxima dosis') }}
            {{ Form::date('proxdosis', $vacuna->proxdosis, ['class' => 'form-control' . ($errors->has('proxdosis') ? ' is-invalid' : ''), 'placeholder' => 'Proxdosis']) }}
            {!! $errors->first('proxdosis', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group d-none">
            {{ Form::label('consulta_id') }}
            {{ Form::text('consulta_id', $vacuna->consulta_id, ['class' => 'form-control' . ($errors->has('consulta_id') ? ' is-invalid' : ''), 'placeholder' => 'Consulta Id']) }}
            {!! $errors->first('consulta_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>