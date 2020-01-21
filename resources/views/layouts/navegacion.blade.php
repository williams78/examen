
    
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
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
                           {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>--}}
                            @if (Route::has('register'))
                               {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link">{{ __('VersionSoftware') }}</a>
                            @endif
                        @else
                             @can('view_permiso')
                            <li><a class="nav-link @yield('s1')" href="@yield('menuonem')">@yield('menuone')</a></li>
                            <li><a class="nav-link @yield('s2')" href="@yield('menutwom')">@yield('menutwo')</a></li>
                            <li><a class="nav-link @yield('s3')" href="@yield('menutresm')">@yield('menutres')</a></li>
                            @endcan
                            <li><a class="nav-link @yield('s4')" href="@yield('menufourm')">@yield('menufour')</a></li>
                            <li><a class="nav-link @yield('s5')" href="@yield('menufivem')">@yield('menufive')</a></li>
                            <li><a class="nav-link @yield('s6')" href="@yield('menusixm')">@yield('menusix')</a></li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="@yield('menusonem')">@yield('menusone')</a>
                                <a class="dropdown-item" href="@yield('menustwom')">@yield('menustwo')</a>
                                <a class="dropdown-item" href="@yield('menustresm')">@yield('menustres')</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </a>
                                    

                                   
                                </div>

                            </li>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
