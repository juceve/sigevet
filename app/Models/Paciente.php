<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Paciente
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $raza_id
 * @property $fecnacimiento
 * @property $cliente_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Raza $raza
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Paciente extends Model
{

  static $rules = [
    'nombre' => 'required',
    'raza_id' => 'required',
    'fecnacimiento' => 'required',
    'sexo' => 'required',
    'cliente_id' => 'required',
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['nombre', 'descripcion', 'raza_id', 'fecnacimiento', 'sexo', 'cliente_id'];


  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function cliente()
  {
    return $this->hasOne('App\Models\Cliente', 'id', 'cliente_id');
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function raza()
  {
    return $this->hasOne('App\Models\Raza', 'id', 'raza_id');
  }

  public function edad($fecnacimiento)
  {
    $firstDate = $fecnacimiento;
    $secondDate = date('Y-m-d');

    $dateDifference = abs(strtotime($secondDate) - strtotime($firstDate));

    $years  = floor($dateDifference / (365 * 60 * 60 * 24));
    $months = floor(($dateDifference - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
    $days   = floor(($dateDifference - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

    return $years . " año(s) " . $months . " mes(es) y " . $days . " día(s).";
  }
}
