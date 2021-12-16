<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group"> 
            {{ Form::label('grd_id') }}
            {{ Form::text('grd_id', $grdGrado->grd_id, ['class' => 'form-control' . ($errors->has('grd_id') ? ' is-invalid' : ''), 'placeholder' => 'Grd Id']) }}
            {!! $errors->first('grd_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('grd_nombre') }}
            {{ Form::text('grd_nombre', $grdGrado->grd_nombre, ['class' => 'form-control' . ($errors->has('grd_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Grd Nombre']) }}
            {!! $errors->first('grd_nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>