<?php

namespace App\Http\Controllers;

use App\Interfaces\TestNumberInterface;

class TestNumberController extends Controller
{
    protected $testNumberInterface;

    public function __construct(TestNumberInterface $testNumberInterface)
    {
        $this->testNumberInterface = $testNumberInterface;
    }

    public function sumEvenNumber()
    {
        $arrayNumber = [1, 2, 3, 4, 5, 9, 8, 7, 6, 11, 12, 15, 14, 20, 18, 17];
        return $this->testNumberInterface->getSumEven($arrayNumber);
    }
}
