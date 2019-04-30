<?php

namespace App\Repositories;

abstract class Repository extends \Prettus\Repository\Eloquent\BaseRepository
{
    public $relationship = [];

    public function create()
    {
    }

    public function update()
    {
    }

    public function updateOrCreate()
    {
    }
}
