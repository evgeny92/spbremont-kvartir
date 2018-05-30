<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model {
   protected $fillable = ['portfolio_title', 'portfolio_slug', 'apartment_project', 'apartment_area', 'type_repair', 'year_implementation', 'deadline'];

   public function photos() {
      return $this->belongsToMany('App\Photo', 'photo_portfolio')->withTimestamps();
   }

}
