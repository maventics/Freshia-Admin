<?php

use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\CatalogController;
use App\Http\Controllers\Admin\CategoriesController;

use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SalesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TeamController;

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
    Route::get('admin/catalogs',[CatalogController::class,'index'])->name('admin.catelog.index');
    Route::get('admin/create/service',[CatalogController::class,'createService'])->name('admin.service.create');
    Route::get('admin/create/package',[PackageController::class,'create'])->name('admin.package.create');
    Route::get('admin/create/category',[CategoryController::class,'create'])->name('admin.category.create');


    Route::controller(SalesController::class)->group(function(){
        Route::get('admin/sales','index')->name('admin.sale.index');
        Route::get('admin/create/sale','create')->name('admin.sale.create');
        Route::post('admin/store/sale','store')->name('admin.sale.store');
        Route::get('admin/edit/sale/{id}','edit')->name('admin.sale.edit');
        Route::post('admin/update/sale/{id}','update')->name('admin.sale.update');
        Route::delete('admin/update/sale/{id}','destroy')->name('admin.sale.destroy');
    });

    Route::controller(TeamController::class)->group(function(){
        Route::get('admin/team','index')->name('admin.team.index');
        Route::get('admin/create/team','create')->name('admin.team.create');
        Route::post('admin/store/team','store')->name('admin.team.store');
        Route::get('admin/edit/team/{id}','edit')->name('admin.team.edit');
        Route::post('admin/update/team/{id}','update')->name('admin.team.update');
        Route::delete('admin/update/team/{id}','destroy')->name('admin.team.destroy');
    });
});