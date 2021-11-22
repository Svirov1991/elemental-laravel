<?php

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
    return view('home');
})->name('home');

Route::group(['namespace' => 'App\Http\Controllers'], function(){
    Route::get('/loremipsum', 'LoremipsumController@index')->name('loremipsum');
    Route::post('/contacts/submit', 'ContactController@form')->name('form-submit');
    Route::get('/contacts/all', 'ContactController@alertmessages')->name('alertmessages');
    Route::get('/contacts/all/{id}', 'ContactController@onemessage')->name('alertonemessages');
    Route::get('/contacts/all/{id}/update', 'ContactController@update')->name('update-message');
    Route::get('/contacts/all/{id}/delete', 'ContactController@delete')->name('delete-message');
    Route::post('/contacts/{id}/update', 'ContactController@updateSubmit')->name('update-submit');
});
Route::get('/contacts', function(){
    return view('contacts');
})->name('contacts');
Route::get('/films', function(){
    $data = App\Models\Film::all();
    return view('films', ['data' => $data]);
})->name('films');
Route::get('/directors', function(){
    $data = App\Models\Director::all();
    return view('directors', ['data' => $data]);
})->name('directors');
Route::get('/authors', function(){
    $data = App\Models\Author::all();
    return view('authors', ['data' => $data]);
})->name('authors');
Route::get('/books', function(){
    $data = App\Models\Book::all();
    return view('books', ['data' => $data]);
})->name('books');
Route::get('/cinemas', function(){
    $data = App\Models\Cinema::all();
    return view('cinemas', ['data' => $data]);
})->name('cinemas');
Route::get('/movies', function(){
    $data = App\Models\Movie::all();
    return view('movies', ['data' => $data]);
})->name('movies');



