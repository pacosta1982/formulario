<?php

namespace App\Repositories;

use App\Models\UserDemo;
use App\Repositories\BaseRepository;

/**
 * Class UserDemoRepository
 * @package App\Repositories
 * @version April 24, 2019, 4:38 pm UTC
*/

class UserDemoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token'
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
        return UserDemo::class;
    }
}
