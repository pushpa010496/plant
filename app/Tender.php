<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class Tender extends Model
{
    public function Author(){
      return $this->belongsTo('App\User','author_id');
    }

   public function category(){
      return $this->belongsTo('\App\Category','category_id');
    }
    public function country(){
      return $this->belongsTo('\App\Country','country_id');
    }
}