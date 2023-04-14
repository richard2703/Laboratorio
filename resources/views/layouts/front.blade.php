<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->

    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/simple-datatables/style.css') }}" rel="stylesheet">
    {{--  <link href="{{ asset('vendor/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">  --}}
    <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/front/layout.css') }}" rel="stylesheet">
    <link href="{{ asset('css/front/componentes.css') }}" rel="stylesheet">
    <link href="{{ asset('css/front/style.css') }}" rel="stylesheet">



    <style>
        /* Estilos para la barra de navegación */
        nav {
            /*background-color: #333;*/
            /* Cambia el color de fondo según tus preferencias */
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
        }

        nav img {
            height: 50px;
            /* Cambia la altura según el tamaño de tu logo */
            margin-right: 20px;
        }

        nav a {
            color: #fff;
            /* Cambia el color del texto según tus preferencias */
            text-decoration: none;
            font-size: 18px;
            margin-left: 20px;
        }

        nav a:hover {
            color: #ddd;
            /* Cambia el color del texto cuando se pasa el cursor por encima */
        }

        /* Estilos para el icono de menú en pantallas pequeñas */
        .icono-menu {
            display: inline;
            cursor: pointer;
            font-size: 24px;
            padding: 12px;
            color: #fff;
            /* Cambia el color del icono según tus preferencias */
        }

        /* Estilos para el menú en pantallas pequeñas */
        .menu {
            display: none;
            position: absolute;
            top: 60px;
            /* Cambia la distancia desde la parte superior según tus preferencias */
            right: 0;
            background-color: #333;
            /* Cambia el color de fondo según tus preferencias */
            padding: 20px;
            z-index: 1;
        }

        .menu l1 {
            display: none;
        }

        .menu a {
            display: block;
            color: #fff;
            /* Cambia el color del texto según tus preferencias */
            text-decoration: none;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .menu a:hover {
            color: #ddd;
            /* Cambia el color del texto cuando se pasa el cursor por encima */
        }

        /* Estilos para mostrar el menú en pantallas pequeñas cuando se hace clic en el icono */
        .menu-responsive {
            display: none;
        }

        .menu-responsive.show {
            display: block;
        }

        /* Estilos para ocultar el menú en pantallas grandes cuando se muestra el menú en pantallas pequeñas */
        @media screen and (min-width: 990px) {
            .icono-menu {
                display: none;
            }

            .menu {
                display: block !important;
                position: static !important;
                background-color: transparent;
                padding: 0;
            }

            .menu a {
                display: inline-block;
                margin: 0 10px;
            }

            .menu a:last-child {
                margin-right: 0;
            }

            .menu-responsive {
                display: none;
            }
        }
    </style>

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        {{--  Logo  --}}
        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">NiceAdmin</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        {{--  End Logo  --}}

        {{--  Barra de busqueda  --}}
        {{--  <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div>  --}}
        {{--  END Barra de busqueda  --}}

        <nav class="header-nav ms-auto">
            <div class="menu">
                <a href="#">Home</a>
                <a href="#">Servicios</a>
                <a href="#">Contacto</a>
            </div>

            <div class="menu-responsive">
                <a href="#">Home</a>
                <a href="#">Servicios</a>
                <a href="#">Contacto</a>
            </div>

            <div class="icono-menu" onclick="mostrarMenu()">
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div>

        </nav>




        {{--  <!-- End Icons Navigation -->  --}}

    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item ">
                <a class="nav-link {{ $activePage == 'Dashboard' ? '' : 'collapsed' }}" href="{{ url('test') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- End Dashboard Nav -->

            <li class="nav-item ">
                <a class="nav-link {{ $activePage == 'Dashboard' ? '' : 'collapsed' }}"
                    href="{{ route('test.print') }}">
                    <i class="bi bi-grid"></i>
                    <span>TEST</span>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link {{ $activePage == 'tickets' ? '' : 'collapsed' }}" data-bs-target="#tables-nav"
                    data-bs-toggle="collapse" href="#">
                    <i class="bi bi-receipt"></i><span>Tickets</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse {{ $activePage == 'tickets' ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('tickets.create') }}"
                            class="{{ $activeItem == 'newTicket' ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Nuevo Ticket</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tickets.index') }}" class="{{ $activeItem == 'tickets' ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Tickets</span>
                        </a>
                    </li>
                </ul>
            </li>
            {{--  <!-- Tickets -->  --}}

            <li class="nav-item collapsed">
                <a class="nav-link {{ $activePage == 'pacientes' ? '' : 'collapsed' }}"
                    href="{{ route('pacientes.index') }}">
                    <i class="bi bi-person"></i>
                    <span>Pacientes</span>
                </a>
            </li>
            {{--  <!-- Pacientes -->  --}}

            <li class="nav-heading">Administracion</li>

            <li class="nav-item collapsed">
                <a class="nav-link {{ $activePage == 'maquilas' ? '' : 'collapsed' }}"
                    href="{{ route('maquilas.index') }}">
                    <i class="bi bi-shop"></i>
                    <span>Maquilas</span>
                </a>
            </li>
            {{--  <!-- Maquilas -->  --}}

            <li class="nav-item">
                <a class="nav-link {{ $activePage == 'examenes' ? '' : 'collapsed' }} " data-bs-target="#examenes-nav"
                    data-bs-toggle="collapse" href="#">
                    <i class="bi bi-clipboard2-pulse"></i>
                    <span>Examenes y Parametros</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="examenes-nav" class="nav-content collapse {{ $activePage == 'examenes' ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('examenes.index') }}"
                            class="{{ $activeItem == 'examenes' ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Examenes</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('parametros.index') }}"
                            class=" {{ $activeItem == 'parametros' ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Parametros</span>
                        </a>
                    </li>
                </ul>
            </li>
            {{--  <!-- Usuarios Examenes y Parametros -->  --}}


            <li class="nav-item">
                <a class="nav-link {{ $activePage == 'usuarios' ? '' : 'collapsed' }} "
                    data-bs-target="#usuarios-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-people"></i>
                    <span>Usuarios y Permisos</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="usuarios-nav" class="nav-content collapse {{ $activePage == 'usuarios' ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('users.index') }}"
                            class="{{ $activeItem == 'usuarios' ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Usuarios</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('roles.index') }}" class=" {{ $activeItem == 'Roles' ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Roles</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('permissions.index') }}"
                            class="{{ $activeItem == 'Permisos' ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Permisos</span>
                        </a>
                    </li>
                </ul>
            </li>
            {{--  <!-- Usuarios Roles y permisos -->  --}}

        </ul>

    </aside>
    <!-- End Sidebar-->


    <main id="main" class="main">
        @yield('content')
    </main>

    <!-- End main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Richard</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="#">Richard.Inc</a>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>


    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  --}}
    {{--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  --}}
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>
    {{--  <script src="{{ asset('vendor/jquery-ui/jquery-ui.min.js') }}"></script>  --}}
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>


    <script>
        // Función para mostrar/ocultar el menú en pantallas pequeñas
        function mostrarMenu() {
            var menu = document.querySelector('.menu-responsive');
            if (menu.classList.contains('show')) {
                menu.classList.remove('show');
            } else {
                menu.classList.add('show');
            }
        }
    </script>

</body>

</html>
