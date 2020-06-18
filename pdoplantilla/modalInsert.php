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
          <label>Nombre</label>
          <input type="text" id="nombre" name="nombre" class="form-control form-control-sm" required="">
          <label class="form-group" for="frminsert">Tipo de documento</label>
          <select class="form-control form-control-sm" id="T_documento" name="T_documento">
            <option>Seleccione Uno</option>
            <option>Cédula</option>
            <option>Pasaporte</option>
            <option>Cédula de extrangería</option>
            <option>PEP</option>
            <option>Registro Civil</option>
            <option>tarjeta de Identidad</option>
          </select>
          <label> N° Documento</label>
          <input type="number" id="N_Documento" name="N_Documento" class="form-control form-control-sm" required="">
          <label>Teléfono</label>
          <input type="number" id="Telefono" name="Telefono" class="form-control form-control-sm" required="">
          <label>Fecha de Nacimiento</label>
          <input type="text" placeholder="2000-01-01" id="Nacimiento" name="Nacimiento" class="form-control form-control-sm" required="">
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