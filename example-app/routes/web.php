<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\ArticolController;

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
    return view('welcome');
})->name('larevelHome');

//Route::get('/home', function() {
//    return view('home');
//})->name('home');

Route::get('/services', [ArticolController::class, 'getServicesArticol'])->name("ServicesArticol")->middleware('auth');

Route::get('/contact', [ArticolController::class, 'getContactArticol'])->name("ContactArticol")->middleware('auth');

Route::get('/home', [ArticolController::class, 'getHomeArticol'])->name("HomeArticol");

Route::get('/login', [AuthManager::class, 'login'])->name("login");
Route::get('/register', [AuthManager::class, 'register'])->name("register");

Route::post('/login', [AuthManager::class, 'loginPost'])->name("loginPost");
Route::post('/register', [AuthManager::class, 'registerPost'])->name("registerPost");

Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::get('/editservices', [ArticolController::class, 'editServicesArticol'])->name("EditServicesArticol")->middleware('auth');
Route::post('/editservicespost', [ArticolController::class, 'editServicesPost'])->name("EditServicesPost")->middleware('auth');

Route::get('/editcontact', [ArticolController::class, 'editContactArticol'])->name("EditContactArticol")->middleware('auth');
Route::post('/editcontactpost', [ArticolController::class, 'editContactPost'])->name("EditContactPost")->middleware('auth');

Route::get('/edithome', [ArticolController::class, 'editHomeArticol'])->name("EditHomeArticol")->middleware('auth');
Route::post('/edithomepost', [ArticolController::class, 'editHomePost'])->name("EditHomePost")->middleware('auth');
