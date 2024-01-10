<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Frontend\FrontendController;
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
use App\Http\Controllers\PartnerOneController;
use App\Http\Controllers\QualityController;
use App\Http\Controllers\MerchandisingController;
use App\Http\Controllers\MerchandisingListController;
use App\Http\Controllers\SupplierIdentifierController;
use App\Http\Controllers\CompititivePricingController;
use App\Http\Controllers\FactoryEvaluationController;
use App\Http\Controllers\FactoryEvaluationListController;
use App\Http\Controllers\AboutListController;
use App\Http\Controllers\BusinessTimeController;
use App\Http\Controllers\ServiceListController;
use App\Http\Controllers\ServiceOfferController;
use App\Http\Controllers\ServiceOfferListController;


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


Route::get('/', [FrontendController::class, 'home'])->name('home1');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/why_choose_us', [FrontendController::class, 'why_choose_us'])->name('why_choose_us');
Route::get('/team', [FrontendController::class, 'team'])->name('team');
Route::get('/team/merchandising', [FrontendController::class, 'merchandising'])->name('merchandising');
Route::get('/team/supplier_identifier', [FrontendController::class, 'supplier_identifier'])->name('supplier_identifier');
Route::get('/team/compititive_pricing', [FrontendController::class, 'compititive_pricing'])->name('compititive_pricing');

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
    Route::prefix('panel')->group(function(){
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('panel.dashboard');
    });
    
    // User controller ............... 
    Route::prefix('user')->group(function(){
        Route::get('/list', [UserController::class, 'user'])->name('panel.user.list');
        Route::get('/add', [UserController::class, 'add_user'])->name('panel.user.add');
        Route::post('/store', [UserController::class, 'insert_user'])->name('panel.user.store');
        Route::get('/edit/{id}', [UserController::class, 'edit_user'])->name('panel.user.edit');
        Route::post('/update/{id}', [UserController::class, 'update_user'])->name('panel.user.update');
        Route::get('/delete/{id}', [UserController::class, 'delete_user'])->name('panel.user.delete');
    });

    // profile view for admin ........
    Route::prefix('profile')->group(function(){
        Route::get('/view', [ProfileController::class, 'view'])->name('panel.profile.view');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('panel.profile.edit');
        Route::post('/store', [ProfileController::class, 'update'])->name('panel.profile.store');
    });

    // logo controlller ..........
    Route::prefix('logo')->group(function(){
        Route::get('/view', [LogoController::class, 'view'])->name('panel.logo.view');
        Route::get('/add', [LogoController::class, 'add'])->name('panel.logo.add');
        Route::post('/store', [LogoController::class, 'store'])->name('panel.logo.store');
        Route::get('/edit/{id}', [LogoController::class, 'edit'])->name('panel.logo.edit');
        Route::post('/update/{id}', [LogoController::class, 'update'])->name('panel.logo.update');
        Route::get('/delete/{id}', [LogoController::class, 'delete'])->name('panel.logo.delete');
    });

    // Slider controller ..........
    Route::prefix('sliders')->group(function(){
        Route::get('/view', [SliderController::class, 'view'])->name('panel.sliders.view');
        Route::get('/add', [SliderController::class, 'add'])->name('panel.sliders.add');
        Route::post('/store', [SliderController::class, 'store'])->name('panel.sliders.store');
        Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('panel.sliders.edit');
        Route::post('/update/{id}', [SliderController::class, 'update'])->name('panel.sliders.update');
        Route::get('/delete/{id}', [SliderController::class, 'delete'])->name('panel.sliders.delete');
    });


    // Mission Controller............. 
    Route::prefix('missions')->group(function(){
        Route::get('/view', [MissionController::class, 'view'])->name('panel.missions.view');
        Route::get('/add', [MissionController::class, 'add'])->name('panel.missions.add');
        Route::post('/store', [MissionController::class, 'store'])->name('panel.missions.store');
        Route::get('/edit/{id}', [MissionController::class, 'edit'])->name('panel.missions.edit');
        Route::post('/update/{id}', [MissionController::class, 'update'])->name('panel.missions.update');
        Route::get('/delete/{id}', [MissionController::class, 'delete'])->name('panel.missions.delete');
    });

    // Vision Controller............. 
    Route::prefix('visions')->group(function(){
        Route::get('/view', [VisionController::class, 'view'])->name('panel.visions.view');
        Route::get('/add', [VisionController::class, 'add'])->name('panel.visions.add');
        Route::post('/store', [VisionController::class, 'store'])->name('panel.visions.store');
        Route::get('/edit/{id}', [VisionController::class, 'edit'])->name('panel.visions.edit');
        Route::post('/update/{id}', [VisionController::class, 'update'])->name('panel.visions.update');
        Route::get('/delete/{id}', [VisionController::class, 'delete'])->name('panel.visions.delete');
    });

    // News and Events Controller................
    Route::prefix('news_events')->group(function(){
        Route::get('/view', [NewsEventController::class, 'view'])->name('panel.news_events.view');
        Route::get('/add', [NewsEventController::class, 'add'])->name('panel.news_events.add');
        Route::post('/store', [NewsEventController::class, 'store'])->name('panel.news_events.store');
        Route::get('/edit/{id}', [NewsEventController::class, 'edit'])->name('panel.news_events.edit');
        Route::post('/update/{id}', [NewsEventController::class, 'update'])->name('panel.news_events.update');
        Route::get('/delete/{id}', [NewsEventController::class, 'delete'])->name('panel.news_events.delete');
    });

    // Contact Controller.............
    Route::prefix('contacts')->group(function(){
        Route::get('/view', [ContactController::class, 'view'])->name('panel.contacts.view');
        Route::get('/add', [ContactController::class, 'add'])->name('panel.contacts.add');
        Route::post('/store', [ContactController::class, 'store'])->name('panel.contacts.store');
        Route::get('/edit/{id}', [ContactController::class, 'edit'])->name('panel.contacts.edit');
        Route::post('/update/{id}', [ContactController::class, 'update'])->name('panel.contacts.update');
        Route::get('/delete/{id}', [ContactController::class, 'delete'])->name('panel.contacts.delete');
    });

    // About us Controller.............
    Route::prefix('abouts')->group(function(){
        Route::get('/view', [AboutController::class, 'view'])->name('panel.abouts.view');
        Route::get('/add', [AboutController::class, 'add'])->name('panel.abouts.add');
        Route::post('/store', [AboutController::class, 'store'])->name('panel.abouts.store');
        Route::get('/edit/{id}', [AboutController::class, 'edit'])->name('panel.abouts.edit');
        Route::post('/update/{id}', [AboutController::class, 'update'])->name('panel.abouts.update');
        Route::get('/delete/{id}', [AboutController::class, 'delete'])->name('panel.abouts.delete');
    });
    //about list controller section.........
    Route::prefix('about_lists')->group(function(){
        Route::get('/view', [AboutListController::class, 'view'])->name('panel.about_lists.view');
        Route::get('/add', [AboutListController::class, 'add'])->name('panel.about_lists.add');
        Route::post('/store', [AboutListController::class, 'store'])->name('panel.about_lists.store');
        Route::get('/edit/{id}', [AboutListController::class, 'edit'])->name('panel.about_lists.edit');
        Route::post('/update/{id}', [AboutListController::class, 'update'])->name('panel.about_lists.update');
        Route::get('/delete/{id}', [AboutListController::class, 'delete'])->name('panel.about_lists.delete');
    });
    // Partner Controller.............
    Route::prefix('partners')->group(function(){
        Route::get('/view', [PartnerController::class, 'view'])->name('panel.partners.view');
        Route::get('/add', [PartnerController::class, 'add'])->name('panel.partners.add');
        Route::post('/store', [PartnerController::class, 'store'])->name('panel.partners.store');
        Route::get('/edit/{id}', [PartnerController::class, 'edit'])->name('panel.partners.edit');
        Route::post('/update/{id}', [PartnerController::class, 'update'])->name('panel.partners.update');
        Route::get('/delete/{id}', [PartnerController::class, 'delete'])->name('panel.partners.delete');
    });
    // Partner one Controller.............
    Route::prefix('partner_ones')->group(function(){
        Route::get('/view', [PartnerOneController::class, 'view'])->name('panel.partner_ones.view');
        Route::get('/add', [PartnerOneController::class, 'add'])->name('panel.partner_ones.add');
        Route::post('/store', [PartnerOneController::class, 'store'])->name('panel.partner_ones.store');
        Route::get('/edit/{id}', [PartnerOneController::class, 'edit'])->name('panel.partner_ones.edit');
        Route::post('/update/{id}', [PartnerOneController::class, 'update'])->name('panel.partner_ones.update');
        Route::get('/delete/{id}', [PartnerOneController::class, 'delete'])->name('panel.partner_ones.delete');
    });


    // Quality Controller.............
    Route::prefix('qualitys')->group(function(){
        Route::get('/view', [QualityController::class, 'view'])->name('panel.qualitys.view');
        Route::get('/add', [QualityController::class, 'add'])->name('panel.qualitys.add');
        Route::post('/store', [QualityController::class, 'store'])->name('panel.qualitys.store');
        Route::get('/edit/{id}', [QualityController::class, 'edit'])->name('panel.qualitys.edit');
        Route::post('/update/{id}', [QualityController::class, 'update'])->name('panel.qualitys.update');
        Route::get('/delete/{id}', [QualityController::class, 'delete'])->name('panel.qualitys.delete');
    });
    

    // Services controller ............
    Route::prefix('services')->group(function(){
        Route::get('/view', [ServicesController::class, 'view'])->name('panel.services.view');
        Route::get('/add', [ServicesController::class, 'add'])->name('panel.services.add');
        Route::post('/store', [ServicesController::class, 'store'])->name('panel.services.store');
        Route::get('/edit/{id}', [ServicesController::class, 'edit'])->name('panel.services.edit');
        Route::post('/update/{id}', [ServicesController::class, 'update'])->name('panel.services.update');
        Route::get('/delete/{id}', [ServicesController::class, 'delete'])->name('panel.services.delete');
    });
    // Service Lists controller ........
    Route::prefix('service_lists')->group(function(){
        Route::get('/view', [ServiceListController::class, 'view'])->name('panel.service_lists.view');
        Route::get('/add', [ServiceListController::class, 'add'])->name('panel.service_lists.add');
        Route::post('/store', [ServiceListController::class, 'store'])->name('panel.service_lists.store');
        Route::get('/edit/{id}', [ServiceListController::class, 'edit'])->name('panel.service_lists.edit');
        Route::post('/update/{id}', [ServiceListController::class, 'update'])->name('panel.service_lists.update');
        Route::get('/delete/{id}', [ServiceListController::class, 'delete'])->name('panel.service_lists.delete');
    });

    // Category controller...........
    Route::prefix('category')->group(function(){
        Route::get('/list', [CategoryController::class, 'category'])->name('panel.category.list');
        Route::get('/add', [CategoryController::class, 'add_category'])->name('panel.category.add');
        Route::post('/add', [CategoryController::class, 'insert_category'])->name('panel.category.store');
        Route::get('/edit/{id}', [CategoryController::class, 'edit_category'])->name('panel.category.edit');
        Route::post('/edit/{id}', [CategoryController::class, 'update_category'])->name('panel.category.update');
        Route::get('/delete/{id}', [CategoryController::class, 'delete_category'])->name('panel.category.delete');
    });

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
    // Merchindising list ............
    Route::prefix('merchandisinglist')->group(function(){
        Route::get('/view', [MerchandisingListController::class, 'view'])->name('panel.merchandisinglist.view');
        Route::get('/add', [MerchandisingListController::class, 'add'])->name('panel.merchandisinglist.add');
        Route::post('/store', [MerchandisingListController::class, 'store'])->name('panel.merchandisinglist.store');
        Route::get('/edit/{id}', [MerchandisingListController::class, 'edit'])->name('panel.merchandisinglist.edit');
        Route::post('/update/{id}', [MerchandisingListController::class, 'update'])->name('panel.merchandisinglist.update');
        Route::get('/delete/{id}', [MerchandisingListController::class, 'delete'])->name('panel.merchandisinglist.delete');
    });
    // Supplier Identifier list.................
    Route::prefix('supplier_identifiers')->group(function(){
        Route::get('/view', [SupplierIdentifierController::class, 'view'])->name('panel.supplier_identifiers.view');
        Route::get('/add', [SupplierIdentifierController::class, 'add'])->name('panel.supplier_identifiers.add');
        Route::post('/store', [SupplierIdentifierController::class, 'store'])->name('panel.supplier_identifiers.store');
        Route::get('/edit/{id}', [SupplierIdentifierController::class, 'edit'])->name('panel.supplier_identifiers.edit');
        Route::post('/update/{id}', [SupplierIdentifierController::class, 'update'])->name('panel.supplier_identifiers.update');
        Route::get('/delete/{id}', [SupplierIdentifierController::class, 'delete'])->name('panel.supplier_identifiers.delete');
    });
    // Compititive Pricing list................ 
    Route::prefix('compititive_pricings')->group(function(){
        Route::get('/view', [CompititivePricingController::class, 'view'])->name('panel.compititive_pricings.view');
        Route::get('/add', [CompititivePricingController::class, 'add'])->name('panel.compititive_pricings.add');
        Route::post('/store', [CompititivePricingController::class, 'store'])->name('panel.compititive_pricings.store');
        Route::get('/edit/{id}', [CompititivePricingController::class, 'edit'])->name('panel.compititive_pricings.edit');
        Route::post('/update/{id}', [CompititivePricingController::class, 'update'])->name('panel.compititive_pricings.update');
        Route::get('/delete/{id}', [CompititivePricingController::class, 'delete'])->name('panel.compititive_pricings.delete');
    });
    // factory_evaluations
    Route::prefix('factory_evaluations')->group(function(){
        Route::get('/view', [FactoryEvaluationController::class, 'view'])->name('panel.factory_evaluations.view');
        Route::get('/add', [FactoryEvaluationController::class, 'add'])->name('panel.factory_evaluations.add');
        Route::post('/store', [FactoryEvaluationController::class, 'store'])->name('panel.factory_evaluations.store');
        Route::get('/edit/{id}', [FactoryEvaluationController::class, 'edit'])->name('panel.factory_evaluations.edit');
        Route::post('/update/{id}', [FactoryEvaluationController::class, 'update'])->name('panel.factory_evaluations.update');
        Route::get('/delete/{id}', [FactoryEvaluationController::class, 'delete'])->name('panel.factory_evaluations.delete');
    });
    // factory_evaluations_list
    Route::prefix('factory_evaluations_list')->group(function(){
        Route::get('/view', [FactoryEvaluationListController::class, 'view'])->name('panel.factory_evaluations_list.view');
        Route::get('/add', [FactoryEvaluationListController::class, 'add'])->name('panel.factory_evaluations_list.add');
        Route::post('/store', [FactoryEvaluationListController::class, 'store'])->name('panel.factory_evaluations_list.store');
        Route::get('/edit/{id}', [FactoryEvaluationListController::class, 'edit'])->name('panel.factory_evaluations_list.edit');
        Route::post('/update/{id}', [FactoryEvaluationListController::class, 'update'])->name('panel.factory_evaluations_list.update');
        Route::get('/delete/{id}', [FactoryEvaluationListController::class, 'delete'])->name('panel.factory_evaluations_list.delete');
    });
    // Business Time controller ........
    Route::prefix('business_times')->group(function(){
        Route::get('/view', [BusinessTimeController::class, 'view'])->name('panel.business_times.view');
        Route::get('/add', [BusinessTimeController::class, 'add'])->name('panel.business_times.add');
        Route::post('/store', [BusinessTimeController::class, 'store'])->name('panel.business_times.store');
        Route::get('/edit/{id}', [BusinessTimeController::class, 'edit'])->name('panel.business_times.edit');
        Route::post('/update/{id}', [BusinessTimeController::class, 'update'])->name('panel.business_times.update');
        Route::get('/delete/{id}', [BusinessTimeController::class, 'delete'])->name('panel.business_times.delete');
    });

    // Service Offer Controller.............
    Route::prefix('service_offers')->group(function(){
        Route::get('/view', [ServiceOfferController::class, 'view'])->name('panel.service_offers.view');
        Route::get('/add', [ServiceOfferController::class, 'add'])->name('panel.service_offers.add');
        Route::post('/store', [ServiceOfferController::class, 'store'])->name('panel.service_offers.store');
        Route::get('/edit/{id}', [ServiceOfferController::class, 'edit'])->name('panel.service_offers.edit');
        Route::post('/update/{id}', [ServiceOfferController::class, 'update'])->name('panel.service_offers.update');
        Route::get('/delete/{id}', [ServiceOfferController::class, 'delete'])->name('panel.service_offers.delete');
    });
    // Service Offer Controller.............
    Route::prefix('service_offer_lists')->group(function(){
        Route::get('/view', [ServiceOfferListController::class, 'view'])->name('panel.service_offer_lists.view');
        Route::get('/add', [ServiceOfferListController::class, 'add'])->name('panel.service_offer_lists.add');
        Route::post('/store', [ServiceOfferListController::class, 'store'])->name('panel.service_offer_lists.store');
        Route::get('/edit/{id}', [ServiceOfferListController::class, 'edit'])->name('panel.service_offer_lists.edit');
        Route::post('/update/{id}', [ServiceOfferListController::class, 'update'])->name('panel.service_offer_lists.update');
        Route::get('/delete/{id}', [ServiceOfferListController::class, 'delete'])->name('panel.service_offer_lists.delete');
    });
    

});

