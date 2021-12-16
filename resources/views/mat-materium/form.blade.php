<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('mat_id') }}
            {{ Form::text('mat_id', $matMaterium->mat_id, ['class' => 'form-control' . ($errors->has('mat_id') ? ' is-invalid' : ''), 'placeholder' => 'Mat Id']) }}
            {!! $errors->first('mat_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mat_nombre') }}
            {{ Form::text('mat_nombre', $matMaterium->mat_nombre, ['class' => 'form-control' . ($errors->has('mat_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Mat Nombre']) }}
            {!! $errors->first('mat_nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>