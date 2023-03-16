@extends('layouts.app', ['activePage' => 'usuarios', 'activeItem' => 'Roles'])

@section('content')

    <div class="pagetitle">
        <h1>Roles</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item active">Roles</li>
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
                                <a href="{{ route('roles.create') }}">
                                    <button type="button" class="btn btn-primary">Nuevo Rol</button>
                                </a>
                            @endcan
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('faild'))
                            <div class="alert alert-danger" role="faild">
                                {{ session('faild') }}
                            </div>
                        @endif
                        <div class="row">

                        </div>
                        <div class="table-responsive">
                            <table class="table ">
                                <thead class="text-primary">
                                    <th> ID </th>
                                    <th> Nombre </th>
                                    <th> Guard </th>
                                    <th> Fecha de creación </th>
                                    <th> Permisos </th>
                                    <th> Acciones </th>
                                </thead>
                                <tbody>
                                    @forelse ($roles as $role)
                                        <tr>
                                            <td>{{ $role->id }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td>{{ $role->guard_name }}</td>
                                            <td class="text-primary">{{ $role->created_at->toFormattedDateString() }}
                                            </td>
                                            <td
                                                style="
                                            width: 50%;
                                        ">
                                                @forelse ($role->permissions as $permission)
                                                    <span
                                                        class="badge rounded-pill bg-info text-dark">{{ $permission->name }}</span>
                                                @empty
                                                    <span class="badge badge-danger">No permission added</span>
                                                @endforelse
                                            </td>
                                            <td class="td-actions ">
                                                {{--  @can('role_show')  --}}
                                                {{--  <a href="{{ route('roles.show', $role->id) }}"><i
                                                        class="bi bi-card-text h3"></i></a>  --}}
                                                {{--  @endcan  --}}
                                                {{--  @can('role_edit')  --}}
                                                <a href="{{ route('roles.edit', $role->id) }}"><i
                                                        class="bi bi-pencil h3 px-2"></i></a>
                                                {{--  @endcan  --}}
                                                {{--  @can('role_destroy')  --}}
                                                <form action="{{ route('roles.destroy', $role->id) }}" method="post"
                                                    onsubmit="return confirm('areYouSure')" style="display: inline-block;">
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
                        {{ $roles->links() }}
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
