<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Http;


use Illuminate\Http\Client\Response;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\doctorController;
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


Route::get('/home', [homeController::class,'index'])->name('home.index');
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
/*
|--------------------------------------------------------------------------
| Profile Routes
|--------------------------------------------------------------------------
*/
Route::get('/doctors',  [doctorController::class,'index'])->name('doctors.index');
Route::post('/doctors', [doctorController::class,'create']);
