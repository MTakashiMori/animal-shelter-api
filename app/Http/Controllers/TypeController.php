<?php

namespace App\Http\Controllers;

use App\Services\TypeService;
use App\Http\Requests\TypeRequest;

class TypeController extends Controller
{

    public function __construct(TypeService $service)
    {
        $this->service = $service;
    }

    public function store(TypeRequest $request)
    {
        return response()->json([
            'message' => '',
            'data' => $this->service->create($request->all()),
        ], 200);
    }

    public function update(TypeRequest $request, $id)
    {
        return response()->json([
            'message' => '',
            'data' => $this->service->update($request->all(), $id),
        ], 200);
    }

}
