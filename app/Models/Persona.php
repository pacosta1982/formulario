<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Persona
 * @package App\Models
 * @version April 24, 2019, 6:38 pm UTC
 *
 * @property integer ci
 * @property string nombre
 * @property string apellido
 * @property string sexo
 * @property string fecha_nac
 * @property string email
 * @property integer celular
 * @property string domicilio_actual
 * @property string departamento
 * @property string ciudad
 * @property string barrio
 * @property integer ingreso
 * @property string discapacidad
 */
class Persona extends Model
{
    use SoftDeletes;

    public $table = 'persona';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'ci',
        'nombre',
        'apellido',
        'sexo',
        'fecha_nac',
        'email',
        'celular',
        'domicilio_actual',
        'departamento',
        'ciudad',
        'barrio',
        'ingreso',
        'discapacidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ci' => 'integer',
        'nombre' => 'string',
        'apellido' => 'string',
        'sexo' => 'string',
        'fecha_nac' => 'date',
        'email' => 'string',
        'celular' => 'integer',
        'domicilio_actual' => 'string',
        'departamento' => 'string',
        'ciudad' => 'string',
        'barrio' => 'string',
        'ingreso' => 'integer',
        'discapacidad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ci' => 'required',
        'nombre' => 'required',
        'apellido' => 'required',
        'sexo' => 'required',
        'fecha_nac' => 'required',
        'email' => 'required',
        'celular' => 'required',
        'domicilio_actual' => 'required',
        'departamento' => 'required',
        'ciudad' => 'required',
        'barrio' => 'required',
        'ingreso' => 'required',
        'discapacidad' => 'required'
    ];

    
}
