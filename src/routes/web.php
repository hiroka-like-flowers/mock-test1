<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ExhibitionController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MypageController;

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
Route::get('/', [ExhibitionController::class, 'index']);
Route::get('/item/{item_id}', [ExhibitionController::class, 'show'])->name('item.show');
Route::post('/register', [UserController::class, 'storeUser']);
Route::post('/mypage/profile', [UserController::class, 'storeProfile']);
Route::post('/login', [UserController::class, 'loginUser']);
Route::middleware('auth')->group(function(){
    Route::get('/?tab=mylist', [ExhibitionController::class, 'index']);
    Route::get('/mypage', [UserController::class, 'index']);
    Route::get('/mypage', [MypageController::class, 'index'])->name('mypage');
    Route::get('/purchase/{item_id}', [OrderController::class, 'create']);
    Route::post('/purchase/{item_id}', [OrderController::class, 'store']);
    Route::post('/purchase/{item_id}', [OrderController::class, 'index'])->name('order.index');
    Route::get('/sell', [ExhibitionController::class, 'create']);
    Route::post('/sell', [ExhibitionController::class, 'store']);
    Route::get('/purchase/address/{item_id}', [OrderController::class, 'show']);
    Route::post('/purchase/address/{item?id}', [OrderController::class, 'store']);
    Route::post('/item/{item_id}/comment', [CommentController::class, 'store'])->name('comment.store');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']);
    Route::get('/mypage/profile', [UserController::class, 'storeProfile']);
});