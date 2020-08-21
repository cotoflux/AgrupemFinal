@extends('layouts.app')

@section('content')

<div class="container-fluid d-flex flex-wrap col-12 justify-content-center">
   <article class="box-shadow p-3 mb-5 rounded col-sm-12 col-md-12 col-lg-12">
        <header class="text_container text-center shadow-lg">
            <h1>{{$event->getLocalTitle()}}</h1>
        </header>
        <div class="text_container shadow-lg">
            <p>{!! html_entity_decode($event->getLocalContent()) !!}</p>
        </div>
        @auth
        <div class="row admin_button">
            <form action="/event/{{$event->id}}/edit" method="GET">
                <input type="submit" id="button_edit" class = "btn btn-primary mt-4" value="Editar">
            </form>

            <form action="/event/{{$event->id}}" method="post">
            @csrf
            @method('DELETE')
                <input id="button_delete" type="submit" value="Eliminar" class="btn btn-danger mt-4">
            </form>
        </div>
        @endauth 
    </article>
    <div class="d-flex flex-nowrap justify-content-between col-md-6">
        <form method="get" action="/colabora" class="btn btn-primary btn-lg col-sm-12 col-md-6 col-lg-6 m-1">
            <button class="bg-primary buttons"  type="submit">Colabora</button>
        </form>
        <form method="get" action="/hazteSocio" class="btn btn-primary btn-lg col-sm-12 col-md-6 col-lg-6 m-1">
            <a class="btn btn-primary btn-lg col-sm-12 col-md-6 col-lg-6 m-1" type="button" href= "{{ url('/festeSoci') }}"> Hazte Socio</a>
        </form>
    </div>
</div>
@endsection