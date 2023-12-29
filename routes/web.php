<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Member\RegisterController;
use App\Http\Controllers\Member\LoginController as MemberLoginController;
use App\Http\Controllers\Member\DashboardController;
use App\Http\Controllers\Member\VideoController as MemberVideoController;
use App\Http\Controllers\Member\PriceController;
use App\Http\Controllers\Member\SubscriptionController;
use App\Http\Controllers\Member\IndexController;
use App\Http\Controllers\Member\TransactionController as MemberTransactionController;
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
Route::get('admin/login', [LoginController::class, 'index'])->name('admin.login');
Route::post('admin/login', [LoginController::class, 'authenticate'])->name('admin.auth');

Route::group(['prefix' => 'admin', 'middleware' => ['admin.auth']], function(){
  Route::view('/', 'admin.dashboard')->name('admin.dashboard'); 
  
  Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout'); 

  Route::get('transaction', [TransactionController::class, 'index'])->name('admin.transaction'); 


  Route::group(['prefix' => 'video'], function(){
    Route::get('/', [VideoController::class, 'index'])->name('admin.video'); 
    Route::get('/create', [VideoController::class, 'create'])->name('admin.video.create'); 

    Route::post('/store', [VideoController::class, 'store'])->name('admin.video.store'); 
    Route::post('/playlist', [VideoController::class, 'store_playlist'])->name('admin.video.playlist'); 
    Route::get('/edit/{id}', [VideoController::class, 'edit'])->name('admin.video.edit'); 
    Route::put('/update/{id}', [VideoController::class, 'update'])->name('admin.video.update'); 
    Route::delete('/destroy/{id}', [VideoController::class, 'destroy'])->name('admin.video.destroy'); 
  });
});

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/register', [RegisterController::class, 'index'])->name('member.register'); 
Route::post('/register', [RegisterController::class, 'store'])->name('member.register.store'); 

Route::get('/login', [MemberLoginController::class, 'index'])->name('member.login'); 
Route::Post('/login', [MemberLoginController::class, 'auth'])->name('member.login.auth'); 

Route::view('/payment-finish', 'member.payment-finish')->name('member.payment-finish'); 


Route::get('/pricing', [PriceController::class, 'index'])->name('member.pricing');

Route::group(['prefix' => 'member', 'middleware' => ['auth']], function(){
  Route::get('/', [DashboardController::class, 'index'])->name('member.dashboard');

  Route::get('/video/{id}', [MemberVideoController::class, 'show'])->name('member.video.detail');

  Route::get('/video/{video_id}/playlist/{id}/{i}', [MemberVideoController::class, 'playlist_show'])->name('member.video.detail.playlist');
  
  Route::get('/logout', [MemberLoginController::class, 'logout'])->name('member.logout');

  Route::get('/subscription', [SubscriptionController::class, 'index'])->name('member.subcription');

  Route::delete('/destroy/{id}', [SubscriptionController::class, 'stopSubs'])->name('member.subs.destroy');

  Route::post('/transaction', [MemberTransactionController::class, 'store'])->name('member.transaction.store');

});






// Route::get('/', function () {
//     return view('welcome');
// });
