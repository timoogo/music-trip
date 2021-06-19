<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitiesInfosController;
use App\Http\Controllers\CitiesLocationsController;
use App\Http\Controllers\CitiesHeartstrokeController;
use App\Http\Controllers\CitiesMusicGroupController;
use App\Http\Controllers\CitiesCustomDataController;

/*
|--------------------------------------------------------------------------
| API Routesw
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



Route::apiResource('info', CitiesInfosController::class);
Route::apiResource('locations', CitiesLocationsController::class);
Route::apiResource('heartstroke', CitiesHeartstrokeController::class);
Route::apiResource('musicgroup', CitiesMusicGroupController::class);
Route::apiResource('customdata', CitiesCustomDataController::class);

/*
 * Route::apiResource('show/locations/{id}', [bababa::class, "show_locations"])->name("cities.locations");
Route::apiResource('show/heartStroke/{id}', [bababa::class, "show_heart_stroke"])->name("cities.heartStroke");
Route::apiResource('show/musicGroup/{id}', [bababa::class, "show_music_group"])->name("cities.musicGroup");
Route::apiResource('show/customData/{id}', [bababa::class, "show_custom_data"])->name("cities.customData");*/
