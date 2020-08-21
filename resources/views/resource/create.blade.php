@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 white-background">
            <header class="shadow-lg p-2 pl-3">
                <h1>Recursos</h1>
            </header>
            <main>
                <section class="d-flex flex-row">
                    <form action="/resource" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    <section class="flex-column p-2">
                        <div>
                            <label for="resource_title">@lang('form.titlecat')</label><br>
                            <input id="resource_title" type="text" name="title_catalan"></input>
                        </div>
                        <div>
                            <label for="resource_title">@lang('form.titlecas')</label><br>
                            <input id="resource_title" type="text" name="title_spanish"></input>
                        </div>
                        <div>
                            <label for="resource_url">Url</label><br>
                            <textarea id="resource_url" name="url" cols="60" rows="1"></textarea>
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