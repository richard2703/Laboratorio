@extends('layouts.front', ['activePage' => 'Dashboard', 'activeItem' => ''])

@section('content')
    <div class="main">
        <div class="section" id="carousel">
            <div class="container">
                {{-- <div class="title">
                  <h4>Carousel</h4>
                </div> --}}
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                </li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img class="d-block" src="{{ asset('css/front/img/bg1.jpg') }}" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Nature, United States</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="{{ asset('css/front/img/bg3.jpg') }}" alt="Second slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Somewhere Beyond, United States</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="{{ asset('css/front/img/bg4.jpg') }}" alt="Third slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Yellowstone National Park, United States</h5>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <i class="now-ui-icons arrows-1_minimal-left"></i>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <i class="now-ui-icons arrows-1_minimal-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--  <div class="section section-tabs">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 ml-auto mr-auto">
                        <h2 class="title">Servicios</h2>
                        <p class="category">Tabs with Icons on Card</p>
                        <!-- Nav tabs -->
                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-pills nav-pills-primary nav-pills-just-icons justify-content-center"
                                    role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                                            <i class="far fa-gem"></i> Home
                                        </a>
                                    </li>
                                     <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home"
                                        role="tab">
                                        <i class="now-ui-icons objects_umbrella-13"></i> Home
                                    </a>
                                </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                                            <i class="now-ui-icons shopping_cart-simple"></i> Profile
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                                            <i class="now-ui-icons shopping_shop"></i> Messages
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                                            <i class="now-ui-icons ui-2_settings-90"></i> Settings
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <!-- Tab panes -->
                                <div class="tab-content text-center">
                                    <div class="tab-pane active" id="home" role="tabpanel">
                                        <p>I think that’s a responsibility that I have, to push possibilities, to
                                            show people, this is the level that things could be at. So when you get
                                            something that has the name Kanye West on it, it’s supposed to be
                                            pushing the furthest possibilities. I will be the leader of a company
                                            that ends up being worth billions of dollars, because I got the answers.
                                            I understand culture. I am the nucleus.</p>
                                    </div>
                                    <div class="tab-pane" id="profile" role="tabpanel">
                                        <p> I will be the leader of a company that ends up being worth billions of
                                            dollars, because I got the answers. I understand culture. I am the
                                            nucleus. I think that’s a responsibility that I have, to push
                                            possibilities, to show people, this is the level that things could be
                                            at. I think that’s a responsibility that I have, to push possibilities,
                                            to show people, this is the level that things could be at. </p>
                                    </div>
                                    <div class="tab-pane" id="messages" role="tabpanel">
                                        <p>I think that’s a responsibility that I have, to push possibilities, to
                                            show people, this is the level that things could be at. So when you get
                                            something that has the name Kanye West on it, it’s supposed to be
                                            pushing the furthest possibilities. I will be the leader of a company
                                            that ends up being worth billions of dollars, because I got the answers.
                                            I understand culture. I am the nucleus.</p>
                                    </div>
                                    <div class="tab-pane" id="settings" role="tabpanel">
                                        <p>
                                            "I will be the leader of a company that ends up being worth billions of
                                            dollars, because I got the answers. I understand culture. I am the
                                            nucleus. I think that’s a responsibility that I have, to push
                                            possibilities, to show people, this is the level that things could be
                                            at."
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  --}}

        <div class="section section-tabs ">
            <div class="container">
                <h2 class="title">Servicios</h2>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <h3 class="title">Análisis clínicos de rutina y especializados</h3>
                        <h3 class="title">Perfiles de estudios con menor costo</h3>

                        <h3 class="title">Tomas de muestras a domicilio</h3>

                    </div>
                    <div class="col-lg-6 col-md-12">
                        <img src="{{ asset('img/analisis.jpeg') }}" alt="" srcset="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <img src="{{ asset('img/analisis-clinicos.jpg') }}" alt="" srcset="">
                    </div>
                    <div class="col-lg-6 col-md-12"
                        style="
                    place-content: space-evenly;
                ">

                        <h3 class="title">Atenciones urgentes</h3>
                        <h3 class="title">Atenciona empresas</h3>

                    </div>
                </div>
            </div>
        </div>

        <div class="section ">
            <div class="container">
                <h2 class="title">Sucursales</h2>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <h3 class="title">Matriz</h3>

                        <div class="d-flex">
                            <i class="fas fa-map-marker-alt pr-2"></i>
                            <h5 class="">
                                Bahia de todos los santos #2759 Col. Parques de santa maria <br>
                                Tlaquepaque, Jal.
                            </h5>
                        </div>
                        <div class="d-flex">
                            <i class="fa fa-phone-alt me-3 pr-2"> </i>
                            <p class="mb-2 textTels"> 33 3693 5986</p>
                        </div>
                        <div class="d-flex">
                            <i class="fab fa-whatsapp pr-2"></i>
                            <p class="mb-2 textTels"> +52 33 1286 7393</p>
                        </div>
                        <div class="d-flex">
                            <i class="fas fa-clock pr-2"></i>
                            <p class="mb-2 textTels"> Lunes a Viernes de 7:00 am a 7:00 pm <br>
                                Sábados
                                de 7:00 am a 3:00 pm</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <h3 class="title">San agustin</h3>

                        <div class="d-flex">
                            <i class="fas fa-map-marker-alt pr-2"></i>
                            <h5 class="">
                                Nicolas R. Casillas #4-a
                                Tlajomulco, Jal.
                            </h5>
                        </div>
                        <div class="d-flex">
                            <i class="fa fa-phone-alt me-3 pr-2"> </i>
                            <p class="mb-2 textTels"> 33 3693 5986</p>
                        </div>
                        <div class="d-flex">
                            <i class="fab fa-whatsapp pr-2"></i>
                            <p class="mb-2 textTels"> +52 33 1286 7393</p>
                        </div>
                        <div class="d-flex">
                            <i class="fas fa-clock pr-2"></i>
                            <p class="mb-2 textTels"> Lunes a Sábado de 7:30 am a 1:30 pm</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <h3 class="title">Santa Anita</h3>

                        <div class="d-flex">
                            <i class="fas fa-map-marker-alt pr-2"></i>
                            <h5 class="">
                                Blvd. Bosques de Santa Anita #255
                                (Dentro de Núcleo Médico Bosques)
                                Tlajomulco, Jal.
                            </h5>
                        </div>
                        <div class="d-flex">
                            <i class="fa fa-phone-alt me-3 pr-2"> </i>
                            <p class="mb-2 textTels"> 331655 0591</p>
                        </div>
                        <div class="d-flex">
                            <i class="fab fa-whatsapp pr-2"></i>
                            <p class="mb-2 textTels"> 33 34018555</p>
                        </div>
                        <div class="d-flex">
                            <i class="fas fa-clock pr-2"></i>
                            <p class="mb-2 textTels">Lunes a Viernes 7:30 am a 1:30 pm <br>Domingos PREVIA CITA </p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <h3 class="title">San Miguel Cuyutlán</h3>

                        <div class="d-flex">
                            <i class="fas fa-map-marker-alt pr-2"></i>
                            <h5 class="">
                                Calle Madero #12
                                (Frente al Centro de Salud)
                                San Miguel Cuyutlán, Jal.
                            </h5>
                        </div>
                        <div class="d-flex">
                            <i class="fab fa-whatsapp pr-2"></i>
                            <p class="mb-2 textTels"> 33 3401 8555</p>
                        </div>
                        <div class="d-flex">
                            <i class="fas fa-clock pr-2"></i>
                            <p class="mb-2 textTels">Lunes a Viernes 7:30 am a 1:30 pm <br>Domingos PREVIA CITA </p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <h3 class="title">Guadalajara</h3>

                        <div class="d-flex">
                            <i class="fas fa-map-marker-alt pr-2"></i>
                            <h5 class="">
                                Av. Hidalgo #1267 Col. Americana
                                (Dentro de Núcleo Médico Bosques)
                                Guadalajara, Jal.
                            </h5>
                        </div>
                        <div class="d-flex">
                            <i class="fa fa-phone-alt me-3 pr-2"> </i>
                            <p class="mb-2 textTels"> 33 3401 8555</p>
                        </div>

                        <div class="d-flex">
                            <i class="fas fa-clock pr-2"></i>
                            <p class="mb-2 textTels"> PREVIA CITA </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--  <div class="section section-tabs section-nucleo-icons">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <h2 class="title">Contactanos</h2>
                        <div class="col-lg-6 col-md-6 " style="
                        text-align: start;">
                            <h5 class="mb-4">Matriz</h5>
                            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i> José María Heredia 2387
                                Guadalajara,
                                Jal., Méx.</p>
                            <div class="d-flex">
                                <i class="fa fa-phone-alt me-3"></i>
                                <p class="mb-2 textTels">+52 33 21 83 64 72</br>
                                    +52 33 36 40 22 90</p>
                            </div>
                        </div>

                        <div class="nucleo-container">
                            <img src="{{ asset('css/front/img/nucleo.svg') }}" alt="">
                        </div>
                        <a href="nucleo-icons.html" class="btn btn-primary btn-round btn-lg" target="_blank">View
                            Demo Icons</a>
                        <a href="https://nucleoapp.com/?ref=1712" class="btn btn-outline-primary btn-round btn-lg"
                            target="_blank">View All Icons</a>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="icons-container">
                            <i class="now-ui-icons ui-1_send"></i>
                            <i class="now-ui-icons ui-2_like"></i>
                            <i class="now-ui-icons transportation_air-baloon"></i>
                            <i class="now-ui-icons text_bold"></i>
                            <i class="now-ui-icons tech_headphones"></i>
                            <i class="now-ui-icons emoticons_satisfied"></i>
                            <i class="now-ui-icons shopping_cart-simple"></i>
                            <i class="now-ui-icons objects_spaceship"></i>
                            <i class="now-ui-icons media-2_note-03"></i>
                            <i class="now-ui-icons ui-2_favourite-28"></i>
                            <i class="now-ui-icons design_palette"></i>
                            <i class="now-ui-icons clothes_tie-bow"></i>
                            <i class="now-ui-icons location_pin"></i>
                            <i class="now-ui-icons objects_key-25"></i>
                            <i class="now-ui-icons travel_istanbul"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>  --}}
        {{--  <div class="section section-images">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-images-container">
                        <img src="{{asset('css/front/img/hero-image-1.png')}}" alt="">
                    </div>
                    <div class="hero-images-container-1">
                        <img src="{{asset('css/front/img/hero-image-2.png')}}" alt="">
                    </div>
                    <div class="hero-images-container-2">
                        <img src="{{asset('css/front/img/hero-image-3.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>  --}}
        {{--  <div class="section section-basic" id="basic-elements">
        <div class="container">
            <h3 class="title">Basic Elements</h3>
            <h4>Buttons</h4>
            <p class="category">Pick your style</p>
            <div class="row">
                <div class="col-md-10">
                    <button class="btn btn-primary" type="button">Default</button>
                    <button class="btn btn-primary btn-round" type="button">Round</button>
                    <button class="btn btn-primary btn-round" type="button">
                        <i class="now-ui-icons ui-2_favourite-28"></i> With Icon
                    </button>
                    <button class="btn btn-primary btn-icon btn-round" type="button">
                        <i class="now-ui-icons ui-2_favourite-28"></i>
                    </button>
                    <button class="btn btn-primary btn-outline-primary btn-round"
                        type="button">Outline</button>
                </div>
            </div>
            <p class="category">Pick your size</p>
            <div class="row">
                <div class="col-md-10">
                    <button class="btn btn-primary btn-sm">Small</button>
                    <button class="btn btn-primary">Regular</button>
                    <button class="btn btn-primary btn-lg">Large</button>
                </div>
            </div>
            <p class="category">Pick your color</p>
            <div class="row">
                <div class="col-md-10">
                    <button class="btn">Default</button>
                    <button class="btn btn-primary">Primary</button>
                    <button class="btn btn-info">Info</button>
                    <button class="btn btn-success">Success</button>
                    <button class="btn btn-warning">Warning</button>
                    <button class="btn btn-danger">Danger</button>
                    <button class="btn btn-neutral">Neutral</button>
                </div>
            </div>
            <h4>Links</h4>
            <div class="row">
                <div class="col-md-8">
                    <button class="btn btn-link">Default</button>
                    <button class="btn btn-link btn-primary ">Primary</button>
                    <button class="btn btn-link btn-info">Info</button>
                    <button class="btn btn-link btn-success">Success</button>
                    <button class="btn btn-link btn-warning">Warning</button>
                    <button class="btn btn-link btn-danger">Danger</button>
                </div>
            </div>
            <div class="space-70"></div>
            <div id="inputs">
                <h4>Inputs</h4>
                <p class="category">Form Controls</p>
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="form-group">
                            <input type="text" value="" placeholder="Regular"
                                class="form-control" />
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="form-group has-success">
                            <input type="text" value="Success"
                                class="form-control form-control-success" />
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="form-group has-danger">
                            <input type="email" value="Error Input"
                                class="form-control form-control-danger" />
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Left Font Awesome Icon">
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Right Nucleo Icon">
                            <div class="input-group-append">
                                <span class="input-group-text"><i
                                        class="now-ui-icons users_single-02"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-70"></div>
            <div class="row" id="checkRadios">
                <div class="col-sm-6 col-lg-3 mb-4">
                    <p class="category">Checkboxes</p>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">
                            <span class="form-check-sign"></span>
                            Unchecked
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" checked>
                            <span class="form-check-sign"></span>
                            Checked
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" disabled>
                            <span class="form-check-sign"></span>
                            Disabled Unchecked
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" checked disabled>
                            <span class="form-check-sign"></span>
                            Disabled Checked
                        </label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <p class="category">Radios</p>
                    <div class="form-check form-check-radio">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="exampleRadios"
                                id="exampleRadios1" value="option1">
                            <span class="form-check-sign"></span>
                            Radio is off
                        </label>
                    </div>
                    <div class="form-check form-check-radio">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="exampleRadios"
                                id="exampleRadios1" value="option2" checked>
                            <span class="form-check-sign"></span>
                            Radio is on
                        </label>
                    </div>
                    <div class="form-check form-check-radio disabled">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="exampleRadios1"
                                id="exampleRadios2" value="option3" disabled>
                            <span class="form-check-sign"></span>
                            Disabled radio is off
                        </label>
                    </div>
                    <div class="form-check form-check-radio disabled">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="exampleRadios1"
                                id="exampleRadios2" value="option4" disabled checked>
                            <span class="form-check-sign"></span>
                            Disabled radio is on
                        </label>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="section section-navbars">
        <div class="container" id="menu-dropdown">
            <div class="row">
                <div class="col-md-6">
                    <h4>Menu</h4>
                    <nav class="navbar navbar-expand-lg bg-primary">
                        <div class="container">
                            <a class="navbar-brand" href="#">Menu</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#example-navbar" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="example-navbar"
                                data-nav-image="{{asset('css/front/img/blurred-image-1.jpg')}}">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">
                                            <p>Link</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <p>Link</p>
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="http://example.com"
                                            id="navbarDropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <p>
                                                Dropdown
                                            </p>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-md-6">
                    <h4>Menu with Icons</h4>
                    <nav class="navbar navbar-expand-lg bg-info">
                        <div class="container">
                            <a class="navbar-brand" href="#">Icons</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#example-navbar-icons" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="example-navbar-icons">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#pablo"><i class="now-ui-icons ui-1_send"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#pablo"><i
                                                class="now-ui-icons users_single-02"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle"
                                            id="navbarDropdownMenuLink" data-toggle="dropdown">
                                            <i class="now-ui-icons ui-1_settings-gear-63"
                                                aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-header">Dropdown header</a>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                            <div class="divider"></div>
                                            <a class="dropdown-item" href="#">One more separated
                                                link</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <h4>Navigation</h4>
        </div>
        <div id="navbar">
            <div class="navigation-example" style="background-image:url('{{ asset('css/front/img/bg7.jpg')}}')">
                <!-- Navbar Primary  -->
                <nav class="navbar navbar-expand-lg bg-primary">
                    <div class="container">
                        <div class="navbar-translate">
                            <a class="navbar-brand" href="#pablo">Primary color</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#example-navbar-primary" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="example-navbar-primary">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#pablo">
                                        <i class="now-ui-icons objects_globe"></i>
                                        <p>Discover</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pablo">
                                        <i class="now-ui-icons users_circle-08"></i>
                                        <p>Profile</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pablo">
                                        <i class="now-ui-icons ui-1_settings-gear-63"></i>
                                        <p>Settings</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar Primary -->
                <!-- Navbar Info -->
                <nav class="navbar navbar-expand-lg bg-info">
                    <div class="container">
                        <div class="navbar-translate">
                            <a class="navbar-brand" href="#pablo">Info Color</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#example-navbar-info" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="example-navbar-info">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#pablo">
                                        <p>Discover</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pablo">
                                        <p>Profile</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pablo">
                                        <p>Settings</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar Info -->
                <!-- Navbar Success -->
                <nav class="navbar navbar-expand-lg bg-success">
                    <div class="container">
                        <div class="navbar-translate">
                            <a class="navbar-brand" href="#">Success Color</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#example-navbar-success" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="example-navbar-success">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#pablo">
                                        <i class="now-ui-icons objects_globe"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pablo">
                                        <i class="now-ui-icons users_circle-08"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pablo">
                                        <i class="now-ui-icons ui-1_settings-gear-63"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar Success -->
                <!-- Navbar Warning -->
                <nav class="navbar navbar-expand-lg bg-warning">
                    <div class="container">
                        <div class="navbar-translate">
                            <a class="navbar-brand" href="#pablo">Warning Color</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#example-navbar-warning" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="example-navbar-warning">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#pablo">
                                        <i class="fab fa-facebook-square"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pablo">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pablo">
                                        <i class="fab fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pablo">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar Warning -->
                <!-- Navbar Danger -->
                <nav class="navbar navbar-expand-lg bg-danger">
                    <div class="container">
                        <div class="navbar-translate">
                            <a class="navbar-brand" href="#pablo">Danger Color</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#example-navbar-danger" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="example-navbar-danger">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#pablo">
                                        <i class="fab fa-facebook-square"></i>
                                        <p>Share</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pablo">
                                        <i class="fab fa-twitter"></i>
                                        <p>Tweet</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pablo">
                                        <i class="fab fa-pinterest"></i>
                                        <p>Pin</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar Danger -->
                <!-- Navbar Transparent -->
                <nav class="navbar navbar-expand-lg navbar-transparent">
                    <div class="container">
                        <div class="navbar-translate">
                            <a class="navbar-brand" href="#pablo">Transparent</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#example-navbar-transparent"
                                aria-controls="navbarSupportedContent" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="example-navbar-transparent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#pablo">
                                        <i class="fab fa-facebook-square"></i>
                                        <p>Facebook</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pablo">
                                        <i class="fab fa-twitter"></i>
                                        <p>Twitter</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pablo">
                                        <i class="fab fa-instagram"></i>
                                        <p>Instagram</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar Transparent-->
            </div>
        </div>
    </div>
    <!-- End .section-navbars  -->
    <div class="section section-tabs">
        <div class="container">
            <div class="row">
                <div class="col-md-10 ml-auto col-xl-6 mr-auto">
                    <p class="category">Tabs with Icons on Card</p>
                    <!-- Nav tabs -->
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs justify-content-center" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home"
                                        role="tab">
                                        <i class="now-ui-icons objects_umbrella-13"></i> Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                                        <i class="now-ui-icons shopping_cart-simple"></i> Profile
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                                        <i class="now-ui-icons shopping_shop"></i> Messages
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                                        <i class="now-ui-icons ui-2_settings-90"></i> Settings
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <!-- Tab panes -->
                            <div class="tab-content text-center">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <p>I think that’s a responsibility that I have, to push possibilities, to
                                        show people, this is the level that things could be at. So when you get
                                        something that has the name Kanye West on it, it’s supposed to be
                                        pushing the furthest possibilities. I will be the leader of a company
                                        that ends up being worth billions of dollars, because I got the answers.
                                        I understand culture. I am the nucleus.</p>
                                </div>
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <p> I will be the leader of a company that ends up being worth billions of
                                        dollars, because I got the answers. I understand culture. I am the
                                        nucleus. I think that’s a responsibility that I have, to push
                                        possibilities, to show people, this is the level that things could be
                                        at. I think that’s a responsibility that I have, to push possibilities,
                                        to show people, this is the level that things could be at. </p>
                                </div>
                                <div class="tab-pane" id="messages" role="tabpanel">
                                    <p>I think that’s a responsibility that I have, to push possibilities, to
                                        show people, this is the level that things could be at. So when you get
                                        something that has the name Kanye West on it, it’s supposed to be
                                        pushing the furthest possibilities. I will be the leader of a company
                                        that ends up being worth billions of dollars, because I got the answers.
                                        I understand culture. I am the nucleus.</p>
                                </div>
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <p>
                                        "I will be the leader of a company that ends up being worth billions of
                                        dollars, because I got the answers. I understand culture. I am the
                                        nucleus. I think that’s a responsibility that I have, to push
                                        possibilities, to show people, this is the level that things could be
                                        at."
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 ml-auto col-xl-6 mr-auto">
                    <p class="category">Tabs with Background on Card</p>
                    <!-- Tabs with Background on Card -->
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist"
                                data-background-color="orange">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home1"
                                        role="tab">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile1"
                                        role="tab">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#messages1"
                                        role="tab">Messages</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#settings1"
                                        role="tab">Settings</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <!-- Tab panes -->
                            <div class="tab-content text-center">
                                <div class="tab-pane active" id="home1" role="tabpanel">
                                    <p>I think that’s a responsibility that I have, to push possibilities, to
                                        show people, this is the level that things could be at. So when you get
                                        something that has the name Kanye West on it, it’s supposed to be
                                        pushing the furthest possibilities. I will be the leader of a company
                                        that ends up being worth billions of dollars, because I got the answers.
                                        I understand culture. I am the nucleus.</p>
                                </div>
                                <div class="tab-pane" id="profile1" role="tabpanel">
                                    <p> I will be the leader of a company that ends up being worth billions of
                                        dollars, because I got the answers. I understand culture. I am the
                                        nucleus. I think that’s a responsibility that I have, to push
                                        possibilities, to show people, this is the level that things could be
                                        at. I think that’s a responsibility that I have, to push possibilities,
                                        to show people, this is the level that things could be at. </p>
                                </div>
                                <div class="tab-pane" id="messages1" role="tabpanel">
                                    <p>I think that’s a responsibility that I have, to push possibilities, to
                                        show people, this is the level that things could be at. So when you get
                                        something that has the name Kanye West on it, it’s supposed to be
                                        pushing the furthest possibilities. I will be the leader of a company
                                        that ends up being worth billions of dollars, because I got the answers.
                                        I understand culture. I am the nucleus.</p>
                                </div>
                                <div class="tab-pane" id="settings1" role="tabpanel">
                                    <p>
                                        "I will be the leader of a company that ends up being worth billions of
                                        dollars, because I got the answers. I understand culture. I am the
                                        nucleus. I think that’s a responsibility that I have, to push
                                        possibilities, to show people, this is the level that things could be
                                        at."
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Tabs on plain Card -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Section Tabs -->
    <div class="section section-pagination">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>Progress Bars</h4>
                    <div class="progress-container">
                        <span class="progress-badge">Default</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                <span class="progress-value">25%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-container progress-primary">
                        <span class="progress-badge">Primary</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar"
                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                style="width: 60%;">
                                <span class="progress-value">60%</span>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h4>Navigation Pills</h4>
                    <ul class="nav nav-pills nav-pills-primary nav-pills-just-icons" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#active" role="tablist">
                                <i class="far fa-gem"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#link" role="tablist">
                                <i class="fa fa-thermometer-full"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#link" role="tablist">
                                <i class="fa fa-suitcase"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" data-toggle="tab" href="#disabled" role="tablist">
                                <i class="fa fa-exclamation"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <h4>Pagination</h4>
                    <ul class="pagination pagination-primary">
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#link">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#link">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#link">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#link">5</a>
                        </li>
                    </ul>
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#link" aria-label="Previous">
                                <span aria-hidden="true"><i class="fa fa-angle-double-left"
                                        aria-hidden="true"></i></span>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#link">1</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#link">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#link">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#link" aria-label="Next">
                                <span aria-hidden="true"><i class="fa fa-angle-double-right"
                                        aria-hidden="true"></i></span>
                            </a>
                        </li>
                    </ul>
                    <br>
                    <h4>Labels</h4>
                    <span class="badge badge-default">Default</span>
                    <span class="badge badge-primary">Primary</span>
                    <span class="badge badge-success">Success</span>
                    <span class="badge badge-info">Info</span>
                    <span class="badge badge-warning">Warning</span>
                    <span class="badge badge-danger">Danger</span>
                    <span class="badge badge-neutral">Neutral</span>
                </div>
            </div>
            <br>
            <div class="space"></div>
            <h4>Notifications</h4>
        </div>
    </div>
    <div class="section section-notifications">
        <div class="alert alert-success" role="alert">
            <div class="container">
                <div class="alert-icon">
                    <i class="now-ui-icons ui-2_like"></i>
                </div>
                <strong>Well done!</strong> You successfully read this important alert message.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                    </span>
                </button>
            </div>
        </div>
        <div class="alert alert-info" role="alert">
            <div class="container">
                <div class="alert-icon">
                    <i class="now-ui-icons travel_info"></i>
                </div>
                <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                    </span>
                </button>
            </div>
        </div>
        <div class="alert alert-warning" role="alert">
            <div class="container">
                <div class="alert-icon">
                    <i class="now-ui-icons ui-1_bell-53"></i>
                </div>
                <strong>Warning!</strong> Better check yourself, you're not looking too good.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                    </span>
                </button>
            </div>
        </div>
        <div class="alert alert-danger" role="alert">
            <div class="container">
                <div class="alert-icon">
                    <i class="now-ui-icons objects_support-17"></i>
                </div>
                <strong>Oh snap!</strong> Change a few things up and try submitting again.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <!--  end notifications -->
    <!-- Typography -->
    <div class="section">
        <div class="container">
            <h3 class="title">Typography</h3>
            <div id="typography">
                <div class="row">
                    <div class="col-md-12">
                        <div class="typography-line">
                            <h1>
                                <span>Header 1</span>The Life of Now UI Kit
                            </h1>
                        </div>
                        <div class="typography-line">
                            <h2>
                                <span>Header 2</span>The Life of Now UI Kit
                            </h2>
                        </div>
                        <div class="typography-line">
                            <h3>
                                <span>Header 3</span>The Life of Now UI Kit
                            </h3>
                        </div>
                        <div class="typography-line">
                            <h4>
                                <span>Header 4</span>The Life of Now UI Kit
                            </h4>
                        </div>
                        <div class="typography-line">
                            <h5>
                                <span>Header 5</span>The Life of Now UI Kit
                            </h5>
                        </div>
                        <div class="typography-line">
                            <h6>
                                <span>Header 6</span>The Life of Now UI Kit
                            </h6>
                        </div>
                        <div class="typography-line">
                            <p>
                                <span>Paragraph</span>
                                I will be the leader of a company that ends up being worth billions of dollars,
                                because I got the answers. I understand culture. I am the nucleus. I think
                                that’s a responsibility that I have, to push possibilities, to show people, this
                                is the level that things could be at.
                            </p>
                        </div>
                        <div class="typography-line">
                            <span>Quote</span>
                            <blockquote>
                                <p class="blockquote blockquote-primary">
                                    "I will be the leader of a company that ends up being worth billions of
                                    dollars, because I got the answers. I understand culture. I am the nucleus.
                                    I think that’s a responsibility that I have, to push possibilities, to show
                                    people, this is the level that things could be at."
                                    <br>
                                    <br>
                                    <small>
                                        - Noaa
                                    </small>
                                </p>
                            </blockquote>
                        </div>
                        <div class="typography-line">
                            <span>Muted Text</span>
                            <p class="text-muted">
                                I will be the leader of a company that ends up being worth billions of dollars,
                                because I got the answers...
                            </p>
                        </div>
                        <div class="typography-line">
                            <span>Primary Text</span>
                            <p class="text-primary">
                                I will be the leader of a company that ends up being worth billions of dollars,
                                because I got the answers...</p>
                        </div>
                        <div class="typography-line">
                            <span>Info Text</span>
                            <p class="text-info">
                                I will be the leader of a company that ends up being worth billions of dollars,
                                because I got the answers... </p>
                        </div>
                        <div class="typography-line">
                            <span>Success Text</span>
                            <p class="text-success">
                                I will be the leader of a company that ends up being worth billions of dollars,
                                because I got the answers... </p>
                        </div>
                        <div class="typography-line">
                            <span>Warning Text</span>
                            <p class="text-warning">
                                I will be the leader of a company that ends up being worth billions of dollars,
                                because I got the answers...
                            </p>
                        </div>
                        <div class="typography-line">
                            <span>Danger Text</span>
                            <p class="text-danger">
                                I will be the leader of a company that ends up being worth billions of dollars,
                                because I got the answers... </p>
                        </div>
                        <div class="typography-line">
                            <h2>
                                <span>Small Tag</span>
                                Header with small subtitle
                                <br>
                                <small>Usre "small" tag for the headers</small>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-50"></div>
            <div id="images">
                <h4>Images</h4>
                <div class="row">
                    <div class="col-sm-2">
                        <p class="category">Image</p>
                        <img src="{{asset('css/front/img/julie.jpg')}}" alt="Rounded Image" class="rounded">
                    </div>
                    <div class="col-sm-2">
                        <p class="category">Circle Image</p>
                        <img src="{{asset('css/front/img/julie.jpg')}}" alt="Circle Image" class="rounded-circle">
                    </div>
                    <div class="col-sm-2">
                        <p class="category">Raised</p>
                        <img src="{{asset('css/front/img/julie.jpg')}}" alt="Raised Image" class="rounded img-raised">
                    </div>
                    <div class="col-sm-2">
                        <p class="category">Circle Raised</p>
                        <img src="{{asset('css/front/img/julie.jpg')}}" alt="Thumbnail Image"
                            class="rounded-circle img-raised">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-javascript" id="javascriptComponents">
        <div class="container">
            <h3 class="title">Javascript components</h3>
            <div class="row" id="modals">
                <div class="col-md-6">
                    <h4>Modal</h4>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Launch Modal
                    </button>
                    <button class="btn btn-warning" data-toggle="modal" data-target="#myModal1">
                        Launch Modal Mini
                    </button>
                </div>
                <div class="col-md-6">
                    <h4>Popovers</h4>
                    <button type="button" class="btn btn-default" data-container="body"
                        data-original-title="Popover On Left" data-toggle="popover" data-placement="left"
                        data-content="Here will be some very useful information about his popover."
                        data-color="primary">
                        On left
                    </button>
                    <button type="button" class="btn btn-default" data-container="body"
                        data-original-title="Popover on Top" data-toggle="popover" data-placement="top"
                        data-content="Here will be some very useful information about his popover.">
                        On top
                    </button>
                    <button type="button" class="btn btn-default" data-container="body"
                        data-original-title="Popover on Right" data-toggle="popover" data-placement="right"
                        data-content="Here will be some very useful information about his popover.<br> Here will be some very useful information about his popover.">
                        On right
                    </button>
                    <button type="button" class="btn btn-default" data-container="body"
                        data-original-title="Popover on Bottom" data-toggle="popover" data-placement="bottom"
                        data-content="Here will be some very useful information about his popover.">
                        On bottom
                    </button>
                </div>
                <br />
                <br />

                <div class="col-md-6">
                    <h4>Tooltips</h4>
                    <button type="button" class="btn btn-default btn-tooltip" data-toggle="tooltip"
                        data-placement="left" title="Tooltip on left" data-container="body"
                        data-animation="true" data-delay="100">On left</button>
                    <button type="button" class="btn btn-default btn-tooltip" data-toggle="tooltip"
                        data-placement="top" title="Tooltip on top" data-container="body"
                        data-animation="true">On top</button>
                    <button type="button" class="btn btn-default btn-tooltip" data-toggle="tooltip"
                        data-placement="bottom" title="Tooltip on bottom" data-container="body"
                        data-animation="true">On bottom</button>
                    <button type="button" class="btn btn-default btn-tooltip" data-toggle="tooltip"
                        data-placement="right" title="Tooltip on right" data-container="body"
                        data-animation="true">On right</button>
                    <div class="clearfix"></div>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="carousel">
        <div class="container">
            <div class="title">
                <h4>Carousel</h4>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                            </li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block" src="{{asset('css/front/img/bg1.jpg')}}" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Nature, United States</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="{{asset('css/front/img/bg3.jpg')}}" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Somewhere Beyond, United States</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="{{asset('css/front/img/bg4.jpg')}}" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Yellowstone National Park, United States</h5>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <i class="now-ui-icons arrows-1_minimal-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <i class="now-ui-icons arrows-1_minimal-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-nucleo-icons">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <h2 class="title">Nucleo Icons</h2>
                    <h5 class="description">
                        Now UI Kit PRO comes with 100 custom icons made by our friends from NucleoApp. The
                        official package contains over 2.100 thin icons which are looking great in combination
                        with Now UI Kit PRO Make sure you check all of them and usee those that you like the
                        most.
                    </h5>
                    <!-- <div class="nucleo-container">
                        <img src="{{asset('css/front/img/nucleo.svg')}}" alt="">
                    </div> -->
                    <a href="nucleo-icons.html" class="btn btn-primary btn-round btn-lg" target="_blank">View
                        Demo Icons</a>
                    <a href="https://nucleoapp.com/?ref=1712" class="btn btn-outline-primary btn-round btn-lg"
                        target="_blank">View All Icons</a>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="icons-container">
                        <i class="now-ui-icons ui-1_send"></i>
                        <i class="now-ui-icons ui-2_like"></i>
                        <i class="now-ui-icons transportation_air-baloon"></i>
                        <i class="now-ui-icons text_bold"></i>
                        <i class="now-ui-icons tech_headphones"></i>
                        <i class="now-ui-icons emoticons_satisfied"></i>
                        <i class="now-ui-icons shopping_cart-simple"></i>
                        <i class="now-ui-icons objects_spaceship"></i>
                        <i class="now-ui-icons media-2_note-03"></i>
                        <i class="now-ui-icons ui-2_favourite-28"></i>
                        <i class="now-ui-icons design_palette"></i>
                        <i class="now-ui-icons clothes_tie-bow"></i>
                        <i class="now-ui-icons location_pin"></i>
                        <i class="now-ui-icons objects_key-25"></i>
                        <i class="now-ui-icons travel_istanbul"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container text-center">
            <div class="row justify-content-md-center">
                <div class="col-md-12 col-lg-8">
                    <h2 class="title">Completed with examples</h2>
                    <h5 class="description">The kit comes with three pre-built pages to help you get started
                        faster. You can change the text and images and youre good to go. More importantly,
                        looking at them will give you a picture of what you can built with this powerful
                        Bootstrap 4 ui kit.</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-signup"
        style="background-image: url('{{ asset('css/front/img/bg11.jpg')}}'); background-size: cover; background-position: top center; min-height: 700px;">
        <div class="container">
            <div class="row">
                <div class="card card-signup" data-background-color="orange">
                    <form class="form" method="" action="">
                        <div class="card-header text-center">
                            <h3 class="card-title title-up">Sign Up</h3>
                            <div class="social-line">
                                <a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-round">
                                    <i class="fab fa-facebook-square"></i>
                                </a>
                                <a href="#pablo"
                                    class="btn btn-neutral btn-twitter btn-icon btn-lg btn-round">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#pablo" class="btn btn-neutral btn-google btn-icon btn-round">
                                    <i class="fab fa-google-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="input-group no-border">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="now-ui-icons users_circle-08"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="First Name...">
                            </div>
                            <div class="input-group no-border">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="now-ui-icons text_caps-small"></i>
                                    </span>
                                </div>
                                <input type="text" placeholder="Last Name..." class="form-control" />
                            </div>
                            <div class="input-group no-border">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="now-ui-icons ui-1_email-85"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Email...">
                            </div>
                            <!-- If you want to add a checkbox to this form, uncomment this code -->
                            <!-- <div class="checkbox">
                            <input id="checkboxSignup" type="checkbox">
                                <label for="checkboxSignup">
                                Unchecked
                                </label>
                            </div> -->
                        </div>
                        <div class="card-footer text-center">
                            <a href="#pablo" class="btn btn-neutral btn-round btn-lg">Get Started</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col text-center">
                <a href="examples/login-page.html"
                    class="btn btn-outline-default btn-round btn-white btn-lg" target="_blank">View Login
                    Page</a>
            </div>
        </div>
    </div>
    <div class="section section-examples" data-background-color="black">
        <div class="space-50"></div>
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <a href="examples/landing-page.html" target="_blank">
                        <img src="{{asset('css/front/img/landing.jpg')}}" alt="Image" class="img-raised">
                    </a>
                    <a href="examples/landing-page.html"
                        class="btn btn-outline-default btn-primary btn-round">View Landing Page</a>
                </div>
                <div class="col">
                    <a href="examples/profile-page.html" target="_blank">
                        <img src="{{asset('css/front/img/profile.jpg')}}" alt="Image" class="img-raised">
                    </a>
                    <a href="examples/profile-page.html"
                        class="btn btn-outline-default btn-primary btn-round">View Profile Page</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-download" id="#download-section" data-background-color="black">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="text-center col-md-12 col-lg-8">
                    <h3 class="title">Do you love this Bootstrap 4 UI Kit?</h3>
                    <h5 class="description">Cause if you do, it can be yours for FREE. Hit the button below to
                        navigate to Creative Tim or Invision where you can find the kit in HTML or Sketch/PSD
                        format. Start a new project or give an old Bootstrap project a new look!</h5>
                </div>
                <div class="text-center col-md-12 col-lg-8">
                    <a href="https://www.creative-tim.com/product/now-ui-kit"
                        class="btn btn-primary btn-lg btn-round" role="button">
                        Download HTML
                    </a>
                    <a href="https://www.invisionapp.com/now" target="_blank"
                        class="btn btn-lg btn-outline-primary btn-round" role="button">
                        Download PSD/Sketch
                    </a>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="row text-center mt-5">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2>Want more?</h2>
                    <h5 class="description">Weve just launched
                        <a href="http://demos.creative-tim.com/now-ui-kit-pro/presentation.html"
                            target="_blank">Now UI Kit PRO</a>. It has a huge number of components, sections
                        and example pages. Start Your Development With A Badass Bootstrap 4 UI Kit.
                    </h5>
                </div>
                <div class="col-md-12">
                    <a href="http://demos.creative-tim.com/now-ui-kit-pro/presentation.html"
                        class="btn btn-neutral btn-round btn-lg" target="_blank">
                        <i class="now-ui-icons arrows-1_share-66"></i> Upgrade to PRO
                    </a>
                </div>
            </div>
            <br>
            <br>
            <div class="row justify-content-md-center sharing-area text-center">
                <div class="text-center col-md-12 col-lg-8">
                    <h3>Thank you for supporting us!</h3>
                </div>
                <div class="text-center col-md-12 col-lg-8">
                    <a target="_blank" href="https://www.twitter.com/creativetim"
                        class="btn btn-neutral btn-icon btn-twitter btn-round btn-lg" rel="tooltip"
                        title="Follow us">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a target="_blank" href="https://www.facebook.com/creativetim"
                        class="btn btn-neutral btn-icon btn-facebook btn-round btn-lg" rel="tooltip"
                        title="Like us">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    <a target="_blank" href="https://www.linkedin.com/company-beta/9430489/"
                        class="btn btn-neutral btn-icon btn-linkedin btn-lg btn-round" rel="tooltip"
                        title="Follow us">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a target="_blank" href="https://github.com/creativetimofficial/now-ui-kit"
                        class="btn btn-neutral btn-icon btn-github btn-round btn-lg" rel="tooltip"
                        title="Star on Github">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>  --}}
    </div>
    <!-- Sart Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                    </button>
                    <h4 class="title title-up">Modal title</h4>
                </div>
                <div class="modal-body">
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                        there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                        Semantics, a large language ocean. A small river named Duden flows by their place and
                        supplies it with the necessary regelialia. It is a paradisematic country, in which roasted
                        parts of sentences fly into your mouth.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default">Nice Button</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--  End Modal -->
    <!-- Mini Modal -->
    <div class="modal fade modal-mini modal-primary" id="myModal1" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <div class="modal-profile">
                        <i class="now-ui-icons users_circle-08"></i>
                    </div>
                </div>
                <div class="modal-body">
                    <p>Always have an access to your profile</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link btn-neutral">Back</button>
                    <button type="button" class="btn btn-link btn-neutral" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--  End Modal -->
@endsection
