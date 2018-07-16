<?php

namespace App\Http\Controllers;

use App\Article;
use App\Portfolio;
use Illuminate\Http\Request;

class SitemapController extends Controller {

   public function sitemap(){
      $portfolios = Portfolio::latest()->get();
      $articles = Article::latest()->get();
      return response()->view('pages.sitemap', compact('articles', 'portfolios'))->header('Content-Type', 'text/xml');
   }
}
