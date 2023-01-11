<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('medicamento_id') }}
            {{ Form::text('medicamento_id', $receta->medicamento_id, ['class' => 'form-control' . ($errors->has('medicamento_id') ? ' is-invalid' : ''), 'placeholder' => 'Medicamento Id']) }}
            {!! $errors->first('medicamento_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dosificacion') }}
            {{ Form::text('dosificacion', $receta->dosificacion, ['class' => 'form-control' . ($errors->has('dosificacion') ? ' is-invalid' : ''), 'placeholder' => 'Dosificacion']) }}
            {!! $errors->first('dosificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('periodo') }}
            {{ Form::text('periodo', $receta->periodo, ['class' => 'form-control' . ($errors->has('periodo') ? ' is-invalid' : ''), 'placeholder' => 'Periodo']) }}
            {!! $errors->first('periodo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('consulta_id') }}
            {{ Form::text('consulta_id', $receta->consulta_id, ['class' => 'form-control' . ($errors->has('consulta_id') ? ' is-invalid' : ''), 'placeholder' => 'Consulta Id']) }}
            {!! $errors->first('consulta_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>