<!-- Modal -->
<div class="modal fade text-xs-left" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title">Eliminar Producto</h4>
        </div>
        {{Form::open(['route'=>['productos.destroy',""],'method'=>'delete'])}}
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <h5 id="txtEliminar">¿Está seguro de eliminar el producto?</h5>
                    </div>
                </div>
            </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-outline-warning btn-lg" data-dismiss="modal" value="Cancelar">
            <input type="submit" class="btn btn-outline-primary btn-lg" value="Aceptar">
          </div>
          {{Form::Close()}}
      </div>
    </div>
  </div>