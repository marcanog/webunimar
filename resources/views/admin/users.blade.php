@extends('admin.home')

@section ('admincontent')
    <!-- Page heading -->
    <div class="d-sm-flex align-items-center justify-content-between shadow-4 mb-2">
        <h1 class="h3 mb-0 text-gray-dark">Usuarios</h1>
        <a href="#" class="d-none d-xl-inline-block btn btn-sm btn-navbar shadow-sm navbar-blue-u open-modal" data-toggle="modal" data-target="#UserAddModal" data-open="UserAddModal">
        <i class="fas fa-user-plus fa-sm mr-1 text-white"></i>Agregar Usuario</a>
    </div>

    <!-- Success message for registry -->
    @include('layouts.registryStatus')

    <!-- List of users -->
    <div class="table-responsive-xl">
        <table class="table table-hover col-lg-12 text-center">
            <thead class="thead-blue">
            <tr>
                @if(Auth::guest())
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Role</th>
                    <th scope="col">Status</th>
                @else
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Role</th>
                    <th scope="col">Status</th>
                    <th scope="col">Operaciones</th>
                @endif

            </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        @if (Auth::guest())
                            <td title="{{($user->name)}}">{{($user->name)}}</td>
                            <td title="{{($user->email)}}">{{($user->email)}}</td>
                            <td title="{{($user->birth)}}">{{($user->birth)}}</td>
                            <td title="{{($user->phone)}}">{{($user->phone)}}</td>
                            <td title="{{($user->role_id)}}">{{($user->role_id)}}</td>
                            <td title="{{($user->status_id)}}">{{($user->status_id)}}</td>
                        @else
                            <th title="{{($user->id)}}">{{($user->id)}}</th>
                            <td title="{{($user->name)}}">{{($user->name)}}</td>
                            <td title="{{($user->email)}}">{{($user->email)}}</td>
                            <td title="{{($user->birth)}}">{{($user->birth)}}</td>
                            <td title="{{($user->phone)}}">{{($user->phone)}}</td>
                            <td title="
                                @foreach($roles as $role)
                                    @if($user->role_id == $role->id)
                                        {{$role->name}}
                                        @break
                                    @endif
                                @endforeach"
                            >
                                @foreach($roles as $role)
                                    @if($user->role_id == $role->id)
                                        {{$role->name}}
                                        @break
                                    @endif
                                @endforeach
                            </td>
                            <td title="
                                @foreach($status as $curr_status)
                                    @if($user->status_id == $curr_status->id)
                                        {{$curr_status->name}}
                                        @break
                                    @endif
                                @endforeach"
                            >
                                @foreach($status as $curr_status)
                                    @if($user->status_id == $curr_status->id)
                                        {{$curr_status->name}}
                                        @break
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                <button type="button" class="btn btn-warning open-modal btnedit"
                                        data-open="UserUpdModal"
                                        data-toggle="modal"
                                        data-placement="top" title="Editar"
                                data-id="{{ $user->id }}"
                                data-name="{{ $user->name }}"
                                data-email="{{ $user->email }}"
                                data-password="{{ $user->password }}"
                                data-birth="{{ $user->birth }}"
                                data-phone="{{ $user->phone }}"
                                data-role="{{ $user->role_id}}"
                                data-status="{{ $user->status_id }}"
                                data-target="#UserUpdModal">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </td>
                        @endif
                        @endforeach"
                        >
                            @foreach($status as $curr_status)
                                @if($user->status_id == $curr_status->id)
                                    {{$curr_status->name}}
                                    @break
                                @endif
                            @endforeach
                        </td>
                        <td>
                            <button type="button" class="btn btn-warning open-modal btnedit" data-open="UserUpdModal"
                                    data-toggle="modal" data-placement="top" title="Editar"
                                    data-id="{{ $user->id }}"
                                    data-name="{{ $user->name }}"
                                    data-email="{{ $user->email }}"
                                    data-password="{{ $user->password }}"
                                    data-birth="{{ $user->birth }}"
                                    data-phone="{{ $user->phone }}"
                                    data-role="{{ $user->role_id}}"
                                    data-status="{{ $user->status_id }}"
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
    <div class="modal fade" id="UserAddModal" tabindex="-1" role="dialog" aria-labelledby="UserAddModal"
         aria-hidden="true">
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
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre: </label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"
                                       required minlength="10" autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Correo
                                Electrónico: </label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email"
                                       value="{{ old('email') }}" required autocomplete="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="birth" class="col-md-4 col-form-label text-md-right">Fecha de
                                nacimiento: </label>
                            <div class="col-md-6">
                                <input id="birth" type="date" class="form-control" name="birth"
                                       value="{{ old('birth') }}" autocomplete="birth" autofocus required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Teléfono: </label>
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone"
                                       value="{{ old('phone') }}" minlength="11" maxlength="15" autocomplete="phone"
                                       autofocus required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña: </label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required
                                       minlength="8" autocomplete="password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">Confirmar
                                Password: </label>
                            <div class="col-md-6">
                                <input id="password_confirmation" type="password" class="form-control"
                                       name="password_confirmation" required minlength="8"
                                       autocomplete="password_confirmation">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="role_id" class="col-md-4 col-form-label text-md-right">Role: </label>
                            <div class="col-md-6">
                                <select class="form-control" id="role_id" name="role_id">
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status_id" class="col-md-4 col-form-label text-md-right">Status: </label>
                            <div class="col-md-6">
                                <select class="form-control" id="status_id" name="status_id">
                                    @foreach($status as $curr_status)
                                        <option value="{{$curr_status->id}}">{{$curr_status->name}}</option>
                                    @endforeach
                                </select>
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
    <div class="modal fade" id="UserUpdModal" tabindex="-1" role="dialog" aria-labelledby="UserUpdModal"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalUpdUser">Actualizar Usuarios</h5>
                    <button type="button" class="close" data-dismiss="modal" data-toggle="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{URL('/admin/users/update')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" class="form-control" id="idedit" placeholder="" name='idedit' required>
                        <div class="form-group row">
                            <label for="nameedit" class="col-md-4 col-form-label text-md-right">Nombre: </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="nameedit" placeholder="" name='name'
                                       required minlength="10">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="emailedit" class="col-md-4 col-form-label text-md-right">Correo
                                Electrónico: </label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" id="emailedit" placeholder="" name='email'
                                       required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="birth" class="col-md-4 col-form-label text-md-right">Fecha de
                                nacimiento: </label>
                            <div class="col-md-6">
                                <input id="birthedit" type="date" class="form-control" name="birth" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Teléfono: </label>
                            <div class="col-md-6">
                                <input id="phoneedit" type="text" class="form-control" name="phone" minlength="11"
                                       maxlength="15" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="roleedit" class="col-md-4 col-form-label text-md-right">Role: </label>
                            <div class="col-md-6">
                                <select class="form-control" id="roleedit" name="role_id">
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="statusedit" class="col-md-4 col-form-label text-md-right">Status: </label>
                            <div class="col-md-6">
                                <select class="form-control" id="statusedit" name="status_id">
                                    @foreach($status as $curr_status)
                                        <option value="{{$curr_status->id}}">{{$curr_status->name}}</option>
                                    @endforeach
                                </select>
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

    <!-- Local scripts -->
    <script>
        //Fill forms
        document.addEventListener('DOMContentLoaded', function () {
            $('.btnedit').click(function () {
                $('#idedit').val($(this).attr('data-id'));
                $('#nameedit').val($(this).attr('data-name'));
                $('#emailedit').val($(this).attr('data-email'));
                $('#birthedit').val($(this).attr('data-birth'));
                $('#phoneedit').val($(this).attr('data-phone'));
                $('#roleedit').val($(this).attr('data-role'));
                $('#statusedit').val($(this).attr('data-status'));
            });
        });
    </script>
@endsection

