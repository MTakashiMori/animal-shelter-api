<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AnimalService;
use App\Http\Requests\AnimalRequest;

class AnimalController extends Controller
{

    public function __construct(AnimalService $service)
    {
        $this->service = $service;
    }

    public function store(AnimalRequest $request)
    {
        return response()->json([
            'message' => '',
            'data' => $this->service->create($request->all()),
        ], 200);
    }

    public function update(Request $request, $id)
    {
        return response()->json([
            'message' => '',
            'data' => $this->service->update($request->all(), $id),
        ], 200);
    }
}
