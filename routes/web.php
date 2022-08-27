<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('', [PageController::class, 'index'])->name('index');
Route::get('electronics', [PageController::class, 'electronics'])->name('pages.electronics');
Route::get('jewelery', [PageController::class, 'jewelery'])->name('pages.jewelery');
Route::get('men', [PageController::class, 'men'])->name('pages.men');
Route::get('women', [PageController::class, 'women'])->name('pages.women');
Route::get('show/{id}', [PageController::class, 'show'])->name('pages.show');
