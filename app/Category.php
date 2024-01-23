<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\subCategory;
use Nestable\NestableTrait;
use DB;

class Category extends Model
{
		use NestableTrait;

    protected $parent = 'parent_id';

    public function Author(){
      return $this->belongsTo('App\User','author_id');
    }
 
  	public function products()
	{	    return $this->belongsToMany('App\Product')->orderBy('company_id','asc')->where('active_flag', 1);
	}
	
  public function ParentCategory(){
      return $this->belongsTo('App\Category','parent_id');
    }

public function productsCount($cat)
{
	
  return $this->hasOne('App\Product') // or App\Product or any namespace you use
    ->selectRaw('count(*) as product')
    ->where('category_id',$cat['id']);
    
}
 
public function getProductsCountAttribute()
{
  // if relation is not loaded already, let's do it first
  if ( ! array_key_exists('ProductsCount', $this->relations)) 
    $this->load('ProductsCount');
 
  $related = $this->getRelation('ProductsCount');
 
  // then return the count directly
  return ($related) ? (int) $related->aggregate : 0;
}
  public function tags()
  {     return $this->belongsToMany('App\Tags')->orderBy('id','desc')->where('active_flag', 1)
        ->withTimestamps();
  }
	
}