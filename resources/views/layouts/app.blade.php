<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    @yield('contenido_js')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('fonts/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ 'css/style.css' }} ">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('bootstrap5/bootstrap.min.css ') }}"> --}}
    @yield('contenido_cSS')

    {{-- <script src="{{ asset('bootstrap5/bootstrap.bundle.min.js') }}"></script> --}}
</head> 
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ route('welcome') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    <img width="100 em" src="{{ asset('img/Logo.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="">
                    <div class="grid grid-cols-5 font-bold px-64 gap-x-6">
                      <a href="#">Inicio</a>
                      <a href="#">Propuestas</a>
                      <div class="col-span-3">
                        <div
                          class="bg-gray-50 px-4  rounded-md flex gap-x-2 items-center"
                        >
                          <i class="fas fa-search mr-2"></i>
                          <input
                            type="text"
                            placeholder="Buscar..."
                            class="inline bg-gray-50 w-full outline-none"
                          />
                        </div>
                      </div>
                    </div>
                  </div>    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <button onclick="window.location.href='{{ route('register') }}'" class="nav-link bg-[#816AFE] p-2 rounded-lg w-full text-center font-bold text-white">
                                Subir propuesta
                            </button>
                        </li>
            
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">                          
                                    <a href="{{ route('login') }}" class="nav-link bg-[#F3F1FF] p-2 rounded-lg w-full text-center font-bold text-[#816AFE]">
                                    Iniciar sesión
                                    </a>

                                </li>


                            
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li> --}}
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <button onclick="window.location.href='{{ route('register') }}'" class="nav-link bg-[#816AFE] p-2 rounded-lg w-full text-center font-bold text-white">
                                        Registro
                                    </button>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ auth()->user()->use_name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
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
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ mix('js/app.js') }}" ></script>
    <script src="{{ asset('fortawesome/fontawesome-free/js/all.min.js') }}"></script>

    @yield('contenido_abajo_js')

</body>
    
</html>
