<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Medicamento
 *
 * @property $id
 * @property $nombre
 * @property $prospecto
 * @property $unimedida_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Unimedida $unimedida
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Medicamento extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'prospecto' => 'required',
		'unimedida_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','prospecto','unimedida_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function unimedida()
    {
        return $this->hasOne('App\Models\Unimedida', 'id', 'unimedida_id');
    }
    

}
