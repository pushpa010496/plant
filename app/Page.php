<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class Page extends Model{
    protected $parent = 'parent_id';

    public function Author(){
      return $this->belongsTo('App\User','author_id');
    }
   	public function sliders(){
	    return $this->belongsToMany('App\Slider','page_slider','page_id','slider_id')->withTimestamps();
	}
	public function Banners(){
	    return $this->belongsToMany('App\Banner','page_banner','page_id','banner_id')->withTimestamps();
	}
	public function seop(){

		return $this->hasOne('App\SeoPage');

	}
}