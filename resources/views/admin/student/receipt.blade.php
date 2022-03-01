@extends('admin.home')

@section ('admincontent')
    <!-- Page heading -->
    <div class="d-sm-flex align-items-center justify-content-between shadow-4 mb-2">
        <h1 class="h3 mb-0 text-gray-dark">Facturación</h1>
    </div>
    <div class="row section-content">
        <div class="col-md-6 small">Cédula: </div>
        <div class="col-md-6 small">Correo Electrónico: {{$user->email}}</div>
        <div class="col-md-6 small">Nombre: {{$user->name}}</div>
        <div class="col-md-6 small">Carrera: </div>
    </div>

    <!-- List of receipt -->
    <div class="table-responsive-xl">
        <table class="table table-hover col-lg-12 text-center">
            <thead class="thead-blue">
            <tr>
                <th scope="col">Código Factura</th>
                <th scope="col">Fecha</th>
                <th scope="col">Descripción Concepto</th>
                <th scope="col">Periodo</th>
                <th scope="col">Carrera</th>
                <th scope="col">Observación</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td title="">a</td>
                    <td title="">b</td>
                    <td title="">c</td>
                    <td title="">d</td>
                    <td title="">e</td>
                    <td title="">f</td>
                </tr>
                <tr>
                    <td title="">a</td>
                    <td title="">b</td>
                    <td title="">c</td>
                    <td title="">d</td>
                    <td title="">e</td>
                    <td title="">f</td>
                </tr>
                <tr>
                    <td title="">a</td>
                    <td title="">b</td>
                    <td title="">c</td>
                    <td title="">d</td>
                    <td title="">e</td>
                    <td title="">f</td>
                </tr>
                <tr>
                    <td title="">a</td>
                    <td title="">b</td>
                    <td title="">c</td>
                    <td title="">d</td>
                    <td title="">e</td>
                    <td title="">f</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection

