<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDashboardController;
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

Route::get('/', function() {
  return redirect('home');
});


Route::get('/home', [UserDashboardController::class, 'homePage'])->name('home');
Route::get('/curiculum', [UserDashboardController::class, 'curiculumPage'])->name('curiculum');
Route::get('/studentship', [UserDashboardController::class, 'studentshipPage'])->name('studentship');
