<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\BootcampController;


Route::get('/', function () {
    header('Cache-Control: public, max-age=604800');
    return view('welcome');
});

Route::get('/about', function () {
    header('Cache-Control: public, max-age=604800');
    return view('about');
});

Route::get('/contact-us', function () {
    header('Cache-Control: public, max-age=604800');
    return view('contact');
});

Route::controller(ServiceController::class)->group(function () {
    Route::post('/contact', 'contact')->name('contact.store');
    Route::get('/services', 'index')->name('services.index');
    Route::get('/services/web-mobile-design', 'web')->name('services.web');
    Route::get('/services/ecommerce', 'ecommerce')->name('services.ecommerce');
    Route::get('/services/ui-ux-design', 'ui')->name('services.ui');
    Route::get('/services/seo', 'seo')->name('services.seo');
    Route::get('/services/public-relations-service', 'public')->name('services.public');
    Route::get('/services/social-media-marketing', 'social')->name('services.social');
    Route::get('/services/branding-indentity', 'branding')->name('services.branding');
});

Route::controller(BootcampController::class)->group(function () {
    Route::get('/bootcamp', 'index')->name('bootcamp');
    Route::post('/bootcamp_', 'store')->name('bootcamp.store');
    Route::get('/bootcamp_payment', 'payment')->name('bootcamp.payment');
    Route::get('/bootcamp/confirmed', 'confirmed')->name('bootcamp.thanks');
    Route::get('/bootcamp/uiux', 'uiux')->name('bootcamp.uiux');
    Route::get('/bootcamp/frontend', 'frontend')->name('bootcamp.frontend');
    Route::get('/bootcamp/product', 'bootcampproduct')->name('bootcamp.product');
    Route::get('/bootcamp/mobile', 'mobile')->name('bootcamp.mobile');
    Route::get('/bootcamp/backend', 'backend')->name('bootcamp.backend');
    Route::get('/bootcamp/digital', 'digital')->name('bootcamp.digital');
    Route::get('/bootcamp/data', 'data')->name('bootcamp.data');
    Route::get('/bootcamp/salesforce', 'salesforce')->name('bootcamp.salesforce');
    Route::get('/bootcamp/cloud', 'cloud')->name('bootcamp.cloud');
});

Route::get('/portfolio', function () {
    header('Cache-Control: public, max-age=604800');
    return view('portfolio');
});

Route::controller(SupportController::class)->group(function () {
    Route::get('/supports', 'index')->name('supports.index');
    Route::get('/support/create', 'create')->name('supports.create');
    Route::post('/supports', 'store')->name('supports.store');
    Route::get('/supports/{support:slug}', 'show')->name('supports.show');
    Route::get('/supports/{support}/edit', 'edit')->name('supports.edit');
    Route::put('/supports/{support}/update', 'update')->name('supports.update');
    Route::delete('/supports/{support}/delete', 'destroy')->name('supports.destroy');
});

Route::get('/support', function () {
    header('Cache-Control: public, max-age=604800');
    return view('blog');
});

Route::get('/career', function () {
    header('Cache-Control: public, max-age=604800');
    return view('career');
});

Route::get('/faq', function () {
    header('Cache-Control: public, max-age=604800');
    return view('faq');
});

Route::get('/talented-team', function () {
    header('Cache-Control: public, max-age=604800');
    return view('team');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});