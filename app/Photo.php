<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {
   protected $fillable = ['portfolio_photos'];

   public function portfolios() {
      return $this->belongsToMany('App\Portfolio');
   }

}
