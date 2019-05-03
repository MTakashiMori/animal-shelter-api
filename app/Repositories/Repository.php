<?php

namespace App\Repositories;

abstract class Repository
{

    protected $model;

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function update($data, $id)
    {
        return $this->model
            ->find($id)
            ->update($data);
    }

    public function delete($id)
    {
        return $this->find($id)->delete();
    }

}
