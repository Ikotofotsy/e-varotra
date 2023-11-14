<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', [Controllers\ClientController::class,'home']);
Route::get('/shop', [Controllers\ClientController::class,'shop']);
Route::get('/panier', [Controllers\ClientController::class,'panier']);
Route::get('/login', [Controllers\ClientController::class,'login']);
Route::get('/signup', [Controllers\ClientController::class,'signup']);
Route::get('/paiement', [Controllers\ClientController::class,'paiement']);
