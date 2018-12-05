@extends('layouts.admin')
@section('title' , 'Nuevo Usuario')
@section('content')

    <h2>Nuevo Usuario</h2>

    @include('alerts.errorsany')

    <form action="{{ url('usuario/nuevo') }}" method="POST">
        {{ csrf_field() }}
        <div class="col-sm-6">
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" class="form-control" name="name" id="" placeholder="Ingrese el nombre del usuario" value="{{ old('name') }}">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="">Correo</label>
                <input type="email" class="form-control" name="email" id="" placeholder="Ingrese el correo del usuario" value="{{ old('email') }}">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="">Contraseña</label>
                <input type="password" class="form-control" name="password" id="" placeholder="Ingrese la contraseña del usuario" value="{{ old('password') }}">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="">Tipo de usuario</label>
                <select name="role_id" id="" class="form-control">
                    <option></option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Registrar</button>
    </form>

@endsection

