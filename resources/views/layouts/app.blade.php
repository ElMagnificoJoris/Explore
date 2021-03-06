<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Explore </title>

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
                        @if(Auth::check() && Auth::user()->isAdmin())
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle nav-admin" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Sites <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <hr style="margin: 0px;">
                                    @foreach (DB::table('savedwebsites')->get() as $savedwebsite)
                                        <a class="dropdown-item" href="{!! $savedwebsite->link !!}" target="_blank">
                                            {!! $savedwebsite->name !!}
                                        </a>
                                        <hr style="margin: 0px;">
                                    @endforeach
                                    <hr style="margin: 10px 0px 0px 0px;">
                                    <a class="dropdown-item" href="{{ route('save_website') }}" style="margin-top: 10px;">
                                        {{ __('-Gérer les sites-') }}
                                    </a>
                                </div>
                            </li>
                            <a class="nav-link nav-admin" href="{{ route('contact_admin') }}">{{ __('Contacts') }}</a>
                            <a class="nav-link nav-admin" href="{{ route('users.index') }}">{{ __('Utilisateurs') }}</a>
                        @endif
                        <li class="nav-item">
                            <a class="navl about" href="{{ route('nous') }}">{{ __('Qui sommes nous ?') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="navl prestaTitle" href="{{ route('prestations') }}">{{ __('Prestations') }}</a>
                        </li>
                        <li class="nav-item">
                            @if(!Auth::check() || (Auth::check() && !Auth::user()->isAdmin()))
                                <a class="navl contactnav" href="{{ route('contact') }}">{{ __('Contact') }}</a>
                            @endif
                        </li>
                        <li class="nav-item">
                            <a class="navl blognav" href="{{ route('blogetc.index') }}">{{ __('Blogs') }}</a>
                        </li>
                        @guest
                            <li class="nav-item">
                                <a class="navl connexnav" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="navl inscrinav" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="navl dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} @if(Auth::check() && Auth::user()->isAdmin()) <span class="nav-admin">(Administrateur)</span> @endif <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Déconnexion') }}
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
