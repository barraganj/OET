@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">  
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        
                        <span id="card_title">
                            {{ __('Informe General') }}
                        </span>
                        


                    </div>
                </div>
            </div>

            <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
										<th>Placa</th>
										<th>Marca</th>
                                        <th>Conductor</th>
										<th>Propietario</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($informes as $informe)
                                        <tr>
											<td>{{ $informe->placa }}</td>
											<td>{{ $informe->marca }}</td>
											<td>{{ $informe->primer_nombre }} {{ $informe->segundo_nombre }} {{ $informe->apellidos}}</td>
											<td>{{ $informe->primer_nombre_c }} {{ $informe->segundo_nombre_c}} {{ $informe->apellidos_c }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

        </div>
    <div>
</div>
@endsection

