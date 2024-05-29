<?php


use App\Http\Controllers\AdminControllers\PortfolioController;
use App\Http\Controllers\AdminControllers\HomeController;
use App\Http\Controllers\AdminControllers\AuthController;
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

Route::get('/dashboard',[HomeController::class,'index'])->name("dashboard.index")->middleware("authAdmin");;


Route::prefix('dashboard')->name('dashboard.')->group(function(){

    Route::get("/login",[AuthController::class, 'LoginForm'])->name("loginForm");

    Route::post("/login",[AuthController::class, 'Login'])->name("login");

    Route::get("/logout",[AuthController::class, 'Logout'])->name("logout");

});

Route::prefix('dashboard')->middleware("authAdmin")->name('dashboard.')->group(function(){


    Route::resource('/portfolios',PortfolioController::class);


});

Route::get('/change_language/ar',function(){
    Session::put('lang', 'ar' );
    return redirect()->back();
})->name("dashboard.changeLanguage.ar");

Route::get('/change_language/en',function(){
    Session::put('lang', 'en' );
    return redirect()->back();
})->name("dashboard.changeLanguage.en");
