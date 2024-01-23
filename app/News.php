<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class News extends Model
{
    public function Author(){
      return $this->belongsTo('App\User','author_id');
    }
}