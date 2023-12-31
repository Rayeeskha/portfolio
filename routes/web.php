<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use  \App\Http\Controllers\Frontend\HomeController;
use  \App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\LangController;

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

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return "Cache is cleared";
});

Route::get('/', FrontendController::class)->name('front');


Route::match(['POST','GET'],'about-us',  [FrontendController::class, 'aboutUs'])->name('about_us');

Route::match(['POST','GET'],'services',  [FrontendController::class, 'services'])->name('services');

Route::match(['POST','GET'],'blog',  [FrontendController::class, 'blog'])->name('blog');

Route::match(['POST','GET'],'contact-us',  [FrontendController::class, 'contactUs'])->name('home.contact_us');

Route::get('/old', HomeController::class)->name('home');

// Contact us
Route::match(['POST','GET'],'submit-contact-us',  [HomeController::class, 'contactUs'])->name('contact_us');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');

require __DIR__.'/auth.php';

Route::match(['POST','GET'],'/{slug}',  [HomeController::class, 'urlRouting'])->name('url.routing');
