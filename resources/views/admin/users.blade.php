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
    <table class="table table-hover col-lg-12">
        <!-- <caption>List of users</caption> -->
        <thead class="thead-blue">
            <tr>
            <!-- <th scope="col">#</th> -->
            <!-- <th scope="col">{{trans('users.col-head-name')}}</th> -->
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Status</th>
            <th scope="col">Fecha</th>
            <th scope="col">Operaciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
            <!-- <th scope="row">1</th> -->
            <td>{{($usuario->name)}}</td>
            <td>{{($usuario->email)}}</td>
            <td>{{($usuario->role)}}</td>
            <th>{{($usuario->status)}}</th>
            <th></th>
            <td>
                @include('admin.operationuser')
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    
@endsection

@section('script')
    <script>
        $(document).ready(function(){
             @if($message = Session::get('ErrorInsert'))
                $('#UserAddModal').modal('show');
             @endif
        });
    </script>
@endsection