<?php

// Main Pages
Route::get('/', 'PagesController@getHome')->name('/');

Route::get('/price', 'PagesController@getPriceList')->name('price');

Route::get('/portfolio', 'PagesController@getPortfolio')->name('portfolio');
Route::get('/portfolio/{portfolio_slug}', 'PagesController@getSinglePortfolioPage')->name('singlePortfolio');

Route::get('/articles', 'PagesController@getArticles')->name('articles');
Route::get('/articles/{article_slug}', 'PagesController@getSingleArticlePage')->name('singleArticle');

Route::get('/contact', 'ContactController@getContact')->name('contact');
Route::post('/contact', 'ContactController@postContact')->name('postContact');

Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

// Dashboard
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {

   Route::get('/', 'HomeController@index');
   Route::resource('portfolio', 'PortfolioController');
   Route::resource('articles', 'ArticleController');
   Route::get('user', 'ProfileController@showUserProfile')->name('userProfile');
   Route::post('user', 'ProfileController@updateUserProfile')->name('updateUserProfile');
   Route::get('user/password', 'ProfileController@showUserPassword')->name('updatePassword');
   Route::post('user/password', 'ProfileController@updateUserPassword')->name('updateUserPassword');

});



