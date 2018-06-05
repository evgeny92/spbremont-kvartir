<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller {

   public function index(){
      $portfolios = Portfolio::all();
      $articles = Article::all();
      return view('admin.home', compact('portfolios', 'articles'));
   }

}
