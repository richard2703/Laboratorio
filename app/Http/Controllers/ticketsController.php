<?php

namespace App\Http\Controllers;

use App\Models\tickets;
use App\Models\personal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\examenes;
use Illuminate\Support\Facades\DB;


class ticketsController extends Controller
{

    public function index()
    {
        $tickets = tickets::join('pacientes', 'tickets.paciente_id', 'pacientes.id')
            ->select('pacientes.nombre', 'pacientes.apellido', 'pacientes.telefono', 'tickets.id', 'tickets.total', 'tickets.abono')
            ->paginate(10);
        return view('tickets.indextickets', compact('tickets'));
    }

    public function create()
    {
        $examenes = examenes::get();
        return view('tickets.createTickets', compact('examenes'));
    }

    public function store(Request $request)
    {
        if (!$request->paciente_id) {
            // Guardar al paciente
            dd('funciona');
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
        $examenes = examenes::all();
        $ticket->load('examenes');
        // dd($ticket);
        return view('tickets.editTickets', compact('ticket', 'examenes'));
    }

    public function update(Request $request, tickets $ticket)
    {
        $ticket->update($request->only('paciente_id', 'maquila_id', 'total', 'abono', 'doctor'));
        $ticket->examenes()->sync($request->input('examenes', []));
        Session::flash('message', 1);
        $tickets = tickets::paginate(10);
        return view('tickets.indextickets', compact('tickets'));
    }

    public function destroy(tickets $ticket)
    {
        $ticket->delete();
        Session::flash('message', 2);
        return redirect()->action([ticketsController::class, 'index']);
    }
}
