<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('/', function () {
    $lang = Session::get('lang', 'en');
    app()->setLocale($lang);
    return view('index');
});


Route::get('/services', function () {
    $lang = Session::get('lang', 'en');
    app()->setLocale($lang);
    return view('services');
});

Route::get('/portfolio', function () {
    $lang = Session::get('lang', 'en');
    app()->setLocale($lang);
    return view('portfolio');
});

Route::get('/portfolio-single', function () {
    $lang = Session::get('lang', 'en');
    app()->setLocale($lang);
    return view('portfolio-single');
});

Route::get('/service-single', function () {
    $lang = Session::get('lang', 'en');
    app()->setLocale($lang);
    return view('service-single');
});

Route::get('/about-us', function () {
    $lang = Session::get('lang', 'en');
    app()->setLocale($lang);
    return view('about-us');
});

Route::get('/contact', function () {
    $lang = Session::get('lang', 'en');
    app()->setLocale($lang);
    return view('contact');
});

Route::get('/single-portfolio', function () {
    $lang = Session::get('lang', 'en');
    app()->setLocale($lang);
    return view('portfolio-single');
});


Route::controller(SiteController::class)->group(function(){
    Route::get('/service/{key}/details','serviceDetails');
});

Route::get('/change-language/en', function () {
    Session::put('lang', 'en');
    return redirect()->back();
});

Route::get('/change-language/ar', function () {
    Session::put('lang', 'ar' );
    return redirect()->back();
 });
