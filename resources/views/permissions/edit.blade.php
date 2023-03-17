@extends('layouts.app', ['activePage' => 'usuarios', 'activeItem' => 'Permisos'])

@section('content')
    <div class="pagetitle">
        <h1>Permisos</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item">Permisos</li>
                <li class="breadcrumb-item active">Editar Permiso</li>
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
                    <form action="{{ route('permissions.update', $permission->id) }}" method="post"
                        class="form-horizontal">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="name"
                                        value="{{ old('name', $permission->name) }}" autofocus>
                                </div>
                            </div>
                        </div>
                        <!--Footer-->
                        <div class="card-footer ml-auto mr-auto text-center">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                        <!--End footer-->
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
