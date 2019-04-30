<?php

namespace App\Repositories;

use App\Models\Persona_Parentesco;
use App\Repositories\BaseRepository;

/**
 * Class Persona_ParentescoRepository
 * @package App\Repositories
 * @version April 24, 2019, 7:05 pm UTC
*/

class Persona_ParentescoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cantidad',
        'parentesco_id',
        'personas_id'
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
        return Persona_Parentesco::class;
    }
}
