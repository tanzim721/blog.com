<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;


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

Route::get('/', [HomeController::class, 'home'])->name('home1');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'auth_login'])->name('auth_login');

Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'create_user'])->name('create_user');

Route::post('verify/{token}', [AuthController::class, 'verify'])->name('verify');
Route::get('forgot-password', [AuthController::class, 'forgot'])->name('forgot');
Route::post('forgot-password', [AuthController::class, 'forgot_password'])->name('forgot-password');

Route::get('reset/{token}', [AuthController::class, 'reset'])->name('reset');
Route::post('reset/{token}', [AuthController::class, 'post_reset'])->name('reset');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'adminuser'], function(){
    Route::get('panel/dashboard', [DashboardController::class, 'dashboard'])->name('panel.dashboard');
    
    Route::get('panel/user/list', [UserController::class, 'user'])->name('panel.user.list');
    Route::get('panel/user/add', [UserController::class, 'add_user'])->name('panel.user.add');
    Route::post('panel/user/add', [UserController::class, 'insert_user'])->name('panel.user.store');
    Route::get('panel/user/edit/{id}', [UserController::class, 'edit_user'])->name('panel.user.edit');
    Route::post('panel/user/edit/{id}', [UserController::class, 'update_user'])->name('panel.user.update');
    Route::get('panel/user/delete/{id}', [UserController::class, 'delete_user'])->name('panel.user.delete');

    // profile view for admin 
    Route::get('panel/profile/view', [ProfileController::class, 'view'])->name('panel.profile.view');
    Route::get('panel/profile/edit', [ProfileController::class, 'edit'])->name('panel.profile.edit');
    Route::post('panel/profile/store', [ProfileController::class, 'update'])->name('panel.profile.store');

    Route::get('panel/logo/view', [LogoController::class, 'view'])->name('panel.logo.view');
    Route::get('panel/logo/add', [LogoController::class, 'add'])->name('panel.logo.add');
    Route::post('panel/logo/store', [LogoController::class, 'store'])->name('panel.logo.store');
    Route::get('panel/logo/edit/{id}', [LogoController::class, 'edit'])->name('panel.logo.edit');
    Route::post('panel/logo/update/{id}', [LogoController::class, 'update'])->name('panel.logo.update');
    Route::get('panel/logo/delete/{id}', [LogoController::class, 'delete'])->name('panel.logo.delete');

    Route::get('panel/services/view', [ServicesController::class, 'view'])->name('panel.services.view');
    Route::get('panel/services/add', [ServicesController::class, 'add'])->name('panel.services.add');
    Route::post('panel/services/store', [ServicesController::class, 'store'])->name('panel.services.store');
    Route::get('panel/services/edit/{id}', [ServicesController::class, 'edit'])->name('panel.services.edit');
    Route::post('panel/services/update/{id}', [ServicesController::class, 'update'])->name('panel.services.update');
    Route::get('panel/services/delete/{id}', [ServicesController::class, 'delete'])->name('panel.services.delete');

    Route::get('panel/category/list', [CategoryController::class, 'category'])->name('panel.category.list');
    Route::get('panel/category/add', [CategoryController::class, 'add_category'])->name('panel.category.add');
    Route::post('panel/category/add', [CategoryController::class, 'insert_category'])->name('panel.category.store');
    Route::get('panel/category/edit/{id}', [CategoryController::class, 'edit_category'])->name('panel.category.edit');
    Route::post('panel/category/edit/{id}', [CategoryController::class, 'update_category'])->name('panel.category.update');
    Route::get('panel/category/delete/{id}', [CategoryController::class, 'delete_category'])->name('panel.category.delete');

});

