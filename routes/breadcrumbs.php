<?php

// Home
Breadcrumbs::register('/', function($breadcrumbs){
   $breadcrumbs->push('Главная', route('/'));
});

// Home/Price
Breadcrumbs::register('price', function($breadcrumbs){
   $breadcrumbs->parent('/');
   $breadcrumbs->push('Прайс-лист', route('price'));
});

// Home/Portfolio
Breadcrumbs::register('portfolio', function($breadcrumbs){
   $breadcrumbs->parent('/');
   $breadcrumbs->push('Портфолио', route('portfolio'));
});
// Home/Portfolio/portfolio_title
Breadcrumbs::register('singlePortfolio', function ($breadcrumbs, $portfolio) {
   $breadcrumbs->parent('portfolio');
   $breadcrumbs->push($portfolio->portfolio_title, route('singlePortfolio', $portfolio));
});

// Home/Articles
Breadcrumbs::register('articles', function($breadcrumbs){
   $breadcrumbs->parent('/');
   $breadcrumbs->push('Статьи', route('articles'));
});

Breadcrumbs::register('singleArticle', function($breadcrumbs, $article){
   $breadcrumbs->parent('articles');
   $breadcrumbs->push($article->article_title, route('singleArticle', $article));
});

// Contact
Breadcrumbs::register('contact', function($breadcrumbs){
   $breadcrumbs->parent('/');
   $breadcrumbs->push('Контакты', route('contact'));
});