<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $service;

    public function index(Request $request)
    {
        return response()->json([
            'message' => '',
            'data' => $this->service->all($request->all()),
        ], 200);
    }

    public function show($id)
    {
        return response()->json([
            'message' => '',
            'data' => $this->service->find($id),
        ], 200);
    }

    public function destroy($id)
    {
        $this->service->destroy($id);
        return response()->json([
            'message' => '',
        ], 200);
    }
}
