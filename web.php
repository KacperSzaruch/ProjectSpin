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

Auth::routes();

Route::get('/warsztaty', [HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/warsztaty', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {

    // User routes
    Route::get('/', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
    Route::get('/home', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);

    // Material routes
    Route::get('/material', 'App\Http\Controllers\MaterialController@index');
    Route::get('/material/create', 'App\Http\Controllers\MaterialController@create');
    Route::get('/material/{id}', 'App\Http\Controllers\MaterialController@show');    
    Route::post('/material', 'App\Http\Controllers\MaterialController@store');   
    Route::get('/material/delete/{id}', 'App\Http\Controllers\MaterialController@destroy');


    // Workshop routes
    Route::get('/workshop', 'App\Http\Controllers\WorkshopController@index');
    Route::get('/workshop/create', 'App\Http\Controllers\WorkshopController@create');
    Route::get('/workshop/{id}', 'App\Http\Controllers\WorkshopController@show');    
    Route::post('/workshop', 'App\Http\Controllers\WorkshopController@store');    
    Route::get('/workshop/delete/{id}', 'App\Http\Controllers\WorkshopController@destroy');


    // Question routes
    Route::get('/question', 'App\Http\Controllers\QuestionController@index');
    Route::get('/question/create', 'App\Http\Controllers\QuestionController@create');
    Route::get('/question/{id}', 'App\Http\Controllers\QuestionController@show');    
    Route::post('/question', 'App\Http\Controllers\QuestionController@store');    
    Route::get('/question/update/{id}', 'App\Http\Controllers\QuestionController@update');    
    Route::get('/question/delete/{id}', 'App\Http\Controllers\QuestionController@destroy');

    // Comment routes
    Route::post('/comment/{id}', 'App\Http\Controllers\CommentController@store');



	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profil', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profil', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

