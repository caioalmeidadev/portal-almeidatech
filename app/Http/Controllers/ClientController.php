<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Segment;
use Yajra\DataTables\DataTables;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('admin.client.index',compact('clients'));
    }

    public function create()
    {
        $segments = Segment::all();
        return view('admin.client.create',compact('segments'));
    }

    public function store(Request $request)
    {
        $client = new Client();
        $client->fill($request->all());
        if($client->save())
        {
            return redirect()->route('admin.clients.index')
            ->withSuccess("Cliente cadastrado com sucesso!");
        } else {
            return redirect()->route('admin.clients.create')
            ->withErrors("Erro ao cadastrar o cliente, tente novamente")
            ->withInput();
        }


    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('admin.clients.edit',compact('client'));
    }


    public function show($id)
    {
        $client = Client::findOrFail($id);
        return view('admin.clients.show',compact('client'));
    }

    public function listClients()
    {

        return DataTables::of(Client::select('id','razao_social','nome_fantasia','cnpj','responsavel_um','telefone','celular','status')->get())
            ->editColumn('status',function ($client){
                return '<span class="badge badge-success">'.$client->status.'</span>';
            })
            ->addColumn('options',function($client){
                $buttons = '<a href="'. route('admin.clients.edit',['id'=>$client->id]) .'" class="btn btn-info">Editar</a>';
                $buttons .= ' | ';
                $buttons .= '<a href="'. route('admin.clients.show',['id' => $client->id]) .'" class="btn btn-danger">Detalhes</a> ';
                return $buttons;
            })
            ->rawColumns(['razao_social','nome_fantasia','cnpj','responsavel_um','telefone','celular','status','options'])
            ->toJson();

    }

    public function getClients()
    {
        return response()->json(Client::all());
    }
}
