<?php
namespace App\Helpers;

class NumberHelper
{
    public static function getSumEven(array $arr): int
    {
        $sum = 0;
        foreach ($arr as $num) {
            if ($num % 2 == 0) {
                $sum += $num;
            }
        }
        return $sum;
    }
}
