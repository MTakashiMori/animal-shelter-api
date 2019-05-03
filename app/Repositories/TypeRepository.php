<?php

namespace App\Repositories;

use App\Models\Type;

class TypeRepository extends Repository
{

    protected $relationship = ['animal'];

    public function __construct(Type $model)
    {
        $this->model = $model;
    }
}
