<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Animale
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Raza[] $razas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Animale extends Model
{
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function razas()
    {
        return $this->hasMany('App\Models\Raza', 'animale_id', 'id');
    }
    

}
