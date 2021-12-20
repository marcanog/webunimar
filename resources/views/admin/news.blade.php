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
                    @if (Auth::guest())
                        <th scope="col">Título</th>
                        <th scope="col">Resumen</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Status</th>
                    @else
                        <th scope="col">Id</th>
                        <th scope="col">Título</th>
                        <th scope="col">Resumen</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Status</th>
                        <th scope="col">Operaciones</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach($news as $new)
                    <tr>
                        @if (Auth::guest())
                            <td title="{{($new->title)}}">{{($new->title)}}</td>
                            <td title="{{strip_tags($new->resume)}}">{!!($new->resume)!!}</td>
                            <td title="{{($new->created_at)}}">{{($new->created_at)}}</td>
                            <td title="
                                @foreach($status as $curr_status)
                                    @if($new->status_id == $curr_status->id)
                                        {{$curr_status->name}}
                                        @break
                                    @endif
                                @endforeach
                            ">
                                @foreach($status as $curr_status)
                                    @if($new->status_id == $curr_status->id)
                                        {{$curr_status->name}}
                                        @break
                                    @endif
                                @endforeach
                            </td>
                        @else
                            <th title="{{($new->id)}}">{{($new->id)}}</th>
                            <td title="{{($new->title)}}">{{($new->title)}}</td>
                            <td title="{{strip_tags($new->resume)}}">{!!($new->resume)!!}</td>
                            <td title="{{($new->created_at)}}">{{($new->created_at)}}</td>
                            <td title="
                                @foreach($status as $curr_status)
                                    @if($new->status_id == $curr_status->id)
                                        {{$curr_status->name}}
                                        @break
                                    @endif
                                @endforeach
                            ">
                                @foreach($status as $curr_status)
                                    @if($new->status_id == $curr_status->id)
                                        {{$curr_status->name}}
                                        @break
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                <button type="button" class="btn btn-warning open-modal btnedit" data-open="NewUpdModal" data-toggle="modal"  data-placement="top" title="Editar"
                                data-id="{{ $new->id }}"
                                data-title="{{ $new->title }}"
                                data-content="{{ $new->content }}"
                                data-resume="{{ $new->resume }}"
                                data-status="{{ $new->status_id }}"
                                data-tags="@php
                                        foreach(explode(',',$new->tags_id) as $tag_id){
                                            foreach($tags as $tag){
                                                if($tag_id == $tag->id){
                                                    echo $tag->name.',';
                                                }
                                            }
                                        }
                                    @endphp"
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
                $('#tagedit').tagsinput('add',$(this).attr('data-tags'));
            });
        });
        /*Ckeditor uploadimage*/
       /* CKEDITOR.replace('summary-ckeditor', {
            filebrowserUploadUrl: "{{--{{route('/upload_image', ['_token' => csrf_token() ])}}--}}",
            filebrowserUploadMethod: 'form'
        });*/
    </script>
@endsection
