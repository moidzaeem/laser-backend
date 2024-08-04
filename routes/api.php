<?php

use App\Http\Controllers\CenterController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get-centers', [CenterController::class, 'apiForGetAllCenters']);
Route::get('/get-center-services', [ServiceController::class, 'getServicesForHospital']);

Route::post('customer', [CustomersController::class, 'store']);
