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

Route::get('/', 'SiteController@index')->name('home');

Route::get('/login','SiteController@create')->name('login');
Route::post('/register','SiteController@create')->name('register');
Route::post('logout','SiteController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('dashboard');

Route::get('/facebook', 'Social\FacebookController@facebook')->name('facebook');
Route::get('/facebook/callback','Social\FacebookController@callback');

Route::get('/github', 'Social\GithubController@github')->name('github');
Route::get('/github/callback','Social\GithubController@callback');

Route::get('/twitter', 'Social\TwitterController@twitter')->name('twitter');
Route::get('/twitter/callback','Social\TwitterController@callback');

Route::get('/google', 'Social\GoogleController@google')->name('google');
Route::get('/google/callback','Social\GoogleController@callback');

Route::get('/profile','ProfileController@index')->name('profile');



