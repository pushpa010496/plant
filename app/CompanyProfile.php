<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
  protected $guarded = [];
  public function Author(){
      return $this->belongsTo('App\User','author_id');
    }
  public function company()
  {
    return $this->belongsTo('App\Company','company_id')->where('active_flag', 1);
  }
  public function pcatalog(){
	    return $this->hasMany('App\CompanyCatalog','company_profile_id')->orderBy('display_order','asc')->where('active_flag', 1);
	}
  public function ppress(){
      return $this->hasMany('App\CompanyPressrealese','company_profile_id')->orderBy('id','desc')->where('active_flag', 1);
  }
  public function pwp(){
      return $this->hasMany('App\CompanyWhitePaper','company_profile_id')->orderBy('id','desc')->where('active_flag', 1);
  }
  public function pvideo(){
      return $this->hasMany('App\CompanyVideo','company_profile_id')->orderBy('id','desc')->where('active_flag', 1);
  }
  public function pproduct(){
      return $this->hasMany('App\Product','company_profile_id')->where('active_flag', 1)->orderBy('display_order','desc');
  }
   public function pseocomp(){
      return $this->hasMany('App\SeoCompany','company_profile_id');
  }
   public function pproject(){
      return $this->hasMany('App\CompanyProject','company_profile_id')->orderBy('id','desc')->where('active_flag', 1);
  }
  
}