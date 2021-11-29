<?php

namespace App\Traits;


trait ApiResponser
{

    /**
     * customResponse
     *
     * @param  mixed $data
     * @param  mixed $message
     * @param  mixed $code
     * @return void
     */
    protected function customResponse($data, $message = null, $code = 200)
    {
        return response()->json([
            'status' =>  $code,
            'message' => $message,
            'data' => $data
        ], $code);
    }

    /**
     * errorResponse
     *
     * @param  mixed $message
     * @param  mixed $code
     * @return void
     */
    protected function errorResponse($message = null, $code)
    {
        return response()->json([
            'status' => $code,
            'message' => $message,
        ], $code);
    }
}
