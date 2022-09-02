<?php

namespace App\Helpers;

class ResponseHelper
{
    public function successResponse($success, $message, $data)
    {
        return response()->json([
            'data' => [
                'success' => $success,
                'message' => $message,
                'data' => $data
            ]
        ]);
    }
}
