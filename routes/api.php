<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
Route::apiResource('/games', 'GameController');

    Is the same like:
*/
    Route::resource('/games', 'GameController')->except(['edit', 'create']);


//ACTION SYNTAX?
//Route::apiResource('/games', [ GameController::class ]);
