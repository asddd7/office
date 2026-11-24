<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\Customer;
use App\Http\Controllers\Admin\CustomerCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Route::middleware(['auth', 'verified', 'user'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::prefix('admin')
->name('admin.')
->middleware(['auth', 'verified', 'role'])
->group(function () {
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('customer', [Customer::class, 'index'])->name('customer.index');
Route::post('customer', [Customer::class, 'store'])->name('customer.store');
Route::get('customer/create', [Customer::class, 'create'])->name('customer.create');
Route::get('customer/{customer}', [Customer::class, 'show'])->name('customer.show');
Route::get('customer/{customer}/edit', [Customer::class, 'edit'])->name('customer.edit');
Route::put('customer/{customer}', [Customer::class, 'update'])->name('customer.update');
Route::delete('customer/{customer}', [Customer::class, 'destroy'])->name('customer.destroy');

Route::get('customer_category', [CustomerCategoryController::class, 'index'])->name('customer_category.index');
Route::post('customer_category', [CustomerCategoryController::class, 'store'])->name('customer_category.store');
Route::get('customer_category/create', [CustomerCategoryController::class, 'create'])->name('customer_category.create');
Route::get('customer_category/{category}', [CustomerCategoryController::class, 'show'])->name('customer_category.show');
Route::get('customer_category/{category}/edit', [CustomerCategoryController::class, 'edit'])->name('customer_category.edit');
Route::put('customer_category/{category}', [CustomerCategoryController::class, 'update'])->name('customer_category.update');
Route::delete('customer_category/{category}', [CustomerCategoryController::class, 'destroy'])->name('customer_category.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
