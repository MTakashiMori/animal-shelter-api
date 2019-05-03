<?php

namespace App\Services;

use App\Repositories\TypeRepository;

class TypeService extends Service
{

    public function __construct(TypeRepository $repository)
    {
        $this->repository = $repository;
    }
}
