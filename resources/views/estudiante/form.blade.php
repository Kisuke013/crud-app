
<div class="card-header">
    <h1 class="text-center py-2">{{ $accion }} Estudiante</h1>

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
<div class="card-body m-3">
    <div class="row mb-3">
        <label for="Nombre" class="form-label">Nombre:</label>
        <input type="text" class="form-control" name="Nombre" id="Nombre" value="{{ isset($estudiante->Nombre)?$estudiante->Nombre:old('Nombre') }}">
    </div>
    <div class="row mb-3">
        <label for="Apellido" class="form-label">Apellido:</label>
        <input type="text" class="form-control" name="Apellido" id="Apellido" value="{{ isset($estudiante->Apellido)?$estudiante->Apellido:old('Apellido') }}">
    </div>
    <div class="row mb-3">
        <label for="Edad" class="form-label">Edad:</label>
        <input type="number" class="form-control" name="Edad" id="Edad" value="{{ isset($estudiante->Edad)?$estudiante->Edad:old('Edad') }}">
    </div>
    <div class="row mb-3">
        <div class="col-2">
            <label for="Foto" class="form-label">Foto:</label>
        </div>
        <div class="col-10">
            @if (isset($estudiante->Foto))
                <img src="{{ asset('storage').'/'.$estudiante->Foto }}" alt="img" width="100px" class="img-thumbnail img-fluid mb-3 mr-3">
            @endif
        </div>
        <input type="file" class="form-control" name="Foto" id="Foto">
    </div>

    <div class="row">
        <div class="col text-center">
            <button type="submit" class="btn btn-success">
                <i class="bi bi-save2"></i> {{ $accion }}
            </button>
        </div>
        <div class="col text-center">
            <a href="{{ url('estudiante/') }}" class="btn btn-primary">
                <i class="bi bi-arrow-left"></i> Volver al Listado
            </a>
        </div>
    </div>
</div>

