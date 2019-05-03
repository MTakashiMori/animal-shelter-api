<?php

namespace App\Services;

use App\Repositories\ShelterRepository;


class ShelterService extends Service
{

    public function __construct(ShelterRepository $repository)
    {
        $this->repository = $repository;
    }

}
