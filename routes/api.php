<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TestNumberController;
use App\Http\Controllers\TestStringController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('sum_even', [TestNumberController::class, 'sumEvenNumber']);
Route::get('send_email', [EmailController::class, 'sendEmail']);
Route::get('member', [MemberController::class, 'index']);
Route::get('import_csv', [MemberController::class, 'importCSV']);
Route::get('remove_vowels', [TestStringController::class, 'removeVowels']);
