<?php

namespace App\Repositories;

use App\Models\Statu;

class StatuRepository extends Repository
{

    protected $relationship = ['animal'];

    public function __construct(Statu $model)
    {
        $this->model = $model;
    }
}
