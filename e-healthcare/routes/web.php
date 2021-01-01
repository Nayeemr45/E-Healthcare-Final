<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Http;


use Illuminate\Http\Client\Response;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\profileController;
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

    $resp = Http::get('http://127.0.0.1:3000/data/13');
    //dd($resp->body());
    echo $resp->body(['id']);
    echo "<br>";
    echo "<br>";
    echo "<br>";
    //echo $resp->header();
    print_r(json_decode($resp->body()));

    $v = json_decode($resp->body());
    echo "<br>";
    echo "<br>";
    echo "<br>";
    //foreach()
    print_r($v->id);
    //echo $v;
    
    //return view('nn')
    //$id = null;
    //return view('home.index', compact('id'));
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
| login Routes
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
Route::post('/profile/{id}', [profilerController::class,'create']);
