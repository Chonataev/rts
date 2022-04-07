<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeacherController;
use GuzzleHttp\Middleware;

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
    ->name('profile')->middleware('auth');

Route::get('/logout', [UserController::class,'logout'])
    ->name('logout');

Route::match(['get', 'post'], '/join', [UserController::class,'join'])
    ->name('join')->middleware('isAdmin');

Route::get('/dashboard', [UserController::class,'dashboard'])
    ->name('dashboard')->middleware('isAdmin');

Route::controller(UserController::class)->group(function () {
    Route::get('/admin/teachers', [TeacherController::class, 'index'])->name('admin.teacher');
    Route::match(['get', 'post'],'/admin/teacher/create', [TeacherController::class, 'store']);
    Route::get('/admin/teacher/view', [TeacherController::class, 'view']);
    Route::match(['get', 'post'],'/admin/teacher/edit', [TeacherController::class, 'edit']);
    Route::get('/admin/teacher/delete', [TeacherController::class, 'delete']);
});
