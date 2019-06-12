@extends('layouts.master')
@push('scripts')
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {

    $('#tbClients').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('admin.clients.listClients') }}',
        columns: [
            {data: 'razao_social', name: 'razao_social'},
            {data: 'nome_fantasia', name: 'nome_fantasia'},
            {data: 'cnpj', name: 'cnpj'},
            {data: 'responsavel_um', name: 'responsavel_um'},
            {data: 'telefone', name: 'telefone'},
            // {data: 'celular', name: 'celular'},
             {data: 'status', name: 'status'},
             {data: 'options', name: 'options'},
        ]
    });
    });

</script>
@endpush

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

@endpush
@section('content')
    <div class="content">

        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header no-border">
                    <h3 class="card-title">Listagem de Clientes</h3>
                    <div class="card-tools">
                    <a href="{{route('admin.clients.create')}}" class="btn btn-tool btn-sm"> <i class="fas fa-user-plus blue"></i> </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="col-12">
                    <table id='tbClients' class="table table-striped table-responsive">
                        <thead>
                            <tr>
                                    <th>Razão Social</th>
                                    <th>Nome Fantasia</th>
                                    <th>CNPJ</th>
                                    <th>Responsável</th>
                                    <th>Telefone</th>
                                    <th>Status</th>
                                    <th>Opções</th>
                            </tr>
                        </thead>

                        <tbody>
                            {{-- @foreach ($clients as $client)
                                <tr>
                                    <td> {{ $client->id}} </td>
                                    <td> {{ $client->razao_social}} </td>
                                    <td> {{ $client->nome_fantasia }}</td>
                                    <td> {{ $client->situacao }} </td>
                                </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
          </div>
        </div>

    </div>
@endsection
