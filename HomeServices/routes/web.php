<?php

use App\Http\Controllers\SearchController;
use App\Http\Livewire\Admin\AdminAddServiceCategoryComponent;
use App\Http\Livewire\Admin\AdminAddServiceComponent;
use App\Http\Livewire\Admin\AdminAddSlideComponent;
use App\Http\Livewire\Admin\AdminContactComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminEditServiceCategoryComponent;
use App\Http\Livewire\Admin\AdminEditServiceComponent;
use App\Http\Livewire\Admin\AdminEditSlideComponent;
use App\Http\Livewire\Admin\AdminServiceCategoryComponent;
use App\Http\Livewire\Admin\AdminServiceProvidersComponent;
use App\Http\Livewire\Admin\AdminServicesByCategoryComponent;
use App\Http\Livewire\Admin\AdminServicesComponent;
use App\Http\Livewire\Admin\AdminSliderComponent;
use App\Http\Livewire\ChangeLocationComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\Customer\CustomerDashboardComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ServiceCategoriesComponent;
use App\Http\Livewire\ServiceDetailsComponent;
use App\Http\Livewire\ServicesByCategoryComponent;
use App\Http\Livewire\Sprovider\SproviderDashboardComponent;
use App\Http\Livewire\Sprovider\SproviderEditProfileComponent;
use App\Http\Livewire\Sprovider\SproviderProfileComponent;
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

Route::get('/', HomeComponent::class)->name('home');

Route::get('/service-categories', ServiceCategoriesComponent::class)->name('home.serviceCategories');
Route::get('/{category_slug}/services', ServicesByCategoryComponent::class)->name('home.servicesByCategory');
Route::get('/service/{service_slug}', ServiceDetailsComponent::class)->name('home.serviceDetails');

Route::get('/autocomplete', [SearchController::class,'autocomplete'])->name('autocomplete');
Route::post('/search', [SearchController::class,'searchService'])->name('searchService');

Route::get('/contact-us', ContactComponent::class)->name('home.contact');

Route::get('/change-location', ChangeLocationComponent::class)->name('home.changeLocation');

//Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/customer/dashboard', CustomerDashboardComponent::class)->name('customer.dashboard');
});


//Service Provider
Route::middleware(['auth:sanctum', 'verified', 'authsprovider'])->group(function(){
    Route::get('/sprovider/dashboard', SproviderDashboardComponent::class)->name('sprovider.dashboard');
   Route::get('/sprovider/profile', SproviderProfileComponent::class)->name('sprovider.profile');
   Route::get('/sprovider/profile/edit', SproviderEditProfileComponent::class)->name('sprovider.editProfile');
});

//Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');

    //category services
    Route::get('/admin/service-categories', AdminServiceCategoryComponent::class)->name('admin.serviceCategories');
    Route::get('/admin/service-category/add', AdminAddServiceCategoryComponent::class)->name('admin.addServiceCategory');
    Route::get('/admin/service-category/edit/{category_id}', AdminEditServiceCategoryComponent::class)->name('admin.editServiceCategory');
   
    //services
    Route::get('/admin/all-services', AdminServicesComponent::class)->name('admin.services');
    Route::get('/admin/{category_slug}/services', AdminServicesByCategoryComponent::class)->name('admin.servicesByCategory');
    Route::get('/admin/service/add', AdminAddServiceComponent::class)->name('admin.addService');
    Route::get('/admin/service/edit/{service_slug}', AdminEditServiceComponent::class)->name('admin.editService');

    //Slider
    Route::get('/admin/slider', AdminSliderComponent::class)->name('admin.slider');
    Route::get('/admin/slide/add', AdminAddSlideComponent::class)->name('admin.addSlide');
    Route::get('/admin/slide/edit/{slide_id}', AdminEditSlideComponent::class)->name('admin.editSlide');

    //Contact & Service Providers
    Route::get('/admin/contacts', AdminContactComponent::class)->name('admin.contacts');
    Route::get('/admin/service-providers', AdminServiceProvidersComponent::class)->name('admin.serviceProviders');
});
