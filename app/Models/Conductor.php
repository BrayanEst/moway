<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Conductor
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $foto
 * @property $id_recorrido
 * @property $created_at
 * @property $updated_at
 *
 * @property Recorrido $recorrido
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Conductor extends Model
{

    static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
		'foto' => 'required',
		'id_recorrido' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido','foto','id_recorrido'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function recorrido()
    {
        return $this->hasOne('App\Models\Recorrido', 'id', 'id_recorrido');
    }


}
