<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlgorithmController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(AlgorithmController::class)->group(function () {
    // Question 1: Implement an ATM algorithm to serve a requested amount and use a
    // minimum number of bank notes. Available bank notes are $50, $10,
    // $5, $1. The requested amount is $2018.

    // body { amount : 2018 }
    Route::post('/atm', 'atm');

    // Question 2: Find Google

    // body { word : g()()IG3 }
    Route::post('/find-google', 'findGoogle');

    // Question 3: Given a square matrix, calculate
    // body 
    // {
    //     "matrix" : [
    //         [1, 2, 3],
    //         [4, 5, 6],
    //         [9, 8, 9]
    //     ]
    // }
    Route::post('/matrix', 'matrix');
});
