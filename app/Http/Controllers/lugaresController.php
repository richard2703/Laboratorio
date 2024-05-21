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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);
        lugares::create($request->only('nombre','cat_lugares_id'));
        Session::flash('message', 1);
        return redirect()->action([cat_lugaresController::class, 'index']);
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
    public function edit(lugares $lugares)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, lugares $lugares)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(lugares $lugares)
    {
        //
    }
}
