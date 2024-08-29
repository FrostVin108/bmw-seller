<?php

use App\Http\Controllers\BuyerController;
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use App\Models\car;
use App\Models\buyer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/carlist', [CarController::class, 'car_list'])->name('car.list');

Route::get('/carcreate',[CarController::class, 'create'])->name('car.create');

Route::post('carindex', [CarController::class, 'store'])->name('car.store');

Route::delete('cardestroy/{id}', [CarController::class, 'destroy'])->name('car.delete');

Route::get('/caredit/{id}', [CarController::class, 'edit'])->name('car.edit');

Route::put('/carupdate/{id}', [CarController::class, 'update'])->name('car.update');



Route::get('/', [BuyerController::class, 'index'])->name('buyer.list');

Route::get('/create', function(){
    $car = car::get(); 
    return view('buyer_create', compact('car'));
})->name('buyer.create');

Route::post('/store', [BuyerController::class, 'store'])->name('buyer.store');

Route::delete('/buyerdestroy/{id}', [BuyerController::class, 'destroy'])->name('buyer-delete');

Route::get('/edit/{id}', [BuyerController::class, 'edit'])->name('buyer.edit');

Route::put('/update/{id}', [BuyerController::class, 'update'])->name('buyer.update');