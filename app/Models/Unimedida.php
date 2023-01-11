<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Unimedida
 *
 * @property $id
 * @property $descripcion
 * @property $abreviatura
 * @property $created_at
 * @property $updated_at
 *
 * @property Medicamento[] $medicamentos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Unimedida extends Model
{
    
    static $rules = [
		'descripcion' => 'required',
    'abreviatura' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion', 'abreviatura'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicamentos()
    {
        return $this->hasMany('App\Models\Medicamento', 'unimedida_id', 'id');
    }
    

}
