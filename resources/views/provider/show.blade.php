@extends('layouts.admin')
@section('title' , 'Detalle Proveedor')
@section('content')
@include('alerts.success')
<style>
    h4{
        color:red;
        font-size: 20px;
        margin: 20px;
    }

    span{
        color: black;
        text-transform: uppercase;
    }
</style>
    <h2>Informe detallado</h2>
    <hr>

    <h4>Empresa: <span>{{ $providers->company }}</span></h4>
    <h4>Rif: <span>{{ $providers->rif }}</span></h4>
    <h4>Correo: <span>{{ $providers->email }}</span></h4>
    <h4>Dirección Físcal: <span>{{ $providers->direction }}</span></h4>
    <h4>Telefono: <span>{{ $providers->phone }}</span></h4>
    <h4>Tipo de servicio: <span>{{ $providers->ser }}</span></h4>
    <h4>Agregado por: <span>Fulanito</span> el dia <span>{{ $providers->created_at }}</span></h4>
    <h4>Modificado por: <span>Merengano</span> el dia <span>{{ $providers->updated_at }}</span></h4>

    <div class="text-center">
        <a href="{{ route('ProviderEdit' , [$providers->id]) }}"><button class="btn btn-primary">Modificar</button></a>
        <a href="{{ URL('proveedores') }}"><button class="btn btn-danger">Volver atras</button></a>
    </div>

@endsection
