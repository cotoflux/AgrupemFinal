@extends('layouts.app')

@section('content')
<div class="container-fluid d-flex flex-wrap col-12 flex-wrap justify-content-center">
    <div class="col-12 d-flex justify-content-center">
        <section class="col-md-6 col-sm-12">
            <div class="mb-5">
                    @include('event.calendar')
            </div>
        </section>
    </div>
    <div class="mt-3 col-12 d-flex flex-wrap justify-content-center">
    @foreach ($events as $event)
    <section class="col-md-4 col-sm-12 m-2 shadow-lg white-background">
        <header>
            Evento: {{$event->getLocalTitle()}} 
        </header>
        Fecha: {{$event->startDate}}
        <form action="/event/{{$event->id}}" method="GET">
            <input class="btn btn-primary" type="submit" value="Mostrar Evento">
        </form>
    </section>
    @endforeach
    </div>
</div>
@endsection