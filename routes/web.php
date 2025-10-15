<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\backend\CarouselController;
use App\Http\Controllers\backend\MessageController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ClientController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\GalleryController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\PageController;
use App\Http\Controllers\frontend\PaymentController;
use App\Http\Controllers\frontend\ServiceController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function(){
//     return view('frontend.home');
// });




Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/clients', [ClientController::class, 'index'])->name('clients');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendMessage'])->name('store.message');
Route::get('/online-payment', [PaymentController::class, 'index'])->name('payment');




// service page routes 
Route::get('/service/account-finance-management-system', [ServiceController::class, 'accountAndFinance'])->name('service.account-and-finance');
Route::get('/service/human-resource-administration-payroll-management', [ServiceController::class, 'hrAndPayroll'])->name('service.hr-and-payroll');
Route::get('/service/real-estate-management-system', [ServiceController::class, 'realEstateAndProperty'])->name('service.real-estate-and-property');
Route::get('/service/trading-business', [ServiceController::class, 'tradingBusiness'])->name('service.trading-business');
Route::get('/service/supply-chain-management-system', [ServiceController::class, 'supplyChainManagement'])->name('service.supply-chain-management');
Route::get('/service/manufacturing', [ServiceController::class, 'manufacturing'])->name('service.manufacturing');
Route::get('/service/education-management-system', [ServiceController::class, 'educationManagement'])->name('service.education-management');
Route::get('/service/tea-estate-management-system', [ServiceController::class, 'teaStateManagement'])->name('service.tea-estate-management');
Route::get('/service/mobile-app-and-website', [ServiceController::class, 'appAndWebsite'])->name('service.app-website');
Route::get('/service/ict', [ServiceController::class, 'ict'])->name('service.ict');
Route::get('/service/customer-service-management-system', [ServiceController::class, 'customerService'])->name('service.customer-service');
Route::get('/service/mobile-phone-management', [ServiceController::class, 'mobilePhoneManagement'])->name('service.mobile-management-service');
Route::get('/service/architectural-and-engineering-management', [ServiceController::class, 'architecturalAndEng'])->name('service.architectural-eng');
Route::get('/service/procurement-and-inventory-management', [ServiceController::class, 'procurementInventory'])->name('service.procurement-inventory');
Route::get('/service/sales-and-telesales-management', [ServiceController::class, 'salesTelesales'])->name('service.sales-telesales');
Route::get('/service/vehicle-management-system', [ServiceController::class, 'vehicleManagement'])->name('service.vehicle-management');
Route::get('/service/it-support', [ServiceController::class, 'itesSupport'])->name('service.ites-support');
Route::get('/service/softwate-development', [ServiceController::class, 'softwateDevelopment'])->name('service.softwate-development');
Route::get('/service/cloud-hosting', [ServiceController::class, 'cloudHosting'])->name('service.cloud-hosting');
Route::get('/service/training-consultancy', [ServiceController::class, 'trainingConsultancy'])->name('training-consultancy');




// for other pages
Route::get('/page/right-decision-on-right-time', [PageController::class, 'rightDecision'])->name('page.right-decision');
Route::get('/page/business-management-system', [PageController::class, 'businessManagement'])->name('page.business-management');
Route::get('/page/integrated-all-business-processes', [PageController::class, 'integratedAllBusiness'])->name('page.integrated-all-busines');
Route::get('/page/real-time-decision-support-system', [PageController::class, 'realTimeDecision'])->name('page.real-time-decision');



// ================= ADMIN SECTION ROUTES ===============
// Admin login
Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Admin dashboard (protected)
Route::middleware('auth:admin')->group(function () {
    Route::get('admin/dashboard', function () {
        return view('backend.home');
    })->name('admin.dashboard');

    Route::get('/admin/messages', [MessageController::class, 'index'])->name('admin.messages');
    Route::get('/admin/message/{id}', [MessageController::class, 'view'])->name('admin.view.messages');
    Route::get('/admin/message/delete/{id}', [MessageController::class, 'destroy'])->name('admin.delete.message');


    Route::delete('/admin/messages/bulk-delete', [MessageController::class, 'bulkDestroy'])
    ->name('admin.bulk.delete.messages');


    Route::get('/admin/carousel/add', [CarouselController::class, 'add'])->name('admin.add.carousel');
    Route::get('/admin/carousel/index', [CarouselController::class, 'index'])->name('admin.all.carousel');
    Route::post('/admin/carousel/add', [CarouselController::class, 'store'])->name('admin.store.carousel');
    // route for change status 
    Route::post('/admin/carousel/status/{id}', [CarouselController::class, 'changeStatus'])->name('admin.carousel.changeStatus');

});
