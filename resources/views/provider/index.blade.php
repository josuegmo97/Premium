@extends('layouts.admin')
@section('title' , 'Lista de Proveedores')
@section('content')
@include('alerts.success')

    <h2>Listado de Proveedores</h2>

    <div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			@include('provider.modal.search')
		</div>
	</div>

    <table class="table">
        <thead>
            <th>Rif</th>
            <th>Empresa</th>
            <th>Dir. Fiscal</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Tipo de servicio</th>
            <th>Agregado por</th>
        </thead>
        {{--  @foreach ($providers as $provider) --}}
        <tbody>
            <td>J-19256932-2</td>
            <td>Polar Light</td>
            <td>Av Casanova, calle 45 boston</td>
            <td>0212-462-34-16</td>
            <td>empresaspolar@gmail.com</td>
            <td>Electricista</td>
            <td>Sandra</td>
            <td>
                <a {{-- href="{{ route('UserEdit' , [$provider->id]) }} --}}"><button class="btn btn-primary">Ver mas</button></a>
                <a {{-- href="" data-target="#modal-delete-{{ $provider->id }}" --}} data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
            </td>
        </tbody>
        {{-- @include('provider.modal.delete')
        @endforeach --}}
    </table>
    {{-- {{ $providers -> render()}} --}}

@endsection
