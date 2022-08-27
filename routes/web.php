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


Route::controller(PageController::class)->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('electronics', 'electronics')->name('pages.electronics');
    Route::get('jewelery', 'jewelery')->name('pages.jewelery');
    Route::get('men', 'men')->name('pages.men');
    Route::get('women', 'women')->name('pages.women');
    Route::get('show/{id}', 'show')->name('pages.show');
});
