<?php

use App\Http\Controllers\CoffeeAndCupcakesController;
use App\Http\Controllers\UserController;
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

// index - Show all products
Route::get('/', [CoffeeAndCupcakesController::class, 'index']);

//create - Show form to create new product
Route::get('/products/create', [CoffeeAndCupcakesController::class, 'create'])->middleware('auth');

//store - Store new product
Route::post('/products', [CoffeeAndCupcakesController::class, 'store'])->middleware('auth');

//edit - Show form to edit product
Route::get('/products/{product}/edit', [CoffeeAndCupcakesController::class, 'edit'])->middleware('auth');

// update - Submit the edited product
Route::put('/products/{product}', [CoffeeAndCupcakesController::class, 'update'])->middleware('auth');

//destroy - Delete product
Route::delete('/products/{product}', [CoffeeAndCupcakesController::class, 'destroy'])->middleware('auth');

// Manage product
Route::get('/products/manage', [CoffeeAndCupcakesController::class, 'manage'])->middleware('auth');

// show - Show single product
Route::get('/products/{product}', [CoffeeAndCupcakesController::class, 'show']);

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Register/Create new user
Route::post('/users', [UserController::class, 'store']);

// User Logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
