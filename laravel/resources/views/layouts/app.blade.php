<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Explore') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    @stack('styles')

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a id="logoCont" class="navbar-brand" href="{{ url('/') }}">
                    <img id="logo" src="{{ asset('images/logo.png') }}"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if(\Auth::check() && \Auth::user()->isAdmin())
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Sites <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @foreach (DB::table('savedwebsites')->get() as $savedwebsite)
                                        <a class="dropdown-item" href="{!! $savedwebsite->link !!}" target="_blank">
                                            {!! $savedwebsite->name !!}
                                        </a>
                                        
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['delete_website', $savedwebsite->name]]) !!}
                                            {!! Form::submit('-supprimer-'.' '.$savedwebsite->name, ['class' => 'dropdown-item']) !!}
                                        {!! Form::close() !!}
                                    @endforeach
                                    <a class="dropdown-item" href="{{ route('save_website') }}">
                                        {{ __('-Rajouter un site-') }}
                                    </a>
                                </div>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a class="navl about" href="#">{{ __('Qui sommes nous ?') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="navl" href="#">{{ __('Prestations') }}</a>
                        </li>
                        <li class="nav-item">
                            @if(\Auth::check() && \Auth::user()->isAdmin())
                                <a class="nav-link" href="{{ route('contact_admin') }}">{{ __('Voir les contacts') }}</a>
                            @else
                            <a class="nav-link" href="{{ route('contact') }}">{{ __('Contact') }}</a>
                            @endif
                        </li>
                        @guest
                            <li class="nav-item">
                                <a class="navl" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="navl dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
        <div class="navbar navbar-expand-md navbar-light bg-white shadow-lg pied">
          <div>
            Explore © 2009 - 2020 Tous droits réservés
          </div>
          <div class="piedRes">
            <a href="#"><img src="{{ asset('images/fb.png') }}"/></a>
            <a href="#"><img src="{{ asset('images/insta.png') }}"/></a>
            <a href="#"><img src="{{ asset('images/snap.png') }}"/></a>
            <a href="#"><img src="{{ asset('images/twi.png') }}"/></a>
          </div>
        </div>
    </div>
    @yield('scripts')
</body>
</html>
