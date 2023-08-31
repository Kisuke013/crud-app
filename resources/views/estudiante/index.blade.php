@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Listado de estudiantes</h1><br>

    @if(Session::has('mensaje'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('mensaje') }}
        </div>
    @endif

    <a href="{{ url('estudiante/create') }}" class="btn btn-success">Crear Estudiante</a><br>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Foto</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Edad</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $estudiante)
            <tr>
            <th scope="row">{{ $estudiante->id }}</th>
            <td>
                <img src="{{ asset('storage').'/'.$estudiante->Foto }}" alt="img" width="75px" class="img-thumbnail img-fluid">
            </td>
            <td>{{ $estudiante->Nombre }}</td>
            <td>{{ $estudiante->Apellido }}</td>
            <td>{{ $estudiante->Edad }}</td>
            <td>
                <a href="{{ url('/estudiante/'.$estudiante->id.'/edit') }}" class="btn btn-warning">Actualizar</a>

                <form action="{{ url('/estudiante/'.$estudiante->id) }}" method="post" class="d-inline">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro de Eliminar Estudiante?')" value="Eliminar">
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $estudiantes->links() !!}
</div>
@endsection