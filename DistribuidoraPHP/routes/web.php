<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController; 
use App\Http\Controllers\LogisticaController;

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

Route::get('/',[ClienteController::class,'showHomeClie'])->name('homeClie');

Route::get('/homeLog',[LogisticaController::class,'showHomeLog'])->name('homeLog');
