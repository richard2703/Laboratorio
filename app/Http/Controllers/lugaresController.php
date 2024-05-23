<?php

namespace App\Http\Controllers;

use App\Models\cat_lugares;
use App\Models\lugares;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class lugaresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lugares = lugares::orderBy('id', 'desc')->paginate(15);
        $catLugares = cat_lugares::orderBy('id', 'desc')->get();
        return view('lugares.indexLugares', compact('lugares','catLugares'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $catLugares = cat_lugares::orderBy('id', 'desc')->get();
        return view('lugares.createLugar', compact('catLugares'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        lugares::create($request->only('nombre', 'direccion', 'telefono', 'correo', 'encargado', 'telEncargado', 'foraneo','cat_lugares_id'));
        Session::flash('message', 1);
        return redirect()->action([lugaresController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(lugares $lugares)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(lugares $lugare)
    {
        $catLugares = cat_lugares::orderBy('id', 'desc')->get();
        return view('lugares.editLugar', compact('catLugares','lugare'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, lugares $lugare)
    {
        $lugare->update($request->only('nombre', 'direccion', 'telefono', 'correo', 'encargado', 'telEncargado', 'foraneo','cat_lugares_id'));
        Session::flash('message', 1);
        return redirect()->action([lugaresController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(lugares $lugare)
    {
        dd("destroy lugar");
        $lugare->delete();
        Session::flash('message', 2);
        return redirect()->action([lugaresController::class, 'index']);
    }
}
