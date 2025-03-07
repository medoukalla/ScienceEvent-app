<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::get('pdf', function() {

    $logoPath = asset('storage/'.setting('site.logo'));

    return view('pdfs.delivery_note',[
        'base64Logo' => base64_encode(file_get_contents($logoPath))
    ]);
});

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');

Route::get('formation/{formation}', [FrontendController::class, 'formation_details'])->name('frontend.formation');

Route::get('contact', [FrontendController::class, 'contact'])->name('frontend.contact');

Route::get('formations', [FrontendController::class, 'formations'])->name('frontend.formations');

Route::get('formations/{category}/{slug}', [FrontendController::class, 'formations_category'])->name('frontend.formations.category');

Route::get('about', [FrontendController::class, 'about'])->name('frontend.about');

Route::get('aide', [FrontendController::class, 'aide'])->name('frontend.aide');

Route::get('login', [FrontendController::class, 'login'])->name('frontend.login');  

Route::post('login', [FrontendController::class, 'postLogin'])->name('frontend.postlogin');

// Route::get('register', [FrontendController::class, 'register'])->name('frontend.register');

// Route::post('register', [FrontendController::class, 'postRegister'])->name('frontend.postregister');

Route::get('doctor/{doctor}/{name}', [FrontendController::class, 'doctor'])->name('frontend.doctor');

Route::get('profile', [FrontendController::class, 'profile'])->name('frontend.profile')->middleware('auth');

Route::post('profile', [FrontendController::class, 'profile_update'])->name('frontend.profile.update');

Route::get('formation/{formation}/access', [FrontendController::class, 'formation_access'])->name('frontend.formation.access')->middleware('auth');


Route::post('/notifications/{id}/mark-as-read', [FrontendController::class, 'markAsRead'])->name('markAsRead');

Route::get('confidentialite', [FrontendController::class, 'confidentialite'])->name('frontend.confidentialite');

Route::post('download/{resource}', [FrontendController::class, 'download'])->name('download.resource')->middleware('auth');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    // cancel or confirm an order 
    Route::post('reject_order/{order}', [BackendController::class, 'reject_order'])->name('orders.reject');
    Route::post('confirm_order/{order}', [BackendController::class, 'confirm_order'])->name('orders.confirm');

    // cancel or confirm facture request
    Route::post('reject_request_invoice/{requestInvoice}', [BackendController::class, 'reject_request_invoice'])->name('request-invoice.reject');
    Route::post('confirm_request_invoice/{requestInvoice}', [BackendController::class, 'confirm_request_invoice'])->name('request-invoice.confirm');

});
