<?php

namespace App\Traits;


trait ApiResponser
{

    protected function customResponse($data, $message = null, $code = 200)
    {
        return response()->json([
            'status' =>  $code,
            'message' => $message,
            'data' => $data
        ], $code);
    }

    protected function errorResponse($message = null, $code)
    {
        return response()->json([
            'status' => $code,
            'message' => $message,
        ], $code);
    }
}
