<?php



namespace App\democompany;



use Illuminate\Database\Eloquent\Model;



class CompanyPressrealese extends Model{

  protected $table= 'company_pressrealese';

  public function Author(){

      return $this->belongsTo('App\User','author_id');

    }

  public function company()

  {

    return $this->belongsTo('App\Company','company_id');

  }

  public function compprofile()

  {

    return $this->belongsTo('App\democompany\CompanyProfile','company_profile_id');

  }

}