<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Laboratorio PreVida
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS Files -->
    <link href="{{ asset('css/front/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/front/css/now-ui-kit.css?v=1.3.0') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, dont include it in your project -->
    <link href="{{ asset('css/front/demo/demo.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">


</head>

<body class="index-page sidebar-collapse">

    <!-- Topbar Start -->
    <div class="container-fluid topbar ">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-white">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-right  px-0">
                <div class="h-100 topbar-right d-inline-flex align-items-center text-white py-2 px-3">
                    <a href="{{ route('login') }}">
                        <i class="far fa-user-circle"></i>
                    </a>
                    {{--  <span class="fs-5 fw-bold me-2"><i class="fa fa-phone-alt me-2"></i>Call Us:</span>
                    <span class="fs-5 fw-bold">+012 345 6789</span>  --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar -->
    <nav class="sticky-top navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="0">
        <div class="container container-nav">
            <div class="navbar-translate">
                <a class="navbar-brand" href="#">
                    <img class="" style="width: 150px" src="{{ asset('img/ISOLOGO_COLOR.png') }}" alt="">

                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navigation" aria-controls="navigation-index" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar top-bar"></span>
                    <span class="navbar-toggler-bar middle-bar"></span>
                    <span class="navbar-toggler-bar bottom-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation"
                data-nav-image="{{ asset('css/front/img/blurred-image-1.jpg') }}">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
                            <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                            <p>Inicio</p>
                        </a>
                    </li>
                    {{--  <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
                            <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                            <p>Servicios</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
                            <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                            <p>Sucursales</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
                            <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                            <p>Contacto</p>
                        </a>
                    </li>  --}}
                    {{--  <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1"
                            data-toggle="dropdown">
                            <i class="now-ui-icons design_app"></i>
                            <p>Components</p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
                            <a class="dropdown-item" href="./index.html">
                                <i class="now-ui-icons business_chart-pie-36"></i> All components
                            </a>
                            <a class="dropdown-item" target="_blank"
                                href="https://demos.creative-tim.com/now-ui-kit/docs/1.0/getting-started/introduction.html">
                                <i class="now-ui-icons design_bullet-list-67"></i> Documentation
                            </a>
                        </div>
                    </li>  --}}
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary" href="{{ route('resultado.buscar') }}">
                            <i class="now-ui-icons arrows-1_share-66"></i>
                            <p>Resultados</p>
                        </a>
                    </li>
                    {{--  <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom"
                            href="https://twitter.com/CreativeTim" target="_blank">
                            <i class="fab fa-twitter"></i>
                            <p class="d-lg-none d-xl-none">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom"
                            href="https://www.facebook.com/CreativeTim" target="_blank">
                            <i class="fab fa-facebook-square"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom"
                            href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
                            <i class="fab fa-instagram"></i>
                            <p class="d-lg-none d-xl-none">Instagram</p>
                        </a>
                    </li>  --}}
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <div class="">
        @yield('content')

    </div>
    <footer class="footer" data-background-color="black">
        <div class=" container d-flex ">
            <div class="row">
                <div class="col-4">
                    <h3 class="title">Sucursales</h3>
                    <nav>
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com">
                                    Creative Tim
                                </a>
                            </li>
                            <li>
                                <a href="http://presentation.creative-tim.com">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="http://blog.creative-tim.com">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-4">
                    <h3 class="title">Servicios</h3>

                    <nav>
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com">
                                    Analisis clinicos </a>
                            </li>
                            <li>
                                <a href="http://presentation.creative-tim.com">
                                    Cardiologia
                                </a>
                            </li>
                            <li>
                                <a href="http://blog.creative-tim.com">
                                    Gastroenterologia
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-4">
                    <h3 class="title">Contactanos</h3>
                    <nav>
                        <ul>
                            <li>
                                <div class="text-left col-12 ">
                                    <a target="_blank" href="https://www.instagram.com/"
                                        class="btn btn-redes btn-icon  btn-round btn-lg" rel="tooltip"
                                        title="Siguenos">
                                        {{--  <i class="fab fa-twitter"></i>  --}}
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a target="_blank" href="https://www.facebook.com/"
                                        class="btn btn-redes btn-icon  btn-round btn-lg" rel="tooltip"
                                        title="Danos Like">
                                        <i class="fab fa-facebook-square"></i>
                                    </a>
                                    <a target="_blank" href="https://www.facebook.com/"
                                        class="btn btn-redes btn-icon  btn-round btn-lg" rel="tooltip"
                                        title="Envianos un mensaje">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex">
                                    <i class="fa fa-phone-alt me-3"></i>
                                    <p class="mb-2 textTels"> +52 33 21 83 64 72</p>
                                </div>
                            </li>
                            <li>
                                <p class="mb-2"><i class="fa fa-envelope me-3"></i> contacto@previda.com</p>

                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="copyright col-12" id="copyright">
                    &copy;
                    <script>
                        document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                    </script>, Designed by
                    <a href="https://www.invisionapp.com" target="_blank">Richard.corp</a>. Coded by
                    <a href="https://www.creative-tim.com" target="_blank">Richard.corp</a>.
                </div>
            </div>
        </div>
    </footer>
    <!--   Core JS Files   -->
    <script src="{{ asset('css/front/js/core/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('css/front/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('css/front/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/d4151dc3e6.js" crossorigin="anonymous"></script>


    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="{{ asset('css/front/js/plugins/bootstrap-datepicker.js') }}" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('css/front/js/now-ui-kit.js?v=1.3.0') }}" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            // the body of this function is in assets/js/now-ui-kit.js
            nowuiKit.initSliders();
        });

        function scrollToDownload() {

            if ($('.section-download').length != 0) {
                $("html, body").animate({
                    scrollTop: $('.section-download').offset().top
                }, 1000);
            }
        }
    </script>
</body>

</html>
