<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use App\Models\Unimedida;
use Illuminate\Http\Request;

/**
 * Class MedicamentoController
 * @package App\Http\Controllers
 */
class MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicamentos = Medicamento::all();

        return view('medicamento.index', compact('medicamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicamento = new Medicamento();
        $unimedidas = Unimedida::all();
        return view('medicamento.create', compact('medicamento','unimedidas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Medicamento::$rules);

        $medicamento = Medicamento::create($request->all());

        return redirect()->route('medicamentos.index')
            ->with('success', 'Medicamento creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicamento = Medicamento::find($id);

        return view('medicamento.show', compact('medicamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicamento = Medicamento::find($id);
        $unimedidas = Unimedida::all();
        return view('medicamento.edit', compact('medicamento', 'unimedidas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Medicamento $medicamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicamento $medicamento)
    {
        request()->validate(Medicamento::$rules);

        $medicamento->update($request->all());

        return redirect()->route('medicamentos.index')
            ->with('success', 'Medicamento actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $medicamento = Medicamento::find($id)->delete();

        return redirect()->route('medicamentos.index')
            ->with('success', 'Medicamento eliminado correctamente');
    }
}
