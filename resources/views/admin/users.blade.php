@extends('admin.home')

@section ('admincontent')
    <!-- Page heading -->
    <div class="d-sm-flex align-items-center justify-content-between shadow-4 mb-2">
        <h1 class="h3 mb-0 text-gray-dark">Usuarios</h1>
        <a href="#" class="d-none d-xl-inline-block btn btn-sm btn-navbar shadow-sm navbar-blue-u" data-toggle="modal" data-target="#UserAddModal" class="open-modal" data-open="UserAddModal">
            <i class="fas fa-user-plus fa-sm mr-1 text-white"></i>Agregar Usuario</a>
            @include('admin.addusermodal')
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
                        <!-- <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Ver">
                            <i class="fas fa-eye"></i>
                        </button> -->
                        
                        <!-- <button type="button" class="btn btn-danger btnupdate" data-toggle="tooltip" data-placement="top" title="Cambiar Status" data-id="{{ $usuario->id }}">
                            <i class="fas fa-exchange-alt"></i>
                        </button> -->
                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"> -->
                        <button type="button" class="btn btn-warning btnedit open-modal" data-open="UserUpdModal" data-toggle="modal" data-placement="top" title="Editar" data-id="{{ $usuario->id }}" data-target="#UserUpdModal">
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
                <h5 class="modal-title" id="ModalUpdUser">Modificar Usuarios</h5>
                <button type="button" class="close" data-dismiss="modal" data-toggle="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="/admin/users" method="POST" id="formupdate_{{ $usuario->id }}
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
                        <input id="name" type="text" class="form-control" name="nombre" value="{{( $usuario->name )}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">Correo Electrónico: </label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{( $usuario->email )}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña: </label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" value="{{( $usuario->password )}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="role" class="col-md-4 col-form-label text-md-right">Role: </label>
                    
                    <div class="col-md-6">
                        <input id="role" type="text" class="form-control" name="role" value="{{( $usuario->role )}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="satus" class="col-md-4 col-form-label text-md-right">Status: </label>
                    
                    <div class="col-md-6">
                        <input id="status" type="text" class="form-control" name="status" value="{{( $usuario->status )}}">
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary btnmodalupdate">Guardar</button>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            var idupdate = 0;
             @if($message = Session::get('ErrorInsert'))
                $('#UserAddModal').modal('show');
             @endif
             $('.btnedit').click(function(){
                idupdate =  $(this).data('id');
                $('#UserUpdModal').modal('show');
             });
             $('.btnmodalupdate').click(function(){
                $('#formupdate_'+idupdate).submit();
             })
        });
    </script>
@endsection