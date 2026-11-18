
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuitarShopController;

// Guest routes (users who are not logged in)
Route::middleware('guest')->group(function () {

    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.process');

    Route::get('/register', [AuthController::class, 'showRegister'])
        ->name('register');

    Route::post('/register', [AuthController::class, 'register'])
        ->name('register.process');

});

// Authenticated routes (logged-in users only)
Route::middleware('auth')->group(function () {

    Route::get('/', [GuitarShopController::class, 'dashboard'])
        ->name('dashboard');

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');

    Route::post('/brand/store', [GuitarShopController::class, 'storeBrand'])
        ->name('brand.store');

    Route::post('/guitar/store', [GuitarShopController::class, 'storeGuitar'])
        ->name('guitar.store');

    Route::post('/specification/store', [GuitarShopController::class, 'storeSpecification'])
        ->name('specification.store');

    Route::post('/customer/store', [GuitarShopController::class, 'storeCustomer'])
        ->name('customer.store');

    Route::post('/purchase/store', [GuitarShopController::class, 'storePurchase'])
        ->name('purchase.store');

});
