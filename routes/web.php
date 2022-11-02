<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', [JobController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/jobs/{id}', [JobController::class, 'show'])->name('jobs.show');

Route::get('/user/profile', [UserController::class, 'index'])->name('user.profile');

Route::post('/user/profile/create', [UserController::class, 'store'])->name('profile.create');

Route::post('/user/resume', [UserController::class, 'resume'])->name('resume');

// Route::post('/user/apply/{$id}', [JobController::class, 'apply'])->name('apply');
Route::post('/jobs/{id}', [JobController::class, 'apply'])->name('apply');
