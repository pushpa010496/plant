<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class Flatpage extends Model{
    protected $table = 'flatpages';
    protected $guarded = [];
	
}