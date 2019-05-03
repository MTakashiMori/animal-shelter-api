<?php

namespace App\Repositories;

use App\Models\Animal;

class AnimalRepository extends Repository
{

    protected $relationship = ['shelter', 'status', 'type'];

    public function __construct(Animal $model)
    {
        $this->model = $model;
    }

}
