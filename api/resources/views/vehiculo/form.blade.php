<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('placa') }}
            {{ Form::text('placa', $vehiculo->placa, ['class' => 'form-control' . ($errors->has('placa') ? ' is-invalid' : ''), 'placeholder' => 'Placa']) }}
            {!! $errors->first('placa', '<div class="invalid-feedback">Se necesita una placa</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('color') }}
            {{ Form::text('color', $vehiculo->color, ['class' => 'form-control' . ($errors->has('color') ? ' is-invalid' : ''), 'placeholder' => 'Color']) }}
            {!! $errors->first('color', '<div class="invalid-feedback">Se necesita un color</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('marca') }}
            {{ Form::text('marca', $vehiculo->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">Se necesita la marca</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_vehiculo') }}
            {{ Form::text('tipo_vehiculo', $vehiculo->tipo_vehiculo, ['class' => 'form-control' . ($errors->has('tipo_vehiculo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Vehiculo']) }}
            {!! $errors->first('tipo_vehiculo', '<div class="invalid-feedback">Se necesita el tipo de vehículo</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_propietario') }}
            {{ Form::text('id_propietario', $vehiculo->id_propietario, ['class' => 'form-control' . ($errors->has('id_propietario') ? ' is-invalid' : ''), 'placeholder' => 'Id Propietario']) }}
            {!! $errors->first('id_propietario', '<div class="invalid-feedback">Se necesita id de propietario</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_conductor') }}
            {{ Form::text('id_conductor', $vehiculo->id_conductor, ['class' => 'form-control' . ($errors->has('id_conductor') ? ' is-invalid' : ''), 'placeholder' => 'Id Conductor']) }}
            {!! $errors->first('id_conductor', '<div class="invalid-feedback">Se necesita id de conductor</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
        <div class="float-right">
             <a class="btn btn-primary" href="{{ route('vehiculos.index') }}"> Atrás</a>
        </div>
    </div>
</div>