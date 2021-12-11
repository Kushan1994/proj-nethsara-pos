<?php

use App\Http\Controllers\SupplierController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Cashier\CashierController;
use App\Http\Controllers\Manager\ManagerController;
use App\Http\Controllers\Accountant\AccountantController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/home',[LoginController::class,'dashboard'])->name('home')->middleware('auth');
Route::get('/dashboard',[LoginController::class,'dashboard'])->name('dashboard')->middleware('auth');

Route::prefix('admin')->middleware(['auth', 'admin'])->as('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});

Route::prefix('cashier')->middleware(['auth', 'cashier'])->as('cashier.')->group(function () {
    Route::get('/dashboard', [CashierController::class, 'dashboard'])->name('dashboard');
});

Route::prefix('manager')->middleware(['auth', 'manager'])->as('manager.')->group(function () {
    Route::get('/dashboard', [ManagerController::class, 'dashboard'])->name('dashboard');
});

Route::prefix('accountant')->middleware(['auth', 'accountant'])->as('accountant.')->group(function () {
    Route::get('/dashboard', [AccountantController::class, 'dashboard'])->name('dashboard');
});

Route::resource('suppliers', SupplierController::class)->middleware('auth');

Route::get('logout', function () {
    return redirect('login')->with(Auth::logout());
});


require __DIR__ . '/auth.php';
