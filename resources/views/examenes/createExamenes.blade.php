@extends('layouts.app', ['activePage' => 'examenes', 'activeItem' => 'examenes'])

@section('content')
    <div class="pagetitle">
        <h1>Examenes</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item ">Examenes</li>
                <li class="breadcrumb-item active">Nuevo Examen</li>

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
                    <form action="{{ route('examenes.store') }}" method="post" class="form-horizontal needs-validation"
                        novalidate>
                        @csrf
                        <div class="card-body">
                            @if ($errors->any())
                                <!-- PARA LA CARGA DE LOS ERRORES DE LOS DATOS-->
                                <div class="alert alert-danger">
                                    <p>Listado de errores a corregir</p>
                                    <ul>
                                        @foreach ($errors->all() as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="row g-3">
                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative">
                                    <label for="nombre" class="form-label">Nombre:</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre"
                                        value="{{ old('nombre') }}" required>
                                    <div class="invalid-tooltip">
                                        Es Obligatorio!
                                    </div>
                                </div>
                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative">
                                    <label for="nombre" class="form-label">Abreviacion:</label>
                                    <input type="text" class="form-control" name="abreviacion" id="abreviacion"
                                        value="{{ old('abreviacion') }}" required>
                                    <div class="invalid-tooltip">
                                        Es Obligatorio!
                                    </div>
                                </div>
                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative">
                                    <label for="maquila" class="form-label">Metodologia:</label></br>
                                    <input type="text" class="form-control" id="metodologia" name="metodologia"
                                        value="{{ old('metodologia') }}">
                                </div>
                                <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative">
                                    <label for="maquila" class="form-label">Tipo de muestra:</label></br>
                                    <input type="text" class="form-control" id="muestra" name="muestra"
                                        value="{{ old('muestra') }}" required>
                                    <div class="invalid-tooltip">
                                        Es Obligatorio!
                                    </div>
                                </div>

                                @forelse ($lugares as $item)
                                    <div class=" col-12 col-sm-6  col-lg-4 my-3 position-relative">
                                        <label for="costo" class="form-label">Precio a {{$item->nombre}}:</label></br>
                                        <input type="number" class="form-control" id="costo" name="costo"
                                            value="{{ old('costo') }}" required>
                                        <div class="invalid-tooltip">
                                            Es Obligatorio!
                                        </div>
                                    </div>
                                @empty
                                    <label> No hay </label>
                                @endforelse
                                
                                <div class="col-12 ">
                                    <label for="nombre" class="form-label">Parametros:</label></br>
                                    <div class="row position-relative d-flex">
                                        @forelse ($parametros as $parametro)
                                            <div class=" col-12 col-sm-6 col-lg-4 my-1">
                                                <input type="checkbox" class="form-check-input" id="{{ $parametro->id }}"
                                                    name="parametros[]" value="{{ $parametro->id }}">
                                                <label for="{{ $parametro->id }}"><strong>{{ $parametro->tipo }} </strong>
                                                    {{ $parametro->nombre }}</label>
                                            </div>
                                        @empty
                                            <label> No hay </label>
                                        @endforelse


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Footer-->
                        <div class="card-footer ml-auto mr-auto text-center">
                            <button type="submit" onclick="alertaGuardar()" class="btn btn-primary">Guardar</button>
                        </div>
                        <!--End footer-->
                    </form>

                </div>

            </div>
        </div>
    </section>

@endsection
