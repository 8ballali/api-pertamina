<?php

use App\Http\Controllers\AssignOrderController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
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
});

Route::get('/', function () {
    return view('welcome');
});
