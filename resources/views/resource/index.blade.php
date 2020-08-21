@extends('layouts.app')

@section('content') 

<section id="" class="container-fluid row section ">  
    <div id="resocurce_content" class="shadow-lg p-3 mb-5 rounded ">
        <div class="col-md-8 box-shadow p-3 mb-5 rounded col-sm-12 col-md-12 col-lg-6">
            <header>
                <h1>Recursos</h1>
            </header>
            @auth
                <a id="button_create" href="/resource/create" class="btn btn-success mt-4 admin_button">Crear</a>
            @endauth
            <div class="">
                @foreach ($resources as $resource)
                        <div class=" shadow-lg p-3 mb-5 rounded">
                            <a id="resource_link" class="text-dark" href="{{$resource->url}}">
                               <h3 class="recursos"> {{$resource->getLocalTitle()}} </h3>
                            </a>
                        </div>
                        @auth
                        <div class="row admin_button">
                            <form action="/resource/{{$resource->id}}/edit" method="GET">
                                <input type="submit" id="button_edit" class = "btn btn-primary mt-4" value="Editar">
                            </form>
            
                            <form action="/resource/{{$resource->id}}" method="post">
                            @csrf
                            @method('DELETE')
                                <input id="button_delete" type="submit" value="Eliminar" class="btn btn-danger mt-4">
                            </form>
                        </div>
                        @endauth 
                @endforeach
            </div>
        </div>
    </div>
            <div class="container right_content col-sm-12 col-md-12 col-lg-6">
            @include('_rightContent')
            </div>
</section>

@endsection