@extends('layouts.app')

@section('template_title')
    {{ $vehiculo->name ?? 'Mostrar Vehiculo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Vehiculo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('vehiculos.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Placa:</strong>
                            {{ $vehiculo->placa }}
                        </div>
                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $vehiculo->color }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $vehiculo->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Vehiculo:</strong>
                            {{ $vehiculo->tipo_vehiculo }}
                        </div>
                        <div class="form-group">
                            <strong>Id Propietario:</strong>
                            {{ $vehiculo->id_propietario }}
                        </div>
                        <div class="form-group">
                            <strong>Id Conductor:</strong>
                            {{ $vehiculo->id_conductor }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
