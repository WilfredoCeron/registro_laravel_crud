<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GrdGrado
 *
 * @property $grd_id
 * @property $grd_nombre
 *
 * @property AlmAlumno[] $almAlumnos
 * @property MxgMateriaxgrado[] $mxgMateriaxgrados
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class GrdGrado extends Model
{
    
    static $rules = [
		'grd_id' => 'required',
		'grd_nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['grd_id','grd_nombre'];
    protected $table = 'grd_grado';


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function almAlumnos()
    {
        return $this->hasMany('App\Models\AlmAlumno', 'alm_id_grd', 'grd_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mxgMateriaxgrados()
    {
        return $this->hasMany('App\Models\MxgMateriaxgrado', 'mxg_id_grd', 'grd_id');
    }
    

}
