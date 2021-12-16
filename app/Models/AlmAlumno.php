<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AlmAlumno
 *
 * @property $alm_id
 * @property $alm_codigo
 * @property $alm_nombre
 * @property $alm_edad
 * @property $alm_sexo
 * @property $alm_id_grd
 * @property $alm_observacion
 * @property $created_at
 * @property $updated_at
 *
 * @property GrdGrado $grdGrado
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class AlmAlumno extends Model
{
    
    static $rules = [
		'alm_id' => 'required',
		'alm_codigo' => 'required',
		'alm_nombre' => 'required',
		'alm_edad' => 'required',
		'alm_sexo' => 'required',
		'alm_id_grd' => 'required',
		'alm_observacion' => 'required',
    ];

    protected $perPage = 20;
    protected $table = 'alm_alumno';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['alm_id','alm_codigo','alm_nombre','alm_edad','alm_sexo','alm_id_grd','alm_observacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function grdGrado()
    {
        return $this->hasOne('App\Models\GrdGrado', 'grd_id', 'alm_id_grd');
    }
    

}
