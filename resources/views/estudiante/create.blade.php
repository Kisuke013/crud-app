@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ url('/estudiante') }}" method="post" enctype="multipart/form-data">
        <div class="card">
            @csrf
            @include('estudiante.form', ['accion'=>'Crear'])
        </div>
    </form>
</div>
@endsection