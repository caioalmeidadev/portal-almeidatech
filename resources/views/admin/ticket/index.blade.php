@extends('layouts.master')
@push('scripts')
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {

    $('#tbTickets').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('admin.tickets.getTickets') }}',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'client_name', name: 'client_name'},
            {data: 'create_date', name: 'create_date'},
            {data: 'expire_date', name: 'expire_date'},
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

        <div class="row justify-content-center">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header no-border">
                    <h3 class="card-title">Listagem de Clientes</h3>
                    <div class="card-tools">
                    <a href="{{route('admin.tickets.create')}}" class="btn btn-tool btn-sm"> <i class="fas fa-clipboard-list"></i> </a>
                    </div>
                </div>

                <div class="card-body">
                    <table id='tbTickets' class="table table-striped">
                        <thead>
                            <tr>
                                    <th>Ticket ID</th>
                                    <th>Cliente</th>
                                    <th>Data Abertura</th>
                                    <th>Data Fechamento</th>
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
@endsection
