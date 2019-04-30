<?php

namespace App\Repositories;

use App\Models\Departamento;
use App\Repositories\BaseRepository;

/**
 * Class DepartamentoRepository
 * @package App\Repositories
 * @version April 25, 2019, 11:26 am UTC
*/

class DepartamentoRepository extends BaseRepository
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
        return Departamento::class;
    }
}
