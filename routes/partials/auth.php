<?php
Route::get('/login','SiteController@create')->name('login');
Route::post('/register','SiteController@create')->name('register');
Route::post('logout','SiteController@logout')->name('logout');

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/facebook', 'Social\FacebookController@facebook')->name('facebook');
Route::get('/facebook/callback','Social\FacebookController@callback');

Route::get('/github', 'Social\GithubController@github')->name('github');
Route::get('/github/callback','Social\GithubController@callback');

Route::get('/twitter', 'Social\TwitterController@twitter')->name('twitter');
Route::get('/twitter/callback','Social\TwitterController@callback');

Route::get('/google', 'Social\GoogleController@google')->name('google');
Route::get('/google/callback','Social\GoogleController@callback');

Route::get('/profile','ProfileController@index')->name('profile');
Route::get('connect/google', 'Social\GoogleController@google')->name('connect.google');
Route::get('connect/twitter', 'Social\TwitterController@twitter')->name('connect.twitter');
Route::get('connect/facebook', 'Social\FacebookController@facebook')->name('connect.facebook');
Route::get('connect/github', 'Social\GithubController@github')->name('connect.github');