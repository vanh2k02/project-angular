<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\BrandController;
use App\Http\Controllers\api\CategoryController;
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
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::middleware(['auth:api'])->group(function () {
    Route::prefix('auth')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::post('/refresh', [AuthController::class, 'refresh']);
        Route::get('/user-profile', [AuthController::class, 'userProfile']);
        Route::post('/change-password', [AuthController::class, 'changePassword']);
        Route::post('/edit-profile', [AuthController::class, 'edit']);
    });
    Route::prefix('category')->group(function () {
        Route::get('/show-category', [CategoryController::class, 'showCategory']);
        Route::post('/create-category', [CategoryController::class, 'createCategory']);
        Route::post('/{id}/find-category', [CategoryController::class, 'findCategory']);
        Route::post('/{id}/update-category', [CategoryController::class, 'update']);
        Route::post('/{id}/action-show-category', [CategoryController::class, 'actionShowCategory']);
        Route::post('/{id}/action-hide-category', [CategoryController::class, 'actionHideCategory']);
        Route::post('/{id}/delete-category', [CategoryController::class, 'delete']);
    });
    Route::prefix('brand')->group(function () {
        Route::get('/show-brand', [BrandController::class, 'showBrand']);
        Route::post('/create-brand', [BrandController::class, 'createBrand']);
        Route::post('/{id}/find-brand', [BrandController::class, 'findBrand']);
        Route::post('/{id}/update-brand', [BrandController::class, 'update']);
        Route::post('/{id}/action-show-brand', [BrandController::class, 'actionShowBrand']);
        Route::post('/{id}/action-hide-brand', [BrandController::class, 'actionHideBrand']);
        Route::post('/{id}/delete-brand', [BrandController::class, 'delete']);
    });
});
