@extends('layouts.app')

@section('template_title')
    {{ $propietario->name ?? 'Show Propietario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Propietario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('propietarios.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $propietario->cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Primer Nombre:</strong>
                            {{ $propietario->primer_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Segundo Nombre:</strong>
                            {{ $propietario->segundo_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $propietario->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $propietario->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $propietario->ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $propietario->telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
