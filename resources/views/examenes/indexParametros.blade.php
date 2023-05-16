@extends('layouts.app', ['activePage' => 'examenes', 'activeItem' => 'parametros'])

@section('content')
    <div class="pagetitle">
        <h1>Parametros</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item active">Parametros</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header ">
                        <div class="col text-end">
                            @can('user_create')
                                {{--  <a href="{{ route('permissions.create') }}">  --}}
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modal-nuevo">Nuevo permiso</button>
                                {{--  </a>  --}}
                            @endcan
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="labelTitulo">
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Tipo</th>
                                    <th>Referencia</th>
                                    <th>Baja</th>
                                    <th>Alta </th>
                                    <th class="text-right">Acciones</th>
                                </thead>
                                <tbody>
                                    @forelse ($parametros as $parametro)
                                        <tr>
                                            <td>{{ $parametro->id }}</td>
                                            <td>{{ $parametro->nombre }}</td>
                                            <td>{{ $parametro->tipo }}</td>
                                            <td>{{ $parametro->referencia }}</td>
                                            <td>{{ $parametro->bajo }}</td>
                                            <td>{{ $parametro->alto }}</td>
                                            <td class="td-actions text-right">
                                                {{--  @can('user_show')
                                                    <a href="{{ route('users.show', $parametro->id) }}">
                                                        <i class="bi bi-person-vcard  colorVolverGral"></i></a>
                                                @endcan  --}}
                                                @can('user_edit')
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-update"
                                                        onclick="cargar('{{ $parametro->id }}','{{ $parametro->nombre }}','{{ $parametro->bajo }}','{{ $parametro->alto }}','{{ $parametro->tipo }}','{{ $parametro->medicion }}','{{ $parametro->referencia }}')"><i
                                                            class="bi bi-pencil h3 px-2"></i>
                                                    </a>
                                                @endcan
                                                @can('user_destroy')
                                                    <form class="alertaBorrar"
                                                        action="{{ route('parametros.destroy', $parametro->id) }}"
                                                        method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-danger"><i
                                                                class="bi bi-trash3"></i></button>
                                                    </form>
                                                @endcan
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="2">Sin registros.</td>
                                        </tr>
                                    @endforelse
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <div class="card-footer mr-auto">
                        {{ $parametros->links('vendor.pagination.bootstrap-5') }}
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{--  Modal Nuevo --}}
    <div class="modal fade" id="modal-nuevo" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-nuevo"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="col-12">
                    <div class="card ">
                        <form action="{{ route('parametros.store') }}" method="post">
                            @csrf
                            <div class="card-header bacTituloPrincipal ">
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <span class="nav-tabs-title">
                                            <h2 class="titulos">Nuevo Parametro </h2>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row  card-body ">
                                <div class="row card-body text-center">
                                    <div class="col-12 ">
                                        <img style="width: 100px;" id="imagenM">
                                    </div>

                                    <div class="col-12 mb-3 ">
                                        <input type="hidden" name="id" id="id">
                                        <label class="form-label" for="">Nombre:</label></br>
                                        <input class="form-control" type="text" id="nombre" name="nombre"></br>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label class="form-label" for="">tipo:</label></br>
                                        <input class="form-control" type="text" id="tipo" name="tipo"></br>
                                    </div>

                                    <label class="form-label" for="">Tipo de respuesta:</label></br>
                                    <div class="col-12 mb-3 nav nav-tabs navMenuBalance justify-content-evenly"
                                        id="nav-tab" role="tablist">
                                        <label class="form-label"> <input value="1" type="radio" name="respuesta"
                                                id="opc1-tab" data-bs-toggle="tab" data-bs-target="#opc1" role="tab"
                                                aria-controls="opc1" aria-selected="true">Numerica</label><br>

                                        <label class="form-label"> <input value="2" type="radio" name="respuesta"
                                                d="opc2-tab" data-bs-toggle="tab" data-bs-target="#opc2" role="tab"
                                                aria-controls="opc2" aria-selected="false">Texto</label><br>
                                    </div>
                                    <div class="tab-content" id="nav-tabContent ">
                                        <div class="tab-pane fade show border" id="opc1" role="tabpanel"
                                            aria-labelledby="opc1-tab" tabindex="0">
                                            <div class="row d-flex">
                                                <div class="col-12 col-lg-6 mb-3">
                                                    <label class="form-label" for="">Bajo:</label></br>
                                                    <input class="form-control text-center" type="number" step="0.01"
                                                        min="0.00" id="bajo" name="bajo"></br>
                                                </div>
                                                <div class="col-12 col-lg-6 mb-3">
                                                    <label class="form-label" for="">Alto:</label></br>
                                                    <input class="form-control text-end" type="number" step="0.01"
                                                        min="0.01" id="alto" name="alto"></br>
                                                </div>

                                                <div class="col-12 col-lg-6 mb-3">
                                                    <label class="form-label" for="">Medicion:</label></br>
                                                    <input class="form-control" type="text" id="medicion"
                                                        name="medicion"></br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade border" id="opc2" role="tabpanel"
                                            aria-labelledby="opc2-tab" tabindex="0">
                                            <div class="row">
                                                <div class="col-12 ">
                                                    <label class="form-label" for="">Referencia:</label></br>
                                                    <input class="form-control" type="text" id="referencia"
                                                        name="referencia"></br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12  mb-3 d-flex  justify-content-center align-self-end">
                                <button type="submit" class="btn btn-primary ">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  Modal Update --}}
    <div class="modal fade" id="modal-update" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-update"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="col-12">
                    <div class="card ">
                        <form action="{{ route('parametros.update', 1) }}" method="post" id="update">
                            @csrf
                            @method('put')
                            <div class="card-header bacTituloPrincipal ">
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <span class="nav-tabs-title">
                                            <h2 class="titulos">Actualizar Parametro </h2>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row  card-body ">
                                <div class="row card-body text-center">
                                    <div class="col-12 ">
                                        <img style="width: 100px;" id="imagenM">
                                    </div>
                                    <div class="col-12 col-sm-6  my-3 position-relative ">
                                        <input type="hidden" name="id" id="id">
                                        <label class="form-label" for="">Nombre:</label></br>
                                        <input class="form-control" type="text" id="nombreU" name="nombre"
                                            required>
                                    </div>
                                    <div class="col-12 col-sm-6  my-3 position-relative ">
                                        <label class="form-label" for="">tipo:</label></br>
                                        <input class="form-control" type="text" id="tipoU" name="tipo"
                                            required>
                                    </div>

                                    <label class="form-label" for="">Tipo de respuesta:</label></br>
                                    <div class="col-12 mb-3 nav nav-tabs navMenuBalance justify-content-evenly"
                                        id="nav-tab" role="tablist">
                                        <label class="form-label"> <input value="1" type="radio" name="respuesta"
                                                id="balanceUno-tab" data-bs-toggle="tab" data-bs-target="#balanceUno"
                                                role="tab" aria-controls="balanceUno" aria-selected="true"
                                                checked>Numerica</label><br>

                                        <label class="form-label"> <input value="2" type="radio" name="respuesta"
                                                d="balanceDos-tab" data-bs-toggle="tab" data-bs-target="#balanceDos"
                                                role="tab" aria-controls="balanceDos"
                                                aria-selected="false">Texto</label><br>

                                        {{--  <div class="col-4">
                                    <p class="text-end mb-2">Datos de Registro</p>
                                    <p class="text-end combustibleFecha"> 22/11/2022</p>
                                    <p class="text-end combustibleHora my-2">2:00 pm</p>
                                </div>  --}}
                                    </div>

                                    <div class="tab-content" id="nav-tabContent ">
                                        <div class="tab-pane fade show active border" id="balanceUno" role="tabpanel"
                                            aria-labelledby="balanceUno-tab" tabindex="0">
                                            <div class="row d-flex">
                                                <div class="col-12 col-lg-6 mb-3">
                                                    <label class="form-label" for="">Bajo:</label></br>
                                                    <input class="form-control text-center" type="number" step="0.01"
                                                        min="0.00" id="bajoU" name="bajo"></br>
                                                </div>
                                                <div class="col-12 col-lg-6 mb-3">
                                                    <label class="form-label" for="">Alto:</label></br>
                                                    <input class="form-control text-end" type="number" step="0.01"
                                                        min="0.01" id="altoU" name="alto"></br>
                                                </div>

                                                <div class="col-12 col-lg-6 mb-3">
                                                    <label class="form-label" for="">Medicion:</label></br>
                                                    <input class="form-control" type="text" id="medicionU"
                                                        name="medicion"></br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade border" id="balanceDos" role="tabpanel"
                                            aria-labelledby="balanceDos-tab" tabindex="0">
                                            <div class="row">
                                                <div class="col-12 ">
                                                    <label class="form-label" for="">Referencia:</label></br>
                                                    <input class="form-control" type="text" id="referenciaU"
                                                        name="referencia"></br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12  mb-3 d-flex  justify-content-center align-self-end">
                                <button type="submit" class="btn btn-primary ">Guardar</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/alertas.js') }}"></script>

    <script>
        function Guardado() {
            // alert('test');
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'Guardado con exito'
            })
        }
        var slug = '{{ Session::get('message') }}';
        if (slug == 1) {
            Guardado();

        }
        if (slug == 2) {
            Borrado();

        }
    </script>
    <script>
        function cargar(id, nombre, baja, alta, tipo, medicion, referencia) {

            const parametroid = document.getElementById('id');
            parametroid.value = id;
            var url = '{{ url('') }}/parametros/' + id;
            const ruta = document.getElementById('update');
            ruta.action = url;
            const parametronombre = document.getElementById('nombreU');
            parametronombre.value = nombre;
            const parametrotipo = document.getElementById('tipoU');
            parametrotipo.value = tipo;
            const parametrobajo = document.getElementById('bajoU');
            parametrobajo.value = baja;
            const parametroalto = document.getElementById('altoU');
            parametroalto.value = alta;
            const parametromedicion = document.getElementById('medicionU');
            parametromedicion.value = medicion;
            const parametroreferencia = document.getElementById('referenciaU');
            parametroreferencia.value = referencia;
        }
    </script>
@endsection
