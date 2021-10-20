<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Web\DashboardController;
// use App\Http\Controllers\Web\SellCryptoController;
use App\Http\Controllers\Web\BuySellCryptoController;
use App\Http\Controllers\Web\UserController;

use App\Http\Controllers\Merchants\MerchantController;
use App\Http\Controllers\Merchants\MerchantsAuthController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginUser'])->name('login-user');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'saveUser'])->name('save-new-user');
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
Route::get('/log-out', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Route::get('/sell', [SellCryptoController::class, 'sell'])->name('sell');
    Route::get('/buy-sell', [BuySellCryptoController::class, 'buySell'])->name('buy-sell');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
});


//MERCHANT ROUTES
Route::group(['prefix' => 'merchants'], function () {
    // Route::get('/{merchant_address}', [MerchantController::class, 'getPaymentForMerchant']);
    Route::get('/sign-in', [MerchantsAuthController::class, 'login']);
    Route::post('/sign-in', [MerchantsAuthController::class, 'loginMerchant']);
    Route::get('/sign-up', [MerchantsAuthController::class, 'register']);
    Route::post('/sign-up', [MerchantsAuthController::class, 'registerMerchant']);
    Route::get('/sign-out', [MerchantsAuthController::class, 'signOut']);
    Route::get('/dashboard', [MerchantController::class, 'index']);
    Route::get('/receive-payment', [MerchantController::class, 'receivePayment']);

});