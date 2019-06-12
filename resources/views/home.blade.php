@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="card card-info">
            <div class="card-header">
                <div class="card-title">
                    <h3>Clientes</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1">
                                <i class="fas fa-users"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text"> Clientes Cadastrados </span>
                                <span class="info-box-number">10</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-danger elevation-1">
                                <i class="fas fa-users"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text"> Clientes Bloquados </span>
                                <span class="info-box-number">3</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-danger elevation-1">
                                <i class="fas fa-users"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text"> Clientes Com Atraso </span>
                                <span class="info-box-number">5</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-success elevation-1">
                                <i class="fas fa-users"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text"> Chamados do dia </span>
                                <span class="info-box-number">2</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card card-danger">
            <div class="card-header">
                <div class="card-title">
                    <h3>Chamados no Sistema</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1">
                                <i class="fas fa-users"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text"> Chamados do Dia </span>
                                <span class="info-box-number">10</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-danger elevation-1">
                                <i class="fas fa-users"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text"> Chamados em Atraso </span>
                                <span class="info-box-number">3</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-danger elevation-1">
                                <i class="fas fa-users"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text"> Chamados Finalizados </span>
                                <span class="info-box-number">5</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-success elevation-1">
                                <i class="fas fa-users"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text"> Total de Chamado </span>
                                <span class="info-box-number">2</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
@endsection
