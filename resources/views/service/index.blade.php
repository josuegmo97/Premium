@extends('layouts.admin')
@section('title' , 'Lista de Servicios')
@section('content')
@include('alerts.success')

    <h2>Listado de Servicios </h2>

    <div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			@include('service.modal.search')
        </div>
        <div class="col-md-4">
            <a href="" data-target="#modal-create" data-toggle="modal"><button class="btn btn-success">Agregar</button></a>
            @include('service.modal.create')
        </div>
	</div>

    <table class="table table-striped">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Tipo de servicio</th>
        </thead>

        @foreach($services as $service)
        <tbody>
            <td scope="row">{{ $service->id }}</td>
            <td style="text-transform:uppercase;">{{ $service->name }}</td>
            <td>
                <a href="" data-target="#modal-delete-{{ $service->id }}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
            </td>
        </tbody>
        @include('service.modal.delete')
        @endforeach
    </table>
    {{ $services->render() }}


@endsection
