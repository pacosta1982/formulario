<?php

namespace App\Repositories;

use App\Models\Turno;
use App\Repositories\BaseRepository;

/**
 * Class TurnoRepository
 * @package App\Repositories
 * @version April 25, 2019, 11:25 am UTC
*/

class TurnoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return Turno::class;
    }
}
