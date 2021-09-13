<!-- Modal -->
<div class="modal fade" id="UserAddModal" tabindex="-1" role="dialog" aria-labelledby="ModalAddUser" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalAddUser">Agregar Usuarios</h5>
        <button type="button" class="close" data-dismiss="modal" data-toggle="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="/admin/users" method="POST">
        @csrf
        <div class="modal-body">
          @if($message = Session::get('ErrorInsert'))
            <div class="col-12 alert alert-danger alert-dismissible fade show" role="alert">
                <h5>Errores: </h5>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
                    
          <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">Nombre: </label>

              <div class="col-md-6">
                  <input id="name" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
              </div>
          </div>

          <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">Correo Electrónico: </label>

              <div class="col-md-6">
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">
              </div>
          </div>

          <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña: </label>

              <div class="col-md-6">
                  <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
              </div>
          </div>

          <div class="form-group row">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar Password: </label>

              <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>
          </div>

              <div class="form-group row">
              <label for="role" class="col-md-4 col-form-label text-md-right">Role: </label>
              
              <div class="col-md-6">
                  <input id="role" type="text" class="form-control" name="role" required autocomplete="role" autofocus>
              </div>
          </div>

          <div class="form-group row">
              <label for="satus" class="col-md-4 col-form-label text-md-right">Status: </label>
              
              <div class="col-md-6">
                  <input id="status" type="text" class="form-control" name="status" required autocomplete="status" autofocus>
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>