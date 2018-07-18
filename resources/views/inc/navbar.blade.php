{{-- <nav class="navbar navbar-expand-md navbar-dark bg-dark" style="height: 70px;position: fixed; width: 100%; top:0; z-index: 10;">
        <a class="navbar-brand" href="/">Kevs Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/posts">Blog</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
          </ul>
        </div>
      </nav> --}}

      <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: rgb(34,34,34);">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="color: silver;">
                    Kevs Blog
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                              <a class="nav-link" href="/" style="color: silver;">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/about" style="color: silver;">About</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/services" style="color: silver;">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/posts" style="color: silver;">Blog</a>
                            </li>
                          </ul>
                          {{-- <ul class="nav navbar-nav navbar-right">
                            <li><a class="nav-link" href="/posts/create" style="color: silver;">Create Post</a></li>
                          </ul> --}}

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" style="color: silver;" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color: silver;" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: silver;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="/dashboard" style="color: black; margin-left: 23px;">Dashboard</a>
                                    <a class="dropdown-item" style="color: black;" href="{{ route('logout') }}"
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