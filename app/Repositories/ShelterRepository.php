<?php

namespace App\Repositories;

use App\Models\Shelter;

class ShelterRepository extends Repository
{

    protected $relationship = ['animal'];

    public function __construct(Shelter $model)
    {
        $this->model = $model;
    }
}
