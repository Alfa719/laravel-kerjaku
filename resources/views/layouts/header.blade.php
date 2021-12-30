<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="index.html">KERJAKU</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        {{-- <a href="index.html" class="logo me-auto"><img src="{{ asset('user/img/logo.png') }}" alt=""
                    class="img-fluid"></a> --}}

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Dashboard</a></li>
                <li><a class="nav-link scrollto" href="#job">Job</a></li>
                <li><a class="nav-link scrollto" href="#mitra">Mitra</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                @auth
                    <li>
                        <a class="getstarted" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ Auth::user()->name }}
                        </a>
                    </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @else
                    <li><a class="getstarted" href="{{ route('login') }}">Login</a></li>
                @endauth
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
