<form method="post" >
  <div  class="modal fade" id="create-editorial" tabindex="-1">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Crear nueva editorial</h5>
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
           <form>
              <div class="form-group">
                <input name="editorial-name" type="text" class="form-control" id="new-name-editorial" placeholder="Nombre de la editorial" required>
              </div>
              <div class="form-group">
                <input name="editorial-address" type="text" class="form-control" id="new-address-editorial" placeholder="Direccion fiscal" required>
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name="enviar">Crear</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>

</form>
<?php
  require_once("../../../../controllers/EditorialController.php");
  require_once("../../../../models/EditorialModel.php");

    if (isset($_POST["enviar"])) {
      $createEditorial = new EditorialController();
      $createEditorial->store();
      
    }

?>