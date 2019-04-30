<?php

namespace App\Repositories;

use App\Models\Persona_Discapacidad;
use App\Repositories\BaseRepository;

/**
 * Class Persona_DiscapacidadRepository
 * @package App\Repositories
 * @version April 24, 2019, 6:57 pm UTC
*/

class Persona_DiscapacidadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'discapacidad_id',
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
        return Persona_Discapacidad::class;
    }
}
