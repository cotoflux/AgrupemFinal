@extends('layouts.app')
 
@section('content')

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8 justify-content-center mb-5">
            @include('novelty._novelties')
        </div>
        <div id="home_central_container" class="mb-4">
            <div class="container d-flex col-md-12 flex-wrap justify-content-around">
                @include('event._events-calendar')
            </div>
        </div>
        @include('_blog-entries')
        <div class="col-sm-8 col-md-8">
            @include('_personal-assitance')
        </div>
        @include('_collaborators')
    </div>
</div>
@endsection
