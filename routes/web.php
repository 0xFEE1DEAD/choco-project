<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopLanding\ShopLandingController;
use App\Http\Controllers\CourceLanding\CourceLandingController;

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

//Route::get('/', [ShopLandingController::class, 'index']);

Route::get('/', [CourceLandingController::class, 'index'])->name('buy-cource');;
Route::post('/buy', [CourceLandingController::class, 'buy'])->name('buy-cource-handler');
Route::post('/accept-cookies', [CourceLandingController::class, 'acceptCookies']);

Route::get('/chat-bot', function () {
    return view('chat-bot');
});