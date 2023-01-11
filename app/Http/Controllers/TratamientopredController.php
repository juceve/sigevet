<?php

namespace App\Http\Controllers;

use App\Models\Medxtrat;
use App\Models\Tratamientopred;
use Illuminate\Http\Request;

/**
 * Class TratamientopredController
 * @package App\Http\Controllers
 */
class TratamientopredController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tratamientopreds = Tratamientopred::paginate();

        return view('tratamientopred.index', compact('tratamientopreds'))
            ->with('i', (request()->input('page', 1) - 1) * $tratamientopreds->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tratamientopred = new Tratamientopred();
        return view('tratamientopred.create', compact('tratamientopred'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tratamientopred::$rules);

        $tratamientopred = Tratamientopred::create($request->all());

        return redirect()->route('tratamientopreds.index')
            ->with('success', 'Tratamientopred created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tratamientopred = Tratamientopred::find($id);
        $tratamientos = Medxtrat::where('tratamientopred_id',$id)->get();
        return view('tratamientopred.show', compact('tratamientopred','tratamientos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tratamientopred = Tratamientopred::find($id);

        return view('tratamientopred.edit', compact('tratamientopred'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tratamientopred $tratamientopred
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tratamientopred $tratamientopred)
    {
        request()->validate(Tratamientopred::$rules);

        $tratamientopred->update($request->all());

        return redirect()->route('tratamientopreds.index')
            ->with('success', 'Tratamientopred updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tratamientopred = Tratamientopred::find($id)->delete();

        return redirect()->route('tratamientopreds.index')
            ->with('success', 'Tratamientopred deleted successfully');
    }
}
