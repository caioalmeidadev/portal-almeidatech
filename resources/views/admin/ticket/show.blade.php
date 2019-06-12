@extends('layouts.master')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-8">
        <div class="card">
            <div class="card-header no-border">
                <h3 class="card-title">Chamado {{ $ticket->id }}</h3>
            </div>

            <div class="card-body">
                <div class="row mb-3">
                    <div class="col">
                        <h4>Data de Criação:</h4>
                        {{ date('d/m/Y',strtotime($ticket->create_date)) }}
                    </div>
                    <div class="col">
                        <h4>Data de Expiração:</h4>
                        {{ $ticket->expire_date == null ? '' : date('d/m/Y',strtotime($ticket->expire_date)) }}
                    </div>

                    <div class="col">
                        <h4>Status:</h4>
                        <span class="badge badge-success">{{ $ticket->status }}</span>
                    </div>

                    <div class="col">
                        <h4>Cliente</h4>
                        {{ $ticket->clients->razao_social}}
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <div class="col">
                            <h4>Titulo:</h4>
                            {{ $ticket->title }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col">
                        <small>Criado por:</small>
                        {{ $ticket->users->name}}
                    </div>
                </div>
            </div>

            <div class="card-footer bg-transparent">
                <div class="row float-right">
                <a href="{{route('admin.tickets.edit',['id' => $ticket->id])}}" class="btn btn-primary btn-flat">Editar</a>
                <a href="#" class="btn btn-success btn-flat">Finalizar</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

@endsection
