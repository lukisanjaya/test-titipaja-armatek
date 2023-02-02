<?php

namespace App\Helpers;

class ResponseFormatter
{
    public static function success($data, $message = "succefully, get data")
    {
        $response = [
            'status'  => true,
            'message' => $message,
            'data'    => $data
        ];
        return response()->json($response, 200);
    }

    public static function paginate($data, $message = "succefully, get data")
    {
        $response = [
            'status'  => true,
            'message' => $message,
            'data'    => $data->items(),
            'meta'    => [
                'total' => (int) $data->total(),
                'count' => (int) $data->count(),
                'perPage' => (int) $data->perPage(),
                'prevPage' => (string) $data->previousPageUrl(),
                'nextPage' => (string) $data->nextPageUrl(),
                'currentPage' => (int) $data->currentPage(),
                'totalPages' => (int) $data->lastPage()
            ],
        ];
        return response()->json($response, 200);
    }

    public static function notFound($message = "data not found")
    {
        $response = [
            'status'  => false,
            'message' => $message
        ];
        return response()->json($response, 404);
    }
}
