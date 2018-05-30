<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioValidation extends FormRequest {
   /**
    * Determine if the user is authorized to make this request.
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
                  'portfolio_title' => 'required|min:15|max:100|unique:portfolios,portfolio_title',
                  'apartment_project' => 'required|min:8|max:50',
                  'apartment_area' => 'required|min:3|max:30',
                  'type_repair' => 'required|min:10|max:50',
                  'year_implementation' => 'required|min:3|max:30',
                  'deadline' => 'required|min:6|max:50',
                  'portfolio_photos' => 'required|array',
                  'portfolio_photos.*' => 'required|image|mimes:jpeg,bmp,png|max:2000'
               ];
            }
         CASE 'PUT':
         CASE 'PATCH':
            {
               return [
                  'portfolio_title' => 'required|min:15|max:100|unique:portfolios,portfolio_title,' . $this->portfolio,
                  'apartment_project' => 'required|min:8|max:50',
                  'apartment_area' => 'required|min:3|max:30',
                  'type_repair' => 'required|min:10|max:50',
                  'year_implementation' => 'required|min:3|max:30',
                  'deadline' => 'required|min:6|max:50',
                  'portfolio_photos' => 'array',
                  'portfolio_photos.*' => 'image|mimes:jpeg,bmp,png|max:2000'
               ];
            }
         default:
            break;
      }
   }
}
