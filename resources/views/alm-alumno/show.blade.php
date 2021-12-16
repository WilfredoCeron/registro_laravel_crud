@extends('layouts.app')

@section('template_title')
    {{ $almAlumno->name ?? 'Show Alm Alumno' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Alm Alumno</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('alumnos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Alm Id:</strong>
                            {{ $almAlumno->alm_id }}
                        </div>
                        <div class="form-group">
                            <strong>Alm Codigo:</strong>
                            {{ $almAlumno->alm_codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Alm Nombre:</strong>
                            {{ $almAlumno->alm_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Alm Edad:</strong>
                            {{ $almAlumno->alm_edad }}
                        </div>
                        <div class="form-group">
                            <strong>Alm Sexo:</strong>
                            {{ $almAlumno->alm_sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Alm Id Grd:</strong>
                            {{ $almAlumno->alm_id_grd }}
                        </div>
                        <div class="form-group">
                            <strong>Alm Observacion:</strong>
                            {{ $almAlumno->alm_observacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
