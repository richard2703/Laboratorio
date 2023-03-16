@extends('layouts.app', ['activePage' => 'usuarios', 'activeItem' => 'usuarios'])
@section('content')
    <div class="pagetitle">
        <h1>Usuarios</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item active">Usuarios</li>
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
                                <a href="{{ route('users.create') }}">
                                    <button type="button" class="btn btn-primary">Nuevo usuario</button>
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
                            <table class="table">
                                <thead class="text-primary">
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Username</th>
                                    <th>Full Name</th>
                                    <th>Roles</th>
                                    <th class="text-right">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->fullname }}</td>
                                            <td>
                                                @forelse ($user->roles as $role)
                                                    <span
                                                        class="badge rounded-pill bg-info text-dark">{{ $role->name }}</span>
                                                @empty
                                                    <span class="badge rounded-pill bg-danger ">No roles</span>
                                                @endforelse

                                            </td>
                                            <td class="td-actions text-right">
                                                {{--  @can('user_show')  --}}
                                                <a href="{{ route('users.show', $user->id) }}"><i
                                                        class="bi bi-card-text h3"></i></a>
                                                {{--  @endcan  --}}
                                                {{--  @can('user_edit')  --}}
                                                <a href="{{ route('users.edit', $user->id) }}"><i
                                                        class="bi bi-pencil h3 px-2"></i></a>

                                                {{--  <a href="{{ route('users.edit', $user->id) }}"><button type="button"
                                                        class="btn btn-warning"><i class="bi bi-pencil"></i></button></a>  --}}
                                                {{--  @endcan  --}}
                                                {{--  @can('user_destroy')  --}}
                                                <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                                    style="display: inline-block;" onsubmit="return confirm('Seguro?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger"><i
                                                            class="bi bi-trash3"></i></button>
                                                </form>
                                                {{--  @endcan  --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer mr-auto">
                        {{ $users->links() }}
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
