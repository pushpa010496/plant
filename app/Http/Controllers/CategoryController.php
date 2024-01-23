<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Form;
use Auth;
use App\Category;
use Request;
use \Session;
use \DB;
use \Mail;
use App\Product;
use App\SeoPage;
use SEOMeta;
use OpenGraph;
use Twitter;
## or
use SEO;
use App\Banner;
use App\SubTags;
use Artesaos\SEOTools\Facades\TwitterCard;

class CategoryController extends Controller
{
 protected $model;
    public function __construct(Form $model)
    {
        $this->model = $model;
        //$this->middleware('auth');
    }
    public function index()
    {   
      $time = \Carbon\Carbon::now()->format('Y-m-d');
      $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->get();
         $seo = SeoPage:: whereHas('seopages' , function($query) {
        $query->where('title',Request::segment(1));})->where('active_flag',1)->get();
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta(Request::segment(1).'::segment(1):published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->og_title);
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', Request::segment(1));
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
            
            TwitterCard::setType('summary_large_image'); // card
            TwitterCard::setTitle($value->meta_title);  // title
            TwitterCard::setSite('@plantautomatech'); // site
            TwitterCard::setUrl(url()->current()); // url
            TwitterCard::setDescription($value->meta_description); // description 
            TwitterCard::setImage($value->og_image); // image
        }

        return view('category/index',compact('banner1314'));
    }  
    public function catview($slug)
    {

        $time = \Carbon\Carbon::now()->format('Y-m-d');
        $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->get();
        $category = Category::where('slug',$slug)->where('active_flag',1)->get();
        // dd($category);
        foreach ($category as $value) {
            SEOMeta::setTitle($value->meta_title ?? ucwords(strtolower($value->name)).' | Industrial Manufacturers');
            SEOMeta::setDescription($value->meta_description ?? ucwords(strtolower($value->name)).' | Industrial Manufacturers');
            SEOMeta::setDescription($value->meta_description ?? 'Manufacturers & Suppiers list for '.ucwords(strtolower($value->name)). ' from around the world. Discover manufacturers, suppliers, industrial product variants and raise RFQs');
            SEOMeta::addMeta(Request::segment(1).':published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords ?? ucwords(strtolower($value->name)).', Industrial Manufacturers');
            OpenGraph::setDescription( $value->meta_description ?? ucwords(strtolower($value->name)).' | Industrial Manufacturers');
            SEOMeta::setDescription($value->meta_description ?? 'Manufacturers & Suppiers list for '.ucwords(strtolower($value->name)). ' from around the world. Discover manufacturers, suppliers, industrial product variants and raise RFQs');
            OpenGraph::setTitle(ucwords(strtolower($value->name)).' | Industrial Manufacturers');
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', Request::segment(1));
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
            
            TwitterCard::setType('summary_large_image'); // card
            TwitterCard::setTitle($value->meta_title);  // title
            TwitterCard::setSite('@plantautomatech'); // site
            TwitterCard::setUrl(url()->current()); // url
            TwitterCard::setDescription($value->meta_description); // description 
            TwitterCard::setImage($value->og_image); // image
        }
        if(count($category) == 0){
            return view('errors.404');
        }
        $cat = Category::where('slug',$slug)->where('active_flag',1)->first();
        
         $company_filter = [];
        $company_search = [];
        foreach($cat->products as $key => $value){

             if(in_array(@$value->company->comp_name,$company_search)){              
              foreach ($company_filter as $row => $con) {         
                if($con['name'] == $value->company->comp_name){
                 $company_filter[$row]['count'] = $con['count'] +1;       
               }
             }    
           }
           else{
              if(@$value->company->active_flag == 1){
                array_push($company_search, $value->company->comp_name); 
                $company_filter[$key]['name'] = $value->company->comp_name;
                $company_filter[$key]['url'] = $value->compprofile->url;
                $company_filter[$key]['count'] = 1;   
                $company_filter[$key]['category'] = $value->category->name;
                $company_filter[$key]['category_url'] = $value->category->slug;
                $company_filter[$key]['country'] = $value->company->country;    
            }
          }     


        }

        
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

          $tags_list = Category::with('tags')->where('slug',$slug)->where('active_flag',1)->first();
          \Log::info($tags_list);
          $sliders=DB::select('CALL Get_sliders()');

        return view('category/categoryview',compact('category','banner1314','company_filter','country_list','tags_list','sliders'));
    }

    public function subcat($slug){
        
        $category = Category::where('slug',$slug)->where('active_flag',1)->get();
        if($category->count() !=0){
            return view('errors.404');
        }
        foreach ($category as $value) {
            SEOMeta::setTitle($value->meta_title ?? ucwords(strtolower($value->name)).' | Global Industrial Manufacturers');
            SEOMeta::setDescription($value->meta_description ?? 'Industrial Manufacturing Marketplace to procure '.ucwords(strtolower($value->name)).'manufacturers, suppliers. Get manufacturing company details, industrial product list, raise RFQs,');
            SEOMeta::addMeta('Project:published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords ??  ucwords(strtolower($value->name)).' , Global Industrial Manufacturers');
            OpenGraph::setDescription($value->meta_description ??  'Industrial Manufacturing Marketplace to procure '.ucwords(strtolower($value->name)).'manufacturers, suppliers. Get manufacturing company details, industrial product list, raise RFQs,');
            
            OpenGraph::setTitle($value->meta_title ?? ucwords(strtolower($value->name)).' | Global Industrial Manufacturers');
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'Project');
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
            
            TwitterCard::setType('summary_large_image'); // card
            TwitterCard::setTitle($value->meta_title ??  ucwords(strtolower($value->name)).' | Global Industrial Manufacturers');  // title
            TwitterCard::setSite('@plantautomatech'); // site
            TwitterCard::setUrl(url()->current()); // url
            TwitterCard::setDescription($value->meta_description ??  'Industrial Manufacturing Marketplace to procure '.ucwords(strtolower($value->name)).'manufacturers, suppliers. Get manufacturing company details, industrial product list, raise RFQs,'); // description 
            TwitterCard::setImage($value->og_image); // image
        }

        $subcat =  Category::where('slug',$slug)->where('active_flag',1)->get();

        $cat_name = Category::where('slug',$slug)->select('name')->first();
        //print_r($subcat);die;

        return view('category.category_landing',compact('subcat','cat_name'));

    }
    public function subtag(Request $request,$subtag)
    {
         $productsinfo=SubTags::where('subtag_name','like',$subtag)->get();
         return response(view('company.tag_filter', compact('productsinfo'))->render());     
    }

    public function paidCompanyProducts()
    {
        $products = Product::whereHas('company',function ($q){
                             $q->where('active_flag',1)
                             ->orderByRaw('FIELD(profile_type, "paid")');
                          })->whereNotNull('company_id')->where('active_flag',1)->paginate(24);
        $time = \Carbon\Carbon::now()->format('Y-m-d');
        $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->get();
        $company_filter = [];
        $company_search = [];
        foreach($products as $key => $value){
             if(in_array(@$value->company->comp_name,$company_search)){              
              foreach ($company_filter as $row => $con) {         
                if($con['name'] == $value->company->comp_name){
                 $company_filter[$row]['count'] = $con['count'] +1;       
               }
             }    
           }
           else{
              if(@$value->company->active_flag == 1){
                array_push($company_search, $value->company->comp_name); 
                $company_filter[$key]['name'] = $value->company->comp_name;
                $company_filter[$key]['url'] = $value->compprofile->url;
                $company_filter[$key]['count'] = 1;   
                $company_filter[$key]['category'] = $value->category->name;
                $company_filter[$key]['category_url'] = $value->category->slug;
                $company_filter[$key]['country'] = $value->company->country;    
            }
          }     
        }
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
          $tags_list = Category::with('tags')->where('active_flag',1)->first();
          \Log::info($tags_list);
          $sliders=DB::select('CALL Get_sliders()');
        return view('company.paid-company-products',compact('banner1314','company_filter','country_list','tags_list','sliders','products'));
    }
}