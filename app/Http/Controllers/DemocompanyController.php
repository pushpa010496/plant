<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\democompany\Company;
use App\democompany\CompanyProfile;
use App\democompany\Product;
use App\democompany\CompanyCatalog;
use App\democompany\CompanyPressrealese;
use App\democompany\CompanyWhitepaper;
use App\democompany\CompanyVideo;
use \Session;
use \DB;
use \Mail;
use App\SeoCompany;
use App\SeoPage;
use App\Page;
use App\Country;
use SEOMeta;
use OpenGraph;
use Twitter;
## or
use SEO;


class DemocompanyController extends Controller
{
   protected $model;
    public function __construct(Company $model)
    {
        $this->model = $model;
    }
    public function index(){

        $seo = SeoPage:: whereHas('seopages' , function($query) {
        $query->where('title',Request::segment('1'));})->where('active_flag',1)->get();
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->meta_title);
            //SEOMeta::setDescription($value->meta_description);
            /*SEOMeta::addMeta('suppliers:published_time', $value->created_at->toW3CString(), 'property');*/
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->og_title);
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'suppliers');
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
        }
        $countries = DB::table('countries')->select('country_name')->get();
        $companyprofile = CompanyProfile::select('id','active_menus','company_id','url','title','description')->where('active_flag',1)->get()->sortBy('title');
        //print_r($companyprofile);exit();
        return view('democompany.index',compact('companyprofile','countries'));
    }
    public function profile($companyurl)
    {
        
       /* $seo = SeoCompany:: whereHas('seocompanypro' , function($query) use($companyurl) {
            $query->where('url', 'like', $companyurl);})->where('active_flag',1)->where('pages','company_profile')->get();*/
            // $seo = CompanyProfile::where('url',$companyurl)->where('active_flag',1)->get();
            $seo = CompanyProfile::where('url',$companyurl)->where('active_flag',0)->get();
             if($seo->count() ==0){
                return view('errors.404');
            }
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->company->comp_name.' - Company Profile, Product Range, Locations & Major Industrial Contacts');
            SEOMeta::setDescription($value->company->comp_name.' - Get all the info about the company along with its product lines, company locations and major contacts');
            /*SEOMeta::addMeta('Profile:published_time', $value->created_at->toW3CString(), 'property');*/
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->company->comp_name.' - Get all the info about the company along with its product lines, company locations and major contacts');
            OpenGraph::setTitle($value->company->comp_name.' - Company Profile, Product Range, Locations & Major Industrial Contacts');
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'Profile');
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
        }
      $countries = Country::all()->pluck('country_name', 'country_name')->prepend('Select Country', '');
        // $countries = DB::table('countries')->select('country_name')->get();
        $companyprofile = CompanyProfile::select('id','active_menus','company_id','url','title','description')->where('url',$companyurl)->get();

         $cid = CompanyProfile::where('url',$companyurl)->get();
 
       $company = $cid;
        // $countries = DB::table('countries')->select('country_name')->get();
        
       // $companyprofile = Product::where('company_id',$cid[0]->company_id)->get();

        //print_r($companyprofile);exit();
        return view('democompany.profile',compact('companyprofile','countries','company'));
    }
    public function product($companyurl)
    {

        /*$seo = SeoCompany:: whereHas('seocompanypro' , function($query) use($companyurl) {
            $query->where('url', 'like', $companyurl);})->where('active_flag',1)->where('pages','products')->get();*/
            $seo = CompanyProfile::where('url',$companyurl)->where('active_flag',0)->get();
             if($seo->count() ==0){
                return view('errors.404');
            }
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->company->comp_name.' - Industrial Manufacturer Product Line');
            SEOMeta::setDescription('All Products from the Industrial Manufacturer'. $value->company->comp_name. 'Get detailed techical specifications, industrial applications & product reviews.');
           /* SEOMeta::addMeta('products:published_time', $value->created_at->toW3CString(), 'property');*/
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription('All Products from the Industrial Manufacturer'. $value->company->comp_name. 'Get detailed techical specifications, industrial applications & product reviews.');
            OpenGraph::setTitle($value->company->comp_name.' - Industrial Manufacturer Product Line');
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'products');
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
        }
        $countries = Country::all()->pluck('country_name', 'country_name')->prepend('Select Country', '');
        $cid = CompanyProfile::where('url',$companyurl)->get();
 
       $company = $cid;
        // $countries = DB::table('countries')->select('country_name')->get();
        
       $companyprofile = Product::where('company_id',$cid[0]->company_id)->where('active_flag',0)->orderBy('display_order','asc')->where('stage',0)->get();

         
        // print_r($companyprofile);exit();
        return view('democompany.product',compact('companyprofile','countries','company'));
    }
    public function productview($companyurl,$producturl)
    {

        $countries = Country::all()->pluck('country_name', 'id')->prepend('Select a Country', '');
$company = CompanyProfile::where('url',$companyurl)->where('active_flag',0)->get();
         if($company->count() ==0){
                return view('errors.404');
            }
        // $countries = DB::table('countries')->select('country_name')->get();
        $companyprofile = CompanyProfile::select('id','active_menus','company_id','url','title','description')->where('url',$companyurl)->get();

         $prods = Product::where('company_id',@$companyprofile->first()->company_id)->where('url',$producturl)->get();

         foreach (@$prods as $value) {
            SEOMeta::setTitle(ucwords(strtolower($value->meta_title)));
            SEOMeta::setDescription(ucfirst(strtolower($value->meta_description)));
            
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription(ucfirst(strtolower($value->og_description)));
            OpenGraph::setTitle($value->meta_title);
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'website');
            OpenGraph::addProperty('locale', 'en_GB');
            OpenGraph::addProperty('site_name', 'Plant Automation Technology');
            OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage($value->og_image);
             Twitter::setType('summary_large_image'); // type of twitter card tag
            Twitter::setTitle($value->meta_title); // title of twitter card tag
            Twitter::setSite('@plantautomatech'); // site of twitter card tag
            Twitter::setDescription($value->og_description); // 
            Twitter::addImage($value->og_image); // add 
        }     


        return view('democompany.productview',compact('companyprofile','countries','prods','company'));
    }
    public function pressrelease($companyurl)
    {
        /*$seo = SeoCompany:: whereHas('seocompanypro' , function($query) use($companyurl) {
            $query->where('url', 'like', $companyurl);})->where('active_flag',1)->where('pages','pressrelease')->get();*/
            $seo =CompanyProfile::where('url',$companyurl)->where('active_flag',0)->get();
             if($seo->count() ==0){
                return view('errors.404');
            }
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->company->comp_name.' - Latest News, Trends & Press Releases');
            SEOMeta::setDescription($value->company->comp_name.', Latest Press Releases, Industry Insights & Company news. Keep checking this space for updated & latest news & press releases from' .$value->company->comp_name);
            /*SEOMeta::addMeta('pressrelease:published_time', $value->created_at->toW3CString(), 'property');*/
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->company->comp_name.', Latest Press Releases, Industry Insights & Company news. Keep checking this space for updated & latest news & press releases from' .$value->company->comp_name);
            OpenGraph::setTitle($value->company->comp_name.' - Latest News, Trends & Press Releases');
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'pressrelease');
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
        }
        $countries = Country::all()->pluck('country_name', 'country_name')->prepend('Select Country', '');

          $cid = CompanyProfile::where('url',$companyurl)->get();
 
       $company = $cid;
        // $countries = DB::table('countries')->select('country_name')->get();
        
       $companyprofile = CompanyPressrealese::where('company_id',$cid[0]->company_id)->where('active_flag',0)->where('stage',0)->get();

        // $countries = DB::table('countries')->select('country_name')->get();
        // $companyprofile = CompanyProfile::with('ppress')->where('url',$companyurl)->where('active_flag',1)->get();
        return view('democompany.pressrelease',compact('companyprofile','countries','company'));
    }
    public function catalogue($companyurl)
    {
       /* $seo = SeoCompany:: whereHas('seocompanypro' , function($query) use($companyurl) {
            $query->where('url', 'like', $companyurl);})->where('active_flag',1)->where('pages','catalogue')->get();*/
            $seo = CompanyProfile::where('url',$companyurl)->where('active_flag',0)->get();
             if($seo->count() ==0){
                return view('errors.404');
            }
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->company->comp_name.' - Product Catalogue, PDF Brochure, Technical Documentation');
            SEOMeta::setDescription($value->company->comp_name. 'Technical Catalogue, Documentation and PDFs for whole range of product options & variants. Get all the technical specifications for '. $value->company->comp_name. ' for a better decision. Raise '. $value->company->comp_name. ' Enquiry or RFQs.');
           /* SEOMeta::addMeta('catalogue:published_time', $value->created_at->toW3CString(), 'property');*/
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->company->comp_name. 'Technical Catalogue, Documentation and PDFs for whole range of product options & variants. Get all the technical specifications for'. $value->company->comp_name. 'for a better decision. Raise'. $value->company->comp_name. 'Enquiry or RFQs.');
            OpenGraph::setTitle($value->company->comp_name.' - Product Catalogue, PDF Brochure, Technical Documentation');
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'catalogue');
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
        }
        $countries = Country::all()->pluck('country_name', 'country_name')->prepend('Select Country', '');
        // $countries = DB::table('countries')->select('country_name')->get();
         $cid = CompanyProfile::where('url',$companyurl)->get();
 
       $company = $cid;
        // $countries = DB::table('countries')->select('country_name')->get();
        
       $companyprofile = CompanyCatalog::where('company_id',$cid[0]->company_id)->where('active_flag',0)->where('stage',0)->orderBy('display_order','asc')->get();
        // $companyprofile = CompanyProfile::with('pcatalog')->where('url',$companyurl)->where('active_flag',1)->get();
        return view('democompany.catalogue',compact('companyprofile','countries','company'));
    }
    public function whitepaper($companyurl)
    {
       /* $seo = SeoCompany:: whereHas('seocompanypro' , function($query) use($companyurl) {
        $query->where('url', 'like', $companyurl);})->where('active_flag',1)->where('pages','whitepaper')->get();*/
        $seo = CompanyProfile::where('url',$companyurl)->where('active_flag',0)->get();
         if($seo->count() ==0){
                return view('errors.404');
            }
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->company->comp_name.' Technical White Papers & Product Documentation');
            SEOMeta::setDescription('Access '.$value->company->comp_name.' cutting edge White Papers, Technical Documentation and more.');
            /*SEOMeta::addMeta('whitepaper:published_time', $value->created_at->toW3CString(), 'property');*/
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription('Access '.$value->company->comp_name.' cutting edge White Papers, Technical Documentation and more.');
            OpenGraph::setTitle($value->company->comp_name.' Technical White Papers & Product Documentation');
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'whitepaper');
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
        }
        $countries = Country::all()->pluck('country_name', 'country_name')->prepend('Select Country', '');
        // $countries = DB::table('countries')->select('country_name')->get();
          $cid = CompanyProfile::where('url',$companyurl)->get();
 
       $company = $cid;
        // $countries = DB::table('countries')->select('country_name')->get();
        
       $companyprofile = CompanyWhitepaper::where('company_id',$cid[0]->company_id)->get();
        // $companyprofile = CompanyProfile::with('pwp')->where('url',$companyurl)->where('active_flag',1)->get();
        return view('democompany.whitepaper',compact('companyprofile','countries','company'));
    }
    public function video($companyurl)
    {
        /*$seo = SeoCompany:: whereHas('seocompanypro' , function($query) use($companyurl) {
        $query->where('url', 'like', $companyurl);})->where('active_flag',1)->where('pages','video')->get();*/
        $seo = CompanyProfile::where('url',$companyurl)->where('active_flag',0)->get();
         if($seo->count() ==0){
                return view('errors.404');
            }
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->company->comp_name.'- Company & Product Videos');
            SEOMeta::setDescription('Latest ' .$value->company->comp_name. ' product and company videos.');
            /*SEOMeta::addMeta('video:published_time', $value->created_at->toW3CString(), 'property');*/
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription('Latest ' .$value->company->comp_name. ' product and company videos.');
            OpenGraph::setTitle($value->company->comp_name.'- Company & Product Videos');
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'video');
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
        }
        $countries = Country::all()->pluck('country_name', 'country_name')->prepend('Select Country', '');
        
        // $videos = CompanyVideo::where('company_id',$seo->first()->company_id)->where('active_flag',1)->get();
           $cid = CompanyProfile::where('url',$companyurl)->get();
 
       $company = $cid;
        // $countries = DB::table('countries')->select('country_name')->get();
        
       $videos = CompanyVideo::where('company_id',$cid[0]->company_id)->get();
        // $countries = DB::table('countries')->select('country_name')->get();
        $companyprofile = CompanyProfile::with('pvideo')->where('url',$companyurl)->where('active_flag',1)->get();
        return view('democompany.video',compact('companyprofile','countries','videos','company'));
    }


    /* Demo Url Work */

public function productdemo($companyurl)
    {
        /*$seo = SeoCompany:: whereHas('seocompanypro' , function($query) use($companyurl) {
            $query->where('url', 'like', $companyurl);})->where('active_flag',1)->where('pages','products')->get();*/
            $seo = CompanyProfile::where('url',$companyurl)->get();
             foreach ($seo as $value) {
            SEOMeta::setTitle($value->company->comp_name.' - Industrial Manufacturer Product Line');
            SEOMeta::setDescription('All Products from the Industrial Manufacturer'. $value->company->comp_name. 'Get detailed techical specifications, industrial applications & product reviews.');
           /* SEOMeta::addMeta('products:published_time', $value->created_at->toW3CString(), 'property');*/
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription('All Products from the Industrial Manufacturer'. $value->company->comp_name. 'Get detailed techical specifications, industrial applications & product reviews.');
            OpenGraph::setTitle($value->company->comp_name.' - Industrial Manufacturer Product Line');
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'products');
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
        }
        $countries = Country::all()->pluck('country_name', 'country_name')->prepend('Select Country', '');
        // $countries = DB::table('countries')->select('country_name')->get();
        $companyprofile = CompanyProfile::with('pproduct')->where('url',$companyurl)->where('active_flag',1)->get();

        //print_r($companyprofile);exit();
        return view('democompany.product',compact('companyprofile','countries'));
    }





    /* End Demo Url work */
}
