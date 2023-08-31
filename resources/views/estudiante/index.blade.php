@extends('layouts.app')

@section('content')
<div class="row py-2">
    <h1>Listado de estudiantes</h1>
</div>

<div class="row pb-2">
    @if(Session::has('mensaje'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('mensaje') }}
        </div>
    @endif
</div>

    <a href="{{ url('estudiante/create') }}" class="btn btn-success"> <!--Pendiente-->
        <i class="bi bi-person-fill"></i> Crear Estudiante
    </a>

<div class="row px-3">
    <table class="table table-striped table-hover my-4 text-center">
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
                <a href="{{ url('/estudiante/'.$estudiante->id.'/edit') }}" class="btn btn-warning">
                    <i class="bi bi-pencil-square"></i> Editar
                </a>
                
                <form action="{{ url('/estudiante/'.$estudiante->id) }}" method="post" class="d-inline deleteForm">
                    @csrf
                    {{ method_field('DELETE') }}
                    <!--<input type="submit" class="btn btn-danger" value="Eliminar"><i class="bi bi-trash-fill"></i>-->
                    <button type="submit" class="btn btn-danger">
                        <i class="bi bi-trash-fill"></i> Eliminar
                    </button>
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="row">
    {!! $estudiantes->links() !!}
</div>
@endsection