<?php

namespace App\Http\Controllers;

use App\Models\Animale;
use App\Models\Raza;
use Illuminate\Http\Request;

/**
 * Class RazaController
 * @package App\Http\Controllers
 */
class RazaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $razas = Raza::all();

        return view('raza.index', compact('razas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $raza = new Raza();
        $animales = Animale::all();
        return view('raza.create', compact('raza', 'animales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Raza::$rules);

        $raza = Raza::create($request->all());

        return redirect()->route('razas.index')
            ->with('success', 'Raza creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $raza = Raza::find($id);

        return view('raza.show', compact('raza'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $raza = Raza::find($id);

        $animales = Animale::all();
        return view('raza.edit', compact('raza', 'animales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Raza $raza
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Raza $raza)
    {
        request()->validate(Raza::$rules);

        $raza->update($request->all());

        return redirect()->route('razas.index')
            ->with('success', 'Raza actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $raza = Raza::find($id)->delete();

        return redirect()->route('razas.index')
            ->with('success', 'Raza eliminado correctamente');
    }
}
