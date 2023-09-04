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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@100;400&display=swap" rel="stylesheet">
    
</head>
<body style="overflow: hidden;">
    <div id="app" style="overflow: hidden;">

        <div id="menusup">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">
                    <img src={{url('/img/logosn.png')}} alt="" width="35" height="auto" style="float: left; margin-left: 10px;" class="ml-3 pl-3">
                        @guest
                        @if (Route::has('login'))
                            <h2 class="mt-1" style="color: white;">&nbsp;&nbsp;Login</h2>
                        @endif
                        @endguest
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">

                    @guest
                    @else

                        @foreach ($menus as $key => $item)
                            @if ($item['parent'] != 0)
                                @break
                            @endif
                            @include('menu-item', ['item' => $item])
                        @endforeach

                    @endguest
                  </ul>
                </div>


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
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color:white;" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" style="color:black;" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>

              </nav>

        </div>

        <div id="principal" class="w-100" style="height:100vh; background-color: #fff; overflow: hidden;">

            @yield('pageheader')

            <main class="mt-0 vh-100"  style="overflow-y: auto;">
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
