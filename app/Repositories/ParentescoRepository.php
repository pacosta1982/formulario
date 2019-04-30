<?php

namespace App\Repositories;

use App\Models\Parentesco;
use App\Repositories\BaseRepository;

/**
 * Class ParentescoRepository
 * @package App\Repositories
 * @version April 24, 2019, 4:54 pm UTC
*/

class ParentescoRepository extends BaseRepository
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
        return Parentesco::class;
    }
}
