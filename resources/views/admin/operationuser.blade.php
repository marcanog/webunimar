 <!-- <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Ver">
     <i class="fas fa-eye"></i>
</button>
<form action="{{ url('/admin/users', ['id'=>$usuario->id]) }}" method="POST" id="formupda_{{ $usuario->id }}" >
    @csrf
    <input type="text" name="id" value="{{ $usuario->id }}">
    <input type="hidden" name-"_method" value="update">
</form> -->
<button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar">
    <i class="fas fa-edit"></i>
</button>
@include('admin.updateusermodal')
<!-- <form action="{{ url('/admin/users', ['id'=>$usuario->id]) }}" method="POST" id="formupda_{{ $usuario->id }}" >
    @csrf
    <input type="text" name="id" value="{{ $usuario->id }}">
    <input type="hidden" name-"_method" value="update">
</form> -->
<button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Cambiar Status" data-id="{{ $usuario->id }}">
    <i class="fas fa-exchange-alt"></i>
</button>

<!-- Agregar funcionalidad tooltip -->
