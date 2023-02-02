<?php
namespace App\Interfaces;

use Illuminate\Http\Request;

interface MemberInterface
{
    public function getAll(Request $request);

    public function importCSV();
}
