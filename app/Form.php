<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class Form extends Model
{
	protected $table = 'forms';
    protected $guarded = [];
}