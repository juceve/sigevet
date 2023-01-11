<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tratamiento
 *
 * @property $id
 * @property $medicacion
 * @property $indicaciones
 * @property $consulta_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Consulta $consulta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tratamiento extends Model
{
    
    static $rules = [
		'consulta_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['medicacion','indicaciones','consulta_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function consulta()
    {
        return $this->hasOne('App\Models\Consulta', 'id', 'consulta_id');
    }
    

}
