<?php

namespace App\Repositories;

use App\Models\PersonaEnfermedad;
use App\Repositories\BaseRepository;

/**
 * Class PersonaEnfermedadRepository
 * @package App\Repositories
 * @version June 6, 2019, 5:36 pm UTC
*/

class PersonaEnfermedadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'enfermedad_id',
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
        return PersonaEnfermedad::class;
    }
}
