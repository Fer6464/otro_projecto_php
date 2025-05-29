<?php

namespace App\Http\Controllers;

use App\Models\Solicitudes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $solicitud=DB::table('solicitudes')->get();
      return view('projects/index',['solicitudes'=>$solicitud]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view("projects/new");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Solicitudes::create($request->all());
        return redirect('solicitud/')
            ->with('success', 'Solicitud creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Solicitudes  $solicitudes
     * @return \Illuminate\Http\Response
     */
    public function show(Solicitudes $solicitudes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Solicitudes  $solicitudes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solicitud=Solicitudes::find($id);
        return view('projects/update', compact('solicitud'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Solicitudes  $solicitudes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $solicitud=Solicitudes::find($id);
        $solicitud->update($request->all());
        return redirect('solicitud/')->with('success','Solicitud actualizada satisfactoriamente.');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Solicitudes  $solicitudes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $solicitud=Solicitudes::find($id);
        $solicitud->destroy($request->all());
        return redirect('solicitud/')->with('success','Ejemplo borrado satisfactoriamente.');
    }
}
