<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');

Route::get('formation/{formation}', [FrontendController::class, 'formation_details'])->name('frontend.formation');

Route::get('contact', [FrontendController::class, 'contact'])->name('frontend.contact');

Route::get('formations', [FrontendController::class, 'formations'])->name('frontend.formations');

Route::get('about', [FrontendController::class, 'about'])->name('frontend.about');

Route::get('login', [FrontendController::class, 'login'])->name('frontend.login');  

Route::post('login', [FrontendController::class, 'postLogin'])->name('frontend.postlogin');

Route::get('register', [FrontendController::class, 'register'])->name('frontend.register');

Route::post('register', [FrontendController::class, 'postRegister'])->name('frontend.postregister');

Route::get('doctor/{doctor}/{name}', [FrontendController::class, 'doctor'])->name('frontend.doctor');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
