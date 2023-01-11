<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Consulta
 *
 * @property $id
 * @property $anamnesis
 * @property $diagpresuntivo
 * @property $diagconlusivo
 * @property $fecreconsulta
 * @property $recomendaciones
 * @property $user_id
 * @property $paciente_id
 * @property $dateConsulta
 * @property $importe
 * @property $created_at
 * @property $updated_at
 *
 * @property Paciente $paciente
 * @property Receta[] $recetas
 * @property Tratamiento[] $tratamientos
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Consulta extends Model
{
    
    static $rules = [
		'anamnesis' => 'required',
		'user_id' => 'required',
		'paciente_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['anamnesis','diagpresuntivo','diagconclusivo','fecreconsulta','recomendaciones','user_id','paciente_id','dateConsulta','importe'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paciente()
    {
        return $this->hasOne('App\Models\Paciente', 'id', 'paciente_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recetas()
    {
        return $this->hasMany('App\Models\Receta', 'consulta_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tratamientos()
    {
        return $this->hasMany('App\Models\Tratamiento', 'consulta_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
