<?php

namespace App\Repositories;

use App\Models\Persona_estado;
use App\Repositories\BaseRepository;

/**
 * Class Persona_estadoRepository
 * @package App\Repositories
 * @version May 3, 2019, 3:30 pm UTC
*/

class Persona_estadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion',
        'persona_id',
        'estado_id'
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
        return Persona_estado::class;
    }
}
