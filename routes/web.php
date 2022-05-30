<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\ClientRoleController;
use App\Http\Controllers\Admin\WorkerRoleController;
use App\Http\Controllers\Admin\JobCategoryController;

use App\Http\Controllers\Client\DashboardController as ClientDashboardController;
use App\Http\Controllers\Client\AuthController as ClientAuthController;
use App\Http\Controllers\Client\JobController;

use App\Http\Controllers\Worker\AuthController as WorkerAuthController;

use App\Http\Controllers\Frontend\PageController;

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


/**
 * 
 * Guest Routes
 */
Route::group(['middleware' => ['guest']], function () {

      // admin routes
      Route::get('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
      Route::post('/admin/login', [AdminAuthController::class, 'postLogin'])->name('admin.login.post');

      // client routes
      Route::get('/member/register-advertiser/', [ClientAuthController::class, 'findTalent'])->name('client.register');
      Route::post('/member/register-advertiser/', [ClientAuthController::class, 'postFindTalent'])->name('client.register.post');

      Route::get('/client/login', [ClientAuthController::class, 'login'])->name('client.login');
      Route::post('/client/login', [ClientAuthController::class, 'postLogin'])->name('client.login.post');

      // worker routes
      Route::get('/member/register-findworker', [WorkerAuthController::class, 'findWork'])->name('worker.register');
      Route::post('/member/register-findworker', [WorkerAuthController::class, 'postFindWork'])->name('worker.register.post');

      Route::get('/member/login-findworker', [WorkerAuthController::class, 'loginFindWork'])->name('worker.login');
      Route::post('/member/login-findworker', [WorkerAuthController::class, 'postLoginFindWork'])->name('worker.login.post');
});




/**
 * 
 * Frontend Routes
 */
Route::get('/register/member-as', [PageController::class, 'signUpAs'])->name('signup.as');
Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/casting-calls/all/pakistan/', [PageController::class, 'jobs'])->name('jobs');
Route::get('/talent/all/', [PageController::class, 'talentDirectory'])->name('talent-directory');
Route::get('/feed', [PageController::class, 'discover'])->name('discover');
Route::get('/placelisting', [PageController::class, 'placeListing'])->name('placelisting');







/**
 * 
 * Admin Routes
 */

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'check.admin']], function () {
      Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard');

      // worker roles resource
      Route::resource('worker-roles', WorkerRoleController::class);

      // client roles resource
      Route::resource('client-roles', ClientRoleController::class);

      // job categories resource
      Route::resource('job-categories', JobCategoryController::class);

      // profile get and post operations
      Route::get('/profile', [AdminAuthController::class, 'profile'])->name('admin.profile');
      Route::put('/update-profile', [AdminAuthController::class, 'changePassword'])->name('admin.change.password');
      // Admin logout
      Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});






/**
 * 
 * Client Routes
 */
Route::group(['prefix' => 'client', 'middleware' => ['auth', 'check.client']], function () {
      Route::get('/dashboard', [ClientDashboardController::class, 'dashboard'])->name('client.dashboard');
      

      // jobs resource
      Route::resource('client-jobs', JobController::class);

      Route::get('/profile', [ClientAuthController::class, 'profile'])->name('client.profile');
      Route::put('/update-profile', [ClientAuthController::class, 'updateProfile'])->name('client.update.profile');
      Route::put('/change-password', [ClientAuthController::class, 'changePassword'])->name('client.change.password');
      Route::post('/logout', [ClientAuthController::class, 'logout'])->name('client.logout');
});






/**
 * 
 * Worker Routes
 */
Route::group(['prefix' => 'worker', 'middleware' => ['auth', 'check.worker']], function () {
      Route::get('/', 'HomeController@index')->name('worker.home');


      Route::get('/profile', [WorkerAuthController::class, 'profile'])->name('worker.profile');
      Route::put('/update-profile', [WorkerAuthController::class, 'updateProfile'])->name('worker.update.profile');
      Route::put('/change-password', [WorkerAuthController::class, 'changePassword'])->name('worker.change.password');
      Route::post('/logout', [WorkerAuthController::class, 'logout'])->name('worker.logout');
});







