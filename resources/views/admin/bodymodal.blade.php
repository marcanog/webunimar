<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Nombre: </label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
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
        <input id="role" type="text" class="form-control" name="role" value="Administrador " required autocomplete="role" autofocus>
    </div>
</div>

<div class="form-group row">
    <label for="satus" class="col-md-4 col-form-label text-md-right">Status: </label>
    
    <div class="col-md-6">
        <input id="status" type="text" class="form-control" name="status" value="Active" required autocomplete="status" autofocus>
    </div>
</div>