<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\MovieApiController;

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

Route::get('/{category?}', [ApiController::class, 'index']);
Route::get('/weather', [ApiController::class, 'weather']);

// Route::get('/business', [ApiController::class,'business']);
// Route::get('/entertainment', [ApiController::class,'entertainment']);
// Route::get('/health', [ApiController::class,'health']);
// Route::get('/science', [ApiController::class,'science']);
// Route::get('/sports', [ApiController::class,'sports']);
// Route::get('/technology', [ApiController::class,'technology']);
