<?php

namespace App\Http\Controllers;

use App\Models\Conductor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class ConductorApiController
 * @package App\Http\Controllers
 */
class ConductorApiController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conductor = Conductor::all();
        return $conductor;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $conductor = new Conductor();
        $conductor->nombre =$request->nombre;
        $conductor->apellido =$request->apellido;
        $conductor->foto =$request->foto;

        $conductor->save();

        return response()->json([
            'menssage' => 'success',
            'info'=>'conductor creada',
            'producto'=>$conductor,
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Conductor  $conductor
     * @return \Illuminate\Http\Response
     */
    public function show(Conductor $conductor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Conductor  $conductor
     * @return \Illuminate\Http\Response
     */
    public function edit(Conductor $conductor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Conductor  $conductor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conductor $conductor)
    {
        $conductor = Conductor::findOrFail($request->id);

        $conductor->nombre =$request->nombre;
        $conductor->apellido =$request->apellido;
        $conductor->foto =$request->foto;

        $conductor->save();

        return response()->json([
            'menssage' => 'success',
            'info'=>'se actualizo su informacion',
            'producto'=>$conductor,

        ],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conductor  $conductor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conductor $id)
    {
        $id->delete();

        return response()->json([
            'menssage' => 'success',
            'info'=>'se elimino conductor correctamente'

        ],201);
    }
    public function Conductor_Recorrido($id_recorrido){
        $conductor=DB::table('conductors')
        ->join('recorridos','recorridos.id' , '=' , 'conductors.id_recorrido')
        ->select('conductors.nombre','conductors.apellido','conductors.foto')
        ->where('recorridos.id' , '=' , $id_recorrido)
        ->get();
        return $conductor;
    }
}
