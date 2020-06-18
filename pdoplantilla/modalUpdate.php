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
            <input type="text" id="id" name="id" hidden="">
            <label>Nombre</label>
              <input type="text" id="nombre" name="nombre" class="form-control form-control-sm" required="">
              <label>Tipo de documento</label>
              <input type="text" id="Tipo de documento" name="Tipo de documento" class="form-control form-control-sm" required="">
              <label>	N° Documento</label>
              <input type="text" id="N Documento" name="N Documento" class="form-control form-control-sm" required="">
              <label>Teléfono</label>
              <input type="text" id="Telefono" name="Telefono" class="form-control form-control-sm" required="">
              <label>Fecha de Nacimiento</label>
              <input type="text" id="Fecha de Nacimiento" name="Fecha de Nacimiento" class="form-control form-control-sm" required="">
              <label>Fecha y hora de creación</label>
              <input type="text" id="creacion" name="creacion" class="form-control form-control-sm" required="">
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
