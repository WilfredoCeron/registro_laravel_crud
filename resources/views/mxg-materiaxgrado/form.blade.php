<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('mxg_id') }}
            {{ Form::text('mxg_id', $mxgMateriaxgrado->mxg_id, ['class' => 'form-control' . ($errors->has('mxg_id') ? ' is-invalid' : ''), 'placeholder' => 'Mxg Id']) }}
            {!! $errors->first('mxg_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mxg_id_grd') }}
            {{ Form::text('mxg_id_grd', $mxgMateriaxgrado->mxg_id_grd, ['class' => 'form-control' . ($errors->has('mxg_id_grd') ? ' is-invalid' : ''), 'placeholder' => 'Mxg Id Grd']) }}
            {!! $errors->first('mxg_id_grd', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mxg_id_mat') }}
            {{ Form::text('mxg_id_mat', $mxgMateriaxgrado->mxg_id_mat, ['class' => 'form-control' . ($errors->has('mxg_id_mat') ? ' is-invalid' : ''), 'placeholder' => 'Mxg Id Mat']) }}
            {!! $errors->first('mxg_id_mat', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>