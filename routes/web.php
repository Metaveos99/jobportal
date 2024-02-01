<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\GoogleSocialiteController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecruiterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);  // redirect to google login
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);    // callback route after google account chosen

Route::get('/find-a-job',[FrontendController::class,'findjob'])->name('findjob');
Route::get('/about-us',[FrontendController::class,'aboutus'])->name('aboutus');
Route::get('/blog',[FrontendController::class,'blog'])->name('blog');
Route::get('/contact-us',[FrontendController::class,'contact'])->name('contact');


Route::middleware('auth','admin')->group(function () {

    Route::get('/admindashboard',[AdminController::class,'dashboard'])->name('admindash');

});

Route::middleware('auth','recruiter','verified',)->group(function () {

    Route::get('/dashboard',[RecruiterController::class,'dashboard'])->name('dashboard');

});


Route::middleware('auth','verified','user')->group(function () {

    Route::get('/userprofile',[UserController::class,'index'])->name('userprofile');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
 