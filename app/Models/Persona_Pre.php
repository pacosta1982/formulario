<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Persona_Pre
 * @package App\Models
 * @version April 25, 2019, 11:49 am UTC
 *
 * @property \App\Models\Persona persona
 * @property \App\Models\Preguntum pregunta
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property integer name
 * @property integer pregunta_id
 * @property integer persona_id
 */
class Persona_Pre extends Model
{
    use SoftDeletes;

    public $table = 'persona_pre';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'pregunta_id',
        'persona_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'integer',
        'pregunta_id' => 'integer',
        'persona_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'pregunta_id' => 'required',
        'persona_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function persona()
    {
        return $this->belongsTo(\App\Models\Persona::class, 'persona_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function pregunta()
    {
        return $this->belongsTo(\App\Models\Preguntum::class, 'pregunta_id');
    }
}
