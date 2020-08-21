<section id="blog_home_container" class="mt-5 mb-4">
    <div id="home_blog_entries_title" class="title mb-5">
    <header class="shadow-home p-2 pl-3">
        <h3>@lang('home.blog')</h3>
    </header>
    </div>
    <div id="home_blog_entries" class="d-flex flex-wrap justify-content-around">
    @foreach ($posts as $post)
        <article class="card col-md-4 col-sm-12 p-0">
            <a id="blog_entries_button" class="btn btn-primary" href="/post/{{$post->id}}">
            <header>
                <h2 id="title">{{$post->getLocalTitle()}}</h2>
            </header>
            <div>
                <p id="content">{!! Str::words($post->getLocalContent(), 25,"...")!!}</p>
            </div>
            </a>
        </article>
    @endforeach
    </div>
</section>