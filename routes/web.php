<?php

use App\Http\Controllers\HistoryWeatherController;
use App\Http\Controllers\weatherController;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/',[weatherController::class,'index'])->name('home');
Route::post('/weather',[weatherController::class,'store'])->name('search');
Route::get('/weather/{id}',[weatherController::class,'show'])->name('history');

Route::delete('/weather/{id}',[HistoryWeatherController::class,'delete'])->name('delete');
Route::get('/clear-history',[HistoryWeatherController::class,'clear'])->name('clear');
