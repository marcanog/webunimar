@extends('admin.home')

@section ('admincontent')
    <!-- Page heading -->
    <div class="d-sm-flex align-items-center justify-content-between shadow-4 mb-2">
        <h1 class="h3 mb-0 text-gray-dark">Usuarios</h1>
        <a href="#" class="d-none d-xl-inline-block btn btn-sm btn-navbar shadow-sm navbar-blue-u" data-toggle="modal" data-target="#UserAddModal" class="open-modal" data-open="UserAddModal">
            <i class="fas fa-user-plus fa-sm mr-1 text-white"></i>Agregar Usuario</a>
            @include('admin.addusermodal')
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
                <th scope="col">Operaciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <!-- <th scope="row">1</th> -->
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                   @include('admin.operationuser')
                </td>
                </tr>
                <tr>
                <!-- <th scope="row">2</th> -->
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td> @include('admin.operationuser')</td>
                </tr>
                <tr>
                <!-- <th scope="row">3</th> -->
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td> @include('admin.operationuser')</td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
@endsection