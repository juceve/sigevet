<?php

namespace App\Http\Controllers;

use App\Models\Medxtrat;
use Illuminate\Http\Request;

/**
 * Class MedxtratController
 * @package App\Http\Controllers
 */
class MedxtratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medxtrats = Medxtrat::paginate();

        return view('medxtrat.index', compact('medxtrats'))
            ->with('i', (request()->input('page', 1) - 1) * $medxtrats->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medxtrat = new Medxtrat();
        return view('medxtrat.create', compact('medxtrat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Medxtrat::$rules);

        $medxtrat = Medxtrat::create($request->all());

        return redirect()->route('medxtrats.index')
            ->with('success', 'Medxtrat created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medxtrat = Medxtrat::find($id);

        return view('medxtrat.show', compact('medxtrat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medxtrat = Medxtrat::find($id);

        return view('medxtrat.edit', compact('medxtrat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Medxtrat $medxtrat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medxtrat $medxtrat)
    {
        request()->validate(Medxtrat::$rules);

        $medxtrat->update($request->all());

        return redirect()->route('medxtrats.index')
            ->with('success', 'Medxtrat updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $medxtrat = Medxtrat::find($id)->delete();

        return redirect()->route('medxtrats.index')
            ->with('success', 'Medxtrat deleted successfully');
    }
}
