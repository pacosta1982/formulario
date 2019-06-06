<?php

namespace App\Repositories;

use App\Models\Entidades_cat;
use App\Repositories\BaseRepository;

/**
 * Class Entidades_catRepository
 * @package App\Repositories
 * @version June 6, 2019, 12:20 pm UTC
*/

class Entidades_catRepository extends BaseRepository
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
        return Entidades_cat::class;
    }
}
