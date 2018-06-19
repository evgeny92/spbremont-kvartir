<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {
   protected $fillable = ['article_title', 'article_slug', 'article_image', 'article_content', 'meta_description', 'meta_keywords'];
}
