<?php

namespace premium\Http\Controllers;

use Illuminate\Http\Request;
use premium\Service;
use premium\Http\Requests\ServiceRequest;
use Session;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = trim($request -> get('searchText'));

        $services = Service::
        orderBy('name', 'asc')
        ->where('name','LIKE','%'.$query.'%')
        ->paginate(15);

        return view('service.index', [
        'searchText' => $query,
        'services' => $services
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        $services = Service::create([
            'name' => $request['service'],
        ]);

            Session::flash('message', 'Nuevo Servicio Agregado.');
            return redirect('extra/servicio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services = Service::findOrFail($id);
        $services->delete();

        Session::flash('message', 'Servicio Eliminado Correctamente.');
        return redirect('extra/servicio');
    }
}
