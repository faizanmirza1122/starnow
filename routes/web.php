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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/casting-calls/all/pakistan/', [PageController::class, 'jobs'])->name('jobs');
Route::get('/talent/all/', [PageController::class, 'talentDirectory'])->name('talent-directory');
Route::get('/feed', [PageController::class, 'discover'])->name('discover');
Route::get('/placelisting', [PageController::class, 'placeListing'])->name('placelisting');
Route::get('/register/member', [PageController::class, 'signup'])->name('signup');
Route::get('/member/registeradvertiser/', [PageController::class, 'findTalent'])->name('findtalent');
Route::get('/register', [PageController::class, 'findWork'])->name('findwork');