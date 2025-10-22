<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\backend\AboutUsController;
use App\Http\Controllers\backend\CarouselController;
use App\Http\Controllers\backend\ClientController as BackendClientController;
use App\Http\Controllers\backend\ContentController;
use App\Http\Controllers\backend\GalleryController as BackendGalleryController;
use App\Http\Controllers\backend\MessageController;
use App\Http\Controllers\backend\ServedIndustriesController;
use App\Http\Controllers\backend\SuccessStoriesController;
use App\Http\Controllers\backend\TechnologiesController;
use App\Http\Controllers\backend\TestimonialController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ClientController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\GalleryController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\PageController;
use App\Http\Controllers\frontend\PaymentController;
use App\Http\Controllers\frontend\ServiceController;
use App\Models\Carousel;
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


    // for carousel part 
    Route::get('/admin/carousel/add', [CarouselController::class, 'add'])->name('admin.add.carousel');
    Route::get('/admin/carousel/index', [CarouselController::class, 'index'])->name('admin.all.carousel');
    Route::post('/admin/carousel/add', [CarouselController::class, 'store'])->name('admin.store.carousel');
    // route for change status 
    Route::post('/admin/carousel/status/{id}', [CarouselController::class, 'changeStatus'])->name('admin.carousel.changeStatus');
    // for slug 
    // Route::get('/carousel/{slug}', [CarouselController::class, 'show'])->name('carousel.show');
    // Route::get('/admin/carousel/view/{slug}', [CarouselController::class, 'view'])->name('admin.view.carousel');
    Route::get('/admin/carousel/view/{identifier}', [CarouselController::class, 'show'])->name('admin.view.carousel');

    // edit id dhore na kore slug diye korle carousel_heading change korle 404 error ashe karon slug heading thekei ashe tai edit id diye kora holo 
    Route::get('/admin/carousel/edit/{id}', [CarouselController::class, 'edit'])->name('admin.edit.carousel');
    Route::put('/admin/carousel/update/{id}', [CarouselController::class, 'update'])->name('admin.update.carousel');
    Route::delete('/admin/carousel/delete/{id}', [CarouselController::class, 'delete'])->name('admin.delete.carousel');


    // for content part 
    Route::get('/admin/content', [ContentController::class, 'index'])->name('admin.content');
    Route::post('/admin/content/store', [ContentController::class, 'store'])->name('admin.store.content');
    // Route::post('/admin/content/edit', [ContentController::class, 'edit'])->name('admin.edit.content');
    Route::post('/admin/content/update', [ContentController::class, 'update'])->name('admin.update.content');
    Route::post('/admin/content/delete', [ContentController::class, 'delete'])->name('admin.delete.content');


    // for served industries part 
    Route::get('/admin/served-industries', [ServedIndustriesController::class, 'add'])->name('admin.add.served-industry');
    Route::post('/admin/served-industries', [ServedIndustriesController::class, 'store'])->name('admin.store.served-industry');
    Route::get('/admin/all-served-industries', [ServedIndustriesController::class, 'index'])->name('admin.all.served-industry');
    Route::post('/admin/served-industries/status/{id}', [ServedIndustriesController::class, 'changeStatus'])->name('admin.served-industries.changeStatus');
    Route::post('/admin/update/served-industries/{id}', [ServedIndustriesController::class, 'update'])->name('admin.update.served-industries');
    Route::delete('/admin/delete/served-industries/{id}', [ServedIndustriesController::class, 'delete'])->name('admin.delete.served-industries');

    // for success stories 
    Route::get('/admin/add/success-stories',[SuccessStoriesController::class, 'add'])->name('admin.add.success-stories');
    Route::post('/admin/store/success-stories',[SuccessStoriesController::class, 'store'])->name('admin.store.success-stories');
    Route::get('/admin/all/success-stories',[SuccessStoriesController::class, 'index'])->name('admin.all.success-stories');
    // route for change status 
    Route::post('/admin/success-stories/status/{id}', [SuccessStoriesController::class, 'changeStatus'])->name('admin.success-stories.changeStatus');
    Route::get('/admin/view/success-stories/{id}', [SuccessStoriesController::class, 'view'])->name('admin.view.success-stories');
    Route::get('/admin/edit/success-stories/{id}', [SuccessStoriesController::class, 'edit'])->name('admin.edit.success-stories');
    Route::put('/admin/update/success-stories/{id}', [SuccessStoriesController::class, 'update'])->name('admin.update.success-stories');
    Route::delete('/admin/delete/success-stories{id}', [SuccessStoriesController::class, 'delete'])->name('admin.delete.success-stories');

    // technologies we use section 
    Route::get('/admin/add/technology', [TechnologiesController::class, 'add'])->name('admin.add.technologies');
    Route::get('/admin/all/technology', [TechnologiesController::class, 'index'])->name('admin.all.technologies');
    Route::post('/admin/store/technology', [TechnologiesController::class, 'store'])->name('admin.store.technologies');
    // route for change status 
    Route::post('/admin/technology/status/{id}', [TechnologiesController::class, 'changeStatus'])->name('admin.technology.changeStatus');
    Route::post('/admin/update/technology/{id}', [TechnologiesController::class, 'update'])->name('admin.update.technology');
    Route::delete('/admin/delete/technology{id}', [TechnologiesController::class, 'delete'])->name('admin.delete.technology');


    // testimonials section 
    Route::get('/admin/add/testimonial', [TestimonialController::class, 'add'])->name('admin.add.testimonial');
    Route::get('/admin/all/testimonial', [TestimonialController::class, 'index'])->name('admin.all.testimonial');
    Route::post('/admin/store/testimonial', [TestimonialController::class, 'store'])->name('admin.store.testimonial');
    // route for change status 
    Route::post('/admin/testimonial/status/{id}', [TestimonialController::class, 'changeStatus'])->name('admin.testimonial.changeStatus');
    Route::get('/admin/view/testimonial/{id}', [TestimonialController::class, 'view'])->name('admin.view.testimonial');
    Route::get('/admin/edit/testimonial/{id}', [TestimonialController::class, 'edit'])->name('admin.edit.testimonial');
    Route::put('/admin/update/testimonial/{id}', [TestimonialController::class, 'update'])->name('admin.update.testimonial');
    Route::delete('/admin/delete/testimonial{id}', [TestimonialController::class, 'delete'])->name('admin.delete.testimonial');



    // clients section 
    Route::get('/admin/add/client', [BackendClientController::class, 'add'])->name('admin.add.client');
    Route::post('/admin/store/client', [BackendClientController::class, 'store'])->name('admin.store.client');
    Route::get('/admin/all/client', [BackendClientController::class, 'index'])->name('admin.all.client');
    // route for change status 
    Route::post('/admin/client/status/{id}', [BackendClientController::class, 'changeStatus'])->name('admin.client.changeStatus');
    Route::get('/admin/view/client/{id}', [BackendClientController::class, 'view'])->name('admin.view.client');
    Route::get('/admin/edit/client/{id}', [BackendClientController::class, 'edit'])->name('admin.edit.client');
    Route::put('/admin/update/client/{id}', [BackendClientController::class, 'update'])->name('admin.update.client');
    Route::delete('/admin/delete/client{id}', [BackendClientController::class, 'delete'])->name('admin.delete.client');


    // for about us part 
    Route::get('/admin/about-us', [AboutUsController::class, 'index'])->name('admin.about-us');
    Route::post('/admin/about-us/store', [AboutUsController::class, 'store'])->name('admin.store.about-us');
    Route::post('/admin/about-us/update', [AboutUsController::class, 'update'])->name('admin.update.about-us');
    Route::post('/admin/about-us/delete', [AboutUsController::class, 'delete'])->name('admin.delete.about-us');


    // for gallery 
    Route::get('/admin/gallery', [BackendGalleryController::class, 'index'])->name('admin.gallery');
    Route::post('/admin/add/gallery', [BackendGalleryController::class, 'store'])->name('admin.add.gallery');
    Route::delete('/admin/delete/gallery/{id}', [BackendGalleryController::class, 'delete'])->name('admin.delete.gallery');
    Route::get('/admin/view/gallery/{id}', [BackendGalleryController::class, 'view'])->name('admin.view.gallery');
    Route::post('/admin/gallery/status/{id}', [BackendGalleryController::class, 'changeStatus'])->name('admin.gallery.changeStatus');
    
});
