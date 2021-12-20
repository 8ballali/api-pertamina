<?php

use App\Http\Controllers\api\AssignOrderController;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\Isi_TankController;
use App\Http\Controllers\api\OrderController;
use App\Http\Controllers\api\PengeluaranController;
use App\Http\Controllers\api\PengisianController;
use App\Http\Controllers\api\PertaminaController;
use App\Http\Controllers\api\RoleController;
use App\Http\Controllers\api\SPBUController;
use App\Http\Controllers\api\TankController;
use App\Http\Controllers\api\TypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

Route::middleware('auth:sanctum')->group(function (){
    Route::get('pertamina', [PertaminaController::class, 'index']);
    Route::get('pertamina/{id}', [PertaminaController::class, 'show']);
    Route::post('pertamina/store', [PertaminaController::class, 'store']);
    Route::post('pertamina/edit/{pertamina}', [PertaminaController::class, 'update']);
    Route::delete('pertamina/delete/{pertamina}', [PertaminaController::class, 'delete']);
    Route::get('type', [TypeController::class, 'index']);
    Route::get('type/{id}', [TypeController::class, 'show']);
    Route::post('type/store', [TypeController::class, 'store']);
    Route::get('spbu', [ SPBUController::class, 'index']);
    Route::get('spbu/{id}', [SPBUController::class, 'show']);
    Route::post('spbu/store', [SPBUController::class, 'store']);
    Route::post('spbu/edit/{spbu}', [SPBUController::class, 'update']);
    Route::delete('spbu/delete/{spbu}', [SPBUController::class, 'delete']);
    Route::get('tank', [ TankController::class, 'index']);
    Route::get('tank/{id}', [TankController::class, 'show']);
    Route::post('tank/store', [TankController::class, 'store']);
    Route::post('tank/edit/{tank}', [TankController::class, 'update']);
    Route::delete('tank/delete/{tank}', [TankController::class, 'delete']);
    Route::get('isi-tank', [ Isi_TankController::class, 'index']);
    Route::get('isi-tank/{id}', [Isi_TankController::class, 'show']);
    Route::post('isi-tank/store', [Isi_TankController::class, 'store']);
    Route::post('isi-tank/edit/{isi_tank}', [Isi_TankController::class, 'update']);
    Route::delete('isi-tank/delete/{isi_tank}', [Isi_TankController::class, 'delete']);
    Route::get('pengisian', [ PengisianController::class, 'index']);
    Route::get('pengisian/{id}', [PengisianController::class, 'show']);
    Route::post('pengisian/store', [PengisianController::class, 'store']);
    Route::post('pengisian/edit/{pengisian}', [PengisianController::class, 'update']);
    Route::delete('pengisian/delete/{pengisian}', [PengisianController::class, 'delete']);
    Route::get('pengeluaran', [ PengeluaranController::class, 'index']);
    Route::get('pengeluaran/{id}', [PengeluaranController::class, 'show']);
    Route::post('pengeluaran/store', [PengeluaranController::class, 'store']);
    Route::post('pengeluaran/edit/{pengisian}', [PengeluaranController::class, 'update']);
    Route::delete('pengeluaran/delete/{pengisian}', [PengeluaranController::class, 'delete']);
    Route::get('role', [ RoleController::class, 'index']);
    Route::get('role/{id}', [RoleController::class, 'show']);
    Route::post('role/store', [RoleController::class, 'store']);
    Route::post('role/edit/{role}', [RoleController::class, 'update']);
    Route::delete('role/delete/{role}', [RoleController::class, 'delete']);
    Route::get('order', [ OrderController::class, 'index']);
    Route::get('order/{id}', [OrderController::class, 'show']);
    Route::post('order/store', [OrderController::class, 'store']);
    Route::delete('order/delete/{order}', [OrderController::class, 'delete']);
    Route::get('assign-order', [ AssignOrderController::class, 'index']);
    Route::get('assign-order/{id}', [AssignOrderController::class, 'show']);
    Route::post('assign-order/store', [AssignOrderController::class, 'store']);
    Route::delete('assign-order/delete/{assign-order}', [AssignOrderController::class, 'delete']);

});
