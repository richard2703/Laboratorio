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
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    <link href="{{ asset('css/componentes.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


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
        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div>
        {{--  END Barra de busqueda  --}}

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li>
                {{--  <!-- End Search Icon-->  --}}

                <li class="nav-item dropdown">

                    {{--  <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a>  --}}
                    {{--  <!-- End Notification Icon -->  --}}

                    {{--  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have 4 new notifications
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>

                    </ul>  --}}
                    {{--  <!-- End Notification Dropdown Items -->  --}}

                </li>
                {{--  <!-- End Notification Nav -->  --}}

                <li class="nav-item dropdown">
                    {{--  
                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">3</span>
                    </a>  --}}
                    {{--  <!-- End Messages Icon -->  --}}

                    {{--  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header">
                            You have 3 new messagessi
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Maria Hudson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Anna Nelson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>6 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>David Muldon</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">Show all messages</a>
                        </li>

                    </ul>  --}}
                    {{--  <!-- End Messages Dropdown Items -->  --}}

                </li>
                {{--  <!-- End Messages Nav -->  --}}

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        {{--  <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">  --}}
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->name }}</span>
                    </a>
                    {{--  <!-- End Profile Iamge Icon -->  --}}

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{ auth()->user()->name }}</h6>
                            {{--  <span>Web Designer</span>  --}}
                        </li>
                        {{--  <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help</span>
                            </a>
                        </li>  --}}
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <form action="{{ route('logout') }}" method="POST" style="display: inline-block;"
                                onsubmit="return confirm('Seguro?')">
                                @csrf
                                <button class="dropdown-item d-flex align-items-center" type="submit" rel="tooltip">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Sign Out</span>
                                </button>
                            </form>
                        </li>

                    </ul>
                    {{--  <!-- End Profile Dropdown Items -->  --}}
                </li>
                {{--  < !-- End Profile Nav -->  --}}

            </ul>
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

            {{--  <li class="nav-item ">
                <a class="nav-link {{ $activePage == 'Dashboard' ? '' : 'collapsed' }}"
                    href="{{ route('test.print') }}">
                    <i class="bi bi-grid"></i>
                    <span>TEST</span>
                </a>
            </li>  --}}
            @canany(['tickets_index', 'tickets_create'])
                <li class="nav-item ">
                    <a class="nav-link {{ $activePage == 'tickets' ? '' : 'collapsed' }}" data-bs-target="#tables-nav"
                        data-bs-toggle="collapse" href="#">
                        <i class="bi bi-receipt"></i><span>Tickets</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="tables-nav" class="nav-content collapse {{ $activePage == 'tickets' ? 'show' : '' }}"
                        data-bs-parent="#sidebar-nav">
                        @can('tickets_create')
                            <li>
                                <a href="{{ route('tickets.create') }}"
                                    class="{{ $activeItem == 'newTicket' ? 'active' : '' }}">
                                    <i class="bi bi-circle"></i><span>Nuevo Ticket</span>
                                </a>
                            </li>
                        @endcan
                        @can('tickets_index')
                            <li>
                                <a href="{{ route('tickets.index') }}"
                                    class="{{ $activeItem == 'tickets' ? 'active' : '' }}">
                                    <i class="bi bi-circle"></i><span>Tickets</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan

            {{--  <!-- Tickets -->  --}}
            @can('pacientes_index')
                <li class="nav-item collapsed">
                    <a class="nav-link {{ $activePage == 'pacientes' ? '' : 'collapsed' }}"
                        href="{{ route('pacientes.index') }}">
                        <i class="bi bi-person"></i>
                        <span>Pacientes</span>
                    </a>
                </li>
            @endcan
            {{--  <!-- Pacientes -->  --}}

            <li class="nav-heading">Administracion</li>
            {{--  @can('maquilas_index')
                <li class="nav-item collapsed">
                    <a class="nav-link {{ $activePage == 'maquilas' ? '' : 'collapsed' }}"
                        href="{{ route('maquilas.index') }}">
                        <i class="bi bi-shop"></i>
                        <span>Maquilas</span>
                    </a>
                </li>
            @endcan  --}}

            <li class="nav-item collapsed">
                <a class="nav-link {{ $activePage == 'lugares' ? '' : 'collapsed' }}"
                    href="{{ route('pacientes.index') }}">
                    <i class="bi bi-person"></i>
                    <span>Lugares de trabajo</span>
                </a>
            </li>
            {{--  @can('examenes_index')  --}}
            <li class="nav-item">
                <a class="nav-link {{ $activePage == 'catalogos' ? '' : 'collapsed' }} "
                    data-bs-target="#catalogos-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-clipboard2-pulse"></i>
                    <span>Lugares de Trabajo</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="catalogos-nav" class="nav-content collapse {{ $activePage == 'catalogos' ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    {{--  @can('parametros_index')  --}}
                    <li>
                        <a href="{{ route('catlugares.index') }}"
                            class=" {{ $activeItem == 'catLugare' ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Lugares</span>
                        </a>
                    </li>
                    {{--  @endcan  --}}
                    {{--  @can('parametros_index')  --}}
                    <li>
                        <a href="{{ route('doctores.index') }}"
                            class=" {{ $activeItem == 'doctores' ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Doctores</span>
                        </a>
                    </li>
                    {{--  @endcan  --}}
                    @can('maquilas_index')
                        <li>
                            <a href="{{ route('maquilas.index') }}"
                                class=" {{ $activeItem == 'maquilas' ? 'active' : '' }}">
                                <i class="bi bi-circle"></i>
                                <span>Maquilas</span>
                            </a>
                        </li>
                    @endcan

                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $activePage == 'lugaresTrabajo' ? '' : 'collapsed' }} "
                    data-bs-target="#lugaresTrabajo-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-clipboard2-pulse"></i>
                    <span>Lugares de Trabajo</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="lugaresTrabajo-nav"
                    class="nav-content collapse {{ $activePage == 'lugaresTrabajo' ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    {{--  @can('parametros_index')  --}}
                    <li>
                        <a href="{{ route('sucursales.index') }}"
                            class=" {{ $activeItem == 'sucursales' ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Sucursales</span>
                        </a>
                    </li>
                    {{--  @endcan  --}}
                    {{--  @can('parametros_index')  --}}
                    <li>
                        <a href="{{ route('doctores.index') }}"
                            class=" {{ $activeItem == 'doctores' ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Doctores</span>
                        </a>
                    </li>
                    {{--  @endcan  --}}
                    @can('maquilas_index')
                        <li>
                            <a href="{{ route('maquilas.index') }}"
                                class=" {{ $activeItem == 'maquilas' ? 'active' : '' }}">
                                <i class="bi bi-circle"></i>
                                <span>Maquilas</span>
                            </a>
                        </li>
                    @endcan

                </ul>
            </li>
            {{--  @endcan  --}}
            {{--  <!-- Maquilas -->  --}}
            @can('examenes_index')
                <li class="nav-item">
                    <a class="nav-link {{ $activePage == 'examenes' ? '' : 'collapsed' }} "
                        data-bs-target="#examenes-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-clipboard2-pulse"></i>
                        <span>Examenes y Parametros</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="examenes-nav" class="nav-content collapse {{ $activePage == 'examenes' ? 'show' : '' }}"
                        data-bs-parent="#sidebar-nav">
                        @can('examenes_index')
                        @endcan
                        <li>
                            <a href="{{ route('examenes.index') }}"
                                class="{{ $activeItem == 'examenes' ? 'active' : '' }}">
                                <i class="bi bi-circle"></i><span>Examenes</span>
                            </a>
                        </li>
                        @can('parametros_index')
                            <li>
                                <a href="{{ route('parametros.index') }}"
                                    class=" {{ $activeItem == 'parametros' ? 'active' : '' }}">
                                    <i class="bi bi-circle"></i><span>Parametros</span>
                                </a>
                            </li>
                        @endcan

                    </ul>
                </li>
            @endcan


            {{--  <!-- Usuarios Examenes y Parametros -->  --}}

            @can('user_index')
                <li class="nav-item">
                    <a class="nav-link {{ $activePage == 'usuarios' ? '' : 'collapsed' }} "
                        data-bs-target="#usuarios-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-people"></i>
                        <span>Usuarios y Permisos</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="usuarios-nav" class="nav-content collapse {{ $activePage == 'usuarios' ? 'show' : '' }}"
                        data-bs-parent="#sidebar-nav">
                        @can('user_index')
                            <li>
                                <a href="{{ route('users.index') }}"
                                    class="{{ $activeItem == 'usuarios' ? 'active' : '' }}">
                                    <i class="bi bi-circle"></i><span>Usuarios</span>
                                </a>
                            </li>
                        @endcan
                        @can('role_index')
                            <li>
                                <a href="{{ route('roles.index') }}" class=" {{ $activeItem == 'Roles' ? 'active' : '' }}">
                                    <i class="bi bi-circle"></i><span>Roles</span>
                                </a>
                            </li>
                        @endcan
                        @can('permission_index')
                            <li>
                                <a href="{{ route('permissions.index') }}"
                                    class="{{ $activeItem == 'Permisos' ? 'active' : '' }}">
                                    <i class="bi bi-circle"></i><span>Permisos</span>
                                </a>
                            </li>
                        @endcan

                    </ul>
                </li>
            @endcan
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
    {{--  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>  --}}
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    {{--  <script src="{{ asset('vendor/jquery-ui/jquery-ui.min.js') }}"></script>  --}}
    {{--  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>  --}}


</body>

</html>
