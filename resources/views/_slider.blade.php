<section id="slider" class="card">
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">

        <div class="carousel-inner">
                <div class="carousel-item active">
                    <h1>@lang('slider.who-we-are-title')</h1>
                    <div class="text_container">
                <p class="content">@lang('slider.who-we-are-content')</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="text_container">
                        <p>@lang('slider.become-a-partner-content')</p>
                    </div>
                    <div class="right_buttons">
                        <button class="slider-button btn btn-primary">@lang('slider.become-a-partner-button')</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="text_container">
                        <p>@lang('slider.collaborate-content')</p>
                    </div>
                    <div class="right_buttons">
                        <button class="slider-button btn btn-primary">@lang('slider.collaborate-button')</button>
                    </div>
                </div>
        </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        
    </div>
</section>