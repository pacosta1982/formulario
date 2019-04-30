<?php

namespace App\Repositories;

use App\Models\Pregunta;
use App\Repositories\BaseRepository;

/**
 * Class PreguntaRepository
 * @package App\Repositories
 * @version April 25, 2019, 11:39 am UTC
*/

class PreguntaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'pregunta_cat_id'
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
        return Pregunta::class;
    }
}
