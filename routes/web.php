<?php

use App\Http\Controllers\AssignOrderController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\PertaminaController;
use App\Http\Controllers\SPBUController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

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
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/login', [AuthController::class, 'index']);
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['admin']], function () {
    Route::get('/pertamina/list-order', [OrderController::class, 'index']);
    Route::get('/pertamina/list-order-detail/{order_id}', [OrderDetailController::class, 'index'])->name('admin.orderdetails');
    Route::get('/pertamina/list-assign-order', [AssignOrderController::class, 'index']);
    Route::get('/pertamina/assign-order/add', [AssignOrderController::class, 'add']);
    Route::post('/pertamina/assign-order/create', [AssignOrderController::class, 'store']);
    Route::get('/pertamina/list-spbu', [SPBUController::class, 'index']);
    Route::get('/pertamina/spbu/add', [SPBUController::class, 'add']);
    Route::post('/pertamina/spbu/create', [SPBUController::class, 'store']);
    Route::get('/pertamina/spbu/edit/{id}', [SPBUController::class, 'edit']);
    Route::put('/pertamina/spbu/update/{id}', [SPBUController::class, 'update']);
    Route::get('/pertamina/spbu/delete/{id}', [SPBUController::class, 'delete']);
    Route::get('/pertamina/list-pertamina', [PertaminaController::class, 'index']);
    Route::get('/pertamina/pertamina/add', [PertaminaController::class, 'add']);
    Route::post('/pertamina/pertamina/create', [PertaminaController::class, 'store']);
    Route::get('/pertamina/pertamina/edit/{id}', [PertaminaController::class, 'edit']);
    Route::put('/pertamina/pertamina/update/{id}', [PertaminaController::class, 'update']);
    Route::get('/pertamina/pertamina/delete/{id}', [PertaminaController::class, 'delete']);
    Route::get('/pertamina/list-region', [PertaminaController::class, 'index']);
    Route::get('/pertamina/region/add', [PertaminaController::class, 'add']);
    Route::get('/pertamina/list-staff', [StaffController::class, 'index']);
    Route::get('/pertamina/staff/add', [StaffController::class, 'add']);
    Route::post('/pertamina/staff/create', [StaffController::class, 'store']);
    Route::get('/pertamina/staff/edit/{id}', [StaffController::class, 'edit']);
    Route::put('/pertamina/staff/update/{id}', [StaffController::class, 'update']);
    Route::get('/pertamina/staff/delete/{id}', [StaffController::class, 'delete']);

});

Route::get('/', function () {
    return view('welcome');
});
