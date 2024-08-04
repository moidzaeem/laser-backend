<?php

use App\Http\Controllers\CenterController;
use App\Http\Controllers\CenterDetailController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\PracticionersController;
use App\Http\Controllers\PractictionerCenterController;
use App\Http\Controllers\ServiceController;
use App\Models\Practicioners;
use App\Models\PractictionerCenter;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('/forget-password', [ForgetPasswordController::class, 'create'])->name('forget.password.create');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/center', [CenterController::class, 'index'])->name('center.index');
Route::post('center',[CenterController::class, 'store'])->name('center.store');
Route::get('/center/{id}', [CenterController::class, 'show'])->name('center.show');

Route::post('/center-details', [CenterDetailController::class, 'store'])->name('center.detail.store');

//Services
Route::get('/all-services',[ServiceController::class, 'index'])->name('services.index.all');
Route::post('/service', [ServiceController::class, 'store'])->name('service.store');

//Center Servies
Route::get('/center-services', [ServiceController::class, 'getCenterServices'])->name('center.services.index');

//Practictioners
Route::get('/practicioners', [PracticionersController::class, 'index'])->name('practicioners.index');
Route::post('/practicioners', [PracticionersController::class,'store'])->name('practicioners.store');
Route::put('/practicioners/{id}', [PracticionersController::class,'update'])->name('practicioners.update');

//Prac - Center
Route::post('add-practictioner-center', [PractictionerCenterController::class, 'store'])->name('practictioner.center.store');


//Stats
Route::get('/all-stats', [GeneralController::class, 'allStats'])->name('stats.index');

// center customers
Route::get('center-customers', [CustomersController::class, 'getCenterCustomers'])->name('center.customer');

Route::get('customer-profile/{id}', [CustomersController::class, 'getCustomerProfile'])->name('customer.profile');