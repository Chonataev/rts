<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function ()
{
    return view('main');
})->name('main');

Route::get('/about-us', function ()
{
    return view('about-us');
});

Route::match(['get', 'post'], '/login', [UserController::class,'login'])
    ->name('login');

Route::get('/profile', [UserController::class,'profile'])
    ->name('profile');


Route::match(['get', 'post'], '/login', [UserController::class,'login'])
    ->name('login');

