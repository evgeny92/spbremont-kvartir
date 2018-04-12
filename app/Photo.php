<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {

   public function portfolios() {
      return $this->belongsToMany('App\Portfolio');
   }

}
