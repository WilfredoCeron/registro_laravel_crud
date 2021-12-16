@extends('layouts.app')

@section('template_title')
    Alm Alumno
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Alm Alumno') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('alumnos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Alm Id</th>
										<th>Alm Codigo</th>
										<th>Alm Nombre</th>
										<th>Alm Edad</th>
										<th>Alm Sexo</th>
										<th>Alm Id Grd</th>
										<th>Alm Observacion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($almAlumnos as $almAlumno)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $almAlumno->alm_id }}</td>
											<td>{{ $almAlumno->alm_codigo }}</td>
											<td>{{ $almAlumno->alm_nombre }}</td>
											<td>{{ $almAlumno->alm_edad }}</td>
											<td>{{ $almAlumno->alm_sexo }}</td>
											<td>{{ $almAlumno->alm_id_grd }}</td>
											<td>{{ $almAlumno->alm_observacion }}</td>

                                            <td>
                                                <form action="{{ route('alumnos.destroy',$almAlumno->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('alumnos.show',$almAlumno->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('alumnos.edit',$almAlumno->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $almAlumnos->links() !!}
            </div>
        </div>
    </div>
@endsection
