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
use App\Http\Controllers\SliderController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\VisionController;
use App\Http\Controllers\NewsEventController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\QualityController;
use App\Http\Controllers\MerchandisingController;


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
    
    // User controller ............... 
    Route::get('panel/user/list', [UserController::class, 'user'])->name('panel.user.list');
    Route::get('panel/user/add', [UserController::class, 'add_user'])->name('panel.user.add');
    Route::post('panel/user/store', [UserController::class, 'insert_user'])->name('panel.user.store');
    Route::get('panel/user/edit/{id}', [UserController::class, 'edit_user'])->name('panel.user.edit');
    Route::post('panel/user/update/{id}', [UserController::class, 'update_user'])->name('panel.user.update');
    Route::get('panel/user/delete/{id}', [UserController::class, 'delete_user'])->name('panel.user.delete');

    // profile view for admin ........
    Route::get('panel/profile/view', [ProfileController::class, 'view'])->name('panel.profile.view');
    Route::get('panel/profile/edit', [ProfileController::class, 'edit'])->name('panel.profile.edit');
    Route::post('panel/profile/store', [ProfileController::class, 'update'])->name('panel.profile.store');

    // logo controlller ..........
    Route::get('panel/logo/view', [LogoController::class, 'view'])->name('panel.logo.view');
    Route::get('panel/logo/add', [LogoController::class, 'add'])->name('panel.logo.add');
    Route::post('panel/logo/store', [LogoController::class, 'store'])->name('panel.logo.store');
    Route::get('panel/logo/edit/{id}', [LogoController::class, 'edit'])->name('panel.logo.edit');
    Route::post('panel/logo/update/{id}', [LogoController::class, 'update'])->name('panel.logo.update');
    Route::get('panel/logo/delete/{id}', [LogoController::class, 'delete'])->name('panel.logo.delete');

    // Slider controller ..........
    Route::get('panel/sliders/view', [SliderController::class, 'view'])->name('panel.sliders.view');
    Route::get('panel/sliders/add', [SliderController::class, 'add'])->name('panel.sliders.add');
    Route::post('panel/sliders/store', [SliderController::class, 'store'])->name('panel.sliders.store');
    Route::get('panel/sliders/edit/{id}', [SliderController::class, 'edit'])->name('panel.sliders.edit');
    Route::post('panel/sliders/update/{id}', [SliderController::class, 'update'])->name('panel.sliders.update');
    Route::get('panel/sliders/delete/{id}', [SliderController::class, 'delete'])->name('panel.sliders.delete');


    // Mission Controller............. 
    Route::get('panel/missions/view', [MissionController::class, 'view'])->name('panel.missions.view');
    Route::get('panel/missions/add', [MissionController::class, 'add'])->name('panel.missions.add');
    Route::post('panel/missions/store', [MissionController::class, 'store'])->name('panel.missions.store');
    Route::get('panel/missions/edit/{id}', [MissionController::class, 'edit'])->name('panel.missions.edit');
    Route::post('panel/missions/update/{id}', [MissionController::class, 'update'])->name('panel.missions.update');
    Route::get('panel/missions/delete/{id}', [MissionController::class, 'delete'])->name('panel.missions.delete');

    // Vision Controller............. 
    Route::get('panel/visions/view', [VisionController::class, 'view'])->name('panel.visions.view');
    Route::get('panel/visions/add', [VisionController::class, 'add'])->name('panel.visions.add');
    Route::post('panel/visions/store', [VisionController::class, 'store'])->name('panel.visions.store');
    Route::get('panel/visions/edit/{id}', [VisionController::class, 'edit'])->name('panel.visions.edit');
    Route::post('panel/visions/update/{id}', [VisionController::class, 'update'])->name('panel.visions.update');
    Route::get('panel/visions/delete/{id}', [VisionController::class, 'delete'])->name('panel.visions.delete');

    // News and Events Controller................
    Route::get('panel/news_events/view', [NewsEventController::class, 'view'])->name('panel.news_events.view');
    Route::get('panel/news_events/add', [NewsEventController::class, 'add'])->name('panel.news_events.add');
    Route::post('panel/news_events/store', [NewsEventController::class, 'store'])->name('panel.news_events.store');
    Route::get('panel/news_events/edit/{id}', [NewsEventController::class, 'edit'])->name('panel.news_events.edit');
    Route::post('panel/news_events/update/{id}', [NewsEventController::class, 'update'])->name('panel.news_events.update');
    Route::get('panel/news_events/delete/{id}', [NewsEventController::class, 'delete'])->name('panel.news_events.delete');

    // Contact Controller.............
    Route::get('panel/contacts/view', [ContactController::class, 'view'])->name('panel.contacts.view');
    Route::get('panel/contacts/add', [ContactController::class, 'add'])->name('panel.contacts.add');
    Route::post('panel/contacts/store', [ContactController::class, 'store'])->name('panel.contacts.store');
    Route::get('panel/contacts/edit/{id}', [ContactController::class, 'edit'])->name('panel.contacts.edit');
    Route::post('panel/contacts/update/{id}', [ContactController::class, 'update'])->name('panel.contacts.update');
    Route::get('panel/contacts/delete/{id}', [ContactController::class, 'delete'])->name('panel.contacts.delete');

    // About us Controller.............
    Route::get('panel/abouts/view', [AboutController::class, 'view'])->name('panel.abouts.view');
    Route::get('panel/abouts/add', [AboutController::class, 'add'])->name('panel.abouts.add');
    Route::post('panel/abouts/store', [AboutController::class, 'store'])->name('panel.abouts.store');
    Route::get('panel/abouts/edit/{id}', [AboutController::class, 'edit'])->name('panel.abouts.edit');
    Route::post('panel/abouts/update/{id}', [AboutController::class, 'update'])->name('panel.abouts.update');
    Route::get('panel/abouts/delete/{id}', [AboutController::class, 'delete'])->name('panel.abouts.delete');

    // Partner Controller.............
    Route::get('panel/partners/view', [PartnerController::class, 'view'])->name('panel.partners.view');
    Route::get('panel/partners/add', [PartnerController::class, 'add'])->name('panel.partners.add');
    Route::post('panel/partners/store', [PartnerController::class, 'store'])->name('panel.partners.store');
    Route::get('panel/partners/edit/{id}', [PartnerController::class, 'edit'])->name('panel.partners.edit');
    Route::post('panel/partners/update/{id}', [PartnerController::class, 'update'])->name('panel.partners.update');
    Route::get('panel/partners/delete/{id}', [PartnerController::class, 'delete'])->name('panel.partners.delete');

    // Partner Controller.............
    Route::get('panel/qualitys/view', [QualityController::class, 'view'])->name('panel.qualitys.view');
    Route::get('panel/qualitys/add', [QualityController::class, 'add'])->name('panel.qualitys.add');
    Route::post('panel/qualitys/store', [QualityController::class, 'store'])->name('panel.qualitys.store');
    Route::get('panel/qualitys/edit/{id}', [QualityController::class, 'edit'])->name('panel.qualitys.edit');
    Route::post('panel/qualitys/update/{id}', [QualityController::class, 'update'])->name('panel.qualitys.update');
    Route::get('panel/qualitys/delete/{id}', [QualityController::class, 'delete'])->name('panel.qualitys.delete');

    // Services controller ............
    Route::get('panel/services/view', [ServicesController::class, 'view'])->name('panel.services.view');
    Route::get('panel/services/add', [ServicesController::class, 'add'])->name('panel.services.add');
    Route::post('panel/services/store', [ServicesController::class, 'store'])->name('panel.services.store');
    Route::get('panel/services/edit/{id}', [ServicesController::class, 'edit'])->name('panel.services.edit');
    Route::post('panel/services/update/{id}', [ServicesController::class, 'update'])->name('panel.services.update');
    Route::get('panel/services/delete/{id}', [ServicesController::class, 'delete'])->name('panel.services.delete');

    // Category controller...........
    Route::get('panel/category/list', [CategoryController::class, 'category'])->name('panel.category.list');
    Route::get('panel/category/add', [CategoryController::class, 'add_category'])->name('panel.category.add');
    Route::post('panel/category/add', [CategoryController::class, 'insert_category'])->name('panel.category.store');
    Route::get('panel/category/edit/{id}', [CategoryController::class, 'edit_category'])->name('panel.category.edit');
    Route::post('panel/category/edit/{id}', [CategoryController::class, 'update_category'])->name('panel.category.update');
    Route::get('panel/category/delete/{id}', [CategoryController::class, 'delete_category'])->name('panel.category.delete');

    // merchandising sectioin ....
    // Merchandising Controller for long description and image............. 
    Route::prefix('merchandisings')->group(function(){
        Route::get('/view', [MerchandisingController::class, 'view'])->name('panel.merchandisings.view');
        Route::get('/add', [MerchandisingController::class, 'add'])->name('panel.merchandisings.add');
        Route::post('/store', [MerchandisingController::class, 'store'])->name('panel.merchandisings.store');
        Route::get('/edit/{id}', [MerchandisingController::class, 'edit'])->name('panel.merchandisings.edit');
        Route::post('/update/{id}', [MerchandisingController::class, 'update'])->name('panel.merchandisings.update');
        Route::get('/delete/{id}', [MerchandisingController::class, 'delete'])->name('panel.merchandisings.delete');
    });


});

