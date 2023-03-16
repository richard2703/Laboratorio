@extends('layouts.app', ['activePage' => 'usuarios', 'activeItem' => 'Permisos'])

@section('content')
    <div class="pagetitle">
        <h1>Permisos</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item active">Permisos</li>
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
                                <a href="{{ route('permissions.create') }}">
                                    <button type="button" class="btn btn-primary">Nuevo permiso</button>
                                </a>
                            @endcan
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Guard</th>
                                    <th>Created_at</th>
                                    <th class="text-right">Acciones</th>
                                </thead>
                                <tbody>
                                    @forelse ($permissions as $permission)
                                        <tr>
                                            <td>{{ $permission->id }}</td>
                                            <td>{{ $permission->name }}</td>
                                            <td>{{ $permission->guard_name }}</td>
                                            <td>{{ $permission->created_at }}</td>
                                            <td class="td-actions text-right">
                                                {{--  @can('role_show')  --}}
                                                {{--  <a href="{{ route('roles.show', $role->id) }}"><i
                                                        class="bi bi-card-text h3"></i></a>  --}}
                                                {{--  @endcan  --}}
                                                {{--  @can('role_edit')  --}}
                                                <a href="{{ route('permissions.edit', $permission->id) }}"><i
                                                        class="bi bi-pencil h3 px-2"></i></a>
                                                {{--  @endcan  --}}
                                                {{--  @can('role_destroy')  --}}
                                                <form action="{{ route('permissions.destroy', $permission->id) }}"
                                                    method="post" onsubmit="return confirm('areYouSure')"
                                                    style="display: inline-block;">
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
                        {{--  {{ $permissions->links() }}  --}}
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
