@extends('layouts.app')

@section('content') 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <article class="box-shadow">
                <header class="card">
                    <h2 class="card-header shadow-lg">{{$post->getLocalTitle()}}</h2>
                </header>
                <div id="post_main" class="margin">
                    <hr>{!! html_entity_decode($post->getLocalContent()) !!}<br><br>

                    @auth
                    <form action="/post/{{$post->id}}/edit" method="GET">
                        <input type="submit" id="button_edit" class = "btn btn-outline-primary mt-4" value="Editar">
                    </form>

                    <form action="/post/{{$post->id}}" method="post">
                        @csrf
                        @method('DELETE') 
                        <input id="button_delete" type="submit" value="Eliminar post" class="btn btn-outline-danger mt-4">
                    </form>
                    @endauth
                    <div class="right_buttons">
                        <button class="btn btn-primary mb-2" onclick="window.location.href = '/post';">@lang('blog.return')</button>
                    </div>
                </div>
            </article>    
        </div>
    </div>
</div>

@endsection