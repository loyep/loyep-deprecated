<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>@yield('title', Planet::name())</title>

    <!-- Styles -->
    <link href="{{ mix("css/app.css") }}" rel="stylesheet">

    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="icon" href="{{ asset('img/favicon.png') }}">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
    <div class="container">

        <div class="navbar-left">
            <button class="navbar-toggler" type="button">&#9776;</button>
            <a class="navbar-brand" href="#">
                <img class="logo-dark" src="{{ asset('img/logo/bootstrap-solid.png') }}" alt="logo">
                <img class="logo-light" src="{{ asset('img/logo/bootstrap-punchout.png') }}" alt="logo">
            </a>
        </div>

        <section class="navbar-mobile">
            <nav class="nav nav-navbar ml-auto">
                <a class="nav-link" href="#">Documentation</a>
                <a class="nav-link" href="#">Examples</a>
                <a class="nav-link" href="#">Themes</a>
                <a class="nav-link" href="#">Jobs</a>
                <a class="nav-link" href="#">Expo</a>
                <a class="nav-link" href="#">Blog</a>
            </nav>
        </section>
    </div>
</nav>
<!-- /.navbar -->
<!-- Header -->
<header class="header text-white h-fullscreen" style="background-image: url({{ asset('img/bg/1.jpg') }})">
    <div class="overlay opacity-90" style="background-color: #563d7c"></div>
    <div class="container text-center">
        <div class="row h-100">
            <div class="col-lg-8 mx-auto align-self-center">
                <p><img src="{{ asset('img/logo/bootstrap.png') }}" alt="logo"></p>
                <h1 class="display-4 my-6"><strong>Bootstrap</strong></h1>
                <p class="lead-3">The <b>most popular</b> HTML, CSS, and JS <b>framework</b> in the world for building
                    responsive, mobile-first projects <b>on the web</b>.</p>
                <hr class="w-80px">
                <p>
                    <a class="btn btn-xl btn-round btn-outline-light w-250" href="#">Download Now</a>
                    <br>
                    <span class="opacity-60 small-3">Currently v4.0.0</span>
                </p>
            </div>
        </div>
    </div>
</header>
<!-- /.header -->
<!-- Main Content -->
<main class="main-content">
    <!--
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    | Features
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    !-->
    <section class="section">
        <div class="container">
            <header class="section-header">
                <small>Features</small>
                <h2>Designed for everyone, everywhere</h2>
                <hr>
                <p class="lead">Bootstrap makes front-end web development faster and easier. It's made for folks of all
                    skill levels, devices of all shapes, and projects of all sizes.</p>
            </header>

            <div class="row gap-y text-center">
                <div class="col-md-6 col-xl-4 feature-1">
                    <p class="feature-icon text-success"><i class="icon-search"></i></p>
                    <h5>Preprocessors</h5>
                    <p>Bootstrap ships with vanilla CSS, but its source code utilizes the two most popular CSS
                        preprocessors, Less and Sass. Quickly get started with precompiled CSS.</p>
                </div>
                <div class="col-md-6 col-xl-4 feature-1">
                    <p class="feature-icon text-primary"><i class="icon-mobile"></i></p>
                    <h5>One framework, every device</h5>
                    <p>Bootstrap easily and efficiently scales your websites and applications with a single code base,
                        from phones to tablets to desktops with CSS media queries.</p>
                </div>
                <div class="col-md-6 col-xl-4 feature-1">
                    <p class="feature-icon text-danger"><i class="icon-tools"></i></p>
                    <h5>Full of features</h5>
                    <p>With Bootstrap, you get extensive and beautiful documentation for common HTML elements, dozens of
                        custom HTML and CSS components, and awesome jQuery plugins.</p>
                </div>
            </div>
        </div>
    </section>


    <!--
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    | CTA
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    !-->
    <section class="section text-center bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <p><img src="{{ asset('img/icon/github.png') }}" alt="..."></p>
                    <br>
                    <h3 class="mb-6"><strong>Fork the project on GitHub</strong></h3>
                    <p class="lead text-muted">Bootstrap is open source! It's hosted, developed, and maintained on
                        GitHub by folks like you.</p>
                    <br>
                    <a class="btn btn-lg btn-round btn-success px-7" href="#">View GitHub Project</a>
                </div>
            </div>
        </div>
    </section>


    <!--
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    | Components
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    !-->
    <section class="section">
        <div class="container">
            <header class="section-header">
                <small>UI KIT</small>
                <h2>Endless Components</h2>
                <hr>
                <p class="lead">Over a dozen reusable components built to provide iconography, dropdowns, input groups,
                    navigation, alerts, and much more.</p>
            </header>


            <div class="row gap-y">
                <div class="col-md-6 col-lg-3">
                    <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
                        <p><i class="icon-mobile lead-6 text-muted"></i></p>
                        <h5 class="card-title text-dark mb-0">Responsive</h5>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3">
                    <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
                        <p><i class="icon-gears lead-6 text-muted"></i></p>
                        <h5 class="card-title text-dark mb-0">Customizable</h5>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3">
                    <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
                        <p><i class="icon-tools lead-6 text-muted"></i></p>
                        <h5 class="card-title text-dark mb-0">UI Elements</h5>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3">
                    <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
                        <p><i class="icon-recycle lead-6 text-muted"></i></p>
                        <h5 class="card-title text-dark mb-0">Clean Code</h5>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3">
                    <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
                        <p><i class="icon-browser lead-6 text-muted"></i></p>
                        <h5 class="card-title text-dark mb-0">Browser Support</h5>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3">
                    <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
                        <p><i class="icon-paintbrush lead-6 text-muted"></i></p>
                        <h5 class="card-title text-dark mb-0">Color Pallet</h5>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3">
                    <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
                        <p><i class="icon-puzzle lead-6 text-muted"></i></p>
                        <h5 class="card-title text-dark mb-0">Page Builder</h5>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3">
                    <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
                        <p><i class="icon-newspaper lead-6 text-muted"></i></p>
                        <h5 class="card-title text-dark mb-0">Documentation</h5>
                    </a>
                </div>

            </div>
        </div>
    </section>


    <!--
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    | Built with Bootstrap
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    !-->
    <section class="section bg-gray pb-0 overflow-hidden">
        <div class="container">
            <header class="section-header">
                <small>Expo</small>
                <h2>Built with Bootstrap</h2>
                <hr>
                <p class="lead">Millions of amazing sites across the web are being built with Bootstrap. Get started on
                    your own with our growing collection of examples or by exploring some of our favorites.</p>
            </header>

            <div class="row gap-y text-center">

                <div class="col-md-4 d-flex flex-column">
                    <div class="mb-7">
                        <p class="text-info lead-7 mb-0">100+</p>
                        <p>Components</p>
                    </div>
                    <div class="px-5 mt-auto">
                        <img class="shadow-4 opacity-80" src="{{ asset('img/preview/header-color.jpg') }}" alt="..."
                             data-aos="slide-up" data-aos-delay="300">
                    </div>
                </div>

                <div class="col-md-4 d-flex flex-column">
                    <div class="mb-7">
                        <span class="text-info lead-7">6.7x</span><br>
                        <p>Faster</p>
                    </div>
                    <div class="mt-auto">
                        <img class="shadow-6" src="{{ asset('img/preview/header-gradient.jpg') }}" alt="..."
                             data-aos="slide-up">
                    </div>
                </div>

                <div class="col-md-4 d-flex flex-column">
                    <div class="mb-7">
                        <span class="text-info lead-7">12</span><br>
                        <p>Colors</p>
                    </div>
                    <div class="px-5 mt-auto">
                        <img class="shadow-4 opacity-80" src="{{ asset('img/preview/header-typing.jpg') }}" alt="..."
                             data-aos="slide-up" data-aos-delay="600">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    | Partners
    |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
    !-->
    <section class="section py-6">
        <div class="container">

            <div class="partner partner-sm">
                <img src="{{ asset('img/partner/1.png') }}" alt="partner 1">
                <img src="{{ asset('img/partner/2.png') }}" alt="partner 2">
                <img src="{{ asset('img/partner/3.png') }}" alt="partner 3">
                <img src="{{ asset('img/partner/4.png') }}" alt="partner 4">
                <img src="{{ asset('img/partner/5.png') }}" alt="partner 5">
                <img src="{{ asset('img/partner/6.png') }}" alt="partner 6">
            </div>

        </div>
    </section>
</main>
<!-- Footer -->
<footer class="footer bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6 mx-auto">

                <div class="nav nav-center">
                    <a class="nav-link" href="#">GitHub</a>
                    <a class="nav-link" href="#">Twitter</a>
                    <a class="nav-link" href="#">Examples</a>
                    <a class="nav-link" href="#">About</a>
                </div>
                <hr>
                <p class="text-center">Designed and built with all the love in the world by @mdo and @fat. Maintained by
                    the core team with the help of our contributors.</p>
            </div>
        </div>
    </div>
</footer>
<!-- /.footer -->
<!-- Scripts -->
<script src="{{ asset('js/page.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
