<?php

namespace App\Services;

use App\Repositories\AnimalRepository;

class AnimalService extends Service
{

    public function __construct(AnimalRepository $repository)
    {
        $this->repository = $repository;
    }


}
