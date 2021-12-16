@extends('layouts.app')

@section('template_title')
    {{ $matMaterium->name ?? 'Show Mat Materium' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Mat Materium</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('materias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Mat Id:</strong>
                            {{ $matMaterium->mat_id }}
                        </div>
                        <div class="form-group">
                            <strong>Mat Nombre:</strong>
                            {{ $matMaterium->mat_nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
