<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MatMaterium
 *
 * @property $mat_id
 * @property $mat_nombre
 *
 * @property MxgMateriaxgrado[] $mxgMateriaxgrados
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MatMaterium extends Model
{
    
    static $rules = [
		'mat_id' => 'required',
		'mat_nombre' => 'required',
    ];

    protected $perPage = 20;
    protected $table = 'mat_materia';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['mat_id','mat_nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mxgMateriaxgrados()
    {
        return $this->hasMany('App\Models\MxgMateriaxgrado', 'mxg_id_mat', 'mat_id');
    }
    

}
