<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('alm_id') }}
            {{ Form::text('alm_id', $almAlumno->alm_id, ['class' => 'form-control' . ($errors->has('alm_id') ? ' is-invalid' : ''), 'placeholder' => 'Alm Id']) }}
            {!! $errors->first('alm_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('alm_codigo') }}
            {{ Form::text('alm_codigo', $almAlumno->alm_codigo, ['class' => 'form-control' . ($errors->has('alm_codigo') ? ' is-invalid' : ''), 'placeholder' => 'Alm Codigo']) }}
            {!! $errors->first('alm_codigo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('alm_nombre') }}
            {{ Form::text('alm_nombre', $almAlumno->alm_nombre, ['class' => 'form-control' . ($errors->has('alm_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Alm Nombre']) }}
            {!! $errors->first('alm_nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('alm_edad') }}
            {{ Form::text('alm_edad', $almAlumno->alm_edad, ['class' => 'form-control' . ($errors->has('alm_edad') ? ' is-invalid' : ''), 'placeholder' => 'Alm Edad']) }}
            {!! $errors->first('alm_edad', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('alm_sexo') }}
            {{ Form::text('alm_sexo', $almAlumno->alm_sexo, ['class' => 'form-control' . ($errors->has('alm_sexo') ? ' is-invalid' : ''), 'placeholder' => 'Alm Sexo']) }}
            {!! $errors->first('alm_sexo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('alm_id_grd') }}
            {{ Form::text('alm_id_grd', $almAlumno->alm_id_grd, ['class' => 'form-control' . ($errors->has('alm_id_grd') ? ' is-invalid' : ''), 'placeholder' => 'Alm Id Grd']) }}
            {!! $errors->first('alm_id_grd', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('alm_observacion') }}
            {{ Form::text('alm_observacion', $almAlumno->alm_observacion, ['class' => 'form-control' . ($errors->has('alm_observacion') ? ' is-invalid' : ''), 'placeholder' => 'Alm Observacion']) }}
            {!! $errors->first('alm_observacion', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>