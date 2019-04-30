<?php

namespace App\Repositories;

use App\Models\Institucion;
use App\Repositories\BaseRepository;

/**
 * Class InstitucionRepository
 * @package App\Repositories
 * @version April 25, 2019, 11:09 am UTC
*/

class InstitucionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Institucion::class;
    }
}
