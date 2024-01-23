<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class CompanyWhitePaper extends Model

{
  protected $fillable = ['com_name','com_img'];
  protected $table = 'company_whitepapers';
  public function Author()
  {
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

}