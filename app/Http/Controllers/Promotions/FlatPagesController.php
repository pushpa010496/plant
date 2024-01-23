<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Form;
use Auth;
use App\Category;
use \Session;
use \DB;
use \Mail;
use App\Product;
use App\SeoPage;
use SEOMeta;
use OpenGraph;
use Twitter;
use App\Country;
use App\Flatpage;
## or
use SEO;
use Artesaos\SEOTools\Facades\TwitterCard;

class FlatPagesController extends Controller
{
 protected $model;
    public function __construct(Form $model)
    {
        $this->model = $model;
        //$this->middleware('auth');
    }
  
  
 



   
}
