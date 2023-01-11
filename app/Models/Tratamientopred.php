<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tratamientopred
 *
 * @property $id
 * @property $name
 * @property $created_at
 * @property $updated_at
 *
 * @property Medxtrat[] $medxtrats
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tratamientopred extends Model
{
    
    static $rules = [
		'name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medxtrats()
    {
        return $this->hasMany('App\Models\Medxtrat', 'tratamientopred_id', 'id');
    }
    

}
