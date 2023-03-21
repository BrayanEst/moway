<?php

namespace App\Http\Controllers;

use App\Models\Conductor;
use App\Models\Recorrido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

/**
 * Class ConductorController
 * @package App\Http\Controllers
 */
class ConductorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conductores = Conductor::paginate();

        return view('Conductor.index', compact('conductores'))
            ->with('i', (request()->input('page', 1) - 1) * $conductores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $conductor = new Conductor();
        $recorridos=Recorrido::pluck('nombre_ruta','id');
        return view('Conductor.create', compact('conductor','recorridos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos=[
            'nombre'=>'required|string|max:100',
            'apellido'=>'required|string|max:100',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'foto.required'=>'La imagen es requerido',
        ];
        $this->validate($request,$campos,$mensaje);


        $datos_conductor= request()->except('_token');

        if($request->hasFile('foto')){
            $datos_conductor['foto']=$request->file('foto')->store('uploads','public');
        }

        Conductor::insert($datos_conductor);

        return redirect()->route('conductores.index')
            ->with('success', 'Conductor creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $conductor = Conductor::find($id);

        return view('Conductor.show', compact('conductor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $conductor = Conductor::find($id);

        $recorridos=Recorrido::pluck('nombre_ruta','id');

        return view('Conductor.edit', compact('conductor','recorridos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Conductor $conductor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos=[
            'nombre'=>'required|string|max:100',
            'apellido'=>'required|string|max:100',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'foto.required'=>'La imagen es requerido',
        ];
        $this->validate($request,$campos,$mensaje);
        $datos_conductor= Request()->except(['_token','_method']);

        if($request->hasFile('foto')){
            $conductor=Conductor::findOrFail($id);
            Storage::delete('public/'.$conductor->foto);
            $datos_conductor['foto']=$request->file('foto')->store('uploads','public');
        }

        Conductor::where('id','=',$id)->update($datos_conductor);
        $conductor=Conductor::findOrFail($id);


        return redirect()->route('conductores.index')
            ->with('success', 'Conductor actualizado con Exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $conductor=Conductor::findOrFail($id);
        if(Storage::delete('public/'.$conductor->foto)){
        }
        Conductor::destroy($id);

        return redirect()->route('conductores.index')
            ->with('success', 'Conductor eliminado con Exito');
    }
}
