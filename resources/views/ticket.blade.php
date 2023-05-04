@extends('layouts.front', ['activePage' => 'Dashboard', 'activeItem' => ''])

@section('content')
    <div class="main">
        <div class="section section-tabs">
            <div class="container">
                <div class="row">
                    <div class="card card-resultados">
                        <div class="card-header text-center">
                            {{--  <div class="col card-title ">
                                    <h2 class="">Ticket N°: 1054 - Juan perez
                                    </h2>
                                </div>  --}}
                            <div class="col card-title ">
                                <h2 class="">Ticket N°: {{ $ticket->id }} - {{ $ticket->nombre }}
                                    {{ $ticket->apellido }}</h2>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-center labelTitulo">
                                        <th>Examen</th>
                                        <th>Estatus de examen</th>
                                        <th>Descargar</th>
                                        <th>Estatus de cobro</th>
                                    </thead>
                                    <tbody class="text-center">
                                        @forelse ($examenes as $examene)
                                            <tr>
                                                <td>{{ $examene->nombre }}</td>
                                                <td>
                                                    @if ($examene->estatus == 0)
                                                        En Espera
                                                    @elseif ($examene->estatus == 1)
                                                        En Revision
                                                    @elseif ($examene->estatus == 2)
                                                        Terminado
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($examene->estatus == 2)
                                                        <form action="{{ route('resultado.pdf') }}" method="POST"
                                                            style="display: inline-block;" target="_blank">
                                                            @csrf
                                                            <input type="hidden" name="ticket"
                                                                value="{{ $ticket->id }}">
                                                            <input type="hidden" name="examen"
                                                                value="{{ $examene->id }}">
                                                            <input type="hidden" name="toma"
                                                                value="{{ $examene->toma }}">
                                                            <button class="boton-descarga" type="submit">
                                                                <i class="bi bi-download h3"></i>
                                                            </button>
                                                        </form>
                                                    @elseif ($examene->estatus != 2)
                                                        <i class="bi bi-hourglass h3"></i>
                                                    @endif
                                                </td>
                                                <td class="td-actions text-right">
                                                    {{--  @can('user_edit')
															@if ($examene->estatus == 0)
																<form action="{{ route('resultados.create', $ticket->id) }}"
																	method="POST" style="display: inline-block;">
																	@csrf
																	<input type="hidden" name="examen" value="{{ $examene->id }}">
																	<input type="hidden" name="toma" value="{{ $examene->toma }}">
																	<button class="boton" type="submit" rel="tooltip">
																		<i class="bi bi-pencil h3 "></i>
																	</button>
																</form>
															@elseif ($examene->estatus >= 1)
																<form action="{{ route('resultados.edit', $ticket->id) }}"
																	method="POST" style="display: inline-block;">
																	@csrf
																	<input type="hidden" name="examen" value="{{ $examene->id }}">
																	<input type="hidden" name="toma" value="{{ $examene->toma }}">
																	<button class="boton" type="submit" rel="tooltip">
																		<i class="bi bi-card-text h3"></i>
																	</button>
																</form>
															@endif
														@endcan  --}}
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
                        {{--  <div class="card-footer text-center">
                                <button type="submit" class="btn-submit">
                                    Buscar Resultado
                                </button>
                            </div>  --}}
                    </div>
                </div>
            </div>
        </div>
    @endsection
