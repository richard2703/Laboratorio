<?php

namespace App\Http\Controllers;

use App\Models\cat_lugares;
use Illuminate\Http\Request;

class cat_lugaresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //abort_if(Gate::denies('parametros_index'), 403);

        $lugares = cat_lugares::orderBy('id', 'desc')->paginate(15);
        return view('catalogos.indexLugares', compact('lugares'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(cat_lugares $cat_lugares)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cat_lugares $cat_lugares)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cat_lugares $cat_lugares)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cat_lugares $cat_lugares)
    {
        //
    }
}
