
<div class="card-header">
    <h1>{{ $accion }} estudiante</h1>

    @if(count($errors)>0)
        <div class="alert alert-danger" role="alet">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
<div class="card-body">
    <div class="mb-3">
        <label for="Nombre" class="form-label">Nombre:</label>
        <input type="text" class="form-control" name="Nombre" id="Nombre" value="{{ isset($estudiante->Nombre)?$estudiante->Nombre:old('Nombre') }}">
    </div>
    <div class="mb-3">
        <label for="Apellido" class="form-label">Apellido:</label>
        <input type="text" class="form-control" name="Apellido" id="Apellido" value="{{ isset($estudiante->Apellido)?$estudiante->Apellido:old('Apellido') }}">
    </div>
    <div class="mb-3">
        <label for="Edad" class="form-label">Edad:</label>
        <input type="number" class="form-control" name="Edad" id="Edad" value="{{ isset($estudiante->Edad)?$estudiante->Edad:old('Edad') }}">
    </div>
    <div class="mb-3">
        <label for="Foto" class="form-label">Foto:</label>
        @if (isset($estudiante->Foto))
            <img src="{{ asset('storage').'/'.$estudiante->Foto }}" alt="img" width="75px" class="img-thumbnail img-fluid">
        @endif
        <input type="file" class="form-control" name="Foto" id="Foto">
    </div>

    <button type="submit" class="btn btn-success">{{ $accion }}</button>
    <a href="{{ url('estudiante/') }}" class="btn btn-primary">Regresar al Listado</a>
</div>

