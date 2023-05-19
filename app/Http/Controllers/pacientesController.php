<?php

namespace App\Http\Controllers;

use App\Models\pacientes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Gate;

class pacientesController extends Controller
{
    // FALTA EDITAR Y BORRAR, EL DE VER SERA ESPECIAL
    public function index()
    {
        abort_if(Gate::denies('role_index'), 403);

        $pacientes = pacientes::paginate(15);
        return view('pacientes.indexPacientes', compact('pacientes'));
    }

    public function create()
    {
        abort_if(Gate::denies('role_create'), 403);

        return view('pacientes.createPaciente');
    }

    public function store(Request $request)
    {
        abort_if(Gate::denies('role_store'), 403);

        pacientes::create($request->only('nombre', 'apellido', 'telefono', 'nacimiento', 'correo'));
        Session::flash('message', 1);
        return redirect()->action([pacientesController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function show(pacientes $pacientes)
    {
        //
    }

    public function edit(pacientes $paciente)
    {
        abort_if(Gate::denies('role_edit'), 403);

        return view('pacientes.editPaciente', compact('paciente'));
    }

    public function update(Request $request, pacientes $paciente)
    {
        abort_if(Gate::denies('role_edit'), 403);

        $paciente->update($request->only('nombre', 'apellido', 'telefono', 'nacimiento', 'correo'));
        Session::flash('message', 1);
        $pacientes = pacientes::paginate(5);
        return view('pacientes.indexPacientes', compact('pacientes'));
    }

    public function destroy(pacientes $paciente)
    {
        abort_if(Gate::denies('role_destroy'), 403);

        $paciente->delete();
        Session::flash('message', 2);
        $pacientes = pacientes::paginate(5);
        return view('pacientes.indexPacientes', compact('pacientes'));
    }
}
