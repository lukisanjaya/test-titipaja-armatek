<?php

namespace App\Http\Controllers;

use App\Interfaces\MemberInterface;
use Illuminate\Http\Request;

class MemberController extends Controller
{

    protected $memberInterface;

    public function __construct(MemberInterface $memberInterface)
    {
        $this->memberInterface = $memberInterface;
    }

    public function index(Request $request)
    {
        return $this->memberInterface->getAll($request);
    }

    public function importCSV()
    {
        return $this->memberInterface->importCSV();
    }
}
