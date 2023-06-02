<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser

{

    public function successResponse($data, $code = Response::HTTP_OK)
    {
        return response()->json(['Data' => $data, 'Site' => 1], $code);
    }

    public function errorResponse($message, $code)
    {
        return response()->json(['Error' => $message, 'Site' => 1, 'Code' => $code], $code);
    }
}