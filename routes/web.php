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




//route pour la deconnexion
Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('login');
 });

Route::get('/home', 'HomeController@index')->name('home');
Route::get('creer', 'TicketsController@create');
Route::post('creer', 'TicketsController@store')->name('creer');
Route::get('liste', 'TicketsController@adminticketsview');
Route::get('user', 'TicketsController@userTickets');
Route::get('/accueil', 'HelpdController@index')->name('accueil');



