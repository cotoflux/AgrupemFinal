<section id="home_calendar_container" class="col-md-6 d-flex justify-content-center align-items-center col-sm-12">
    <div>
        @include('event.calendar')
    </div>
</section>
<section class="col-md-6 justify-content-center col-sm-12 mb-5">
    <header id="home_event_title" class="shadow-home p-2 pl-3">
        <h1>@lang('home.events')</h1>
    </header>
    <section id="home_events_container" >
            <div class="next_events_container">
            @foreach ($events as $event)
                {{$event->startDate}}
                <h3> {{$event->getLocalTitle()}}</h3>
                <form action="/event/{{$event->id}}" method="GET">
                    <button class="btn btn-primary" type="submit">@lang('home.eventsmore')</button>
                </form>
                <br>
            @endforeach
            </div>
            @auth
                <form method="GET" action="/event/create" class="m-2">
                    <input type="submit" class="btn btn-success" value="Crear">
                </form>
            @endauth
            <div class="m-2">
                <button class="btn btn-secondary" onclick="window.location.href = '/event';">@lang('home.eventsbtn')</button>
            </div>
    </section>
</section>