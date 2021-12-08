<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\PertaminaController;
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

});
