@extends('admin.home')

@section ('admincontent')
    <!-- Page heading -->
    <div class="d-sm-flex align-items-center justify-content-between shadow-4 mb-2">
        <h1 class="h3 mb-0 text-gray-dark">Notificaciones</h1>
    </div>
    <div class="row section-content">
        <div class="col-md-6 small">Cédula: </div>
        <div class="col-md-6 small">Nombre: </div>
        <div class="col-md-6 small">Departamento: </div>
        <div class="col-md-6 small">Cargo: </div>
    </div>

        <button type="button" class="btn btn-primary dropdown-toggle float-right" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Mes
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Enero</a>
            <a class="dropdown-item" href="#">Febrero</a>
            <a class="dropdown-item" href="#">Marzo</a>
            <a class="dropdown-item" href="#">Abril</a>
            <a class="dropdown-item" href="#">Mayo</a>
            <a class="dropdown-item" href="#">Júnio</a>
            <a class="dropdown-item" href="#">Júlio</a>
            <a class="dropdown-item" href="#">Agosto</a>
            <a class="dropdown-item" href="#">Septiembre</a>
            <a class="dropdown-item" href="#">Octubre</a>
            <a class="dropdown-item" href="#">Noviembre</a>
            <a class="dropdown-item" href="#">Diciembre</a>
        </div>

    <!-- List of receipt -->
    <div class="table-responsive-xl">
        <table class="table table-hover col-lg-12 text-center">
            <thead class="thead-blue">
            <tr>
                <th scope="col">Fecha</th>
                <th scope="col">Departamento</th>
                <th scope="col">Descripción</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td title="">a</td>
                    <td title="">b</td>
                    <td title="">c</td>
                    <td title="">d</td>
                </tr>
                <tr>
                    <td title="">a</td>
                    <td title="">b</td>
                    <td title="">c</td>
                    <td title="">d</td>
                </tr>
                <tr>
                    <td title="">a</td>
                    <td title="">b</td>
                    <td title="">c</td>
                    <td title="">d</td>
                </tr>
                <tr>
                    <td title="">a</td>
                    <td title="">b</td>
                    <td title="">c</td>
                    <td title="">d</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection

