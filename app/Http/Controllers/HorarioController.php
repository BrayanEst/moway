<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Http\Request;

/**
 * Class HorarioController
 * @package App\Http\Controllers
 */
class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarios = Horario::paginate();

        return view('Horario.index', compact('horarios'))
            ->with('i', (request()->input('page', 1) - 1) * $horarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $horario = new Horario();
        return view('Horario.create', compact('horario'));
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
            'nombre_horario'=>'required|string|max:100',
            'hora_inicio_semana'=>'required|string|max:100',
            'hora_final_semana'=>'required|string|max:100',
            'hora_inicio_festivo'=>'required|string|max:100',
            'hora_final_festivo'=>'required|string|max:100',
        ];
        $mensaje=[
                'required'=>'El :attribute es requerido'
        ];
        $this->validate($request,$campos,$mensaje);
        request()->validate(Horario::$rules);

        $horario = Horario::create($request->all());

        return redirect()->route('horarios.index')
            ->with('success', 'Horario creado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $horario = Horario::find($id);

        return view('Horario.show', compact('horario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $horario = Horario::find($id);

        return view('Horario.edit', compact('horario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Horario $horario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horario $horario)
    {
        $campos=[
            'nombre_horario'=>'required|string|max:100',
            'hora_inicio_semana'=>'required|string|max:100',
            'hora_final_semana'=>'required|string|max:100',
            'hora_inicio_festivo'=>'required|string|max:100',
            'hora_final_festivo'=>'required|string|max:100',
        ];
        $mensaje=[
                'required'=>'El :attribute es requerido'
        ];
        $this->validate($request,$campos,$mensaje);
        request()->validate(Horario::$rules);

        $horario->update($request->all());

        return redirect()->route('horarios.index')
            ->with('success', 'Horario actualizado con Exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $horario = Horario::find($id)->delete();

        return redirect()->route('horarios.index')
            ->with('success', 'Horario eliminado con Exito');
    }
}
