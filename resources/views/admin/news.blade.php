@extends('admin.home')

@section ('admincontent')
    <!-- Page heading -->
    <div class="d-sm-flex align-items-center justify-content-between shadow-4 mb-2">
        <h1 class="h3 mb-0 text-gray-dark">Noticias</h1>
        <a href="/admin/addnews" class="d-none d-xl-inline-block btn btn-sm btn-navbar shadow-sm navbar-blue-u">
        <i class="fas fa-user-plus fa-sm mr-1 text-white"></i>Agregar Noticia</a>
    </div>

    <!-- Success message for registry -->
    @include('layouts.registryStatus')

    <!-- List of news -->
    <div class="table-responsive-xl">
        <table class="table table-hover col-lg-12 text-center">
            <thead class="thead-blue">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Título</th>
                    <th scope="col">Resumen</th>
                    <th scope="col">Status</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Operaciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($news as $new)
                    <tr>
                        @if (Auth::guest())
                            <td>{{($new->title)}}</td>
                            <td>{!!($new->resume)!!}</td>
                            <td>
                                @if($new->status_id == 1)
                                    {{'Activo'}}
                                @else
                                    {{'Inactivo'}}
                                @endif
                            </td>
                            <td>{{($new->fecha)}}</td>
                        @else
                            <th>{{($new->id)}}</th>
                            <td>{{($new->title)}}</td>
                            <td>{!!($new->resume)!!}</td>
                            <td>
                                @if($new->status_id == 1)
                                    {{'Activo'}}
                                @else
                                    {{'Inactivo'}}
                                @endif
                            </td>
                            <td>{{($new->created_at)}}</td>
                            <td>
                                <button type="button" class="btn btn-warning open-modal btnedit"  data-placement="top" title="Editar"
                                data-id="{{ $new->id }}"
                                data-title="{{ $new->title }}"
                                data-content="{{ $new->content }}"
                                data-resume="{{ $new->resume }}"
                                data-status="{{ $new->status_id }}"
                                data-target="#NewUpdModal">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Update user modal form -->
    <div class="modal fade" id="NewUpdModal" tabindex="-1" role="dialog" aria-labelledby="NewUpdModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalUpdUser">Actualizar Noticias</h5>
                    <button type="button" class="close" data-dismiss="modal" data-toggle="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/admin/news/update" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" class="form-control" id="idedit" placeholder="" name='idedit' required>
                        <div class="form-group">
                            <label for="titleedit">Título</label>
                            <input type="text" class="form-control" id="titleedit" placeholder="" name='title' required minlength="10">
                        </div>
                        <div class="form-group">
                            <label for="contentedit">Contenido</label>
                            <textarea class="form-control" id="contentedit" placeholder="" name="content"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="resumeedit">Resumen</label>
                            <textarea class="form-control" id="resumeedit" placeholder="" name="resume"></textarea>
                        </div>
                        <div class="form-group row">
                            <label for="tag" class="col-md-3 col-form-label text-md-right">Tag: </label>
                            <div class="col-md-7" >
                                <input type="text" id="tagedit" name="tags" value="" data-role="tagsinput"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="statusedit" class="col-md-3 col-form-label text-md-right">Status: </label>
                            <div class="col-md-7">
                                <select class="form-control" id="statusedit" name="status_id">
                                    <option value="1">Activo</option>
                                    <option value="2">Inactivo</option>
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
        //Set ckeditors in modal
        let contentedit;
        ClassicEditor.create( document.querySelector( '#contentedit' ) )
            .then(editor => {
                contentedit = editor;
            })
            .catch( error => {
                console.error( error );
            } );
        let resumeedit;
        ClassicEditor.create( document.querySelector( '#resumeedit' ) )
            .then(editor => {
                resumeedit = editor;
            })
            .catch( error => {
                console.error( error );
            } );

        document.addEventListener('DOMContentLoaded',function(){
            //Set resume text inside title atribute of news' table
            for(let i = 0 ; i < document.getElementsByClassName('resume_text').length ; i++)
            {
                document.getElementsByClassName('resume_text')[i].setAttribute('title' , document.getElementsByClassName('resume_text')[i].textContent);
            }
            //Fill forms
            $('.btnedit').click(function(){
                $('#idedit').val($(this).attr('data-id'));
                $('#titleedit').val($(this).attr('data-title'));
                contentedit.setData($(this).attr('data-content'));
                resumeedit.setData($(this).attr('data-resume'));
                $('#statusedit').val($(this).attr('data-status'));
                //Fill each tagname 
                $('#tagedit').tagsinput('removeAll');
                $.ajax(
                    {
                    type: "POST",
                    url: "{{ url('/admin/showtags') }}",
                    data: { id : $(this).attr('data-id') , '_token':$("meta[name = 'csrf-token']").attr("content") },
                    success: function(msg){
                        $('#tagedit').tagsinput('add', msg.tagsNames.join(','));
                        $('#NewUpdModal').modal('toggle');
                    },
                    error: function(){ alert("Hay un error"); }
                    }
                );
            });
        });
    </script>
@endsection
