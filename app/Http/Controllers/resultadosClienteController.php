<?php

namespace App\Http\Controllers;

use App\Models\resultados;
use App\Models\tomas;
use App\Models\tickets;
use App\Models\examenes;
use App\Models\parametros;
use App\Models\pacientes;
use App\Models\examenparametro;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;


class resultadosClienteController extends Controller
{

    public function buscar()
    {
        // dd('buscar');
        return view('resultados');
    }

    public function index(Request $request)
    {
        $ticket = tickets::join('pacientes', 'tickets.paciente_id', 'pacientes.id')
            ->select('pacientes.nombre', 'pacientes.apellido', 'pacientes.telefono', 'tickets.id', 'tickets.total', 'tickets.abono')
            ->where('tickets.id', $request->ticket)
            ->first();
        // dd($ticket);

        $examenes = tomas::join('examenes', 'tomas.examenes_id', 'examenes.id', 'tomas.tickets_id')
            ->select('examenes.id', 'examenes.nombre', 'tomas.estatus', 'tomas.id as toma')
            ->where('tomas.tickets_id', $ticket->id)
            ->paginate(10);
        // $tomas = tomas::paginate(10);
        return view('ticket', compact('ticket', 'examenes'));
        // return view('ticket');
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

    public function pdfResultado(Request $request)
    {
        // dd('test');
        $ticket = tickets::join('pacientes', 'tickets.paciente_id', 'pacientes.id')
            ->select('pacientes.nombre', 'pacientes.apellido', 'pacientes.telefono', 'pacientes.nacimiento', 'tickets.id', 'tickets.total', 'tickets.abono', 'tickets.created_at', 'tickets.doctor')
            ->where('tickets.id', $request->ticket)
            ->first();
        $examen = examenes::join('examenparametro', 'examenes.id', 'examenparametro.examenes_id')
            ->join('parametros', 'parametros.id', 'examenparametro.parametros_id')
            ->select('examenes.nombre', 'parametros.nombre', 'parametros.id')
            ->where('examenes.id', $request->examen)
            ->first();
        $parametros = examenparametro::join('parametros', 'examenparametro.parametros_id', 'parametros.id',)
            ->join('resultados', 'resultados.parametros_id', 'parametros.id')
            ->select(
                'parametros.id',
                'parametros.nombre',
                'parametros.respuesta',
                'parametros.tipo',
                'parametros.alto',
                'parametros.bajo',
                'parametros.medicion',
                'parametros.escrito',
                'parametros.referencia',
                'parametros.respuesta',
                'resultados.id as toma',
                'resultados.resultado'
            )
            ->where('examenparametro.examenes_id', $request->examen)
            ->get();
        $toma = tomas::find($request->toma);
        $examen->toma = $request->toma;

        $pacientes = pacientes::all();
        return PDF::loadView('resultados.pdfResultado2', compact('ticket', 'examen', 'parametros', 'toma'))
            // ->setOptions(['defaultFont' => 'sans-serif', 'isRemoteEnabled' => true])
            ->setPaper('a4')
            ->stream('archivo.pdf');
    }
}
