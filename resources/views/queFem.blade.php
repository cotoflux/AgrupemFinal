@extends('layouts.app')
@section('content')

<section  class="container-fluid d-flex flex-wrap">
    
        <article id="formEdit" class="box-shadow p-3 mb-5 rounded col-sm-12 col-md-12 col-lg-6">
            <header class="text_container text-center shadow-lg">
                <h1 class="">{{$queFem->getLocalTitle()}}</h1>
            </header>            
            <div class="text_container shadow-lg">
                <p>{!! html_entity_decode($queFem->getLocalContent()) !!}</p>
            </div>
            @auth
            <a class="btn btn-primary" href="#" onClick="toggleForm(['formEdit', 'formEdit1'])">Editar</a>
            @endauth
        </article>
        @auth
        <section id="formEdit1" class="hidden col-md-12">
            <form action="/text/{{$queFem->id}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="d-flex flex-wrap">
                    <div class="novelties_container mt-3 mb-3 col-sm-12 col-md-12">
                        <div>
                            <label for="title_cat">@lang('form.titlecat')</label><br>
                            <input id="title_cat" type="text" name="title_catalan" value="{{$queFem->title_catalan}}">
                        </div>
                        <div>
                            <label for="content_edit_catalan">@lang('form.contentcat')</label><br>
                            <textarea id="content_edit_catalan" class="summernote" name="content_catalan" cols="30" rows="10">{{$queFem->content_catalan}}</textarea>
                        </div>
                    </div>
                    <div class="novelties_container mt-3 mb-3 col-sm-12 col-md-12">
                        <div>
                            <label for="title_spa">@lang('form.titlecas')</label><br>
                            <input id="title_spa" type="text" name="title_spanish" value="{{$queFem->title_spanish}}">
                        </div>
                        <div>
                            <label for="content_edit_spanish">@lang('form.contentcas')</label><br>
                            <textarea class="summernote" name="content_spanish" id="content_edit_spanish" cols="30" rows="10">{{$queFem->content_spanish}}</textarea>
                        </div>
                    </div>
                </div>
                <input class="btn btn-success" type="submit">
                <a class="btn btn-primary" href="#" onClick="toggleForm(['formEdit', 'formEdit1'])">Cancelar</a>
            </form>
        </section>
        @endauth
        <section class="container right_content col-sm-12 col-md-12 col-lg-6">
            @include('_rightContent') 
        </section>
    
</section>
<script>
    function toggleForm(tags) {
    
    tags.forEach(tag => {
        let formEdit = document.getElementById(tag);
        formEdit.classList.toggle('hidden');
    });
    
}
</script>

@endsection