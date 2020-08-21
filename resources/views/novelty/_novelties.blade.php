<section id="formEdit" class="novelties_container">
    <header id="home_novelties_title" class="shadow-lg p-2 mb-3">
     <h3>{{$novelty->getLocalTitle()}}</h3>
    </header>
    <div id="home_novelties_content">
        <p class="content">
        {!! html_entity_decode($novelty->getLocalContent()) !!}
        </p>
    </div>
    @auth
    <a class="btn btn-primary" href="#" onClick="toggleForm(['formEdit', 'formEdit1'])">Editar</a>
    @endauth
</section>
@auth
<section id="formEdit1" class="hidden">
    <form action="/text/{{$novelty->id}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="d-flex flex-wrap">
            <div class="novelties_container">
                <div>
                    <label for="title_cat">@lang('form.titlecat')</label><br>
                    <input id="title_cat" type="text" name="title_catalan" value="{{$novelty->title_catalan}}">
                </div>
                <div>
                    <label for="content_edit_catalan">@lang('form.contentcat')</label><br>
                    <textarea class="summernote" id="content_edit_catalan" name="content_catalan" cols="30" rows="10">{{$novelty->content_catalan}}</textarea>
                </div>
            </div>
            <div class="novelties_container">
                <div>
                    <label for="title_spa">@lang('form.titlecas')</label><br>
                    <input id="title_spa" type="text" name="title_spanish" value="{{$novelty->title_spanish}}">
                </div>
                <div>
                    <label for="content_edit_spanish">@lang('form.contentcas')</label><br>
                    <textarea class="summernote" name="content_spanish" id="content_edit_spanish" cols="30" rows="10">{{$novelty->content_spanish}}</textarea>
                </div>
            </div>
        </div>
        <input class="btn btn-success" type="submit">
    </form>
    <a class="btn btn-primary" href="#" onClick="toggleForm(['formEdit', 'formEdit1'])">Cancelar</a>
</section>
@endauth

<script>
    function toggleForm(tags) {
    
    tags.forEach(tag => {
        let formEdit = document.getElementById(tag);
        formEdit.classList.toggle('hidden');
    });
    
}
</script>