@extends('layouts.app', ['activePage' => 'pacientes', 'activeItem' => ''])

@section('content')
    <div class="pagetitle">
        <h1>Pacientes</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item ">Pacientes</li>
                <li class="breadcrumb-item active">Editar Paciente</li>
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
                    <form class="row alertaGuardar" action="{{ route('pacientes.update', $paciente->id) }}"
                        method="post"class="row" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="card-body contCart">


                            <div class="row">
                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Nombre:</label></br>
                                    <input type="text" class="form-control" id="nombre" name="nombre"
                                        value="{{ $paciente->nombre }}">
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Apellido:</label></br>
                                    <input type="text" class="form-control" id="apellido" name="apellido"
                                        value="{{ $paciente->apellido }}">
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Telefono:</label></br>
                                    <input type="text" class="form-control" id="telefono" name="telefono"
                                        value="{{ $paciente->telefono }}">
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Fecha de nacimiento:</label></br>
                                    <input type="date" class="form-control" id="nacimiento" name="nacimiento"
                                        value="{{ $paciente->nacimiento }}">
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
