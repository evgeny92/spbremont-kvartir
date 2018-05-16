<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticlesValidation extends FormRequest {
   /**
    * Determine if the user is authorized to make this request.
    *
    * @return bool
    */
   public function authorize(){
      return true;
   }

   /**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */
   public function rules(){

      switch($this->method()){
         CASE 'GET':
         CASE 'DELETE':
            {
               return [];
            }
         CASE 'POST':
            {
               return [
                  'article_title' => 'required|min:15|max:100|unique:articles,article_title',
                  'article_image' => 'required|image|max:1024',
                  'article_content' => 'required',
               ];
            }
         CASE 'PUT':
         CASE 'PATCH':
            {
               return [
                  'article_title' => 'required|min:15|max:100|unique:articles,article_title,' . $this->article,
                  'article_image' => 'image|max:1024',
                  'article_content' => 'required',
               ];
            }
         default:
            break;
      }
   }

}
