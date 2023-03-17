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
                        {{--  <div class="col text-end">
                            @can('user_create')
                                <a href="{{ route('users.create') }}">
                                    <button type="button" class="btn btn-primary">Nuevo usuario</button>
                                </a>
                            @endcan
                        </div>  --}}
                    </div>
                    <form action="{{ route('examenes.update', $examene->id) }}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')
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
                            <div class="row">
                                <div class=" col-12 col-sm-6  col-lg-4 my-3 ">
                                    <label class="labelTitulo">Nombre:</label></br>
                                    <input type="text" class="inputCaja" id="nombre" name="nombre"
                                        value="{{ $examene->nombre }}">
                                </div>
                                <div class=" col-12 col-sm-6  col-lg-4 my-3 ">
                                    <label class="labelTitulo">costo:</label></br>
                                    <input type="number" class="inputCaja" id="costo" name="costo"
                                        value="{{ $examene->costo }}">
                                </div>
                                <div class=" col-12 col-sm-6  col-lg-4 my-3 ">
                                    <label class="labelTitulo">Costo Maquila:</label></br>
                                    <input type="number" class="inputCaja" id="maquila" name="maquila"
                                        value="{{ $examene->maquila }}">
                                </div>
                                <div class="row ">
                                    <label class="labelTitulo">Parametros:</label></br>
                                    <div class="col-12 " style=" display: contents;">
                                        @forelse ($parametros as $id => $parametro)
                                            <div class=" col-12 col-sm-6 col-lg-4 my-1">
                                                <input type="checkbox" id="{{ $id }}" name="parametros[]"
                                                    value="{{ $id }}"
                                                    {{ $examene->parametros->contains($id) ? 'checked' : '' }}>
                                                <label for="{{ $id }}"> {{ $parametro }}</label>
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
