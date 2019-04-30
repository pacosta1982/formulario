<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Persona_Parentesco
 * @package App\Models
 * @version April 24, 2019, 7:05 pm UTC
 *
 * @property \App\Models\Parentesco parentesco
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property integer cantidad
 * @property integer parentesco_id
 * @property integer personas_id
 */
class Persona_Parentesco extends Model
{
    use SoftDeletes;

    public $table = 'persona_parentesco';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'cantidad',
        'parentesco_id',
        'personas_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cantidad' => 'integer',
        'parentesco_id' => 'integer',
        'personas_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cantidad' => 'required',
        'parentesco_id' => 'required',
        'personas_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function parentesco()
    {
        return $this->belongsTo(\App\Models\Parentesco::class, 'parentesco_id');
    }
}
