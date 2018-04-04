<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {

   public function getHome(){
      return view('pages.home');
   }

   public function getPriceList(){
      return view('pages.price');
   }

   public function getPortfolio(){
      return view('pages.portfolio.portfolio');
   }

   public function getSinglePortfolioPage(){
      return view('pages.portfolio.single_portfolio');
   }

   public function getArticles(){
      return view('pages.articles.articles');
   }

   public function getSingleArticlePage(){
      return view('pages.articles.single_article');
   }

   public function getContact(){
      return view('pages.contact');
   }
}
