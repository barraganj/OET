@extends('layouts.app')

@section('template_title')
    {{ $conductore->name ?? 'Mostrar Conductores' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Conductores</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('conductores.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $conductore->cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Primer Nombre:</strong>
                            {{ $conductore->primer_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Segundo Nombre:</strong>
                            {{ $conductore->segundo_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $conductore->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $conductore->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $conductore->ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $conductore->telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
