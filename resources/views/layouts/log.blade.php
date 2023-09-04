<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>

    <!-- Bootstrap CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    
</head>
<body style="overflow: hidden;">
    <div id="app" style="overflow: hidden;">

        <div id="menusup" class="w-100 pl-3 bg-primary" style="height: 70px; width: 100%;">
            <nav class="navbar navbar-light navbar-expand-md shadow-sm" style="width:100%; height: 70px;">
                <div class="container" style="float: left; margin:0; width: 100%; max-width: 100%;">
                    <a class="navbar-brand" href="#">
                        <img src={{url('/img/logosn.png')}} alt="" width="35" height="auto" style="float: left; margin-left: 10px;" class="ml-3 pl-3">
                        @guest
                        @if (Route::has('login'))
                            <h2 class="mt-1" style="color: white;">&nbsp;&nbsp;Login</h2>
                        @endif
                        @endguest
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}"
                            >
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent"  style="width: 100%;">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
                            @guest
                            @else
                            @endguest
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto" style="float: right;">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('register'))
                                    <li class="nav-item" style="float: right;">
                                        <a href="{{ route('register') }}">
                                        <button class="btn btn-light btn-lg btn-block p-3" type="button" 
                                                style="float: right; width: 150px; color: #0d6efd;" 
                                                > Registrarse </button>
                                        </a>
                                    </li>
                                @endif
                            @else
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div id="principal" class="w-100" style="height:100vh; background-color: #fff; overflow: hidden;">
            <main class="mt-0 vh-100">
                @yield('content')
            </main>
        </div>
    </div>
</body>

@auth
@section('scripts')
<script src="/js/edit.js">
</script>
@show
@endif
</html>
