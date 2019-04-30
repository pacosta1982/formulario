<?php

namespace App\Repositories;

use App\Models\Discapacidad;
use App\Repositories\BaseRepository;

/**
 * Class DiscapacidadRepository
 * @package App\Repositories
 * @version April 24, 2019, 5:19 pm UTC
*/

class DiscapacidadRepository extends BaseRepository
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
        return Discapacidad::class;
    }
}
