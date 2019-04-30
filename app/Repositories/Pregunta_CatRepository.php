<?php

namespace App\Repositories;

use App\Models\Pregunta_Cat;
use App\Repositories\BaseRepository;

/**
 * Class Pregunta_CatRepository
 * @package App\Repositories
 * @version April 25, 2019, 11:39 am UTC
*/

class Pregunta_CatRepository extends BaseRepository
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
        return Pregunta_Cat::class;
    }
}
