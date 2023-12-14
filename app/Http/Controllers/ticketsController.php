<?php

namespace App\Http\Controllers;

use App\Models\tickets;
use App\Models\personal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\examenes;
use App\Models\examenParametro;
use App\Models\pacientes;
use App\Models\maquilas;
use App\Models\parametros;
use App\Models\tomas;
use Illuminate\Support\Facades\DB;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Mike42\Escpos\Printer;
use PDF;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;

class ticketsController extends Controller
{

    public function index()
    {
        abort_if(Gate::denies('tickets_index'), 403);

        $tickets = tickets::join('pacientes', 'tickets.paciente_id', 'pacientes.id')
            ->select('pacientes.nombre', 'pacientes.apellido', 'pacientes.telefono', 'tickets.id', 'tickets.total', 'tickets.abono')
            ->orderby('created_at', 'desc')
            ->paginate(15);
        // dd($tickets);
        return view('tickets.indexTickets', compact('tickets'));
    }

    public function create()
    {
        abort_if(Gate::denies('tickets_create'), 403);

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
        abort_if(Gate::denies('tickets_create'), 403);

        $ticket = new tickets();
        if (!$request->paciente_id) {
            // Guardar al paciente
            $paciente = pacientes::create($request->only('nombre', 'apellido', 'telefono', 'nacimiento'));
            $ticket->paciente_id = $paciente->id;
        } else {
            $ticket->paciente_id = $request->paciente_id;
        }
        $ticket->maquila_id = $request->maquila_id;
        $ticket->total = $request->total;
        $ticket->abono = $request->abono;
        $ticket->doctor = $request->doctor;
        $ticket->pass = Str::random(6);
        $ticket->save();

        $ticket->examenes()->sync($request->input('examenes', []));
        Session::flash('message', 1);
        return redirect()->action([ticketsController::class, 'index']);
    }

    public function show(tickets $ticket)
    {
        abort_if(Gate::denies('tickets_show'), 403);

        $ticket = tickets::join('pacientes', 'tickets.paciente_id', 'pacientes.id')
            ->select(
                'pacientes.nombre',
                'pacientes.apellido',
                'pacientes.telefono',
                'pacientes.nacimiento',
                'pacientes.correo',
                'tickets.id',
                'tickets.total',
                'tickets.abono',
                'tickets.created_at',
                'tickets.doctor',
                'tickets.total',
                'tickets.abono',
                'tickets.total',
                'tickets.pass'
            )
            ->where('tickets.id', $ticket->id)
            ->first();

        $examenes = tomas::join('examenes', 'examenes.id', 'tomas.examenes_id')
            ->select('examenes.abreviacion')
            ->where('tomas.tickets_id', $ticket->id)
            ->get();


        // dd($examenes);

        return PDF::loadView('tickets.ticketPDF', compact('ticket', 'examenes'))
            // ->setOptions(['defaultFont' => 'sans-serif', 'isRemoteEnabled' => true])
            ->setPaper('a4')
            ->stream('archivo.pdf');
    }

    public function edit(tickets $ticket)
    {
        abort_if(Gate::denies('tickets_edit'), 403);

        $paciente = pacientes::where('id', $ticket->paciente_id)->first();
        $examenes = examenes::all();
        $ticket->load('examenes');
        $maquilas = maquilas::get();

        // dd($ticket);
        return view('tickets.editTickets', compact('ticket', 'examenes', 'paciente', 'maquilas'));
    }

    public function update(Request $request, tickets $ticket)
    {
        abort_if(Gate::denies('tickets_edit'), 403);

        $ticket->update($request->only('maquila_id', 'total', 'abono', 'doctor'));
        $ticket->examenes()->sync($request->input('examenes', []));
        Session::flash('message', 1);
        return redirect()->action([ticketsController::class, 'index']);

        // $tickets = tickets::paginate(10);
        // return view('tickets.indextickets', compact('tickets'));
    }

    public function destroy(tickets $ticket)
    {
        abort_if(Gate::denies('tickets_destroy'), 403);

        $ticket->delete();
        Session::flash('message', 2);
        return redirect()->action([ticketsController::class, 'index']);
    }


    public function test()
    {

        $ticket = tickets::join('pacientes', 'tickets.paciente_id', 'pacientes.id')
            ->select('pacientes.nombre', 'pacientes.apellido', 'pacientes.telefono', 'pacientes.nacimiento', 'tickets.id', 'tickets.total', 'tickets.abono', 'tickets.created_at', 'tickets.doctor')
            ->where('tickets.id', 8)
            ->first();

        // dd($ticket);

        // return view('tickets.ticketPDF');

        return PDF::loadView('tickets.ticketPDF')
            // ->setOptions(['defaultFont' => 'sans-serif', 'isRemoteEnabled' => true])
            ->setPaper('a4')
            ->stream('archivo.pdf');
    }


    public function hojaTrabajo($ticketId)
    {
        $ticket = tickets::join('pacientes', 'tickets.paciente_id', 'pacientes.id')
            ->select('pacientes.nombre', 'pacientes.apellido', 'tickets.id', 'pacientes.nacimiento')
            ->where('tickets.id', $ticketId)
            ->first();
        // dd($ticket);

        $tomas = tomas::join('examenes', 'tomas.examenes_id', 'examenes.id', 'tomas.tickets_id')
            ->select('examenes.id', 'examenes.nombre', 'tomas.estatus', 'tomas.id as toma')
            ->where('tomas.tickets_id', $ticketId)
            ->get()
            ->pluck('id')
            ->toArray();
        // dd($tomas);

        $examenes = examenes::join('examenParametro', 'examenes.id', 'examenParametro.examenes_id')
            ->join('parametros', 'parametros.id', 'examenParametro.parametros_id')
            ->select(
                'examenes.nombre as examen',
                'parametros.nombre',
                'parametros.id',
                'parametros.tipo',
                'parametros.referencia',
                'parametros.alto',
                'parametros.bajo',
                'parametros.medicion',
                'parametros.escrito',
                'parametros.respuesta',
            )
            ->whereIn('examenes.id', $tomas)
            ->get();
        // dd($examenes);
        $bandera = "";
        $banderaE = "";

        // return view('tickets.hojaTrabajo', compact('ticket', 'examenes', 'bandera', 'banderaE'));

        return PDF::loadView('tickets.hojaTrabajo2', compact('ticket', 'examenes', 'bandera', 'banderaE'))
            ->setPaper('a4')
            ->stream('archivo.pdf');
    }

    // IMPRECION CON IMPRESORA DE TICKETS
    // public function test()
    // {
    //     $nombreImpresora = "POS-58 USB";
    //     $connector = new WindowsPrintConnector($nombreImpresora);
    //     $impresora = new Printer($connector);
    //     $impresora->setJustification(Printer::JUSTIFY_CENTER);
    //     $impresora->setTextSize(2, 2);
    //     $impresora->text("Imprimiendo\n");
    //     $impresora->text("ticket\n");
    //     $impresora->text("desde\n");
    //     $impresora->text("Laravel\n");
    //     $impresora->setTextSize(1, 1);
    //     $impresora->text("https://parzibyte.me");
    //     $impresora->feed(5);
    //     $impresora->close();
    //     dd('test.print');
    // }
}
