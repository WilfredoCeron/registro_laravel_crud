@extends('layouts.app')

@section('template_title')
    Create Mxg Materiaxgrado
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Mxg Materiaxgrado</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('materiaxgrados.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('mxg-materiaxgrado.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
