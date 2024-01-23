<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use SEO;
use SEOMeta;
use OpenGraph;
use Twitter;
use App\Product;
use App\Company;

class NewSearchController extends Controller
{
    public function searchNewCategory($category, $country)
    {
       $category =  Category::where('slug',$category)->where('active_flag',1)->first();
     
      $country = ucfirst( str_replace('-', ' ', $country) );

      if(!$category){
        $data = 'nocategory';
        return view('search.category_search',compact('data','country','category')); 
      }
       SEOMeta::setTitle(ucwords($category->name) . ' Suppliers in '. ucwords($country));  
     SEOMeta::setDescription(ucwords($category->name) . ' Suppliers in '. ucwords($country));

      $products = Product::where('category_id',$category->id)->where('active_flag',1)->distinct()->get(['company_id']);
/////////////////////////////////////////////////////////////////////
  $test_data =  Product::where('category_id',$category->id)->where('active_flag',1)->pluck('company_id')->unique();     

  $test_company = Company::whereIn('id',$test_data)->where('active_flag',1)->get();

      $countries_filter = [];
      $country_search = [];

      $country_list = [];
      foreach ($test_company as $key => $value) {
        if($value->active_flag == 1){
        if(in_array($value->country,$country_search)){   
         foreach ($country_list as $row => $con) {         
          if($con['name'] == $value->country){
           $country_list[$row]['count'] = $con['count'] +1;
         }
       }

     }else{
      array_push($country_search, $value->country); 
      $country_list[$key]['name'] = $value['country'];
      $country_list[$key]['category_url'] = $category->slug ;     
      $country_list[$key]['count'] = 1;             
    }  
    }
  }



  ////////////////////////////////////////////////////////////
      $data = $products->load(['company' => function ($query) use ($country) {
       $query->where('country','like', '%'.$country.'%')->where('active_flag',1);
     }]);

      $data= $data->where('company','!=',null);
      return view('search.category_search',compact('data','country','category','country_list'));
    }
}
