<?php

use App\Http\Controllers\Admins\Admin\ContactuController as AdminContactuController;
use App\Http\Controllers\Admins\Admin\ClientController;
use App\Http\Controllers\Admins\Admin\ProductController;
use App\Http\Controllers\Admins\Admin\PromotionController;
use App\Http\Controllers\Admins\Admin\BlogController;
use App\Http\Controllers\Admins\Admin\ContactusController;
use App\Http\Controllers\ContactuController;
use App\Http\Controllers\ImageController;
use App\Http\Livewire\Admins\Admin\AdminIndex;
use App\Http\Livewire\Admins\Admin\CategoryIndex;
use App\Http\Livewire\Admins\Admin\PackageIndex;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::middleware(['AdminAuth'])->group(function () {
    Route::view('/dashboard', 'admins.admin.dashboard')->name('admin.dashboard');
    // Route::redirect('/', '/admin/dashboard');
    // start route categories
    Route::get('categories', CategoryIndex::class)->name('categories');
    Route::get('Admin', AdminIndex::class)->name('Admin');

    // end route categories
    Route::controller(ImageController::class)->group(function(){
        Route::get('image-upload/{id}','show')->name('image.index');
        Route::post('image-upload','imageUpload')->name('image.store');
    });

    // // start route Blogs
    Route::get('Blogs/{Blog}/change-active', [BlogController::class, 'changeActive'])->name('Blogs.change-active')->withTrashed();
    Route::post('Blogs/{Blog}/force-delete', [BlogController::class, 'forceDelete'])->name('Blogs.force-delete')->withTrashed();
    Route::post('Blogs/{Blog}/restore', [BlogController::class, 'restore'])->name('Blogs.restore')->withTrashed();
    Route::resource('Blogs', BlogController::class)->withTrashed();
    // end route Blogs
    // start route Contactu
    Route::get('Contactu/{Contactu}/change-active', [ContactusController::class, 'changeActive'])->name('Contactu.change-active')->withTrashed();
    Route::post('Contactu/{Contactu}/force-delete', [ContactusController::class, 'forceDelete'])->name('Contactu.force-delete')->withTrashed();
    Route::post('Contactu/{Contactu}/restore', [ContactusController::class, 'restore'])->name('Contactu.restore')->withTrashed();
    Route::resource('Contactu', ContactusController::class)->withTrashed();
    //star route Producte
    Route::get('products/{product}/change-active', [ProductController::class, 'changeActive'])->name('products.change-active')->withTrashed();
    Route::post('products/{product}/force-delete', [ProductController::class, 'forceDelete'])->name('products.force-delete')->withTrashed();
    Route::post('products/{product}/restore', [ProductController::class, 'restore'])->name('products.restore')->withTrashed();
    Route::resource('products', ProductController::class)->withTrashed();
    // end route products
    // start artisan route
    Route::group(['prefix' => 'artisan'], function () {
        Route::get('migrate_fresh', function () {
            Artisan::call('migrate:fresh');
            Artisan::call('db:seed');
            Artisan::call('migrate', ['--path' => 'vendor/laravel/passport/database/migrations']);
            Artisan::call('passport:install');

            return 'success';
        });
        Route::get('optimize_clear', function () {
            Artisan::call('optimize:clear');

            return 'success';
        });
        Route::get('passport_migrate', function () {
            Artisan::call('migrate', ['--path' => 'vendor/laravel/passport/database/migrations']);
            Artisan::call('passport:install');

            return 'success';
        });
    });
    // end artisan route
});
