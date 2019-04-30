<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pregunta
 * @package App\Models
 * @version April 25, 2019, 11:39 am UTC
 *
 * @property \App\Models\PreguntaCat preguntaCat
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property string name
 * @property integer pregunta_cat_id
 */
class Pregunta extends Model
{
    use SoftDeletes;

    public $table = 'pregunta';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'pregunta_cat_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'pregunta_cat_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'pregunta_cat_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function preguntaCat()
    {
        return $this->belongsTo(\App\Models\PreguntaCat::class, 'pregunta_cat_id');
    }
}
