<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FAQController;
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

Route::get('/', [IndexController::class, 'index'])->name('indexpage');
Route::get('/login', [UserController::class, 'getLoginPage'])->name('loginpage');
Route::get('/showfaq/{id}',[FAQController::class,'showfaq'])->name('showfaq');

Route::post('/authenticate', [UserController::class, 'login'])->name('login');


Route::get('/management',[FAQController::class,'index'])->name('managementpage')->middleware('isAdmin');
Route::get('/createfaq',[FAQController::class,'getCreatePage'])->name("createpage")->middleware('isAdmin');
Route::get('/updatefaq/{id}',[FAQController::class,'getEditPage'])->name('updatepage')->middleware('isAdmin');
Route::get('/logout',[UserController::class,'logout'])->name('logout')->middleware('isAdmin');

Route::post('/savefaq',[FAQController::class,'save'])->name('savefaq')->middleware('isAdmin');
Route::delete('/deletefaq/{id}', [FAQController::class,'remove'])->name('delete')->middleware('isAdmin');
//Route::post('/register',[UserController::class,'register'])->name("register");