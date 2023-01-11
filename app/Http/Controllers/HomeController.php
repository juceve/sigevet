<?php

namespace App\Http\Controllers;

use App\Models\Anticonceptivo;
use App\Models\Cliente;
use App\Models\Consulta;
use App\Models\Paciente;
use App\Models\Vacuna;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cClientes = Cliente::count();
        $cPacientes = Paciente::count();
        $cConsultas = Consulta::where('anamnesis','<>','01-Vacunacion')        
                                ->count();
        
        $lReconsultas = Consulta::where('fecreconsulta',date('Y-m-d'))->get();
        $lVacunas = Vacuna::where('proxdosis',date('Y-m-d'))->get();
        $lAnticonceptivos = Anticonceptivo::where('proxdosis',date('Y-m-d'))->get();
        $cVacunas = Vacuna::count();
        return view('home', compact('cClientes','cPacientes','cConsultas','cVacunas', 'lReconsultas', 'lVacunas', 'lAnticonceptivos'));
    }
}
