<?php

namespace App\Repositories;

use App\Models\Enfermedad;
use App\Repositories\BaseRepository;

/**
 * Class EnfermedadRepository
 * @package App\Repositories
 * @version June 6, 2019, 5:16 pm UTC
*/

class EnfermedadRepository extends BaseRepository
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
        return Enfermedad::class;
    }
}
