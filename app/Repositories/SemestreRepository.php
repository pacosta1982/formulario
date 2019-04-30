<?php

namespace App\Repositories;

use App\Models\Semestre;
use App\Repositories\BaseRepository;

/**
 * Class SemestreRepository
 * @package App\Repositories
 * @version April 25, 2019, 11:25 am UTC
*/

class SemestreRepository extends BaseRepository
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
        return Semestre::class;
    }
}
