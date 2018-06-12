<?php

namespace App\Http\Controllers;

use App\Article;
use App\Portfolio;
use Illuminate\Http\Request;

class PagesController extends Controller {

   public function getHome(){
      return view('pages.home');
   }

   public function getPriceList(){
      return view('pages.price');
   }

   public function getPortfolio(){
      $portfolios = Portfolio::with('photos')->get();
      //dd($portfolios);
      return view('pages.portfolio.portfolio', compact('portfolios'));
   }

   public function getSinglePortfolioPage($portfolio_slug){
      $portfolio = Portfolio::where('portfolio_slug', $portfolio_slug)->firstOrFail();
      $photo = $portfolio->photos()->first();
      $photos = $portfolio->photos()->get();
      return view('pages.portfolio.single_portfolio', compact('portfolio', 'photos', 'photo'));
   }

   public function getArticles(){
      $articles = Article::all();
      return view('pages.articles.articles', compact('articles'));
   }

   public function getSingleArticlePage($article_slug){
      $article = Article::where('article_slug', $article_slug)->firstOrFail();
      return view('pages.articles.single_article', compact('article'));
   }
}
