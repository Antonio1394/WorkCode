<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleWork extends Model
{
  protected $table = "articlesWork";
  protected $fillable = ['number', 'description','comment'];
}
