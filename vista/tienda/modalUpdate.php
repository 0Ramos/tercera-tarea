<!-- Modal -->
<div class="modal fade" id="actualizarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frminsertu" onsubmit="return actualizarDatos()" method="post">
          <input type="text" id="id_ti" name="id_ti" hidden="">
          <label>Nombre Tienda</label>
              <input type="text" id="nom_tiu" name="nom_tiu" class="form-control form-control-sm" required="">
              <label>Propietario</label>
              <input type="text" id="nom_prop_tiu" name="nom_prop_tiu" class="form-control form-control-sm" required>
              <label>Durección</label>
              <input type="text" id="direc_tiu" name="direc_tiu" class="form-control form-control-sm" required>
              <label>telefono</label>
              <input type="text" id="telf_tiu" name="telf_tiu" class="form-control form-control-sm" required="">
              <label>Rubro</label>
              <input type="text" id="rubro_tiu" name="rubro_tiu" class="form-control form-control-sm" required="">
          <br>
          <input type="submit" value="Actualizar" class="btn btn-warning">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>