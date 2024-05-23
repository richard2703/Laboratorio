@extends('layouts.app', ['activePage' => 'maquilas', 'activeItem' => ''])

@section('content')
    <div class="pagetitle">
        <h1>Maquilas</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item ">Lugares</li>
                <li class="breadcrumb-item active">Nueva Lugar</li>
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
                    <form action="{{ route('lugares.update', $lugare->id) }}" method="post" class="form-horizontal">
                        @csrf
                        @method('put')
                        <div class="card-body">

                            <div class="row">
                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Nombre:</label></br>
                                    <input type="text" class="form-control" id="nombre" name="nombre"
                                        value="{{ $lugare->nombre }}">
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Direccion:</label></br>
                                    <input type="text" class="form-control" id="direccion" name="direccion"
                                        value="{{ $lugare->direccion }}">
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Telefono:</label></br>
                                    <input type="text" class="form-control" id="telefono" name="telefono"
                                        value="{{ $lugare->telefono }}">
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Correo:</label></br>
                                    <input type="text" class="form-control" id="correo" name="correo"
                                        value="{{ $lugare->correo }}">
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Encargado:</label></br>
                                    <input type="text" class="form-control" id="encargado" name="encargado"
                                        value="{{ $lugare->encargado }}">
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Telefono Encargado:</label></br>
                                    <input type="text" class="form-control" id="telEncargado" name="telEncargado"
                                        value="{{ $lugare->telEncargado }}">
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Foraneo:</label></br>
                                    <input type="number" class="form-control" id="foraneo" name="foraneo"
                                        value="{{ $lugare->foraneo }}" placeholder="Extra por examen">
                                </div>

                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative ">
                                    <label class="form-label">Tipo:</label></br>
                                    <select class="form-control" id="cat_lugares_id" name="cat_lugares_id"
                                        aria-label="Default select example" required>
                                    <option value="" selected>Seleccione</option>
                                        @forelse ($catLugares as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $lugare->cat_lugares_id == $item->id ? 'selected' : '' }}>
                                                {{ $item->nombre }}</option>
                                        @empty
                                        @endforelse  
                                    </select>
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
