<?php

namespace App\Helpers;

class StringHelper
{
    public static function removeVowelsRegex($str): string
    {
        return preg_replace('/[aiueoAIUEO]/i', '', $str);
    }

    public static function removeVowels($str): string
    {
        $vowels = ['a', 'i', 'u', 'e', 'o', 'A', 'I', 'U', 'E', 'O'];

        return str_replace($vowels, '', $str);
    }
}
