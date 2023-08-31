@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ url('/estudiante/'.$estudiante->id) }}" method="post" enctype="multipart/form-data">
        <div class="card">
            @csrf
            {{ method_field('PATCH') }}
            @include('estudiante.form', ['accion'=>'Actualizar'])
        </div>
    </form>
</div>
@endsection