<?php

namespace App\Http\Controllers;

use App\Models\tickets;
use App\Models\personal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\examenes;
use App\Models\pacientes;
use App\Models\maquilas;
use Illuminate\Support\Facades\DB;


class ticketsController extends Controller
{

    public function index()
    {
        $tickets = tickets::join('pacientes', 'tickets.paciente_id', 'pacientes.id')
            ->select('pacientes.nombre', 'pacientes.apellido', 'pacientes.telefono', 'tickets.id', 'tickets.total', 'tickets.abono')
            ->paginate(10);
        // dd($tickets);
        return view('tickets.indextickets', compact('tickets'));
    }

    public function create()
    {
        $examenes = examenes::get();
        $maquilas = maquilas::get();
        return view('tickets.createTickets', compact('examenes', 'maquilas'));
    }

    public function search(Request $request)
    {
        // $term = $request->input('term');
        $term = $request->get('term');

        $personas = pacientes::where('nombre', 'LIKE', '%' . $term . '%')
            ->orwhere('apellido', 'LIKE', '%' . $term . '%')
            ->orwhere('telefono', 'LIKE', '%' . $term . '%')->get();

        $sugerencias = [];
        foreach ($personas as $persona) {
            $sugerencias[] = [
                'value' => $persona->nombre . " " . $persona->apellido . " " . $persona->telefono,
                'id' => $persona->id,
                'nombre' => $persona->nombre,
                'apellido' => $persona->apellido,
                'nacimiento' => $persona->nacimiento,
                'telefono' => $persona->telefono,
                'correo' => $persona->correo,
            ];
        }

        return $sugerencias;
        // return response()->json($sugerencias);
    }

    public function searchexamen(Request $request)
    {
        // $term = $request->input('term');
        $term = $request->get('term');

        $examenes = examenes::where('nombre', 'LIKE', '%' . $term . '%')->get();

        $sugerencias = [];
        foreach ($examenes as $examene) {
            $sugerencias[] = [
                'value' => $examene->nombre . " $" . $examene->costo . " $" . $examene->Maquila,
                'id' => $examene->id,
                'nombre' => $examene->nombre,
                'costo' => $examene->costo,

            ];
        }

        return $sugerencias;
        // return response()->json($sugerencias);
    }

    public function store(Request $request)
    {
        if (!$request->paciente_id) {
            // Guardar al paciente
            // dd($request);
            $paciente = pacientes::create($request->only('nombre', 'apellido', 'telefono', 'nacimiento'));
            $ticket = new tickets();
            $ticket->paciente_id = $paciente->id;
            $ticket->maquila_id = $request->maquila_id;
            $ticket->total = $request->total;
            $ticket->abono = $request->abono;
            $ticket->doctor = $request->doctor;
            $ticket->save();

            // $ticket = tickets::create($request->only('paciente_id', 'maquila_id', 'total', 'abono', 'doctor'));
            $ticket->examenes()->sync($request->input('examenes', []));
            Session::flash('message', 1);
            return redirect()->action([ticketsController::class, 'index']);
        }
        // dd($request);
        $ticket = tickets::create($request->only('paciente_id', 'maquila_id', 'total', 'abono', 'doctor'));
        $ticket->examenes()->sync($request->input('examenes', []));
        Session::flash('message', 1);
        return redirect()->action([ticketsController::class, 'index']);
    }

    public function show(tickets $tickets)
    {
        //
    }

    public function edit(tickets $ticket)
    {
        $paciente = pacientes::where('id', $ticket->paciente_id)->first();
        $examenes = examenes::all();
        $ticket->load('examenes');
        // dd($paciente);
        return view('tickets.editTickets', compact('ticket', 'examenes', 'paciente'));
    }

    public function update(Request $request, tickets $ticket)
    {
        $ticket->update($request->only('maquila_id', 'total', 'abono', 'doctor'));
        $ticket->examenes()->sync($request->input('examenes', []));
        Session::flash('message', 1);
        return redirect()->action([ticketsController::class, 'index']);

        // $tickets = tickets::paginate(10);
        // return view('tickets.indextickets', compact('tickets'));
    }

    public function destroy(tickets $ticket)
    {
        $ticket->delete();
        Session::flash('message', 2);
        return redirect()->action([ticketsController::class, 'index']);
    }
}
