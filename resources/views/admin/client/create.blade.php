@extends('layouts.master')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="callout callout-info">
                    Cadatro de Clientes
                </div>

                <div class="card">
                        {!! Form::open([
                            'route' => 'admin.clients.store',
                            'method' => 'POST',
                        ]) !!}
                    <div class="card-body">

                        <div class="form-group">
                            {!! Form::label('razao_social', 'Razao Social') !!}
                            {!! Form::text('razao_social', null, ['class' => 'form-control text-uppercase']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('nome_fantasia', 'Nome Fantasia') !!}
                            {!! Form::text('nome_fantasia', null, ['class' => 'form-control text-uppercase']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('cnpj', 'CNPJ') !!}
                            {!! Form::text('cnpj', null, ['class' => 'form-control text-uppercase']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('responsavel_um', 'Responsavél I') !!}
                            {!! Form::text('responsavel_um', null, ['class' => 'form-control text-uppercase']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('responsavel_dois', 'Responsavél II') !!}
                            {!! Form::text('responsavel_dois', null, ['class' => 'form-control text-uppercase']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('telefone', 'Telefone') !!}
                            {!! Form::text('telefone', null, ['class' => 'form-control text-uppercase']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('segment', 'Ramo de Atividade') !!}
                            {!! Form::select('segment_id', $segments->pluck('descricao','id'),null,['placeholder' => 'ESCOLHA UM RAMO DE ATIVIDADE','class' => 'form-control text-uppercase']) !!}
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                            {!! Form::checkbox('nfe',0,false, ['class' => 'form-input-check']) !!}
                            {!! Form::label('nfe', 'NFe') !!}

                            {!! Form::checkbox('nfce',0,false, ['class' => 'form-input-check']) !!}
                            {!! Form::label('nfce', 'NFCe') !!}

                            {!! Form::checkbox('nfse',0,false, ['class' => 'form-input-check']) !!}
                            {!! Form::label('nfse', 'NFSe') !!}

                            {!! Form::checkbox('sped',0,false, ['class' => 'form-input-check']) !!}
                            {!! Form::label('sped', 'SPED') !!}
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
