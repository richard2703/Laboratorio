@extends('layouts.front', ['activePage' => 'Dashboard', 'activeItem' => ''])

@section('content')
    <div class="main">
        <div class="section section-tabs">
            <div class="container">
                <div class="row">
                    <div class="card card-signup">
                        <form class="form" method="post" action="{{ route('resultado.index') }}">
                            @csrf
                            <div class="card-header text-center">
                                <h3 class="card-title title-up">Resultados</h3>

                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <span class="">
                                        Numero de ticket
                                    </span>
                                    <input name="ticket" type="text" value="" placeholder="1234"
                                        class="form-control" />
                                </div>
                                <div class="form-group">
                                    <span class="">
                                        Contraseña </span>
                                    <input name="contra" type="password" value="" placeholder="111111"
                                        class="form-control" rel="tooltip"
                                        title="La contraseña se encuentra en su recibo, en la parte inferior derecha"
                                        data-placement="bottom" />
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <button type="submit" class="btn-submit">
                                    Buscar Resultado
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/alertas.js') }}"></script>

        <script>
            var slug = '{{ Session::get('message') }}';
            if (slug == 1) {
                error();
            }
        </script>
    @endsection
