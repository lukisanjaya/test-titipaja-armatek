<?php

namespace App\Http\Controllers;

use App\Interfaces\TestStringInterface;

class TestStringController extends Controller
{
    protected $testStringInterface;

    public function __construct(TestStringInterface $testStringInterface)
    {
        $this->testStringInterface = $testStringInterface;
    }

    public function removeVowels()
    {
        $string = "My Name Is Luki Sanjaya, I'm Backend Programmer";
        return $this->testStringInterface->removeVowels($string);
    }
}
