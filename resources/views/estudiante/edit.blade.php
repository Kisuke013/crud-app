@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ url('/estudiante/'.$estudiante->id) }}" method="post" enctype="multipart/form-data">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="card">
                    @csrf
                    {{ method_field('PATCH') }}
                    @include('estudiante.form', ['accion'=>'Actualizar'])
                </div>
            </div>
        </div>
    </form>
</div>
@endsection