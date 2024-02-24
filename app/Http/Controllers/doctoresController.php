<?php

namespace App\Http\Controllers;

use App\Models\doctores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Gate;

class doctoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // abort_if(Gate::denies('maquilas_index'), 403);
        $doctores = doctores::paginate(15);
        // dd($personal);
        return view('doctores.indexDoctores', compact('doctores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // abort_if(Gate::denies('maquilas_index'), 403);

        return view('doctores.createDoctores');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // abort_if(Gate::denies('maquilas_create'), 403);
        doctores::create($request->only('nombre', 'direccion', 'telefono', 'correo', 'encargado', 'telEncargado', 'foraneo'));
        Session::flash('message', 1);
        return redirect()->action([doctoresController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(doctores $doctores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(doctores $doctore)
    {
        // abort_if(Gate::denies('maquilas_edit'), 403);

        return view('doctores.editDoctores', compact('doctore'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, doctores $doctore)
    {
        // abort_if(Gate::denies('maquilas_edit'), 403);

        $doctore->update($request->only('nombre', 'direccion', 'telefono', 'correo', 'encargado', 'telEncargado', 'foraneo'));
        Session::flash('message', 1);
        return redirect()->action([doctoresController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(doctores $doctore)
    {
        //
    }
}
