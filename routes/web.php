<?php

use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\AnnouncementController;

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

// rotte pubbliche

Route::get('/', [PublicController::class, 'home'] )->name('home');

Route::get('/show-category/{category}', [PublicController::class, 'show'] )->name('showCategory');

// rotte per gli annunci


Route::get('/create-announcement', [AnnouncementController::class, 'create'])->middleware('auth')->name('createAnnouncement');

Route::get('/show-announcement/{announcement}', [AnnouncementController::class, 'show'])->name('showAnnouncement');

Route::get('/index-announcement', [AnnouncementController::class, 'index'])->name('indexAnnouncements');


// rotte per revisore

Route::get('/revisor-home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('homeRevisor');

Route::patch('/accept-announcement/{announcement}', [RevisorController::class, 'acceptAnnouncement' ])->name('revisor.accept_announcement');

Route::patch('/reject-announcement/{announcement}', [RevisorController::class, 'rejectAnnouncement' ])->name('revisor.reject_announcement');


// rotta footer

Route::get('/become-revisor', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('becomeRevisor');

Route::get('/make-revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('makeRevisor');

// rotta di ricerca

Route::get('/search-announcement', [PublicController::class, 'searchAnnouncements'])->name('searchAnnouncements');

// rotta lavora con noi

Route::get('/work-with-us', [PublicController::class, 'workWithUs'])->name('workWithUs');

// rotta cambio lingua

Route::post('/language/{lang}', [PublicController::class,'setLanguage'])->name('setLanguageLocale');