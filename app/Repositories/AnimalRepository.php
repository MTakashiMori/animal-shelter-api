<?php

namespace App\Repositories;

use App\Models\Animal;

class AnimalRepository extends Repository
{

    public function __construct(Animal $model)
    {
        $this->relationship = ['shelter', 'status', 'type'];
        $this->model = $model;
    }

}
