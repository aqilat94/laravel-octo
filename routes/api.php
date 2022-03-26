<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokenController;
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

Route::prefix('v1')->group(function()
{
    Route::get('/movie/genre', [App\Http\Controllers\API\MovieController::class, 'movieGenre']);
    Route::get('/movie/timeslot', [App\Http\Controllers\API\MovieController::class, 'movieTimeslot']);
    Route::get('/movie/performer', [App\Http\Controllers\API\MovieController::class, 'moviePerformer']);
    Route::get('/movie/new', [App\Http\Controllers\API\MovieController::class, 'movieNew']);

    Route::post('/movie/rating', [App\Http\Controllers\API\MovieController::class, 'movieRating']);
    Route::post('/movie/add', [App\Http\Controllers\API\MovieController::class, 'movieAdd']);
});


