<?php

namespace App\Http\Controllers;

use App\Models\sucursales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Gate;

class sucursalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // abort_if(Gate::denies('maquilas_index'), 403);
        $sucursales = sucursales::paginate(15);
        return view('sucursales.indexSucursales', compact('sucursales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // abort_if(Gate::denies('maquilas_index'), 403);
        return view('sucursales.createSucursales');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        sucursales::create($request->only('nombre', 'direccion', 'telefono', 'correo', 'encargado', 'telEncargado', 'foraneo'));
        Session::flash('message', 1);
        return redirect()->action([sucursalesController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(sucursales $sucursales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sucursales $sucursale)
    {
        return view('sucursales.editSucursales', compact('sucursale'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sucursales $sucursale)
    {
        $sucursale->update($request->only('nombre', 'direccion', 'telefono', 'correo', 'encargado', 'telEncargado', 'foraneo'));
        Session::flash('message', 1);
        return redirect()->action([sucursalesController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sucursales $sucursales)
    {
        //
    }
}
