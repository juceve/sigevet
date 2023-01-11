<?php

namespace App\Http\Controllers;

use App\Models\Unimedida;
use Illuminate\Http\Request;

/**
 * Class UnimedidaController
 * @package App\Http\Controllers
 */
class UnimedidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unimedidas = Unimedida::all();

        return view('unimedida.index', compact('unimedidas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unimedida = new Unimedida();
        return view('unimedida.create', compact('unimedida'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Unimedida::$rules);

        $unimedida = Unimedida::create($request->all());

        return redirect()->route('unimedidas.index')
            ->with('success', 'Unimedida creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unimedida = Unimedida::find($id);

        return view('unimedida.show', compact('unimedida'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unimedida = Unimedida::find($id);

        return view('unimedida.edit', compact('unimedida'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Unimedida $unimedida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unimedida $unimedida)
    {
        request()->validate(Unimedida::$rules);

        $unimedida->update($request->all());

        return redirect()->route('unimedidas.index')
            ->with('success', 'Unimedida actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $unimedida = Unimedida::find($id)->delete();

        return redirect()->route('unimedidas.index')
            ->with('success', 'Unimedida eliminado correctamente');
    }
}
