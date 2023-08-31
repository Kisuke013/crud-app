<div class="modal fade" id="deleteChildresn{{ $children->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #563d7c !important;"></div>

        <div class="modal-body mt-5 text-center">
            <strong style="text-align: center !important">¿ Seguro de eliminar al estudiante ?</strong>
        </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

            <a  class="btn btn-danger" href="{{ route('deleteChildren', $children->id) }}">Borrar</a>
        </div>
        
        </div>
      </div>
</div>