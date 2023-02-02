<?php

namespace App\Repository;

use App\Helpers\NumberHelper;
use App\Helpers\ResponseFormatter;
use App\Interfaces\TestNumberInterface;

class TestNumberRepository implements TestNumberInterface
{
    public function getSumEven(array $arr)
    {
        $response = [
            'before' => $arr,
            'after'  => NumberHelper::getSumEven($arr)
        ];

        return ResponseFormatter::success($response);
    }
}
