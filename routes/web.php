<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\bababa;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CitiesInfosController;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('index', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Admin/Dashboard');
    })->name('dashboard');

    Route::get('/users', [UsersController::class, "index"])->name("users.index");
    Route::get('/users/create', [UsersController::class, "store"])->name("users.create");

    Route::get('/cities', [bababa::class, "index"])->name("cities.index");
    Route::get('/cities/create', [bababa::class, "create"])->name("cities.create");
    Route::get('/users/create', [UsersController::class, "create"])->name('users.create');
    Route::post('/users/save', [UsersController::class, "store"])->name('users.store');


    // Route::post('/info', "CitiesInfosController@store");
   // Route::get('/test', [\App\Http\Controllers\Sandbox::class, "index"])->name("sandbox.index");

});
