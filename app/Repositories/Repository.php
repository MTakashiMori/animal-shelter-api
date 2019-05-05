<?php

namespace App\Repositories;

abstract class Repository
{
    protected $relationship;
    protected $model;

    public function all($request)
    {
        if($request)
        {
            return $this->model
                ->where($request)
                ->with($this->relationship)
                ->get();
        }
        return $this->model->with($this->relationship)->get();
    }

    public function find($id)
    {
        return $this->model->with($this->relationship)->find($id);
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
