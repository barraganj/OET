@extends('layouts.app')

@section('template_title')
    Conductore
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Conductores') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('conductores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Cedula</th>
										<th>Primer Nombre</th>
										<th>Segundo Nombre</th>
										<th>Apellidos</th>
										<th>Direccion</th>
										<th>Ciudad</th>
										<th>Telefono</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($conductores as $conductore)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $conductore->cedula }}</td>
											<td>{{ $conductore->primer_nombre }}</td>
											<td>{{ $conductore->segundo_nombre }}</td>
											<td>{{ $conductore->apellidos }}</td>
											<td>{{ $conductore->direccion }}</td>
											<td>{{ $conductore->ciudad }}</td>
											<td>{{ $conductore->telefono }}</td>

                                            <td>
                                                <form action="{{ route('conductores.destroy',$conductore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('conductores.show',$conductore->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('conductores.edit',$conductore->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $conductores->links() !!}
            </div>
        </div>
    </div>
@endsection
