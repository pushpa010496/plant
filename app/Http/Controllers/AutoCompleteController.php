<?php
namespace App\Http\Controllers;
use App\Http\Requests;

use App\Http\Controllers\Controller;
use App\Product;
use App\Company;
use App\Form;
use Auth;
use Illuminate\Http\Request;
use \Session;
use \DB;
use \Mail;
use SEO;
use SEOMeta;
use OpenGraph;
use Twitter;
use App\SeoPage;
use App\Category;
use App\Whitepaper;
use App\Interview;
use App\News;
use App\Article;
use App\Traits\SearchResults;

class AutoCompleteController  extends Controller
{
     protected $model;
     use SearchResults;

     public function __construct(Form $model)
     {
      $this->model = $model;
    }
    public function autoComplete(Request $request)
    {
       if($request->ajax()){
           
            $query = $request->get('search');
            $products = Product::whereHas('company',function ($q){
                              $q->where('active_flag',1);
                            })->select('title')
                            ->where('title', 'like', '%'.$query.'%')
                            ->where('active_flag',1)
                            ->limit(10)
                            ->get();
                            // dd($products);
              $html = (string)view('search.search-suggestions',compact('products','query'))->render();
            $data = [
                'html' => $html,
             ];
             return response()->json($data);
       }
		  
             
        // $query = $request->get('term');
        // $search = str_replace(['-','&'], ' ', $query);
        // $exact = Product::where('title','LIKE','%'.$search.'%')
        //                   ->where('active_flag',1)
        //                   ->whereNotNull('company_id')
        //                   ->get();
        // $match = Product::select("products.*",DB::raw("MATCH (title)  AGAINST ('$search' IN BOOLEAN MODE) AS score"))
        //                     ->where('active_flag',1)
        //                     ->whereNotNull('company_id')
        //                     ->havingRaw('score > 0')
        //                     ->orderBy("score","desc")
        //                 ->get();
        // $products = $exact->merge($match);
        // $exact = Company::where('comp_name','LIKE','%'.$search.'%')
        //                   ->where('active_flag',1)
        //                   ->get();
        // $match = Company::select("companies.*",DB::raw("MATCH (comp_name)  AGAINST ('$search' IN BOOLEAN MODE) AS score"))
        //                  ->where('active_flag',1)
        //                  ->havingRaw('score > 0')
        //                  ->orderBy("score","desc")
        //                  ->get();
        // $companies =  $exact->merge($match);
        // $data=array();
        // foreach ($products as $product) {
        //   $data[]=['value'=>$product->title,'key'=>'product','label'=>$product->title.'Search  for Products'];
        // }
        // foreach ($companies as $company) {
        //   $data[]=['value'=>$company->comp_name,'key'=>'company','label'=>$company->comp_name .' Search  for Company'];
        // }
        // if(count($data))
        //  return $data;
    }  


}