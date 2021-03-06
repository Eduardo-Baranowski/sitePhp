<?php

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

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('site.home');
})->name('site.home');

Route::get('/cursos', function () {
    return view('site.sobre');
})->name('site.sobre');;

Route::get('/contato', function () {
    return view('site.contact');
})->name('site.contact');;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Route::get('/contato', 'HomeController@index');
Route::post('/contato', 'HomeController@postContact')->name('contact.send');

Route::get('/portfolio', function () {
    return view('site.portfolio');
})->name('site.portfolio');