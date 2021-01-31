<header id="header" class="fixed-top">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-10 d-flex align-items-center">
                <h1 class="logo mr-auto"><a href="index.html">"nombre empresa"<span>.</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo mr-auto"><img src="assets/LandingPage/img/logo.png" alt=""></a>-->

                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="#header">Inicio</a></li>
                        <li><a href="#services">Servicios</a></li>
                        <li><a href="{{route('LandingPage.show',1)}}">Productos</a></li>
                        <li><a href="#about">Nosotros</a></li>
                        <li><a href="#contact">Contacto</a></li>
                    </ul>
                </nav><!-- .nav-menu -->
                @auth
                <a href="{{ route('Dashboard.index') }}" class="get-started-btn scrollto">Dashboard</a>
                @else
                <a href="{{ route('register') }}" class="get-started-btn scrollto">Registrate</a>
                <a href="{{ route('login') }}" class="get-started-btn scrollto">Login</a>
                @endauth

            </div>
        </div>

    </div>
</header><!-- End Header -->
