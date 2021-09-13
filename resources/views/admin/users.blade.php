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
    <div>
        <div class="table-responsive-sm m-auto">
        <table class="table m-auto">
            <!-- <caption>List of users</caption> -->
            <thead>
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
                <tr>
                <!-- <th scope="row">1</th> -->
                @foreach($usuarios as $usuario)
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <th></th>
                <th></th>
                <td>
                   @include('admin.operationuser')
                </td>
                @endforeach
                </tr>
            </tbody>
        </table>
        </div>
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