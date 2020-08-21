@extends('layouts.app')
@section('content')

<section class="container-fluid justify-content-center col-12">
    <div class="d-flex flex-wrap">
        <div class="p-2 col-sm-12 col-md-12">
            <form method="POST" action="/event/{{$event->id}}"  enctype="multipart/form-data">
                @csrf
                @method("PATCH")
                <div class="white-background m-2 box-shadow col-md-12">
                    <label for="title_catalan">@lang('form.titlecat')</label><br>
                    <input id="title_catalan" type="text" name="title_catalan" value="{{$event->title_catalan}}"><br>
                    <label for="content_edit_catalan">@lang('form.contentcat')</label><br>
                    <textarea id="content_edit_catalan" name="content_catalan">{{$event->content_catalan}}</textarea><br>
                </div>
                <div class="white-background m-2 box-shadow col-md-12">
                    <label for="title_spanish">@lang('form.titlecas')</label><br>
                    <input id="title_spanish" type="text" name="title_spanish" value="{{$event->title_spanish}}"><br>
                    <label for="content_edit_spanish">@lang('form.contentcas')</label><br>
                    <textarea id="content_edit_spanish" name="content_spanish">{{$event->content_spanish}}</textarea><br>
                    <label for="">@lang('form.datestart')</label>
                    <input type="date" name="startDate" value="{{$event->startDate}}">
                    <label for="">@lang('form.dateend')</label>
                    <input type="date" name="endDate" value="{{$event->endDate}}"><br>
                </div>
                <input type="submit" class="btn btn-success" value="Guardar">
            </form>
        </div>
    </div>
</section>

@endsection