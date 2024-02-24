@extends('layouts.app', ['activePage' => 'lugaresTrabajo', 'activeItem' => 'doctores'])

@section('content')
    <div class="pagetitle">
        <h1>Nuevo Doctor</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item "><a href="{{ route('doctores.index') }}">Doctores</a></li>
                <li class="breadcrumb-item active">Nuevo Doctor</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header ">
                        {{--  <div class="col text-end">
                            @can('user_create')
                                <a href="{{ route('users.create') }}">
                                    <button type="button" class="btn btn-primary">Nuevo usuario</button>
                                </a>
                            @endcan
                        </div>  --}}
                    </div>
                    <form action="{{ route('doctores.store') }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card-body">

                            <div class="row">
                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Nombre:</label></br>
                                    <input type="text" class="form-control" id="nombre" name="nombre" value="">
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Direccion:</label></br>
                                    <input type="text" class="form-control" id="direccion" name="direccion"
                                        value="">
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Telefono:</label></br>
                                    <input type="text" class="form-control" id="telefono" name="telefono"
                                        value="">
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Correo:</label></br>
                                    <input type="text" class="form-control" id="correo" name="correo" value="">
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Encargado:</label></br>
                                    <input type="text" class="form-control" id="encargado" name="encargado"
                                        value="">
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Telefono Encargado:</label></br>
                                    <input type="text" class="form-control" id="telEncargado" name="telEncargado"
                                        value="">
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Foraneo:</label></br>
                                    <input type="number" class="form-control" id="foraneo" name="foraneo" value=""
                                        placeholder="Extra por examen">
                                </div>

                            </div>

                        </div>
                        <!--Footer-->
                        <div class="card-footer ml-auto mr-auto text-center">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                        <!--End footer-->
                    </form>

                </div>

            </div>
        </div>
    </section>

    <script type="application/javascript">
        jQuery('input[type=file]').change(function(){
         var filename = jQuery(this).val().split('\\').pop();
         var idname = jQuery(this).attr('id');
         console.log(jQuery(this));
         console.log(filename);
         console.log(idname);
         jQuery('span.'+idname).next().find('span').html(filename);
        });
        </script>
@endsection
