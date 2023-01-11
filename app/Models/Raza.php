<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Raza
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $animale_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Animale $animale
 * @property Paciente[] $pacientes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Raza extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'animale_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion','animale_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function animale()
    {
        return $this->hasOne('App\Models\Animale', 'id', 'animale_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pacientes()
    {
        return $this->hasMany('App\Models\Paciente', 'raza_id', 'id');
    }
    

}
