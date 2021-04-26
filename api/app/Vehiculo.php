<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehiculo
 *
 * @property $id
 * @property $placa
 * @property $color
 * @property $marca
 * @property $tipo_vehiculo
 * @property $id_propietario
 * @property $id_conductor
 * @property $created_at
 * @property $updated_at
 *
 * @property Conductore $conductore
 * @property Propietario $propietario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vehiculo extends Model
{
    
    static $rules = [
		'placa' => 'required',
		'color' => 'required',
		'marca' => 'required',
		'tipo_vehiculo' => 'required',
		'id_propietario' => 'required',
		'id_conductor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['placa','color','marca','tipo_vehiculo','id_propietario','id_conductor'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function conductore()
    {
        return $this->hasOne('App\Conductore', 'id', 'id_conductor');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function propietario()
    {
        return $this->hasOne('App\Propietario', 'id', 'id_propietario');
    }
    

}
