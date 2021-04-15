<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Find Coping') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!--Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Find Coping') }}
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
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <!--マイページ-->
                                    <a class="dropdown-item" href="{{ ('/') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('mypage').submit();">
                                        {{ __('My Page') }}
                                    </a>

                                    <form id="mypage" action="{{ ('/') }}" method="GET" style="display: none;">
                                        @csrf
                                    </form>
                                    
                                    <!--全ユーザーリストへ-->
                                    <a class="dropdown-item" href="{{ ('/users') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('alluser').submit();">
                                        {{ __('All User') }}
                                    </a>

                                    <form id="alluser" action="{{ ('/users') }}" method="GET" style="display: none;">
                                        @csrf
                                    </form>
                                    
                                    <!--全登録内容のリストへ-->
                                    <a class="dropdown-item" href="{{ ('/all') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('all').submit();">
                                        {{ __('All Coping') }}
                                    </a>

                                    <form id="all" action="{{ ('/all') }}" method="GET" style="display: none;">
                                        @csrf
                                    </form>
                                    
                                    
                                    <!--ログアウト-->
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

        <main class="py-4">
            <!--パーツテンプレートで定義する＠sectionから＠endsectionの内容が読み込まれる-->
            @yield('content')
        </main>
    </div>
</body>
</html>
