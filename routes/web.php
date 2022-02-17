<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TicketConroller;
use \App\Http\Controllers\OrderController;

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

Route::get('/', [\App\Http\Controllers\pagesController::class, 'home'])->name('home');

Route::get('/test', [\App\Http\Controllers\pagesController::class, 'test'])->name('test');

Route::get('/test2', [\App\Http\Controllers\pagesController::class, 'test2'])->name('test2');

Route::get('/events', [\App\Http\Controllers\pagesController::class, 'events'])->name('events');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix'=> 'dashboard', 'middleware'=>'auth'], function (){
    Route::resource('events', \App\Http\Controllers\EventsController::class);
});

Route::group(['prefix'=> 'dashboard', 'middleware'=>'auth'], function() {
    Route::resource('users',\App\Http\Controllers\UserController::class);
});

Route::get('/events/{id}/buy', [TicketConroller::class,'showBuyTicketForm' ])
    ->name('events.showBuyTicketForm')
    ->middleware('auth');

Route::get('/events/{order_id}/ConfirmOrder', [OrderController::class,'ConfirmOrder' ])
    ->name('events.ConfirmOrder')
    ->middleware('auth');

Route::post('/events/{id}/buy', [TicketConroller::class,'orderTicket'])
    ->name('events.orderTicket')
    ->middleware('auth');

require __DIR__.'/auth.php';
