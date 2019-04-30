<?php

namespace App\Repositories;

use App\Models\Persona;
use App\Repositories\BaseRepository;

/**
 * Class PersonaRepository
 * @package App\Repositories
 * @version April 24, 2019, 6:38 pm UTC
*/

class PersonaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ci',
        'nombre',
        'apellido',
        'sexo',
        'fecha_nac',
        'email',
        'celular',
        'domicilio_actual',
        'departamento',
        'ciudad',
        'barrio',
        'ingreso',
        'discapacidad'
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
        return Persona::class;
    }
}
