<?php

namespace App;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model{
  use Searchable;
  
  protected $fillable = ['com_name','com_img'];
  public function Author(){
      return $this->belongsTo('App\User','author_id');
    }
  public function company()
  {
    return $this->belongsTo('App\Company','company_id');
  }
  public function compprofile()
  {
    return $this->belongsTo('App\CompanyProfile','company_profile_id');
  }

  public function categories(){
    return $this->belongsToMany('App\Category')
      ->withTimestamps();
  }
   public function category()
  {
    return $this->belongsTo('App\Category');
  }
  public function category_net() {
        return $this->category()->whereNotIn('id',[22]);
    }
     public function subtags() {
        return $this->belongsToMany('SubTags');
    }
 }