<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\MemberStore;
use App\Http\Controllers\Api\PengeluaranController;
use App\Http\Controllers\Api\PosController;
use App\Http\Controllers\Api\WifiController;
use App\Http\Middleware\Api_Middleware;
use App\Pengeluaran;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix' => '/v1'], function () {
    Route::post('/apistoreuser', [MemberStore::class, 'storeUser']);
});

Route::post('/login', [AuthController::class, 'login']);
// Route::post('/register', [AuthController::class, 'register']);
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/warehouse', [PosController::class, 'getWarehouse']);
    Route::get('/biller', [PosController::class, 'getBiller']);
    Route::get('/tax', [PosController::class, 'getTax']);
    Route::get('/produk', [PosController::class, 'getProduct']);
    Route::get('/brand', [PosController::class, 'getBrand']);
    Route::get('/produkmenu', [PosController::class, 'getProductMenu']);
    Route::get('/coupon', [PosController::class, 'getCoupon']);
    Route::get('/history', [PosController::class, 'getHistory']);
    Route::post('/postprint', [PosController::class, 'postPrint']);
    Route::post('/bayarnew', [PosController::class, 'postPos']);
    Route::delete('/hapusTransaksi', [PosController::class, 'deletePos']);
    Route::get('/getwifi', [WifiController::class, 'readwifi']);
    Route::post('/inputWifi', [WifiController::class, 'storeWifi']);
    Route::put('/updateWifi', [WifiController::class, 'updateWifi']);
    Route::delete('/deleteWifi', [WifiController::class, 'destroyWifi']);
    Route::post('/inputpengeluaran', [PengeluaranController::class, 'postPengeluaran']);
    Route::get('/getpengeluaran', [PengeluaranController::class, 'getPengeluaran']);
});