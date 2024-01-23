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
use App\Pressrelease;
use Redirect;
use App\CompanyProfile;

class SearchController extends Controller
{
 protected $model;
    public function __construct(Form $model)
    {
        $this->model = $model;
        //$this->middleware('auth');
    }
    public function index()
    {
      
         $products ="";
         
          $seo = SeoPage:: whereHas('seopages' , function($query) {
        $query->where('title',request()->segment(1));})->where('active_flag',1)->get();
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta('Project:published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->og_title);
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'Project');
            OpenGraph::addProperty('locale', 'en_GB');
           // OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
        } 
        
        return view('search/index',compact('products'));
    }  
    public function homesearch(Request $request)
    {
        if($request->q == ''){
          return Redirect::back()->with(['error'=>'Please enter search keyword']);
        }
        $products ="";
        $keyword = $request->q;
        if($keyword){
            $categories = Category::where('parent_id','!=',22)->where('active_flag',1)->where('name','LIKE','%'.$keyword.'%')->pluck('id');
            $company = Company::where(function($query) use($keyword){
                                      $query->where('active_flag',1)
                                      ->where('comp_name','LIKE','%'.$keyword.'%')
                                      ->orWhere('keyword1','LIKE','%'.$keyword.'%')
                                      ->orWhere('keyword2','LIKE','%'.$keyword.'%')
                                      ->orWhere('keyword3','LIKE','%'.$keyword.'%');
                                    })
                                    ->get();
            if($company->count()>0){
                 $companyinfo = Company::where(function($query) use($keyword){
                                          $query->where('active_flag',1)
                                                ->where('comp_name','LIKE','%'.$keyword.'%')
                                                ->orWhere('keyword1','LIKE','%'.$keyword.'%')
                                                ->orWhere('keyword2','LIKE','%'.$keyword.'%')
                                                ->orWhere('keyword3','LIKE','%'.$keyword.'%');
                                           })
                                          ->get();
                 return view('search.supplier',compact('companyinfo','keyword'));
            }else{
                $category_list = Category::whereIn('id',$categories)->get();
                $products_cat = $this->byCategory($categories);
                $company_ls = Company::where('active_flag',1)->where('comp_name','LIKE','%'.$keyword.'%')->pluck('id');
                $company_ls_pro = Product::with('company','compprofile')->whereIn('company_id',$company_ls)->where('active_flag',1)->pluck('id');
                $company_ls_pro->merge($products_cat);
                $pproducts = $this->byProduct($request->q);
                $products_ids =  $company_ls_pro->merge($pproducts->pluck('id'));
                $products= Product::where('title','LIKE','%'.$request->q.'%')->whereHas('company', function ($query) { $query->where('active_flag',1); $query->whereNotNull('company_id');})->get();
                $company_filter = [];
                $company_search = [];
                if(!empty($products)){
                    foreach ($products as $key => $value) {
                      $company = \App\Company::where('id',$value->company_id)->where('active_flag',1)->first();
                      if($company->comp_name){
                      }else{
                         return $value;
                      }
                      //Company Filterss       
                        if(in_array($company->comp_name,$company_search)){          
                          foreach ($company_filter as $row => $con) {         
                            if($con['name'] == $company->comp_name){
                             $company_filter[$row]['count'] = $con['count'] +1;       
                           }
                         }    
                       }
                       else{
                        if($company->active_flag == 1){
                          array_push($company_search, $company->comp_name); 
                          @$company_filter[$key]['name'] = $company->comp_name;
                          @$company_filter[$key]['url'] = $value->compprofile->url;
                          @$company_filter[$key]['count'] = 1;   
                          @$company_filter[$key]['category'] = $value->category->name;
                          @$company_filter[$key]['category_url'] = $value->category->slug;
                          @$company_filter[$key]['country'] = $company->country;    
                      }
                      }     
                    }
                }
                $countries_filter = [];
                    $country_search = [];
                    $country_list = [];
                    foreach ($company_filter as $key => $value) {
                      if(in_array($value['country'],$country_search)){   
                       foreach ($country_list as $row => $con) {         
                        if($con['name'] == $value['country']){
                         $country_list[$row]['count'] = $con['count'] +1;
                       }
                     }
                     
                   }else{
                    array_push($country_search, $value['country']); 
                    $country_list[$key]['name'] = $value['country'];
                    $country_list[$key]['category'] = $value['category'];
                    $country_list[$key]['category_url'] = $value['category_url'];
                    $country_list[$key]['count'] = 1;             
                  }  
                }
            }
            if($products->count()>=1){
                if($request->searchtype == 'product'){
                     $countries=$request->country;
                     return view('search.search_product',compact('products','keyword','countries'));
                }else if($request->searchtype == 'supplier'){
                    return view('search.search_supplier',compact('companies','keyword','country'));
                }else{
                  return view('search.searchlanding',compact('products','companies','keyword','country_list','company_filter','category_list'));
                }
            }
            else{
             $companyinfo = Company::where('active_flag',1)->where('comp_name','LIKE','%'.$keyword.'%')->get();
              return view('search.supplier',compact('companyinfo','keyword'));
            
            }
        }
    }
    public function homesearchold(Request $request)
    {
        if($request->q == ''){
          return Redirect::back()->with(['error'=>'Please enter search keyword']);
        }
       $products ="";
       $keyword = $request->q;

         if($request->q){

            $categories = Category::where('parent_id','!=',22)->where('active_flag',1)->where('name','LIKE','%'.$keyword.'%')->pluck('id');
            $company_ls = Company::where('active_flag',1)->where('comp_name','LIKE','%'.$keyword.'%')->pluck('id');

            if($categories){
              $category_list = Category::whereIn('id',$categories)->get();
              // $products = $this->byCategory($categories);
              $products_cat = $this->byCategory($categories);

            }
            if($company_ls){
              $company_ls_pro = Product::with('company','compprofile')->whereIn('company_id',$company_ls)->where('active_flag',1)->pluck('id');
              
              $company_ls_pro->merge($products_cat);
            }

            // if($products_cat->count() != 0 and $company_ls_pro->count() != 0){
            //   $products = array_merge($company_ls_pro,$company_ls_pro);
             
            // }
         
            // if( $products->count() == 0){
              $pproducts = $this->byProduct($request->q);

             // return $pproducts->where('compprofile.active_flag',0);  
            
            // }
                $products_ids =  $company_ls_pro->merge($pproducts->pluck('id'));

                /*$products = Product::whereIn('id',$products_ids)->where('active_flag',1)->where('company_id','!=',null)->whereHas('company', function ($query) {
                  $query->where('active_flag',1);
                })->get();*/

                 $wordcount=str_word_count($request->q);



if($wordcount>=2){

   $products= Product::where('title','LIKE','%'.$request->q.'%')->where('active_flag','1')->get();
}
else{

   $products= Product::where('title','LIKE','%'.$request->q.'%')->where('active_flag','1')->get();


}


            $count=count($products);            
            if($request->country != '' && $request->searchtype == 'product'){
             $products = $products->where('company.country',$request->country )->where('active_flag','1'); 
           }

           if( $categories->count() == 0){
            $companies = $this->bySupplier($request->q);
          }else{
            $companies = []; 
          }
        }    

      $company_filter = [];
      $company_search = [];
      if($products->count() != 0){

        foreach ($products as $key => $value) {
          $company = \App\Company::where('id',@$value->company_id)->first();
          if(@$company->comp_name){
          }else{
            return $value;
          }
          //Company Filterss       
            if(in_array($company->comp_name,$company_search)){              
              foreach ($company_filter as $row => $con) {         
                if($con['name'] == $company->comp_name){
                 $company_filter[$row]['count'] = $con['count'] +1;       
               }
             }    
           }
           else{
            if($company->active_flag == 1){
              array_push($company_search, $company->comp_name); 
              @$company_filter[$key]['name'] = $company->comp_name;
              @$company_filter[$key]['url'] = $value->compprofile->url;
              @$company_filter[$key]['count'] = 1;   
              @$company_filter[$key]['category'] = $value->category->name;
              @$company_filter[$key]['category_url'] = $value->category->slug;
              @$company_filter[$key]['country'] = $company->country;    
          }
          }     
        }
      }

        $countries_filter = [];
        $country_search = [];

        $country_list = [];

        foreach ($company_filter as $key => $value) {

          if(in_array($value['country'],$country_search)){   
           foreach ($country_list as $row => $con) {         
            if($con['name'] == $value['country']){
             $country_list[$row]['count'] = $con['count'] +1;
           }
         }
         
       }else{
        array_push($country_search, $value['country']); 
        $country_list[$key]['name'] = $value['country'];
        $country_list[$key]['category'] = $value['category'];
        $country_list[$key]['category_url'] = $value['category_url'];
        $country_list[$key]['count'] = 1;             
      }  
    } 


if($count>=1){

if($request->searchtype == 'product'){

  $countries=$request->country;
  return view('search.search_product',compact('products','keyword','countries'));
}else if($request->searchtype == 'supplier'){
  return view('search.search_supplier',compact('companies','keyword','country'));
}else{
  return view('search.searchlanding',compact('products','companies','keyword','country_list','company_filter','category_list'));
}
}

else{

 $companyinfo = Company::where('active_flag',1)->where('comp_name','LIKE','%'.$keyword.'%')->get();

return view('search.supplier',compact('companyinfo','keyword'));

}

}  

    public function search(Request $request)
    {
     
        // First we define the error message we are going to show if no keywords
        // existed or if no results found.
        $error = ['error' => 'No results found, please try with different keywords.'];

        // Making sure the user entered a keyword.
        if($request->has('q')) {

            // Using the Laravel Scout syntax to search the products table.
            $posts =   \AdvanceSearch\AdvanceSearchProvider\Facades\SearchFacades::search(
      "Product" ,
      ['title'] ,
      "$request->q"  ,
      ['title', 'alt_tag','title_tag','description','keyword1','keyword2','keyword3','keyword4','keyword5','url','meta_title','meta_keywords','meta_description','small_image'],
      ['id'  , 'dsc'] ,
      true ,
      30
);
            // If there are results return them, if none, return the error message.
            return $posts->count() ? $posts : $error;

        }

        // Return the error message if no keywords existed
        return $error;
    }

  public function getcountries(Request $request){
     $ser=$request->q;
    // $data=Product::where('title','like','%{{$ser}}%')->get();

     // $datas=Product::with('company')->where('title', 'like', '%' . $ser . '%')->get();
    $error = ['error' => 'No results found, please try with different keywords.'];


          if($request->has('q')) {

            // Using the Laravel Scout syntax to search the products table.
            $posts =   \AdvanceSearch\AdvanceSearchProvider\Facades\SearchFacades::search(
              "Product" ,
              ['title'] ,
              "$request->q"  ,
              ['title', 'alt_tag','title_tag','description','keyword1','keyword2','keyword3','keyword4','keyword5','url','meta_title','meta_keywords','meta_description','small_image'],
              ['id'  , 'dsc'] ,
              true ,
              30
            );
            // If there are results return them, if none, return the error message.
            // return $posts->count() ? $posts : $error;

        }


      // return response()->json(['response' => $data]);
 // return json_decode($data);
 //   exit;
      $data = '';
      $i=0;
      $country_info=[];
      foreach($posts as $row)
      {
       $country_info[$i]['country']= $row->first()->company->country;
       $i = $i+1;
      }

      return  [
        'countries'=> $country_info
      ];
     

     // return view('home.index',compact('data'));
  }

  public function latest($category, $country)
  { 

    $category =  Category::where('slug',$category)->where('active_flag',1)->first();

    $country = strtoupper( str_replace('-', ' ', $country) );

    if(!$category){
      $data = 'nocategory';
     return view('search.latest',compact('data','country','category')); 
    }

    

   
//     $products = Product::where('category_id',$category->id)->where('active_flag',1)->distinct()->get(['company_id']);

// //DB::enableQueryLog();
//     $data =  $products->load('company')->where('company.country','like', $country);
//   // $data =  $products->load('company')->whereRaw('lower(company.country) like "%' . strtolower($country) . '%"');
//  //dd(DB::getQueryLog());

     $products = Product::where('category_id',$category->id)->where('active_flag',1)->distinct()->get(['company_id']);

/////////////////////////////////////////////////////////////////////
  $test_data =  Product::where('category_id',$category->id)->where('active_flag',1)->pluck('company_id')->unique();     

  $test_company = Company::whereIn('id',$test_data)->get();

      $countries_filter = [];
      $country_search = [];

      $country_list = [];

      foreach ($test_company as $key => $value) {

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



  ////////////////////////////////////////////////////////////
 $data = $products->load(['company' => function ($query) use ($country) {
     $query->where('country','like', '%'.$country.'%');
}]);

$data= $data->where('company','!=',null);

      return view('search.latest',compact('data','country','category','country_list'));    
  }


public function byCategory($categories){  
  
  // return Product::whereIn('category_id',$categories)->where('active_flag',1)->get();

      return Product::whereHas('company', function ($query) {
        $query->where('active_flag',1);
    })->get();

}

public function byProduct($searchkey){  
  
     return  $products =   \AdvanceSearch\AdvanceSearchProvider\Facades\SearchFacades::search(

        "Product",
        ['title','keyword1','keyword2','keyword3','keyword4','keyword5'] ,
        "$searchkey"  ,
        ['id','title', 'alt_tag','title_tag','description','keyword1','keyword2','keyword3','keyword4','keyword5','url','meta_title','meta_keywords','meta_description','small_image','company_id','company_profile_id','category_id','active_flag'],
        ['id'  , 'desc'] ,
        true ,
        10000
      )->where('active_flag','1')->load('compprofile','company');     
}


public function bySupplier($searchkey){  
  $data = CompanyProfile::where('title',$searchkey)->get();

  if($data){
    return $data;
  }
  
    return  $companies =   \AdvanceSearch\AdvanceSearchProvider\Facades\SearchFacades::search(
        "CompanyProfile",
        ['title'] ,
        "$searchkey"  ,
        ['title','url','company_id','active_flag'],
        ['id'  , 'dsc'] ,
        true ,
        300
      )->where('active_flag','1')->load('company');
}


    public function searchCategory($category, $country)
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
      dd($country_list);

      return view('search.category_search',compact('data','country','category','country_list'));

    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

}