<?php

use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\CatalogController;
use App\Http\Controllers\Admin\CategoriesController;

use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\SettingController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function(){
    Route::get('admin/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
    Route::get('admin/profile',[ProfileController::class,'index'])->name('admin.profile.index');
    Route::get('admin/profile/edit',[ProfileController::class,'edit'])->name('admin.profile.edit');
    Route::post('admin/profile/update/{id}',[ProfileController::class,'update'])->name('admin.profile.update');
    Route::controller(ClientController::class)->group(function(){
        Route::get('admin/clients','index')->name('admin.client.index');
        Route::get('admin/create/client','create')->name('admin.client.create');
        Route::post('admin/store/client','store')->name('admin.client.store');
        Route::get('admin/edit/client/{id}','edit')->name('admin.client.edit');
        Route::post('admin/update/client/{id}','update')->name('admin.client.update');
        Route::delete('admin/update/client/{id}','destroy')->name('admin.client.destroy');
    });

    Route::get('admin/calendar',[CalendarController::class,'index'])->name('admin.calendar.index');

    Route::get('admin/general-settings',[SettingController::class,'generalSettings'])->name('admin.setting.general');
    Route::get('admin/privacy-policy',[SettingController::class,'PrivacyPolicy'])->name('admin.privacy-policy');
    Route::post('admin/privacy-policy/store',[SettingController::class,'storePrivacyPolicy'])->name('admin.privacy_policy.store');
    Route::get('admin/terms-and-conditions',[SettingController::class,'TermsAndConditions'])->name('admin.terms-and-conditions');
    Route::post('admin/terms-and-conditions/store',[SettingController::class,'storeTermsAndConditions'])->name('admin.terms_and_conditions.store');

    Route::post('admin/site-setting/store',[SettingController::class,'storeSiteSettings'])->name('admin.site-setting.store');
    Route::post('admin/smtp-setting/store',[SettingController::class,'storeSmtpSettings'])->name('admin.smtp-setting.store');

    // Catalog Route
    Route::get('admin/catalog',[CatalogController::class,'index']);

    // Category Route
    Route::post('/admin/category/store',[CategoryController::class,'store']);
});