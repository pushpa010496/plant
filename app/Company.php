<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\subCategory;
class Company extends Model
{
	public function Author(){
      return $this->belongsTo('App\User','author_id');
    }
   	public function companyprofile(){
	    return $this->hasMany('App\CompanyProfile')->where('active_flag', 1);
	}
	public function profile(){
	    return $this->hasOne('App\CompanyProfile')->where('active_flag', 1);
	}
	public function compprofile(){
	    return $this->belongsTo('App\CompanyProfile');
	}
	public function companycatalogs()
	{
	    return $this->hasMany('App\CompanyCatalog');
	}
	public function companypress()
	{
	    return $this->hasMany('App\CompanyPressrealese');
	}
	public function companywp()
	{
	    return $this->hasMany('App\CompanyWhitePaper');
	}
	public function companyvideo()
	{
	    return $this->hasMany('App\CompanyVideo');
	}
	public function companyproduct()
	{
	    return $this->hasMany('App\Product')->where('active_flag', 1);
	}
		public function companyprojects()
	{
	    return $this->hasMany('App\CompanyProject');
	}
	public function active_profiles() {
        return $this->companyprofile()->where('active_flag', 1);
    }
    public function companyenquiries()
    {
        return $this->hasMany('App\CompanyEnquiry');
    }
	public function companylogo()
  {
    return $this->belongsTo('App\Company','company_id')->where('active_flag', 1);
  }
}