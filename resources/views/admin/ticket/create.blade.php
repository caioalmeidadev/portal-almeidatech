@extends('layouts.master')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12">


                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h3>Novo Chamado</h3>
                        </div>
                    </div>

                        {!! Form::open([
                            'route' => 'admin.tickets.store',
                            'method' => 'POST',
                        ]) !!}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                    <div class="form-group">
                                            {!! Form::label('create_date', 'Data Abertura: ') !!}
                                            {!! Form::date('create_date', \Carbon\Carbon::now(), ['class' => 'form-control text-uppercase','autofocus']) !!}
                                    </div>
                            </div>
                            <div class="col-6">
                                    <div class="form-group">
                                            {!! Form::label('expire_date', 'Data Fechamento: ') !!}
                                            {!! Form::date('expire_date', null, ['class' => 'form-control text-uppercase']) !!}
                                        </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                    <div class="form-group">
                                            {!! Form::label('contact_name', 'Nome do Contato: ') !!}
                                            {!! Form::text('contact_name', null, ['class' => 'form-control text-uppercase']) !!}
                                        </div>
                            </div>
                            <div class="col-6">
                                    <div class="form-group">
                                            {!! Form::label('contact', 'Nº do Contato: ') !!}
                                            {!! Form::text('contact', null, ['class' => 'form-control text-uppercase']) !!}
                                        </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    {!! Form::label('title', 'Titulo Chamado') !!}
                                    {!! Form::text('title', null, ['class' => 'form-control text-uppercase']) !!}
                                </div>
                            </div>
                            <div class="col-12">
                                    <div class="form-group">
                                            {!! Form::label('descryption', 'Descrição') !!}
                                            {!! Form::textarea('descryption', null, ['class' => 'form-control text-uppercase']) !!}
                                    </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    {!! Form::label('client_id', 'Titulo Chamado') !!}
                                    {!! Form::select('client_id', \App\Models\Client::where('status','=','0')->pluck('razao_social','id'),null, ['class' => 'form-control text-uppercase']) !!}
                                </div>
                            </div>
                            <div class="col-4"></div>
                            <div class="col-4">
                                    <div class="form-group">
                                        {!! Form::label('tech_id', 'Técnico Responsavél: ') !!}
                                        {!! Form::select('tech_id', \App\User::pluck('name','id'),null, ['class' => 'form-control text-uppercase']) !!}
                                    </div>
                            </div>
                        </div>


                        <div class="card-footer no-border p-0">
                            {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
                        </div>


                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
