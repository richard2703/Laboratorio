<?php

namespace App\Http\Controllers;

use App\Models\examenes;
use Illuminate\Http\Request;

class resultadosClienteController extends Controller
{

    public function buscar()
    {
        // dd('buscar');
        return view('resultados');
    }

    public function index(Request $request)
    {
        dd($request);
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
    public function show(examenes $examenes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(examenes $examenes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, examenes $examenes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(examenes $examenes)
    {
        //
    }
}
