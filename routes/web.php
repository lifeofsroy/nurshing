<?php

use App\Http\Livewire\FrontHome;
use App\Http\Livewire\FrontAbout;
use App\Http\Livewire\FrontPdesk;
use App\Http\Livewire\FrontCookie;
use App\Http\Livewire\FrontCourse;
use App\Http\Livewire\FrontNotice;
use App\Http\Livewire\FrontVision;
use App\Http\Livewire\FrontContact;
use App\Http\Livewire\FrontMission;
use App\Http\Livewire\FrontQuality;
use App\Http\Livewire\FrontEligible;
use App\Http\Livewire\FrontFacility;
use App\Http\Livewire\FrontFeestuct;
use App\Http\Livewire\FrontAdmission;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\FrontCourseDetail;

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

Route::get('/', FrontHome::class)->name('home');
Route::get('/about-us', FrontAbout::class)->name('about');
Route::get('/principal-desk', FrontPdesk::class)->name('pdesk');
Route::get('/facility', FrontFacility::class)->name('facility');
Route::get('/course', FrontCourse::class)->name('course');
Route::get('/course/{course_slug}', FrontCourseDetail::class)->name('course.detail');
Route::get('/eligibility', FrontEligible::class)->name('eligibile');
Route::get('/fees-structure', FrontFeestuct::class)->name('feestuct');
Route::get('/contact', FrontContact::class)->name('contact');
Route::get('/admission', FrontAdmission::class)->name('admission');
Route::get('/notice', FrontNotice::class)->name('notice');
Route::get('/cookie-policy', FrontCookie::class)->name('cookie.show');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
