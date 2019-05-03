<?php

namespace App\Http\Controllers;

use App\Services\StatuService;
use App\Http\Requests\StatuRequest;

class StatuController extends Controller
{

    public function __construct(StatuService $service)
    {
        $this->service = $service;
    }

    public function store(StatusRequest $request)
    {
        dd($request);
        return response()->json([
            'message' => '',
            'data' => $this->service->create($request->all()),
        ], 200);
    }

    public function update(StatusRequest $request, $id)
    {
        dd($request);
        return response()->json([
            'message' => '',
            'data' => $this->service->update($request->all(), $id),
        ], 200);
    }
}
