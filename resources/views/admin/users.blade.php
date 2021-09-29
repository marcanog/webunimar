@extends('admin.home')

@section ('admincontent')
    <!-- Page heading -->
    <div class="d-sm-flex align-items-center justify-content-between shadow-4 mb-2">
        <h1 class="h3 mb-0 text-gray-dark">Usuarios</h1>
        <a href="#" class="d-none d-xl-inline-block btn btn-sm btn-navbar shadow-sm navbar-blue-u open-modal" data-toggle="modal" data-target="#UserAddModal" data-open="UserAddModal">
            <i class="fas fa-user-plus fa-sm mr-1 text-white"></i>Agregar Usuario</a>
    </div>
    <div class="row">
        @if($message = Session::get('Listo'))
            <div class="col-12 alert alert-success alert-dismissible fade show" role="alert">
                <span>{{ $message }}</span>
            </div>
        @endif
    </div>
    <div class="table-responsive-xl">
    <table class="table table-hover col-lg-12 text-center">
        <!-- <caption>List of users</caption> -->
        <thead class="thead-blue">
            <tr>
            <!-- <th scope="col">#</th> -->
            <!-- <th scope="col">{{trans('users.col-head-name')}}</th> -->
               @if(Auth::guest())
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Status</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Operaciones</th>
                @else
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Status</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Operaciones</th>
                @endif
                
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                <!-- <th scope="row">1</th> -->
                    @if (Auth::guest())
                        <td>{{($usuario->name)}}</td>
                        <td>{{($usuario->email)}}</td>
                        <td>{{($usuario->role)}}</td>
                        <td>{{($usuario->status)}}</td>
                    @else
                        <th>{{($usuario->id)}}</th>
                        <td>{{($usuario->name)}}</td>
                        <td>{{($usuario->email)}}</td>
                        <td>{{($usuario->role)}}</td>
                        <td>{{($usuario->status)}}</td>
                        <td>{{($usuario->fecha)}}</td>
                        <td>

                        <button type="button" class="btn btn-warning open-modal btnedit" data-open="UserUpdModal" data-toggle="modal" data-placement="top" title="Editar" 
                        data-id="{{ $usuario->id }}" 
                        data-name="{{ $usuario->name }}" 
                        data-email="{{ $usuario->email }}" 
                        data-password="{{ $usuario->password }}" 
                        data-role="{{ $usuario->role }}"
                        data-status="{{ $usuario->status }}"
                        data-target="#UserUpdModal">
                            <i class="fas fa-edit"></i>
                        </button>
                        
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <!-- Modal add user -->
    <div class="modal fade" id="UserAddModal" tabindex="-1" role="dialog" aria-labelledby="UserAddModal" aria-hidden="true">
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
    <!-- Modal update user -->
   <div class="modal fade" id="UserUpdModal" tabindex="-1" role="dialog" aria-labelledby="UserUpdModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalUpdUser">Actualizar Usuarios</h5>
                <button type="button" class="close" data-dismiss="modal" data-toggle="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="/admin/users/edit" method="POST">
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
                        <input id="nameedit" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">Correo Electrónico: </label>

                    <div class="col-md-6">
                        <input id="emailedit" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">
                    </div>
                </div>

                <!-- <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña: </label>

                    <div class="col-md-6">
                        <input id="passwordedit" type="password" class="form-control" name="password" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar Password: </label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div> -->

                <div class="form-group row">
                    <label for="role" class="col-md-4 col-form-label text-md-right">Role: </label>
                    
                    <div class="col-md-6">
                        <input id="roleedit" type="text" class="form-control" name="role" required autocomplete="role" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="satus" class="col-md-4 col-form-label text-md-right">Status: </label>
                    
                    <div class="col-md-6">
                        <input id="statusedit" type="text" class="form-control" name="status" required autocomplete="status" autofocus>
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary btnupdtuser">Guardar</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded',function(){
        var idupdate = 0;
            
             $('.btnedit').click(function(){
               $('#editid').val($(this).attr('data-id'));
               $('#nameedit').val($(this).attr('data-name'));
               $('#emailedit').val($(this).attr('data-email'));
            //    $('#passwordedit').val($(this).attr('data-password'));
               $('#roleedit').val($(this).attr('data-role'));
               $('#statusedit').val($(this).attr('data-status'));
             });
        });
         //  @if($message = Session::get('ErrorInsert'))
            //     $('#UserAddModal').modal('show');
            //  @endif

        // const getValueInput = () =>{
        //     let inputValue = document.querySelector('[name="nombre"]').value; 
        //     document.getElementById("#editname").innerHTML = inputValue; 
        // }
        
    </script>
@endsection

