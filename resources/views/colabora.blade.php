@extends('layouts.app')

@section('content')

<section class="container-fluid d-flex flex-wrap justify-content-center">
    
        <article id="firstEdit" class="box-shadow p-3 mb-5 rounded col-sm-12 col-md-12 col-lg-8"> 
            <div id="" class="text_container text-center shadow-lg">
                <h3>{!!html_entity_decode($colabora1->getLocalTitle())!!}</h3>
            </div>
            <div class="text_container shadow-lg">
                <p>{!!html_entity_decode($colabora1->getLocalContent())!!}</p>
            </div>
            @auth
            <a class="btn btn-primary" href="#" onClick="toggleForm(['firstEdit', 'firstEdit1'])">Editar</a>
            @endauth
        </article>
        @auth
        <section id="firstEdit1" class="hidden col-12">
            <form action="/text/{{$colabora1->id}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="d-flex flex-wrap col-12 justify-content-center">
                    <div class="box-shadow white-background col-8 m-2">
                        <div>
                            <label for="title_cat">@lang('form.titlecat')</label><br>
                            <input id="title_cat" type="text" name="title_catalan" value="{{$colabora1->title_catalan}}">
                        </div>
                        <div>
                            <label for="content_edit_catalan">@lang('form.contentcat')</label><br>
                            <textarea id="content_edit_catalan" class="summernote" name="content_catalan" cols="30" rows="10">{{$colabora1->content_catalan}}</textarea>
                        </div>
                    </div>
                    <div class="box-shadow white-background col-8 m-2">
                        <div>
                            <label for="title_spa">@lang('form.titlecas')</label><br>
                            <input id="title_spa" type="text" name="title_spanish" value="{{$colabora1->title_spanish}}">
                        </div>
                        <div>
                            <label for="content_edit_spanish">@lang('form.contentcas')</label><br>
                            <textarea class="summernote" name="content_spanish" id="content_edit_spanish" cols="30" rows="10">{{$colabora1->content_spanish}}</textarea>
                        </div>
                    </div>
                    <div class="col-8 m-2">
                        <input class="btn btn-success" type="submit">
                        <a class="btn btn-primary" href="#" onClick="toggleForm(['firstEdit', 'firstEdit1'])">Cancelar</a>
                    </div>
                </div>
            </form>
        </section>
        @endauth

        <article id="secondEdit" class="box-shadow p-3 mb-5 rounded col-sm-12 col-md-12 col-lg-8"> 
            <div class="text_container text-center shadow-lg">
                <h3>{!!html_entity_decode($colabora2->getLocalTitle())!!}</h3>
            </div>
            <div class="text_container shadow-lg">
                <p>{!!html_entity_decode($colabora2->getLocalContent())!!}</p>
            </div>
            @auth
            <a class="btn btn-primary" href="#" onClick="toggleForm(['secondEdit', 'secondEdit1'])">Editar</a>
            @endauth
        </article>
        @auth
        <section id="secondEdit1" class="hidden col-12">
            <form action="/text/{{$colabora2->id}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="d-flex flex-wrap col-12 justify-content-center">
                    <div class="box-shadow white-background col-8 m-2">
                        <div>
                            <label for="title_cat">@lang('form.titlecat')</label><br>
                            <input id="title_cat" type="text" name="title_catalan" value="{{$colabora2->title_catalan}}">
                        </div>
                        <div>
                            <label for="content_edit_catalan">@lang('form.contentcat')</label><br>
                            <textarea id="content_edit_catalan" class="summernote" name="content_catalan" cols="30" rows="10">{{$colabora2->content_catalan}}</textarea>
                        </div>
                    </div>
                    <div class="box-shadow white-background col-8 m-2">
                        <div>
                            <label for="title_spa">@lang('form.titlecas')</label><br>
                            <input id="title_spa" type="text" name="title_spanish" value="{{$colabora2->title_spanish}}">
                        </div>
                        <div>
                            <label for="content_edit_spanish">@lang('form.contentcas')</label><br>
                            <textarea class="summernote" name="content_spanish" id="content_edit_spanish" cols="30" rows="10">{{$colabora2->content_spanish}}</textarea>
                        </div>
                    </div>
                    <div class="col-8 m-2">
                        <input class="btn btn-success" type="submit">
                        <a class="btn btn-primary" href="#" onClick="toggleForm(['secondEdit', 'secondEdit1'])">Cancelar</a>
                    </div>
                </div>
            </form>
        </section>
        @endauth

        <article id="thirdEdit" class="box-shadow p-3 mb-5 rounded col-sm-12 col-md-12 col-lg-8"> 
            <div class="text_container text-center shadow-lg">
                <h3>{!!html_entity_decode($colabora3->getLocalTitle())!!}</h3>
            </div>
            <div class="text_container shadow-lg">
                <p>{!!html_entity_decode($colabora3->getLocalContent())!!}</p>
            </div>   
            @auth
            <a class="btn btn-primary" href="#" onClick="toggleForm(['thirdEdit', 'thirdEdit1'])">Editar</a>
            @endauth
        </article>
        @auth
        <section id="thirdEdit1" class="hidden col-12">
            <form action="/text/{{$colabora3->id}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="d-flex flex-wrap col-12 justify-content-center">
                    <div class="box-shadow white-background col-8 m-2">
                        <div>
                            <label for="title_cat">@lang('form.titlecat')</label><br>
                            <input id="title_cat" type="text" name="title_catalan" value="{{$colabora3->title_catalan}}">
                        </div>
                        <div>
                            <label for="content_edit_catalan">@lang('form.contentcat')</label><br>
                            <textarea id="content_edit_catalan" class="summernote" name="content_catalan" cols="30" rows="10">{{$colabora3->content_catalan}}</textarea>
                        </div>
                    </div>
                    <div class="box-shadow white-background col-8 m-2">
                        <div>
                            <label for="title_spa">@lang('form.titlecas')</label><br>
                            <input id="title_spa" type="text" name="title_spanish" value="{{$colabora3->title_spanish}}">
                        </div>
                        <div>
                            <label for="content_edit_spanish">@lang('form.contentcas')</label><br>
                            <textarea class="summernote" name="content_spanish" id="content_edit_spanish" cols="30" rows="10">{{$colabora3->content_spanish}}</textarea>
                        </div>
                    </div>
                    <div class="col-8 m-2">
                        <input class="btn btn-success" type="submit">
                        <a class="btn btn-primary" href="#" onClick="toggleForm(['thirdEdit', 'thirdEdit1'])">Cancelar</a>
                    </div>
                </div>
            </form>
        </section>
        @endauth

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

