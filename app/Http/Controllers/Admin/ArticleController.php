<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Http\Requests\ArticlesValidation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class ArticleController extends Controller {
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index(){
      $articles = Article::latest()->paginate(10);
      return view('admin.articles.index', compact('articles'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create(){
      return view('admin.articles.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
   public function store(ArticlesValidation $request){

      $article = new Article;
      $article->article_title = $request->article_title;
      $article->article_slug = str_slug($request->article_title);
      $article->article_content = $request->article_content;

      if($request->hasFile('article_image')){
         $article_image = $request->file('article_image');
         $filename = time() . '.' . $article_image->getClientOriginalExtension();
         $path = public_path('img/articles/' . $filename);
         Image::make($article_image)->save($path);
         $article->article_image = $filename;
      }

      $article->save();

      Session::flash('success', 'Новая статья была успешно добавлена.');
      return redirect()->route('articles.index');
   }

   /**
    * Display the specified resource.
    *
    * @param  int $id
    * @return \Illuminate\Http\Response
    */
   public function show($id){
      $article = Article::findOrFail($id);
      return view('admin.articles.show', compact('article'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id){
      $article = Article::findOrFail($id);
      return view('admin.articles.edit', compact('article'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request $request
    * @param  int $id
    * @return \Illuminate\Http\Response
    */
   public function update(ArticlesValidation $request, $id){

      $article = Article::find($id);
      $article->article_title = $request->article_title;
      $article->article_slug = str_slug($request->article_title);
      $article->article_content = $request->article_content;

      if($request->hasFile('article_image')){
         $article_image = $request->file('article_image');
         $filename = time() . '.' . $article_image->getClientOriginalExtension();
         $path = public_path('img/articles/' . $filename);
         Image::make($article_image)->save($path);
         //Update
         $oldFileName = $article->article_image;
         $article->article_image = $filename;
         //Replacement(delete) old photo
         File::delete(public_path('img/articles/' . $oldFileName));
      }
      $article->save();

      Session::flash('success', 'Cтатья была успешно отредактирована.');
      return redirect()->route('articles.edit', $article->id);
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id){
      $article = Article::findOrFail($id);
      File::delete(public_path('img/articles/' . $article->article_image));
      $article->delete();
      Session::flash('success', 'Статья успешно удалена.');
      return redirect()->route('articles.index');
   }
}
