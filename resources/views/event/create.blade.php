@extends('layouts.app')

@section('content') 
<div class="container">
    <div class="d-flex flex-wrap justify-content-center">
        <div class="col-md-12">
        <section class="d-flex">
            <form method="POST" action="/event" enctype="multipart/form-data">
                @csrf
                <div class="d-flex flex-wrap">
                    <section class="flex-column col-10 p-2 m-2 box-shadow white-background">
                        <div class="form-group">
                            <label for="title_cat">@lang('form.titlecat')</label> <br>
                            <input id="title_cat" required type="text" name="title_catalan"><br>
                        </div>
                        <div class="form-group">
                            <label for="content_cat">@lang('form.contentcat')</label>
                            <textarea id="content_cat" class="summernote" required type="textarea" name="content_catalan" cols="30" rows="10"></textarea><br>
                        </div>
                    </section>
                    <section class="flex-column col-10 p-2 m-2 box-shadow">
                    <div class="form-group">
                        <label for="title_spa">@lang('form.titlecas')</label><br>
                        <input id="title_spa" type="text" name="title_spanish"><br>
                    </div>
                    <div>
                        <label for="content_spa">@lang('form.contentcat')</label>
                        <textarea id="content_spa" class="summernote" type="textarea" name="content_spanish" cols="30" rows="10"></textarea><br>
                    </div>
                    </section>
                </div>
                <section class="col-10 p-2 m-2 box-shadow">
                    <div class="form-group">
                        <label for="strtDate">@lang('form.datestart')</label>
                        <input id="strtDate" required type="date" name="startDate" value="<?php echo date("Y-m-d");?>"><br>
                    </div>
                    <div class="form-group">
                        <label for="strtDate">@lang('form.dateend')</label>
                        <input id="edDate" required type="date" name="endDate" value="<?php echo date("Y-m-d");?>"><br>
                    </div>
                </section>
                <input class="btn btn-success m-2" type="submit" value="Crear" >
            </form>
        </section>
        </div>
    </div>
</div>
@endsection