<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('layouts.style')

</head>

<body>
    @include('layouts.header')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Better Solutions For Your Job Seeker</h1>
                    <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, quos.</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        @auth
                            <a class="btn-get-started scrollto">Welcome {{ Auth::user()->name }}</a>
                        @else
                            <a href="" class="btn-get-started scrollto">Sign In</a>
                        @endauth
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('user/img/hero-img.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->
    <main id="main">
        @yield('content')
    </main><!-- End #main -->

    @include('layouts.footer')

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('layouts.script')

</body>

</html>
