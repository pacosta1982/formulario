<?php

namespace App\Repositories;

use App\Models\Persona_Pre;
use App\Repositories\BaseRepository;

/**
 * Class Persona_PreRepository
 * @package App\Repositories
 * @version April 25, 2019, 11:49 am UTC
*/

class Persona_PreRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'pregunta_id',
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
        return Persona_Pre::class;
    }
}
