@extends('layouts.app', ['activePage' => 'usuarios'])
@section('content')
    <div class="pagetitle">
        <h1>Usuarios</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                <li class="breadcrumb-item active">Blank</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header ">
                        <div class="col text-end">
                            <button type="button" class="btn btn-primary">Nuevo usuario</button>

                        </div>
                    </div>
                    <div class="card-body">

                        <h5 class="card-title">Example Card</h5>
                        <p>This is an examle page with no contrnt. You can udse it as a starter for your custom pages.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Usuarios</h4>
                                    <p class="card-category">Usuarios registrados</p>
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
                                        <div class="col-12 text-right">
                                            {{--  @can('user_create')  --}}
                                            <a href="{{ route('users.create') }}" class="btn btn-sm btn-facebook">Añadir
                                                usuario</a>
                                            {{--  @endcan  --}}

                                        </div>
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
                                                                <span class="badge badge-info">{{ $role->name }}</span>
                                                            @empty
                                                                <span class="badge badge-danger">No roles</span>
                                                            @endforelse

                                                        </td>
                                                        <td class="td-actions text-right">
                                                            {{--  @can('user_show')  --}}
                                                            <a href="{{ route('users.show', $user->id) }}"
                                                                class="btn btn-info"><i
                                                                    class="material-icons">person</i></a>
                                                            {{--  @endcan  --}}
                                                            {{--  @can('user_edit')  --}}
                                                            <a href="{{ route('users.edit', $user->id) }}"
                                                                class="btn btn-warning"><i
                                                                    class="material-icons">edit</i></a>
                                                            {{--  @endcan  --}}
                                                            {{--  @can('user_destroy')  --}}
                                                            <form action="{{ route('users.destroy', $user->id) }}"
                                                                method="POST" style="display: inline-block;"
                                                                onsubmit="return confirm('Seguro?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submit"
                                                                    rel="tooltip">
                                                                    <i class="material-icons">close</i>
                                                                </button>
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
                </div>
            </div>
        </div>
    </div>
@endsection
