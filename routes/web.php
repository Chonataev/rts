<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\NewsController;
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

Route::match(['get', 'post'], '/login', [UserController::class,'login'])->name('login');

Route::get('/logout', [UserController::class,'logout'])->name('logout');


Route::group(['middleware' => 'isAdmin'], function()
{
    Route::get('/dashboard', [UserController::class,'dashboard'])->name('dashboard');
    Route::match(['get', 'post'], '/join', [UserController::class,'join'])->name('join');

    Route::get('/admin/teachers', [TeacherController::class, 'index'])->name('admin.teacher.index');
    Route::get('/admin/teacher/view', [TeacherController::class, 'view'])->name('admin.teacher.view');
    Route::get('/admin/teacher/delete/{id}', [TeacherController::class, 'delete'])->name('admin.teacher.delete');

    Route::match(['get', 'post'],'/admin/teacher/edit', [TeacherController::class, 'edit'])->name('admin.teacher.edit');
    Route::match(['get', 'post'],'/admin/teacher/create', [TeacherController::class, 'store'])->name('admin.teacher.store');


    Route::get('/admin/students', [StudentController::class, 'index'])->name('admin.student.index');
    Route::get('/admin/student/view', [StudentController::class, 'view'])->name('admin.student.view');
    Route::get('/admin/student/delete/{id}', [StudentController::class, 'delete'])->name('admin.student.delete');

    Route::match(['get', 'post'],'/admin/student/edit', [StudentController::class, 'edit'])->name('admin.student.edit');
    Route::match(['get', 'post'],'/admin/student/create', [StudentController::class, 'store'])->name('admin.student.store');


    Route::get('/admin/gallery', [ImageController::class, 'index'])->name('admin.gallery.index');
    Route::match(['get', 'post'],'/admin/gallery/store', [ImageController::class, 'store'])->name('admin.gallery.store');
    Route::delete('/admin/gallery/delete{id}', [ImageController::class, 'destroy'])->name('admin.gallery.delete');


    Route::get('/admin/news', [NewsController::class, 'index'])->name('admin.news.index');
    Route::match(['get', 'post'],'/admin/news/store', [NewsController::class, 'store'])->name('admin.news.store');
    Route::delete('/admin/news/delete{id}', [NewsController::class, 'destroy'])->name('admin.news.delete');
});


Route::group(['middleware' => 'auth'], function(){
    Route::get('/teacher/profile/{username}', [TeacherController::class,'view'])->name('teacher.profile');;
    Route::get('/student/profile/{username}', [StudentController::class,'view'])->name('student.profile');;
    Route::get('/profile', [UserController::class,'profile'])->name('profile');
});

