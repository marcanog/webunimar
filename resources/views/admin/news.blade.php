@extends('admin.home')

@section ('admincontent')
{{--    btn add news --}}
    <div class="d-sm-flex align-items-center justify-content-between shadow-4 mb-2">
        <h1 class="h3 mb-0 text-gray-dark">Noticias</h1>
        <a href="/admin/addnews" class="d-none d-xl-inline-block btn btn-sm btn-navbar shadow-sm navbar-blue-u">
            <i class="fas fa-user-plus fa-sm mr-1 text-white"></i>Agregar Notica</a>
    </div>
    <!-- Success message for registry -->
    <div class="row">
        @if($message = Session::get('Sucess'))
            <div class="col-12 alert alert-success alert-dismissible fade show" role="alert">
                <span>{{ $message }}</span>
            </div>
        @endif
    </div>

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
                            <td title="{{($new->title)}}">{{($new->title)}}</td>
                            <td title="{!!($new->resume)!!}">{!!($new->resume)!!}</td>
                            <td title="{{($new->fecha)}}">{{($new->fecha)}}</td>
                        @else
                            <th title="{{($new->id)}}">{{($new->id)}}</th>
                            <td title="{{($new->title)}}">{{($new->title)}}</td>
                            <td class="resume_text" title="">{!!($new->resume)!!}</td>
                            <td title="
                                @if($new->status == 1)
                                    {{'Activo'}}
                                @else
                                    {{'Inactivo'}}
                                @endif"
                            >
                                @if($new->status == 1)
                                    {{'Activo'}}
                                @else
                                    {{'Inactivo'}}
                                @endif
                            </td>
                            <td title="{{($new->fecha)}}">{{($new->fecha)}}</td>
                            <td>
                                <button type="button" class="btn btn-warning open-modal btnedit" data-open="NewUpdModal" data-toggle="modal" data-placement="top" title="Editar"
                                data-id="{{ $new->id }}"
                                data-title="{{ $new->title }}"
                                data-content="{{ $new->content }}"
                                data-resume="{{ $new->resume }}"
                                data-tag="{{ $new->tag }}"
                                data-status="{{ $new->status }}"
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


@endsection