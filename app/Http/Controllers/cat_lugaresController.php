<?php

namespace App\Http\Controllers;

use App\Models\cat_lugares;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class cat_lugaresController extends Controller
{
    public function index()
    {
        //abort_if(Gate::denies('parametros_index'), 403);

        $lugares = cat_lugares::orderBy('id', 'desc')->paginate(15);
        return view('catalogos.indexTiposLugares', compact('lugares'));
    }

    public function store(Request $request)
    {
        cat_lugares::create($request->only('nombre'));
        Session::flash('message', 1);
        return redirect()->action([cat_lugaresController::class, 'index']);
    }

    public function update(Request $request)
    {
        $catlugare = cat_lugares::find($request->id);
        $data = $request->only('nombre');
        $catlugare->update($data);
        Session::flash('message', 1);
        return redirect()->action([cat_lugaresController::class, 'index']);
    }

    public function destroy(cat_lugares $catlugare)
    {
        // abort_if(Gate::denies('parametros_destroy'), 403);
        dd("borrado");
        $catlugare->delete();
        Session::flash('message', 2);
        return redirect()->action([cat_lugaresController::class, 'index']);
    }
}
