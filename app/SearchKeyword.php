<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SearchKeyword extends Model
{
     protected $table = 'search_keyword';
      protected $fillable = ['keyword','url','no_products'];
}
