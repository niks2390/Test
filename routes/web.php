<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;

use App\Http\Controllers\frontend\AboutController;

use App\Http\Controllers\frontend\ContactusController;
use App\Http\Controllers\admin\PaperController;
use App\Http\Controllers\admin\DepartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\GalleryController;

use App\Models\Paper;

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

Route::get('/',[HomeController::class,'index']);

Route::get('/about',[AboutController::class,'index']);
Route::get('/courses',[CoursesController::class,'index']);
Route::get('/gallery',[GalleryController::class,'index']);

Route::get('/contact',[ContactusController::class,'index']);
Route::post('/contact',[ContactusController::class,'enqury']);

//register
Route::get('/register',[LoginController::class, 'register'])->name('register');
Route::post('/register',[LoginController::class, 'register_submit'])->name('register');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin routes
Route::get('/admin',[App\Http\Controllers\admin\HomeController::class,'index']);

//for teach exam paper
Route::get('/admin/paper',[App\Http\Controllers\admin\PaperController::class,'index']);
Route::post('/admin/paper',[App\Http\Controllers\admin\PaperController::class,'save']);
Route::get('/admin/exam_papers',[App\Http\Controllers\admin\PaperController::class,'exam_papers']);

Route::get('/admin/department', [App\Http\Controllers\DepartController::class,'index']);
Route::post('/admin/department', [App\Http\Controllers\DepartController::class,'save']);

Route::get('/admin/department/delete/{id}',[App\Http\Controllers\DepartController::class, 'delete'])->name('department.delete');
Route::get('/admin/department/edit/{id}',[App\Http\Controllers\DepartController::class, 'edit'])->name('department.edit');
Route::post('/admin/department/update/{id}',[App\Http\Controllers\DepartController::class, 'update']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
