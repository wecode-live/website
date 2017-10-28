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

Route::get('/', function () {
    return view('web.home');
});

// Route::get('/hackathon', 'WebsiteController@hackathon');
Route::post('/register-hackathon', 'WebsiteController@register');

Route::get('/hackathon', function () {
    return redirect('https://www.eventbrite.com/e/the-abuja-wecode-hackathon-enhancing-corporate-innovation-with-technology-tickets-34567491297');
});

Route::get('/submit-idea', function () {
    return view('web.ideas');
});

Route::post('/submit-idea', 'WebsiteController@submitIdea');

Route::get('/{name}', function () {
    return view('web.home');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/list-ideas', 'WebsiteController@list');