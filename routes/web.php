<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UserController, HomeController, DrugController, SupplierController, TransactionController};

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
Route::middleware(['alreadyLogged'])->group(function () {
	Route::get('/', [UserController::class, 'login']);
	Route::get('/login', [UserController::class, 'login'])->name('login');
	Route::post('/logged', [UserController::class, 'logged']);
	Route::get('/register', [UserController::class, 'register']);
	Route::post('/registered', [UserController::class, 'registered']);
});

Route::middleware(['isLogged'])->group(function () {
	Route::get('/logout', [UserController::class, 'logout']);
	Route::get('/home', [HomeController::class, 'index']);

	Route::get('/drug', [DrugController::class, 'index']);
	Route::get('/drug/show/{drug:id}', [DrugController::class, 'show']);
	Route::get('/drug/add', [DrugController::class, 'add']);
	Route::post('/drug/store', [DrugController::class, 'store']);
	Route::get('/drug/edit/{drug:id}', [DrugController::class, 'edit']);
	Route::put('/drug/update/{drug:id}', [DrugController::class, 'update']);
	Route::delete('/drug/delete/{drug:id}', [DrugController::class, 'delete']);

	Route::get('/supplier', [SupplierController::class, 'index']);
	Route::get('/supplier/show/{supplier:id}', [SupplierController::class, 'show']);
	Route::get('/supplier/add', [SupplierController::class, 'add']);
	Route::post('/supplier/store', [SupplierController::class, 'store']);
	Route::get('/supplier/edit/{supplier:id}', [SupplierController::class, 'edit']);
	Route::put('/supplier/update/{supplier:id}', [SupplierController::class, 'update']);
	Route::delete('/supplier/delete/{supplier:id}', [SupplierController::class, 'delete']);

	Route::get('/transaction', [TransactionController::class, 'index']);
	Route::get('/transaction/show/{transaction:id}', [TransactionController::class, 'show']);
	Route::get('/transaction/add', [TransactionController::class, 'add']);
	Route::post('/transaction/store', [TransactionController::class, 'store']);
	Route::delete('/transaction/delete/{transaction:id}', [TransactionController::class, 'delete']);    
});
















