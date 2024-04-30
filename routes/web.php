<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::resource('/articles',ArticleController::class);

Route::redirect('/', '/articles');
Route::resource('/articles', ArticleController::class);
Route::get('/dashboard/why', [ArticleController::class, 'why'])->name('layouts.why');

Route::resource('/users', UserController::class); 

Route::get('/dashboard', [DashbordController::class, 'dash'])->name('dashbord.index')->middleware('auth');
Route::get('/dashboard/home', [DashbordController::class, 'home'])->name('dashbord.home')->middleware('auth');
Route::get('/dashboard/create', [DashbordController::class, 'create'])->name('dashbord.create')->middleware('auth');
Route::post('/dashboard', [DashbordController::class, 'store'])->name('dashbord.store')->middleware('auth');
Route::delete('/dashboard/{id}', [DashbordController::class, 'destroy'])->name('dashbord.destroy')->middleware('auth');
Route::get('/dashboard/{id}/edit', [DashbordController::class, 'edit'])->name('dashbord.edit')->middleware('auth');
Route::put('/dashboard/{id}', [DashbordController::class, 'update'])->name('dashbord.update')->middleware('auth');

//log in
Route::get('/login', [LoginController::class, 'show'])->name('login.show');
Route::post('/login',[LoginController::class, 'login'])->name('login');
//log out 
Route::get('/logout',[LoginController::class, 'logout'])->name('login.logout')->middleware('auth');
