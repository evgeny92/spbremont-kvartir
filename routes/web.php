<?php

// Main Pages
Route::get('/', 'PagesController@getHome')->name('/');

Route::get('/price', 'PagesController@getPriceList')->name('price');

Route::get('/portfolio', 'PagesController@getPortfolio')->name('portfolio');
Route::get('/portfolio/{portfolio_slug}', 'PagesController@getSinglePortfolioPage')->name('singlePortfolio');

Route::get('/articles', 'PagesController@getArticles')->name('articles');
Route::get('/articles/{article_slug}', 'PagesController@getSingleArticlePage')->name('singleArticle');

Route::get('/contact', 'PagesController@getContact')->name('contact');
Route::post('/contact', 'PagesController@postContact')->name('postContact');

Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

// Admin

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

   Route::get('/', 'HomeController@index');
   Route::resource('portfolio', 'PortfolioController');
   Route::resource('articles', 'ArticleController');

});



