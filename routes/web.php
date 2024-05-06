<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrdersController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'indexInstructor'])->name('indexInstructor');
Route::get('/course', [HomeController::class, 'indexCourse'])->name('indexCourse');

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/orders', [OrdersController::class, 'index'])->name('orders');
    Route::get('/orders/create', [OrdersController::class, 'create'])->name('orders.create');
    Route::post('/orders/store', [OrdersController::class, 'store'])->name('orders.store');
    Route::get('/orders/show/{id}', [OrdersController::class, 'show'])->name('orders.show');
    Route::get('/orders/edit/{id}', [OrdersController::class, 'edit'])->name('orders.edit');
    Route::put('/orders/update/{id}', [OrdersController::class, 'update'])->name('orders.update');
    Route::get('/orders/destroy/{id}', [OrdersController::class, 'destroy'])->name('orders.destroy');
});

require __DIR__ . '/auth.php';
