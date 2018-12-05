@extends('layouts.admin')
@section('title' , 'Lista de Usuarios')
@section('content')
@include('alerts.success')

    <h2>Listado de Usuarios</h2>

    <div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			@include('user.modal.search')
		</div>
	</div>

    <table class="table">
        <thead>
            <th>Nombre</th>
            <th>Correo Electronico</th>
            <th>Tipo de Usuario</th>
            <th>Acciones</th>
        </thead>
        @foreach ($users as $user)
        <tbody>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->rol }}</td>
            <td>
                <a href="{{ route('UserEdit' , [$user->id]) }}"><button class="btn btn-primary">Editar</button></a>
                <a href="" {{-- data-target="#modal-delete-{{ $user->id }}" --}} data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
            </td>
        </tbody>
        @include('user.modal.delete')
        @endforeach
    </table>
    {{ $users -> render()}}

@endsection
