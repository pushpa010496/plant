<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class Article extends Model
{
	protected $table = "articles";
    protected $fillable = ['name', 'display_name', 'description','small_image','article_title','article_url'];

    public function Author(){
      return $this->belongsTo('App\User','author_id');
    }
}