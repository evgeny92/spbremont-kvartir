<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PortfolioValidation;
use App\Photo;
use App\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class PortfolioController extends Controller {
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index(){
      $portfolios = Portfolio::latest('id')->paginate(10);
      return view('admin.portfolio.index', compact('portfolios'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create(){
      return view('admin.portfolio.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
   public function store(PortfolioValidation $request){

      $portfolio = new Portfolio();
      $portfolio->portfolio_title = $request->portfolio_title;
      $portfolio->portfolio_slug = str_slug($request->portfolio_title);
      $portfolio->apartment_project = $request->apartment_project;
      $portfolio->apartment_area = $request->apartment_area;
      $portfolio->type_repair = $request->type_repair;
      $portfolio->year_implementation = $request->year_implementation;
      $portfolio->deadline = $request->deadline;
      $portfolio->meta_description = $request->meta_description;
      $portfolio->meta_keywords = $request->meta_keywords;
      $portfolio->save();

      if($request->hasFile('portfolio_photos')){
         foreach($request->portfolio_photos as $portfolio_photo){
            $fileName = rand() . '.' . $portfolio_photo->getClientOriginalExtension();
            $path = public_path('img/portfolio/' . $fileName);
            Image::make($portfolio_photo)->resize(1280, 960)->save($path);
            $newFile = new Photo();
            $newFile->portfolio_photos = $fileName;
            $newFile->save();
            $portfolio->photos()->save($newFile);
         }
      }
      Session::flash('success', 'Новое портфолио было успешно добавлено.');
      return redirect()->route('portfolio.index');
   }

   /**
    * Display the specified resource.
    *
    * @param  int $id
    * @return \Illuminate\Http\Response
    */
   public function show($id){
      $portfolio = Portfolio::findOrFail($id);
      return view('admin.portfolio.show', compact('portfolio', 'photos'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id){
      $portfolio = Portfolio::findOrFail($id);
      return view('admin.portfolio.edit', compact('portfolio'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request $request
    * @param  int $id
    * @return \Illuminate\Http\Response
    */
   public function update(PortfolioValidation $request, $id){

      $portfolio = Portfolio::findOrFail($id);
      $portfolio->portfolio_title = $request->portfolio_title;
      $portfolio->portfolio_slug = str_slug($request->portfolio_title);
      $portfolio->apartment_project = $request->apartment_project;
      $portfolio->apartment_area = $request->apartment_area;
      $portfolio->type_repair = $request->type_repair;
      $portfolio->year_implementation = $request->year_implementation;
      $portfolio->deadline = $request->deadline;
      $portfolio->meta_description = $request->meta_description;
      $portfolio->meta_keywords = $request->meta_keywords;
      $portfolio->save();

      if($request->hasFile('portfolio_photos')){
         $portfolio_photos = $request->file('portfolio_photos');
         foreach($portfolio_photos as $portfolio_photo){
            $fileName = rand() . '.' . $portfolio_photo->getClientOriginalExtension();
            $path = public_path('img/portfolio/' . $fileName);
            Image::make($portfolio_photo)->resize(1280, 960)->save($path);
            //Delete old filename
            foreach($portfolio->photos as $photo){
               $portfolio->photos()->detach($photo);
               File::delete(public_path('img/portfolio/' . $photo->portfolio_photos));
               $photo->delete();
            }
            $newFile = new Photo();
            $newFile->portfolio_photos = $fileName;
            $newFile->save();
            $portfolio->photos()->save($newFile);
         }
      }
      Session::flash('success', 'Портфолио было успешно отредактировано.');
      return redirect()->route('portfolio.edit', $id);
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id){
      $portfolio = Portfolio::findOrFail($id);
      foreach($portfolio->photos as $photo){
         $portfolio->photos()->detach($photo);
         File::delete(public_path('img/portfolio/' . $photo->portfolio_photos));
         $photo->delete();
      }
      $portfolio->delete();

      Session::flash('success', 'Портфолио успешно удалено.');
      return redirect()->route('portfolio.index');
   }
}
