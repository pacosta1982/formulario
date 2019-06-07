<?php

namespace App\Repositories;

use App\Models\Entidades;
use App\Repositories\BaseRepository;

/**
 * Class EntidadesRepository
 * @package App\Repositories
 * @version June 6, 2019, 12:20 pm UTC
*/

class EntidadesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'entidades_cat_id'
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
        return Entidades::class;
    }
}
