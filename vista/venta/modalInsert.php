<!-- Modal -->
<div class="modal fade" id="insertarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="frminsert" onsubmit="return insertarDatos()" method="post">
              <label>Nombre Pedido</label>
              <input type="text" id="nom_pe" name="nom_pe" class="form-control form-control-sm" required="">
              <label>Estado</label>
              <input type="text" id="Estado_pe" name="Estado_pe" class="form-control form-control-sm" required="">
              <label>Precio</label>
              <input type="text" id="Precio_pe" name="Precio_pe" class="form-control form-control-sm" required>
              <label>distrito</label>
              <input type="text" id="distrito" name="distrito" class="form-control form-control-sm" required>
              <br>
               <input type="submit" value="Guardar" class="btn btn-primary">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
