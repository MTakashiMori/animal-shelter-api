<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ShelterService;
use App\Http\Requests\ShelterRequest;

class ShelterController extends Controller
{

    public function __construct(ShelterService $service)
    {
        $this->service = $service;
    }

    public function store(ShelterRequest $request)
    {
        return response()->json([
            'message' => '',
            'data' => $this->service->create($request->all()),
        ], 200);
    }

    public function update(ShelterRequest $request, $id)
    {
        return response()->json([
            'message' => '',
            'data' => $this->service->update($request->all(), $id),
        ], 200);
    }
}
