<?php

namespace premium\Http\Controllers;

use Illuminate\Http\Request;
use premium\Http\Requests\UsersRequest;
use premium\Http\Requests\UserUpdateRequest;
use Session;
use premium\User;
use premium\Role;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = trim($request -> get('searchText'));

        $users = User::select('users.id','users.name','users.email','roles.name as rol')
        ->join('roles','roles.id','users.role_id')
        ->where('users.name','LIKE','%'.$query.'%')
        ->orwhere('users.email','LIKE','%'.$query.'%')
        ->orwhere('roles.name','LIKE','%'.$query.'%')
        ->paginate(5);

        return view('user.index',
        [
        'searchText' => $query,
        'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::where('id', '>', 1)->orderBy('id', 'Desc')->get();
        return view('user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {

        User::Create([
            'name' => $request['name'],
            'role_id' => $request['role_id'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);

        Session::flash('message', 'Usuario Creado Correctamente.');
        return redirect('usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::select('users.id','users.name','users.email','roles.name as rol')
        ->join('roles','roles.id','users.role_id')->findOrFail($id);

        $roles = Role::where('id', '>', 1)->orderBy('id', 'Desc')->get();

        return view('user.edit', ['users' => $users, 'roles' => $roles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {

        $this->validate(
            $request, [
            'email' => 'required|unique:users,email,'.$id,

        ],
            $messages = [
            'email.unique' => 'El Email que ha ingresado ya está en uso.',
        ]);

        $users = User::FindOrFail($id);

        $users->update([
            'name' => $request->name,
            'role_id' => $request->role_id,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Session::flash('message', 'Usuario Actualizado Correctamente.');
        return redirect('usuario');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::findOrfail($id);
        $users->delete();

        Session::flash('message', 'Usuario Eliminado Correctamente.');
        return redirect('usuario');
    }
}
