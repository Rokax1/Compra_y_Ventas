<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>"Nombre empresa"</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset("assets/LandingPage/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/LandingPage/vendor/icofont/icofont.min.css")}}"  rel="stylesheet">
    <link href="{{asset("assets/LandingPage/vendor/boxicons/css/boxicons.min.css")}}"  rel="stylesheet">
    <link href="{{asset("assets/LandingPage/vendor/owl.carousel/assets/owl.carousel.min.css")}}"  rel="stylesheet">
    <link href="{{asset("assets/LandingPage/vendor/remixicon/remixicon.css")}}"  rel="stylesheet">
    <link href="{{asset("assets/LandingPage/vendor/venobox/venobox.css")}}"  rel="stylesheet">
    <link href="{{asset("assets/LandingPage/vendor/aos/aos.css")}}"  rel="stylesheet">
    <link rel="stylesheet" href="{{asset("assets/Dashboard/plugins/fontawesome-free/css/all.min.css")}}">

    <!-- Template Main CSS File -->
    <link href="{{asset("assets/LandingPage/css/style.css")}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Presento - v1.1.0
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  @yield('styles')
</head>

<body>
    @include("layouts/LandingPage/header")


    <main id="main">


        @yield('contenido')

        @include("layouts/LandingPage/footer")
    </main>





    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset("assets/LandingPage/vendor/jquery/jquery.min.js")}}"></script>
    <script src="{{asset("assets/LandingPage/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("assets/LandingPage/vendor/jquery.easing/jquery.easing.min.js")}}"></script>
    <script src="{{asset("assets/LandingPage/vendor/php-email-form/validate.js")}}"></script>
    <script src="{{asset("assets/LandingPage/vendor/owl.carousel/owl.carousel.min.js")}}"></script>
    <script src="{{asset("assets/LandingPage/vendor/waypoints/jquery.waypoints.min.js")}}"></script>
    <script src="{{asset("assets/LandingPage/vendor/counterup/counterup.min.js")}}"></script>
    <script src="{{asset("assets/LandingPage/vendor/isotope-layout/isotope.pkgd.min.js")}}"></script>
    <script src="{{asset("assets/LandingPage/vendor/venobox/venobox.min.js")}}"></script>
    <script src="{{asset("assets/LandingPage/vendor/aos/aos.js")}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset("assets/LandingPage/js/main.js")}}"></script>
    @yield('script')
</body>

</html>
