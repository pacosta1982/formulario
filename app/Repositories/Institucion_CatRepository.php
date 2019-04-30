<?php

namespace App\Repositories;

use App\Models\Institucion_Cat;
use App\Repositories\BaseRepository;

/**
 * Class Institucion_CatRepository
 * @package App\Repositories
 * @version April 25, 2019, 11:43 am UTC
*/

class Institucion_CatRepository extends BaseRepository
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
        return Institucion_Cat::class;
    }
}
