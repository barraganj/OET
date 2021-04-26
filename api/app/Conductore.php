<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Conductore
 *
 * @property $id
 * @property $cedula
 * @property $primer_nombre
 * @property $segundo_nombre
 * @property $apellidos
 * @property $direccion
 * @property $ciudad
 * @property $telefono
 * @property $created_at
 * @property $updated_at
 *
 * @property Vehiculo[] $vehiculos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Conductore extends Model
{
    
    static $rules = [
		'cedula' => 'required',
		'primer_nombre' => 'required',
		'segundo_nombre' => 'required',
		'apellidos' => 'required',
		'direccion' => 'required',
		'ciudad' => 'required',
		'telefono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cedula','primer_nombre','segundo_nombre','apellidos','direccion','ciudad','telefono'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehiculos()
    {
        return $this->hasMany('App\Vehiculo', 'id_conductor', 'id');
    }
    

}
