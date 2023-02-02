<?php

namespace App\Repository;

use App\Helpers\StringHelper;
use App\Helpers\ResponseFormatter;
use App\Interfaces\TestStringInterface;

class TestStringRepository implements TestStringInterface
{
    public function removeVowels(string $str)
    {
        $response = [
            'before' => $str,
            'after'  => StringHelper::removeVowels($str)
        ];

        return ResponseFormatter::success($response);
    }
}
