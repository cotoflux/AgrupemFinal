@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <main>
                <section class="d-flex flex-row">
                    <form action="/post/{{$post->id}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <section class="flex-column p-2 m-2 box-shadow">
                        <div>
                            <label for="title_catalan">@lang('form.titlecat')</label><br>
                            <input id="title_catalan" type="text" name="title_catalan" value="{{$post->title_catalan}}"></input>
                        </div>
                        <div>
                            <label for="content_catalan">@lang('form.contentcat')</label><br>
                            <textarea id="content_edit_catalan" class="summernote" name="content_catalan" cols="70" rows="30">{{$post->content_catalan}}</textarea>
                        </div>
                    </section>
                    <section class="flex-column p-2 m-2 box-shadow">
                        <div>
                            <label for="title_spanish">@lang('form.titlecas')</label><br>
                            <input id="title_spanish" type="text" name="title_spanish" value="{{$post->title_spanish}}"></input>
                        </div>
                        <div>
                            <label for="content_spanish">@lang('form.contentcas')</label><br>
                            <textarea class="summernote" name="content_spanish" id="content_edit_spanish" cols="30" rows="10" value="{{$post->content_spanish}}">{{$post->content_spanish}}</textarea>
                        </div>
                    </section>
                    <input type="submit" class="btn btn-success mt-4" value="Guardar">
                    </form>
                </section>
            </main>
        </div>
    </div>
</div>

@endsection