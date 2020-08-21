<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('AGRUPem', 'AGRUPem') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Summernote -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>

    <!-- Open Street Map -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css">
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/ba7e41d0d3.js" crossorigin="anonymous"></script>

</head>
<body>
    
    <nav class="navbar navbar-light navbar-expand-md shadow p-3 mb-5"> 
            <a href="{{ url('/') }}" class="ancorNavbar">
            <img id="logotipo" src="{{asset('/images/logoletrasnegras.png')}}" alt="logotipo de agrupem">
            </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-wrap" id="navbarTogglerDemo01">
            
            <div class="navbar-nav ml-auto align-content-centre col-md-12 justify-content-end">
            
                @php $locale = session()->get('locale'); @endphp
                    <div id="social_networks_buttons" class="d-flex align-content-center flex-wrap">
                        <a href="https://es-la.facebook.com/AGRUPem"><i class="fab fa-facebook-square"></i></a>
                        <a href="https://www.instagram.com/agrupem2011/"><i class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com/agrupem1"><i class="fab fa-twitter-square"></i></a>
                        
                    </div>

                    <form action="/lang/cat" method="GET">
                    @lang('layout.lenguage-catalan')</form>
                    <form action="/lang/es" method="GET">
                    @lang('layout.lenguage-spanish')</form>
                                    
                            <!-- Authentication Links -->
                    @guest
                    <div class="">
                        <a id="nav-button" class="nav-link nav-item " href="{{ route('login') }}">{{ __('Login') }}</a>
                    </div>
                    @endguest
                    @auth
                    <div>
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                                                                
                            <a id="nav-button" class="nav-link nav-item " href="{{ route('register') }}">{{ __('Registrar') }}</a>
                            
                        </div> 
                    </div>
                        
                    @endauth
            </div>

                    <div class="navbar-nav ml-auto col-md-12 justify-content-end">
                        <a href="/queFem" id="nav-button" class="nav-item nav-link">@lang('layout.what-we-do')</a>
                        <a href="/quiSom" id="nav-button" class="nav-item nav-link">@lang('layout.who-we-are')</a>
                        <a href="/resource" id="nav-button" class="nav-item nav-link">RECURSOS</a>
                        <a href="/post" id="nav-button" class="nav-item nav-link">BLOG</a>
                        <a href="/contact" id="nav-button" class="nav-item nav-link">@lang('layout.contact')</a>
                    </div>
        </div>
    </nav>
<main class=" py-4"> 
        @yield('content')
</main>

<footer id="footer" class="d-flex flex-column">
    <div>
        <p>Copyright © 2012-2020 AGRUPem</br></p>
    </div> 
</footer>
<script>
    
	var osmUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
		osmAttrib = '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors',
		osm = L.tileLayer(osmUrl, {maxZoom: 18, attribution: osmAttrib});
	var map = L.map('map').setView([41.73482, 1.8252], 17).addLayer(osm);
	L.marker([41.73482, 1.8252])
		.addTo(map)
		.bindPopup('AGRUPem.')
		.openPopup();
</script>
 </body>
</html>