@extends('layouts.app', ['activePage' => 'lugaresTrabajo', 'activeItem' => 'doctores'])

@section('content')
    <div class="pagetitle">
        <h1>Doctores</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item active">Doctores</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header ">
                        <div class="col text-end">
                            {{--  @can('maquilas_create')  --}}
                            <a href="{{ route('doctores.create') }}">
                                <button type="button" class="btn btn-primary">Nuevo Doctor</button>
                            </a>
                            {{--  @endcan  --}}
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="labelTitulo">
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Direccion</th>
                                    <th>Telefono </th>
                                    <th>Correo</th>
                                    <th>Encargado</th>
                                    <th class="text-right">Acciones</th>
                                </thead>
                                <tbody>
                                    @forelse ($doctores as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->nombre }}</td>
                                            <td>{{ $item->direccion }}</td>
                                            <td>{{ $item->telefono }}</td>
                                            <td>{{ $item->correo }}</td>
                                            <td>{{ $item->encargado }}</td>

                                            <td class="td-actions text-right">
                                                {{--  @can('maquilas_show')  --}}
                                                <a href="#"><i class="bi bi-card-text h3"></i></a>
                                                {{--  @endcan  --}}
                                                {{--  @can('maquilas_edit')  --}}
                                                <a href="{{ route('doctores.edit', $item->id) }}"><i
                                                        class="bi bi-pencil h3 px-2"></i></a>
                                                {{--  @endcan  --}}
                                                {{--  @can('maquilas_destroy')  --}}
                                                <form action="#" method="POST" style="display: inline-block;"
                                                    onsubmit="return confirm('Seguro?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger"><i
                                                            class="bi bi-trash3"></i></button>
                                                </form>
                                                {{--  @endcan  --}}
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
                        {{ $doctores->links('vendor.pagination.bootstrap-5') }}
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script src="{{ asset('js/alertas.js') }}"></script>
    <script>
        var slug = '{{ Session::get('message') }}';
        if (slug == 1) {
            Guardado();

        }
    </script>
@endsection
