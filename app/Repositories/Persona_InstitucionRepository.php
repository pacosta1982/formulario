<?php

namespace App\Repositories;

use App\Models\Persona_Institucion;
use App\Repositories\BaseRepository;

/**
 * Class Persona_InstitucionRepository
 * @package App\Repositories
 * @version April 25, 2019, 11:29 am UTC
*/

class Persona_InstitucionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cantidad',
        'parentesco_id',
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
        return Persona_Institucion::class;
    }
}
