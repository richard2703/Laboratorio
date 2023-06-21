<?php

namespace App\Http\Controllers;

use App\Models\maquilas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Gate;


class maquilasController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('maquilas_index'), 403);
        $maquilas = maquilas::paginate(5);
        // dd($personal);
        return view('maquilas.indexMaquilas', compact('maquilas'));
    }

    public function create()
    {
        abort_if(Gate::denies('maquilas_create'), 403);

        return view('maquilas.createMaquila');
    }

    public function store(Request $request)
    {
        abort_if(Gate::denies('maquilas_create'), 403);

        maquilas::create($request->only('nombre', 'direccion', 'telefono', 'correo', 'encargado', 'telEncargado', 'foraneo'));
        Session::flash('message', 1);
        return redirect()->action([maquilasController::class, 'index']);
    }

    public function show(maquilas $maquilas)
    {
        //
    }

    public function edit(maquilas $maquila)
    {
        abort_if(Gate::denies('maquilas_edit'), 403);

        return view('maquilas.editMaquila', compact('maquila'));
    }

    public function update(Request $request, maquilas $maquila)
    {
        abort_if(Gate::denies('maquilas_edit'), 403);

        $maquila->update($request->only('nombre', 'direccion', 'telefono', 'correo', 'encargado', 'telEncargado', 'foraneo'));
        Session::flash('message', 1);
        $maquilas = maquilas::paginate(5);
        return view('maquilas.indexMaquilas', compact('maquilas'));
    }

    public function destroy(maquilas $maquila)
    {
        abort_if(Gate::denies('maquilas_destroy'), 403);

        $maquila->delete();
        Session::flash('message', 2);
        $maquilas = maquilas::paginate(5);
        return view('maquilas.indexMaquilas', compact('maquilas'));
    }
}
