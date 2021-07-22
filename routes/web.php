<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CoordonneeController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\WelcomeheadersectionController;
use App\Models\Client;
use App\Models\Coordonnee;
use App\Models\Section;
use App\Models\Testimonial;
use App\Models\Welcomeheadersection;

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

Route::get('/', function () {
    $testimonials = Testimonial::all();
    $sections =Section::all();
    $clients=Client::all();
    $welcomeheadersections=Welcomeheadersection::all();
    return view('welcome',compact ('testimonials','sections','clients','welcomeheadersections'));
});

Route::get('/contact', function () {
    $sections =Section::all();
    $coordonnees = Coordonnee::all();
    return view('pages.front.contact',compact('sections','coordonnees'));
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/setstatique', function () {
    $sections =Section::all();
    $clients=Client::all();
    $welcomeheadersections=Welcomeheadersection::all();
    $coordonnees = Coordonnee::all();
    return view('pages.back.statique',compact ('sections','clients','welcomeheadersections','coordonnees'));
});

Route::get('/setdynamique', function () {
    $testimonials =Testimonial::all();
    return view('pages.back.dynamique',compact('testimonials'));
});

Route::resource('testimonial', TestimonialController::class );
Route::resource('section', SectionController::class );
Route::resource('client', ClientController::class );
Route::resource('coordonnee', CoordonneeController::class );
Route::resource('welcomeheadersection', WelcomeheadersectionController::class );