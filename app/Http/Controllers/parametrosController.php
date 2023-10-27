<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\parametros;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;


class parametrosController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('parametros_index'), 403);

        $parametros = parametros::orderBy('id', 'desc')->paginate(15);
        return view('examenes.indexParametros', compact('parametros'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        abort_if(Gate::denies('parametros_create'), 403);

        parametros::create($request->only('nombre', 'tipo', 'alto', 'bajo', 'medicion', 'escrito', 'referencia', 'respuesta', 'altoM', 'bajoM', 'referenciaM', 'altoN', 'bajoN', 'referenciaN'));
        Session::flash('message', 1);
        return redirect()->back();
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, parametros $parametro)
    {
        abort_if(Gate::denies('parametros_update'), 403);

        $data = $request->only('nombre', 'tipo', 'alto', 'bajo', 'medicion', 'escrito', 'referencia', 'respuesta', 'altoM', 'bajoM', 'referenciaM', 'altoN', 'bajoN', 'referenciaN');
        $parametro->update($data);
        Session::flash('message', 1);
        return redirect()->action([parametrosController::class, 'index']);
    }

    public function destroy(parametros $parametro)
    {
        abort_if(Gate::denies('parametros_destroy'), 403);

        $parametro->delete();
        Session::flash('message', 2);
        return redirect()->action([parametrosController::class, 'index']);
    }
}
