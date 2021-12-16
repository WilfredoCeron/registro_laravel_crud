@extends('layouts.app')

@section('template_title')
    {{ $mxgMateriaxgrado->name ?? 'Show Mxg Materiaxgrado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Mxg Materiaxgrado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('materiaxgrados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Mxg Id:</strong>
                            {{ $mxgMateriaxgrado->mxg_id }}
                        </div>
                        <div class="form-group">
                            <strong>Mxg Id Grd:</strong>
                            {{ $mxgMateriaxgrado->mxg_id_grd }}
                        </div>
                        <div class="form-group">
                            <strong>Mxg Id Mat:</strong>
                            {{ $mxgMateriaxgrado->mxg_id_mat }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
