<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Receta
 *
 * @property $id
 * @property $medicamento_id
 * @property $dosificacion
 * @property $periodo
 * @property $consulta_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Consulta $consulta
 * @property Medicamento $medicamento
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Receta extends Model
{
    
    static $rules = [
		'medicamento_id' => 'required',
		'dosificacion' => 'required',
		'periodo' => 'required',
		'consulta_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['medicamento_id','dosificacion','periodo','consulta_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function consulta()
    {
        return $this->hasOne('App\Models\Consulta', 'id', 'consulta_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function medicamento()
    {
        return $this->hasOne('App\Models\Medicamento', 'id', 'medicamento_id');
    }
    

}
