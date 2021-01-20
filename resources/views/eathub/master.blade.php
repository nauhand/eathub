
<!DOCTYPE html>
<html lang="fr">


<!-- Mirrored from shreethemes.in/approze/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jan 2021 22:01:01 GMT -->
<head>
    <meta charset="utf-8" />
    <title>EAT HUB - Commander n'a jamais été autant rapide</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta content="Eathub" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('/') }}eathub/images/logo.png">
    <!-- Bootstrap -->
    <link href="{{ asset('/') }}eathub/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Magnific -->
    <link href="{{ asset('/') }}eathub/css/magnific-popup.css" rel="stylesheet" type="text/css" />
    <!-- Icon -->
    <link href="{{ asset('/') }}eathub/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/') }}eathub/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css" />
    <!-- SLICK SLIDER -->
    <link rel="stylesheet" href="{{ asset('/') }}eathub/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="{{ asset('/') }}eathub/css/owl.theme.css"/>
    <link rel="stylesheet" href="{{ asset('/') }}eathub/css/owl.transitions.css"/>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}eathub/css/swiper.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('/') }}eathub/css/aos.css">
    <!-- Custom Css -->
    <link href="{{ asset('/') }}eathub/css/style.css" rel="stylesheet" type="text/css" />
    @toastr_css
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="sk-circle">
                <div class="sk-circle1 sk-child"></div>
                <div class="sk-circle2 sk-child"></div>
                <div class="sk-circle3 sk-child"></div>
                <div class="sk-circle4 sk-child"></div>
                <div class="sk-circle5 sk-child"></div>
                <div class="sk-circle6 sk-child"></div>
                <div class="sk-circle7 sk-child"></div>
                <div class="sk-circle8 sk-child"></div>
                <div class="sk-circle9 sk-child"></div>
                <div class="sk-circle10 sk-child"></div>
                <div class="sk-circle11 sk-child"></div>
                <div class="sk-circle12 sk-child"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom navbar-light sticky">
        <div class="container">
            <a class="navbar-brand" href="#">
                <!-- Approze -->
                <img src="{{ asset('/') }}eathub/images/logo.png" class="l-dark" height="90" alt="">
                <img src="{{ asset('/') }}eathub/images/logo.png" class="l-light" height="90" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="mdi mdi-menu"></span>
            </button><!--end button-->

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Accueil</a>
                    </li><!--end nav item-->
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Fonctionnalités</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#work">Vitrine</a>
                    </li><!--end nav item-->
                </ul><!--end navbar nav-->
                <div>
                    <a href="#contact" class="login-button mouse-down ml-3">S'enregistrer</a>
                </div><!--end login button-->
            </div><!--end collapse-->
        </div><!--end container-->
    </nav><!--end navbar-->
    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Start -->
    <footer class="footer bg-dark">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="text-sm-left">
                        <p class="mb-0">© 2021 EatHub. Powered by : XEARTH.</p>
                    </div>
                </div><!--end col-->

                <div class="col-sm-6">
                    <ul class="list-unstyled text-sm-right social-icon social mb-0 mt-4 mt-sm-0">
                        <li class="list-inline-item"><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="mdi mdi-instagram"></i></a></li>
                    </ul>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </footer><!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" class="back-to-top text-center" id="back-to-top">
        <i class="mdi mdi-chevron-up d-block"> </i>
    </a>
    <!-- Back to top -->
    <!-- javascript -->
    <script src="{{ asset('/') }}eathub/js/jquery.min.js"></script>
    <script src="{{ asset('/') }}eathub/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/') }}eathub/js/jquery.easing.min.js"></script>
    <script src="{{ asset('/') }}eathub/js/scrollspy.min.js"></script>
    <!-- SLIDER -->
    <script src="{{ asset('/') }}eathub/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('/') }}eathub/js/jquery.magnific-popup.min.js"></script>
    <!-- Contact -->
    <script src="{{ asset('/') }}eathub/js/contact.js"></script>
    <!-- Counter -->
    <script src="{{ asset('/') }}eathub/js/counter.init.js"></script>
    <!-- Swiper JS -->
    <script src="{{ asset('/') }}eathub/js/swiper.min.js"></script>
    <!-- Animation JS -->
    <script src="{{ asset('/') }}eathub/js/aos.js"></script>
    <!-- Animation JS -->
    <script src="{{ asset('/') }}eathub/js/jquery.nicescroll.js"></script>
    <!-- Plugin init -->
    <script src="{{ asset('/') }}eathub/js/plugin.init.js"></script>
    <!-- Main Js -->
    <script src="{{ asset('/') }}eathub/js/app.js"></script>
    @jquery
    @toastr_js
    @toastr_render
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" integrity="sha512-F5QTlBqZlvuBEs9LQPqc1iZv2UMxcVXezbHzomzS6Df4MZMClge/8+gXrKw2fl5ysdk4rWjR0vKS7NNkfymaBQ==" crossorigin="anonymous"></script>
</body>

<!-- Mirrored from shreethemes.in/approze/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jan 2021 22:03:41 GMT -->
</html>
