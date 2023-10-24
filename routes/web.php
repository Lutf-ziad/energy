<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

Route::get('/', [WelcomeController::class,'index'])->name('site');
Route::get('/Detiles/{id}', [WelcomeController::class,'show'])->name('detels.show');
 Route::get('/images/update/{id}',[ImageController::class,'update'])->name('images.update');
Route::delete('/images/delete/{id}', [ImageController::class,'destroy'])->name('images.destroy');
Route::get('/about', function () {
    return view('site.about');
});
Route::get('/services', function () {
    return view('site.book-a-service');
});
Route::get('/changan', function () {
    return view('site.changan');
});
Route::get('/new_details', function () {
    return view('site.new_details');
});
Route::get('/lead', function () {
    return view('site.lead');
});
Route::get('/news', function () {
    return view('site.news');
});
Route::get('/offer-detail', function () {
    return view('site.offer-detail');
});
Route::get('/offers', function () {
    return view('site.offers');
});
Route::get('/Sustainability', function () {
    return view('site.Sustainability');
});
Route::get('/vehicle', function () {
    return view('site.vehicle');
});
Route::get('/contact', function () {
    return view('site.contact');
});
Route::get('/complain', function () {
    return view('site.complain');
});
Route::get('/detilesNew', function () {
    return view('site.detiles.detilesNew');
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
