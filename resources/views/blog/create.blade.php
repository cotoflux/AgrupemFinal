@extends('layouts.app')

@section('content') 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <main>
                <section class="d-flex flex-row">
                    <form action="/post" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    <section class="flex-column p-2 m-2 box-shadow">
                        <div>
                            <label for="title_cat">@lang('form.titlecat')</label><br>
                            <input id="title_cat" type="text" name="title_catalan"></input>
                        </div>
                        <div>
                            <label for="content_edit_catalan">@lang('form.contentcat')</label><br>
                            <textarea id="content_edit_catalan" class="summernote" name="content_catalan" cols="30" rows="10"></textarea>
                        </div>
                    </section>
                    <section class="flex-column p-2 m-2 box-shadow">
                        <div>
                            <label for="title_spa">@lang('form.titlecas')</label><br>
                            <input id="title_spa" type="text" name="title_spanish"></input>
                        </div>
                        <div>
                            <label for="content_edit_spanish">@lang('form.contentcas')</label><br>
                            <textarea class="summernote" name="content_spanish" id="content_edit_spanish" cols="30" rows="10"></textarea>
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