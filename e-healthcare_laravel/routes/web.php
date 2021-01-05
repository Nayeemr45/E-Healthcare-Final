<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Http;


use Illuminate\Http\Client\Response;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\doctorController;
use App\Http\Controllers\consultController;
use App\Http\Controllers\pharmacyController;
use App\Http\Controllers\appointmentController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\LogoutController;







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
    $id = null;
    return view('home.index', compact('id'));
});

/*
|--------------------------------------------------------------------------
| login Routes
|--------------------------------------------------------------------------
*/
Route::get('/login',  [LoginController::class,'index'])->name('login.index');
Route::post('/login', [LoginController::class,'verify']);
/*
|--------------------------------------------------------------------------
| Facebook login Routes
|--------------------------------------------------------------------------
*/
Route::get('login/facebook', [LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [LoginController::class, 'handleFacebookCallback']);

/*
|--------------------------------------------------------------------------
| Register Routes
|--------------------------------------------------------------------------
*/
Route::get('/register',  [registerController::class,'index']);
Route::post('/register', [registerController::class,'create'])->name('register.create');
/*
|--------------------------------------------------------------------------
| logout Routes
|--------------------------------------------------------------------------
*/
Route::get('/logout', [LogoutController::class,'index']);

/*
|--------------------------------------------------------------------------
| middleware for Session
|--------------------------------------------------------------------------
*/
Route::group(['middleware'=>['sess']] , function(){

    Route::get('/home', [homeController::class,'index'])->name('home.index');
    /*
    |--------------------------------------------------------------------------
    | Doctor Routes
    |--------------------------------------------------------------------------
    */
    Route::get('/doctors',  [doctorController::class,'index'])->name('doctors.index');
    Route::post('/doctors', [doctorController::class,'create']);
    Route::get('/search', [doctorController::class,'search'])->name('search.index');
    Route::post('/consult', [consultController::class,'create']);
    /*
    |--------------------------------------------------------------------------
    | Pharmacy Routes
    |--------------------------------------------------------------------------
    */
    Route::get('/pharmacy',  [pharmacyController::class,'index'])->name('pharmacy.index');
    Route::get('/pharmacy/search', [pharmacyController::class,'search'])->name('search.pharmacy');
    /*
    |--------------------------------------------------------------------------
    | Blog Routes
    |--------------------------------------------------------------------------
    */
    Route::get('/blog',  [blogController::class,'index'])->name('blog.index');

    /*
    |--------------------------------------------------------------------------
    | middleware for user type
    |--------------------------------------------------------------------------
    */
    Route::group(['middleware'=>['usertype']] , function(){

        /*
        |--------------------------------------------------------------------------
        | Profile Routes
        |--------------------------------------------------------------------------
        */
        Route::get('/profile/{id}',  [profileController::class,'index'])->name('profile.index');
        Route::post('/profile/{id}', [profileController::class,'create']);
        Route::get('/profile/edit/{id}',  [profileController::class,'edit'])->name('profile.edit');
        Route::post('/profile/edit/{id}', [profileController::class,'update']);
        Route::get('/profile/edit/image/{id}',  [profileController::class,'edit_image'])->name('profile.image');
        Route::post('/profile/edit/image/{id}', [profileController::class,'update_image']);
        Route::get('/profile/test_report/{id}',  [profileController::class,'test_report'])->name('profile.test_report');
        Route::post('/profile/test_report/{id}', [profileController::class,'add_test_report']);
        //Payment
        Route::get('/payment/{user_id}/{id}',  [profileController::class,'show_payment'])->name('payment.index');
        Route::post('/payment/{user_id}/{id}', [profileController::class,'add_payment']);
        
        /*
        |--------------------------------------------------------------------------
        | Consult Routes
        |--------------------------------------------------------------------------
        */
        Route::get('/consult',  [consultController::class,'index'])->name('consult.index');
        /*
        |--------------------------------------------------------------------------
        | Appointment Routes
        |--------------------------------------------------------------------------
        */
        Route::get('/appointment',  [appointmentController::class,'index'])->name('appointment.index');

    });
});