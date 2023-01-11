<?php

use App\Http\Controllers\AnimaleController;
use App\Http\Controllers\AnticonceptivoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\EnfermedadeController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\RazaController;
use App\Http\Controllers\RecetaController;
use App\Http\Controllers\TratamientoController;
use App\Http\Controllers\TratamientopredController;
use App\Http\Controllers\UniMedidaController;
use App\Http\Controllers\VacunaController;
use App\Http\Livewire\AtencionConsulta;
use App\Http\Livewire\Consulta;
use App\Http\Livewire\FormMedicamento;
use App\Http\Livewire\Historial;
use App\Http\Livewire\HistorialAnticonceptivo;
use App\Http\Livewire\HistorialVacunacion;
use App\Http\Livewire\NuevaVacunacion;
use App\Http\Livewire\NuevoAnticonceptivo;
use App\Http\Livewire\NuevoPaciente;
use App\Http\Livewire\Tratamientos;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('example',function(){
    return view('example');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::resource('clientes', ClienteController::class)->middleware('auth');
Route::resource('animales', AnimaleController::class)->middleware('auth');
Route::resource('razas', RazaController::class)->middleware('auth');
Route::resource('pacientes', PacienteController::class)->middleware('auth');

Route::resource('unimedidas', UnimedidaController::class)->middleware('auth');
Route::resource('medicamentos', MedicamentoController::class)->middleware('auth');

Route::resource('tratamientos', TratamientoController::class)->middleware('auth');
Route::resource('recetas', RecetaController::class)->middleware('auth');
Route::resource('consultas', ConsultaController::class)->middleware('auth');
Route::resource('vacunas',VacunaController::class)->middleware('auth');
Route::resource('tratamientopreds',TratamientopredController::class)->names('tratamientopreds')->middleware('auth');
Route::resource('anticonceptivos',AnticonceptivoController::class)->names('anticonceptivos')->middleware('auth');
Route::resource('enfermedades',EnfermedadeController::class)->names('enfermedades');

Route::get('vacunacion/{id}', NuevaVacunacion::class)->middleware('auth');
Route::get('nuevo-paciente/{id}', NuevoPaciente::class)->middleware('auth');
Route::get('consulta', Consulta::class)->middleware('auth');
Route::get('atencion-consulta/{id}', AtencionConsulta::class)->middleware('auth');
Route::get('tratamientos',Tratamientos::class)->name('tratamientos')->middleware('auth');
Route::get('nuevo-anticonceptivo/{id}',NuevoAnticonceptivo::class)->name('nuevo-anticonceptivo')->middleware('auth');

Route::get('historial', Historial::class);

Route::get('historial-vacunacion/{id}', HistorialVacunacion::class);

Route::get('historial-anticonceptivo/{id}', HistorialAnticonceptivo::class);


Route::get('install',function(){
    return view('install.index');
})->name('install');
