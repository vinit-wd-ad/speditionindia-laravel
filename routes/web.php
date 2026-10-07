<?php

use Illuminate\Support\Facades\Artisan;

use App\Http\Controllers\Web\BlogController;
use App\Http\Controllers\Web\EventController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\ProjectController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', fn() =>  view('about-us'));
Route::get('/mission-vision', fn() =>  view('mission-vision'));
Route::get('/our-team', fn() =>  view('our-team'));
Route::get('/associated-members', fn() =>  view('associated-members'));
Route::get('/affiliation-certification', fn() =>  view('affiliation-certification'));
Route::get('/our-group-companies', fn() =>  view('our-group-companies'));
Route::get('/gallery', fn() =>  view('gallery'));

Route::get('/freight-management', fn() =>  view('freight-management'));
Route::get('/air-freight', fn() =>  view('air-freight'));
Route::get('/ocean-freight', fn() =>  view('ocean-freight'));
Route::get('/ground-freight', fn() =>  view('ground-freight'));
Route::get('/multi-model-solutions', fn() =>  view('multi-model-solutions'));
Route::get('/transport-optimization', fn() =>  view('transport-optimization'));
Route::get('/time-critical-logistics', fn() =>  view('time-critical-logistics'));
Route::get('/customs-management', fn() =>  view('customs-management'));
Route::get('/project-logistics', fn() =>  view('project-logistics'));
Route::get('/express-courier', fn() =>  view('express-courier'));
Route::get('/industrial-solutions', fn() =>  view('industrial-solutions'));
Route::get('/exhibition-events-logistics', fn() =>  view('exhibition-events-logistics'));
Route::get('/aviation-cargo-handling', fn() =>  view('aviation-cargo-handling'));
Route::get('/dangerous-goods-handling', fn() =>  view('dangerous-goods-handling'));
Route::get('/pet-relocation', fn() =>  view('pet-relocation'));

Route::get('/career', fn() =>  view('career'));
Route::get('/sales-executive', fn() =>  view('sales-executive'));
Route::get('/sales-coordinator', fn() =>  view('sales-coordinator'));
Route::get('/account-executive', fn() =>  view('account-executive'));
Route::get('/contact-us', fn() =>  view('contact-us'));
Route::get('/privacy-policy', fn() =>  view('privacy-policy'));
Route::get('/terms-conditions', fn() =>  view('terms-conditions'));

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blogs.show');

Route::get('/news-events', [EventController::class, 'index'])->name('events');
Route::get('/event/{slug}', [EventController::class, 'show'])->name('event.show');
Route::get('/moment-workstyle/{slug}', [ProjectController::class, 'show'])->name('moment-workstyle.show');

/*
Moment & Workstyle 
  => Shipments
  => Events & Celebrations
  => Exhibitions & Conferences 

*/