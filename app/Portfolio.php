<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model {

   public function photos() {
      return $this->belongsToMany('App\Photo', 'photo_portfolio');
   }

}
