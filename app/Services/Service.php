<?php

namespace App\Services;

abstract class Service
{
    protected $repository;

    public function all($request)
    {
        return $this->repository->all($request);
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }

    public function create($request)
    {
        return $this->repository->create($request);
    }

    public function update($request, $id)
    {
        return $this->repository->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->repository->delete($id);
    }
}
