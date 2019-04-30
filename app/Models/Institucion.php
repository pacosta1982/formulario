<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Institucion
 * @package App\Models
 * @version April 25, 2019, 11:09 am UTC
 *
 * @property \App\Models\Persona persona
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property string name
 * @property string sede
 * @property string carrera
 * @property integer duracion
 * @property string curso
 * @property string turno
 * @property string nivel_a
 * @property integer persona_id
 */
class Institucion extends Model
{
    use SoftDeletes;

    public $table = 'institucion';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'sede',
        'carrera',
        'duracion',
        'curso',
        'turno',
        'nivel_a',
        'persona_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'sede' => 'string',
        'carrera' => 'string',
        'duracion' => 'integer',
        'curso' => 'string',
        'turno' => 'string',
        'nivel_a' => 'string',
        'persona_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'sede' => 'required',
        'carrera' => 'required',
        'duracion' => 'required',
        'curso' => 'required',
        'turno' => 'required',
        'nivel_a' => 'required',
        'persona_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function persona()
    {
        return $this->belongsTo(\App\Models\Persona::class, 'persona_id');
    }
}
