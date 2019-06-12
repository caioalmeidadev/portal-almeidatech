<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Client;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;

class TicketController extends Controller
{
   public function index()
   {
       return view('admin.ticket.index');
   }

   public function create()
   {
       return view('admin.ticket.create');
   }

   public function store(Request $request)
   {
       $ticket = new Ticket();
       $ticket->fill($request->all());
       $ticket->create_for = \Auth::user()->id;
       $ticket->status = 0;
       if($ticket->save())
        {
            return redirect()->route('admin.tickets.index')
            ->withSuccess("Chamado cadastrado com sucesso!");
        } else {
            return redirect()->route('admin.tickets.create')
            ->withErrors("Erro ao cadastrar o chamado, tente novamente")
            ->withInput();
        }
   }

   public function show($id)
   {
       $ticket = Ticket::findOrFail($id);
       return view('admin.ticket.show',compact('ticket'));
   }

   public function getTickets()
   {
    $tickets = Ticket::where('create_date','=',Carbon::now()->toDateString())->get();
    return DataTables::of($tickets)
        ->addColumn('client_name',function($ticket){
            $client = Client::select('razao_social')->where('id',$ticket->client_id)->get();
            return $client[0]->razao_social;
        })
        ->editColumn('status',function ($ticket){
            return '<span class="badge badge-success">'.$ticket->status.'</span>';
        })
        ->addColumn('options',function($ticket){
            $buttons = '<a href="'. route('admin.tickets.edit',['id'=>$ticket->id]) .'" class="btn btn-info">Editar</a>';
            $buttons .= ' | ';
            $buttons .= '<a href="'. route('admin.tickets.show',['id' => $ticket->id]) .'" class="btn btn-danger">Detalhes</a> ';
            return $buttons;
        })
        ->rawColumns(['client_id','create_date','expire_date','title',
        'created_for','status','client_name','options'])
        ->toJson();
   }


}
