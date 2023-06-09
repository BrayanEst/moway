<?php

namespace App\Http\Controllers;

use App\Models\Recorrido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecorridoApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recorrido = recorrido::all();
        return $recorrido;
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
        $recorrido = new recorrido();

        $recorrido->nombre_ruta=$request->nombre_ruta;
        $recorrido->numero_ruta=$request->numero_ruta;
        $recorrido->url_recorrido=$request->url_recorrido;
        $recorrido->imagen_recorrido=$request->imagen_recorrido;

        $recorrido->id_horario=$request->id_horario;
        $recorrido->id_empresa=$request->id_empresa;

        $recorrido->save();

        return response()->json([
            'menssage' => 'success',
            'info'=>'empresa creada',
            'producto'=>$recorrido,
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\recorrido  $recorrido
     * @return \Illuminate\Http\Response
     */
    public function show(recorrido $recorrido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\recorrido  $recorrido
     * @return \Illuminate\Http\Response
     */
    public function edit(recorrido $recorrido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\recorrido  $recorrido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, recorrido $recorrido)
    {
        $recorrido = recorrido::findOrFail($request->id);

        $recorrido->nombre_ruta=$request->nombre_ruta;
        $recorrido->numero_ruta=$request->numero_ruta;
        $recorrido->url_recorrido=$request->url_recorrido;
        $recorrido->imagen_recorrido=$request->imagen_recorrido;

        $recorrido->id_horario=$request->id_horario;
        $recorrido->id_empresa=$request->id_empresa;


        $recorrido->save();

        return response()->json([
            'menssage' => 'success',
            'info'=>'se actualizo su informacion',
            'producto'=>$recorrido,

        ],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\recorrido  $recorrido
     * @return \Illuminate\Http\Response
     */
    public function destroy(recorrido $id)
    {
        $id->delete();

        return response()->json([
            'menssage' => 'success',
            'info'=>'se elimino recorrido correctamente'

        ],201);
    }
    public function ConsultaRecorridos_rutas_empresa($id){
        $recorrido=DB::table('recorridos')
        ->join('empresas','empresas.id' , '=' , 'recorridos.id_empresa')
        ->select('recorridos.numero_ruta','recorridos.url_recorrido','recorridos.imagen_recorrido','recorridos.nombre_ruta','recorridos.id')
        ->where('empresas.id' , '=' , $id)
        ->get();
        return $recorrido;
    }

    public function ConsultaRecorridos_Imagen_ruta_empresa($id,$id_recorrido){
        $recorrido=DB::table('recorridos')
        ->join('empresas','empresas.id' , '=' , 'recorridos.id_empresa')
        ->select('recorridos.numero_ruta','recorridos.url_recorrido','recorridos.imagen_recorrido','recorridos.id')
        ->where('recorridos.id', '=' , $id_recorrido)
        ->where('empresas.id' , '=' ,$id)
        ->get();
        return $recorrido;
    }
    public function Recorrido_Horario($id){
        $recorrido=DB::table('recorridos')
        ->join('horarios','horarios.id' , '=' , 'recorridos.id_horario')
        ->select('horarios.hora_inicio_semana','horarios.hora_final_semana','horarios.hora_inicio_festivo','horarios.hora_final_festivo')
        ->where('recorridos.id' , '=' , $id)
        ->get();
        return $recorrido;
    }
    public function Recorrido_Parada($id){
        $recorrido_parada=DB::table('recorrido_paradas')
        ->join('paradas','paradas.id' , '=' , 'recorrido_paradas.id_parada')
        ->join('recorridos','recorridos.id' , '=' , 'recorrido_paradas.id_recorrido')
        ->select('paradas.parada')
        ->where('recorridos.id' , '=' , $id)
        ->get();
        return $recorrido_parada;
    }
}
