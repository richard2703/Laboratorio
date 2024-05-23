<?php

namespace App\Http\Controllers;

use App\Models\examenes;
use App\Http\Controllers\Controller;
use App\Models\cat_lugares;
use App\Models\examen_precio;
use App\Models\lugares;
use Illuminate\Http\Request;
use App\Models\parametros;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Gate;


class examenesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('examenes_index'), 403);

        $examenes = examenes::paginate(10);
        return view('examenes.indexExamenes', compact('examenes'));
    }

    public function create()
    {
        abort_if(Gate::denies('examenes_create'), 403);

        $parametros = parametros::get();
        $lugares = cat_lugares::get();
        return view('examenes.createExamenes', compact('parametros','lugares'));
    }

    public function store(Request $request)
    {
        // $examen = examenes::find(1);
        // dd($request);

        abort_if(Gate::denies('examenes_create'), 403);

        $examen = examenes::create($request->only('nombre', 'maquila', 'doctor', 'metodologia', 'muestra', 'abreviacion'));
        foreach ($request->costo as $lugarId => $precio) {
            $examenPrecio = new examen_precio();
            $examenPrecio->examenId = $examen->id;
            $examenPrecio->tipoLugarId = $lugarId;
            $examenPrecio->precio = $precio;
            $examenPrecio->save(); 

        }
        $examen->parametros()->sync($request->input('parametros', []));
        Session::flash('message', 1);
        return redirect()->action([examenesController::class, 'index']);
    }

    public function show(examenes $examenes)
    {
    }

    public function edit(examenes $examene)
    {
        abort_if(Gate::denies('examenes_edit'), 403);

        $parametros = parametros::all()->pluck('nombre', 'id');
        $examene->load('parametros');
        $lugares = cat_lugares::all();
        $precios = examen_precio::where('examenId', $examene->id)->get()->keyBy('tipoLugarId');
        
        return view('examenes.editExamenes', compact('parametros', 'examene','precios','lugares'));
    }

    public function update(Request $request, examenes $examene)
    {
        abort_if(Gate::denies('examenes_edit'), 403);
        $examene->update($request->only('nombre', 'maquila', 'doctor', 'metodologia', 'muestra', 'abreviacion'));
        foreach ($request->costo as $lugarId => $precio) {
            examen_precio::updateOrCreate(
                [
                    'examenId' => $examene->id,
                    'tipoLugarId' => $lugarId
                ],
                [
                    'precio' => $precio
                ]
            );
        }
        $examene->parametros()->sync($request->input('parametros', []));
        Session::flash('message', 1);
        // $examenes = examenes::paginate(15);
        return redirect()->action([examenesController::class, 'index']);
    }

    public function destroy(examenes $examene)
    {
        abort_if(Gate::denies('examenes_destroy'), 403);

        $examene->delete();
        Session::flash('message', 2);
        $examenes = examenes::paginate(10);
        return view('examenes.indexExamenes', compact('examenes'));
    }
}
