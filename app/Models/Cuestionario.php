<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Semestre
 * @package App\Models
 * @version April 25, 2019, 11:25 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection
 * @property \Illuminate\Database\Eloquent\Collection
 * @property string name
 */
class Cuestionario extends Model
{
    use SoftDeletes;

    public $table = 'cuestionario';



    public $fillable = [
        'pregunta_id','persona_id','value','text_value'
    ];

    public function pregunta()
    {
        return $this->hasOne(\App\Models\Pregunta::class, 'id','pregunta_id');
    }

    public function entidad()
    {
        return $this->hasOne(\App\Models\Entidades::class, 'id','text_value');
    }

}
