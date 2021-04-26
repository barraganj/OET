@extends('layouts.app')

@section('template_title')
    Propietario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Propietarios') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('propietarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                    @foreach ($propietarios as $propietario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $propietario->cedula }}</td>
											<td>{{ $propietario->primer_nombre }}</td>
											<td>{{ $propietario->segundo_nombre }}</td>
											<td>{{ $propietario->apellidos }}</td>
											<td>{{ $propietario->direccion }}</td>
											<td>{{ $propietario->ciudad }}</td>
											<td>{{ $propietario->telefono }}</td>

                                            <td>
                                                <form action="{{ route('propietarios.destroy',$propietario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('propietarios.show',$propietario->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('propietarios.edit',$propietario->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $propietarios->links() !!}
            </div>
        </div>
    </div>
@endsection
