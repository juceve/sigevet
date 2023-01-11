<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Medxtrat
 *
 * @property $tratamientopred_id
 * @property $medicamento_id
 * @property $indicaciones
 * @property $created_at
 * @property $updated_at
 *
 * @property Medicamento $medicamento
 * @property Tratamientopred $tratamientopred
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Medxtrat extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tratamientopred_id','medicamento_id','indicaciones'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function medicamento()
    {
        return $this->hasOne('App\Models\Medicamento', 'id', 'medicamento_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tratamientopred()
    {
        return $this->hasOne('App\Models\Tratamientopred', 'id', 'tratamientopred_id');
    }
    

}
