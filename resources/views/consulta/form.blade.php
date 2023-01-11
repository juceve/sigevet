<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ANAMNESIS') }}
            {{ Form::textarea('anamnesis', $consulta->anamnesis, ['class' => 'form-control' . ($errors->has('anamnesis') ? ' is-invalid' : ''), 'placeholder' => 'Anamnesis', 'rows' => 3]) }}
            {!! $errors->first('anamnesis', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DIAGNOSTIVO PRESUNTIVO') }}
            {{ Form::textarea('diagpresuntivo', $consulta->diagpresuntivo, ['class' => 'form-control' . ($errors->has('diagpresuntivo') ? ' is-invalid' : ''), 'placeholder' => 'Diagpresuntivo', 'rows' => 3]) }}
            {!! $errors->first('diagpresuntivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DIAGNOSTICO CONCLUSIVO') }}
            {{ Form::textarea('diagconclusivo', $consulta->diagconclusivo, ['class' => 'form-control' . ($errors->has('diagconclusivo') ? ' is-invalid' : ''), 'placeholder' => 'Diagconclusivo', 'rows' => 3]) }}
            {!! $errors->first('diagconclusivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FECHA RECONSULTA') }}
            {{ Form::date('fecreconsulta', substr($consulta->fecreconsulta,0,10), ['class' => 'form-control' . ($errors->has('fecreconsulta') ? ' is-invalid' : '')]) }}
            {!! $errors->first('fecreconsulta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('RECOMENDACIONES') }}
            {{ Form::textarea('recomendaciones', $consulta->recomendaciones, ['class' => 'form-control' . ($errors->has('recomendaciones') ? ' is-invalid' : ''), 'placeholder' => 'Recomendaciones', 'rows' => 3]) }}
            {!! $errors->first('recomendaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group ">
            
            {{ Form::hidden('user_id', $consulta->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            
            {{ Form::hidden('paciente_id', $consulta->paciente_id, ['class' => 'form-control' . ($errors->has('paciente_id') ? ' is-invalid' : ''), 'placeholder' => 'Paciente Id']) }}
            {!! $errors->first('paciente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Guardar</button>
    </div>
</div>