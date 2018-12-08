@extends('layouts.admin')
@section('title' , 'Editar Proovedor')
@section('content')

    <h2>Editar Proovedor</h2>

    @include('alerts.errorsany')

    <form action="{{ route('ProviderUpdate', $providers->id) }}" method="POST">
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PUT">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="">Cédula o Rif</label>
                <input type="text" autocomplete="off" class="form-control" style="text-transform: capitalize;" name="rif" id="" placeholder="Ingrese el documento del Proveedor" value="{{ $providers->rif }}">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="">Empresa</label>
                <input type="text" autocomplete="off" class="form-control" name="company" id="" placeholder="Ingrese el nombre de la empresa del Proveedor" value="{{ $providers->company }}">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="">Dirección Físcal</label>
                <input type="text" autocomplete="off" class="form-control" name="direction" id="" placeholder="Ingrese la dirección Proveedor" value="{{ $providers->direction }}">
            </div>
        </div>
        <div class="col-sm-6">
                <div class="form-group">
                    <label for="">Teléfonos</label>
                    <input type="text" autocomplete="off" class="form-control" name="phone" id="" placeholder="Ingrese la contraseña del Proveedor" value="{{ $providers->phone }}">
                </div>
            </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="">Correo Eléctronico</label>
                <input type="text" autocomplete="off" class="form-control" name="email" id="" placeholder="Ingrese el correo del Proveedor" value="{{ $providers->email }}">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="">Tipo de Servicio</label>
                <select name="service_id" id="" class="form-control">
                    <option selected></option>
                    {{-- <option>Electricista</option>
                    <option>Medico</option>
                    <option>Agricultor</option>
                    <option>Albañil</option>
                    <option>Mantenimiento</option>
                    <option>Informatico</option>
                    <option>Ingeniero</option>
                    <option>Militar</option>
                    <option>Paramedico</option>
                    <option>Grua</option>
                    <option>Ambulancia</option>
                    <option>Cantante</option>
                    <option>Electricista</option>
                    <option>Medico</option>
                    <option>Agricultor</option>
                    <option>Albañil</option>
                    <option>Mantenimiento</option>
                    <option>Informatico</option>
                    <option>Ingeniero</option>
                    <option>Militar</option>
                    <option>Paramedico</option>
                    <option>Grua</option>
                    <option>Ambulancia</option>
                    <option>Cantante</option>
                    <option>Electricista</option>
                    <option>Medico</option>
                    <option>Agricultor</option>
                    <option>Albañil</option>
                    <option>Mantenimiento</option>
                    <option>Informatico</option>
                    <option>Ingeniero</option>
                    <option>Militar</option>
                    <option>Paramedico</option>
                    <option>Grua</option>
                    <option>Ambulancia</option>
                    <option>Cantante</option>
                    <option>Electricista</option>
                    <option>Medico</option>
                    <option>Agricultor</option>
                    <option>Albañil</option>
                    <option>Mantenimiento</option>
                    <option>Informatico</option>
                    <option>Ingeniero</option>
                    <option>Militar</option>
                    <option>Paramedico</option>
                    <option>Grua</option>
                    <option>Ambulancia</option>
                    <option>Cantante</option> --}}

                    @foreach ($services as $service)
                        <option value="{{ $service->id }}" style="text-transform: capitalize;">{{ $service->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Registrar</button>
    </form>

@endsection
