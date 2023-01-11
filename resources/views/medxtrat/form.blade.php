<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tratamientopred_id') }}
            {{ Form::text('tratamientopred_id', $medxtrat->tratamientopred_id, ['class' => 'form-control' . ($errors->has('tratamientopred_id') ? ' is-invalid' : ''), 'placeholder' => 'Tratamientopred Id']) }}
            {!! $errors->first('tratamientopred_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('medicamento_id') }}
            {{ Form::text('medicamento_id', $medxtrat->medicamento_id, ['class' => 'form-control' . ($errors->has('medicamento_id') ? ' is-invalid' : ''), 'placeholder' => 'Medicamento Id']) }}
            {!! $errors->first('medicamento_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('indicaciones') }}
            {{ Form::text('indicaciones', $medxtrat->indicaciones, ['class' => 'form-control' . ($errors->has('indicaciones') ? ' is-invalid' : ''), 'placeholder' => 'Indicaciones']) }}
            {!! $errors->first('indicaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>