<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BlackCode</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: white;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    @else
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    <!-- Solo Web -->
                        {{--@if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif--}}
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    BlAcK CoDe
                </div>

                <div class="links">
                    @can('view_permiso')
                        <a href="{{ route('users.index') }}">Manage Usuarios</a>
                         <a href="{{ route('products.index') }}">Manage Productos</a>
                    <a href="{{ route('clientes.index') }}">Manage Clientes</a>
                    <a href="{{ route('proveedores.index') }}">Manage Proveedores</a>
                  
                    @endcan    
                   
                </div>
            </div>
        </div>
    </body>
</html>
