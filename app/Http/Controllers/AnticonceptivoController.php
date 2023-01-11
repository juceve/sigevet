<?php

namespace App\Http\Controllers;

use App\Models\Anticonceptivo;
use Illuminate\Http\Request;

/**
 * Class AnticonceptivoController
 * @package App\Http\Controllers
 */
class AnticonceptivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anticonceptivos = Anticonceptivo::paginate();

        return view('anticonceptivo.index', compact('anticonceptivos'))
            ->with('i', (request()->input('page', 1) - 1) * $anticonceptivos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $anticonceptivo = new Anticonceptivo();
        return view('anticonceptivo.create', compact('anticonceptivo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Anticonceptivo::$rules);

        $anticonceptivo = Anticonceptivo::create($request->all());

        return redirect()->route('anticonceptivos.index')
            ->with('success', 'create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anticonceptivo = Anticonceptivo::find($id);

        return view('anticonceptivo.show', compact('anticonceptivo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anticonceptivo = Anticonceptivo::find($id);

        return view('anticonceptivo.edit', compact('anticonceptivo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Anticonceptivo $anticonceptivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anticonceptivo $anticonceptivo)
    {
        request()->validate(Anticonceptivo::$rules);

        $anticonceptivo->update($request->all());

        return redirect()->route('anticonceptivos.index')
            ->with('success', 'update');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $anticonceptivo = Anticonceptivo::find($id)->delete();

        return redirect()->route('anticonceptivos.index')
            ->with('success', 'delete');
    }
}
