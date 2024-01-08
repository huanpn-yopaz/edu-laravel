<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChangePassController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailPostController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotfoundController;
use App\Http\Controllers\ObjectPageController;
use App\Http\Controllers\ObjectsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ZoomController;
use App\Http\Controllers\ZoomPageController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['user'])->group(function () {
    Route::resource('doi-mat-khau', ChangePassController::class);
    Route::resource('bai-tap', QuestionController::class);
    Route::post('logout', [AuthController::class, 'logout']);
});
Route::get('dang-nhap', [AuthController::class, 'login']);
Route::get('dang-ki', [AuthController::class, 'register']);
Route::post('check_register', [AuthController::class, 'check_register']);
Route::post('check_login', [AuthController::class, 'check_login']);
Route::middleware(['admin'])->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('admin/user', UserController::class);
    Route::resource('admin/object', ObjectsController::class);
    Route::resource('admin/zoom', ZoomController::class);
    Route::resource('admin/post', PostController::class);
    Route::post('export_object', [ObjectsController::class, 'export_object']);
    Route::post('import_object', [ObjectsController::class, 'import_object']);
});
Route::resource('/', HomeController::class);
Route::get('load_more', [HomeController::class, 'load_more']);
Route::middleware(['minifile'])->group(function () {
    Route::resource('gioi-thieu', AboutController::class);
    Route::resource('lien-he', ContactController::class);
    Route::get('tim-kiem', [SearchController::class, 'search']);
    Route::resource('notfound', NotfoundController::class);
    Route::get('/{id}-{slug_post}', [DetailPostController::class, 'show'])->name('show.post');
    Route::get('hoc-sinh/{id}-{slug_zoom}', [ZoomPageController::class, 'show'])->name('show.zoom');
    Route::get('mon-hoc/{id}-{slug_object}', [ObjectPageController::class, 'show'])->name('show.object');
});
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
