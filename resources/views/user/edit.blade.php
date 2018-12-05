@extends('layouts.admin')
@section('title' , 'Nuevo Usuario')
@section('content')

    <h2>Editar Usuario</h2>

    @include('alerts.errorsany')


    <form action="{{ route('UserUpdate', $users->id) }}" method="POST">
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PUT">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="">Nombre</label>
            <input type="text" class="form-control" name="name" id="" placeholder="Ingrese el nombre del usuario" value="{{ $users->name }}">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="">Correo</label>
                <input type="email" class="form-control" name="email" id="" placeholder="Ingrese el correo del usuario" value="{{ $users->email }}">
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
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                </select>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Registrar</button>
        <a href="{{ url('usuario') }}" class="btn btn-danger" type="submit">Cancelar</a>
    </form>

@endsection
