<?php

use App\Http\Controllers\Admins\Admin\Aboat;
use App\Http\Controllers\Admins\Admin\BlogController;
use App\Http\Controllers\Admins\Admin\ProductController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\site\Aboat as SiteAboat;
use App\Http\Controllers\site\NewsController;
use App\Http\Controllers\site\OffersController;
use App\Http\Controllers\site\PrizeController;
use App\Http\Controllers\site\TemeController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

Route::get('/', [WelcomeController::class,'index'])->name('site');
Route::get('/Detiles/{id}', [WelcomeController::class,'show'])->name('detels.show');
 Route::get('/images/update/{id}',[ImageController::class,'update'])->name('images.update');
Route::delete('/images/delete/{id}', [ImageController::class,'destroy'])->name('images.destroy');
Route::get('/services', function () {
    return view('site.book-a-service');
});
Route::get('/changan', function () {
    return view('site.changan');
});
Route::get('/new_details', function () {
    return view('site.new_details');
});
Route::get('/about', [SiteAboat::class, 'index'])->name('aboat')->withTrashed();
Route::get('/prize', [PrizeController::class, 'index'])->name('prize')->withTrashed();
Route::get('/news', [NewsController::class, 'index'])->name('new')->withTrashed();
Route::get('/new-detail/{id}', [NewsController::class, 'ditels'])->name('new-detail')->withTrashed();
Route::get('/product', [OffersController::class, 'index'])->name('product')->withTrashed();
Route::get('/teme', [TemeController::class, 'index'])->name('teme')->withTrashed();
Route::get('/product-detail/{id}', [OffersController::class, 'ditels'])->name('product-detail')->withTrashed();
Route::get('/Sustainability', function () {
    return view('site.Sustainability');
});
Route::get('/vehicle', function () {
    return view('site.vehicle');
});
Route::get('/contact', function () {
    return view('site.contact');
});

Route::get('/detilesNew', function () {
    return view('site.detiles.detilesNew');
});
Route::get('/detilesGoal', function () {
    return view('site.detiles.detilesGoal');
});
Route::get('/detilesbranch', function () {
    return view('site.detiles.detilesbranch');
});
Route::get('/detilesproudect', function () {
    return view('site.detiles.detilesproudect');
});
Route::get('/New', function () {
    return view('site.detiles.New');
});
 Route::view('/login', 'login')->middleware('guest:admin');

Route::post('/login', [LoginController::class, 'login'])->name('login')->middleware('guest:admin');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth:admin');
// admins routes
Route::fallback(function () {
    return throw new NotFoundHttpException();
});
