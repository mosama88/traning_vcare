<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function apiSuccessResponse($data = null, $message = null, $status = 200)
    {
        $response = [
            'status' => $status,
            'message' => $message,
            'data' => $data,
        ];
        return response()->json($response, $status);
    }
}
