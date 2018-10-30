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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register', 'HomeController@register')->name('register');
Route::get('/all_admin', 'HomeController@all_admin')->name('all_admin');
Route::get('/all_data', 'HomeController@all_data')->name('all_data');
Route::get('/all_user', 'HomeController@all_data')->name('all_user');
Route::get('/my_profile', 'Crud\Crud@my_profile')->name('my_profile');
Route::get('/profile', 'Crud\Crud@profile')->name('profile');
Route::get('/updateRecord/{id}', 'Crud\Crud@show')->name('updateRecord');//update route
Route::get('/deleteRecord/{id}', 'Crud\Crud@deleteR')->name('deleteRecord');//delete route


Route::get('/item', 'Crud\Crud@item')->name('item');

//post
Route::post('/add_profile', 'Crud\Crud@saveProfile')->name('action');
