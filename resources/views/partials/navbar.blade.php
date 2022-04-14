<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <a href="index.html"><img src="{{asset('Logo/logo2.png')}}" alt="" style="100px" class="img-fluid"></a>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
            <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
            <li><a class="nav-link scrollto" href="#about">Produk Kami</a></li>
            <li><a class="nav-link scrollto" href="#services">Artikel</a></li>
            <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
            <li><a class="nav-link scrollto" href="#team">Team</a></li>
            
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

            @guest
                <li>
                @if (Route::has('login'))
                <a class="getstarted scrollto" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                @endif

                @if (Route::has('register'))
                @endif
            
            @else
            <li class="nav-item dropdown nav-link scrollto">
                <a id="navbarDropdown" class="nav-link dropdown-toggle d-flex align-items-center"  role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a href="/profile/{{ Auth::user()->id }}" class="dropdown-item">Profile</a>
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
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->