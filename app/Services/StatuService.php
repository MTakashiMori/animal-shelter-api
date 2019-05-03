<?php

namespace App\Services;

use App\Repositories\StatuRepository;


class StatuService extends Service
{

    public function __construct(StatuRepository $repository)
    {
        $this->repository = $repository;
    }
}
