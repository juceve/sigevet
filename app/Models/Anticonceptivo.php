<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Anticonceptivo
 *
 * @property $id
 * @property $medicamento
 * @property $numdosis
 * @property $proxdosis
 * @property $consulta_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Consulta $consulta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Anticonceptivo extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['medicamento','numdosis','proxdosis','consulta_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function consulta()
    {
        return $this->hasOne('App\Models\Consulta', 'id', 'consulta_id');
    }
    

}
