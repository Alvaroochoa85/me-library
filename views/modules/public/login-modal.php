
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="login-title" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="login-title">Inicia sesión</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post">
        <div class="modal-body">
            <div class="form-group">
              <label for="username" class="col-form-label">Email:</label>
              <input type="mail" class="form-control" id="username" name="email" placeholder="example@email.com">
            </div>
            <div class="form-group">
              <label for="password" class="col-form-label">Contraseña:</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="**********">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" name="admin" id="admin-login">
              <label class="form-check-label" for="admin-login">Iniciar como administrador</label>
            </div>
        </div>
        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary" name="iniciar">Iniciar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php  
  if (isset($_POST["iniciar"])) {
    $log = new AuthController();
    $log->login();
  }  
?>