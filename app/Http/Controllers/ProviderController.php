<?php

namespace premium\Http\Controllers;

use Illuminate\Http\Request;
use premium\Http\Requests\ProviderCreateRequest;
use premium\Provider;
use premium\Service;
use Session;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = trim($request -> get('searchText'));

        $providers = Provider::select('providers.id','providers.rif','providers.company', 'providers.direction', 'providers.phone', 'providers.email' ,'services.name as ser')
        ->join('services','services.id','providers.service_id')
        ->where('providers.company','LIKE','%'.$query.'%')
        /* ->orwhere('providers.email','LIKE','%'.$query.'%') */
        ->orwhere('services.name','LIKE','%'.$query.'%')
        ->paginate(15);

        return view('provider.index',
        ['searchText' => $query,
        'providers' => $providers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::orderBy('name', 'Asc')->get();

        return view('provider.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProviderCreateRequest $request)
    {
        $services = Provider::create([
            'rif' => $request['rif'],
            'company' => $request['company'],
            'direction' => $request['direction'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'service_id' => $request['service_id'],
        ]);

        return redirect('proveedores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $providers = Provider::select('providers.id','providers.rif','providers.company', 'providers.direction', 'providers.phone', 'providers.email', 'providers.created_at', 'providers.updated_at' ,'services.name as ser')
        ->join('services','services.id','providers.service_id')
        ->findOrFail($id);

        return view('provider.show', compact('providers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $providers = Provider::findOrFail($id);
        $services = Service::orderBy('name', 'Asc')->get();

        return view('provider.edit', compact('providers'), compact('services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProviderCreateRequest $request, $id)
    {
        $providers = Provider::findOrFail($id);
        $providers->update([
            'rif' => $request['rif'],
            'company' => $request['company'],
            'direction' => $request['direction'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'service_id' => $request['service_id'],
        ]);

        Session::flash('message', 'El proveedor ha sido actualizado correctamente.');
        return redirect('proveedores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $provider = Provider::findOrFail($id);
        $provider->delete();

        Session::flash('message', 'El proveedor se ha eliminado exitosamente.');
        return redirect('proveedores');
    }
}
