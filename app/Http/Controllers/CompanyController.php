<?php
namespace App\Http\Controllers;

use Request;
use App\Company;
use App\CompanyProfile;
use App\Product;
use App\Article;
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
use App\CompanyVideo;
use App\Slider;
use SEO;
use App\Banner;
use App\SearchKeyword;
use Artesaos\SEOTools\Facades\TwitterCard;
use App\Traits\SearchResults;


class CompanyController extends Controller
{
	protected $model;
    use SearchResults;

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
            SEOMeta::addMeta('suppliers:published_time', $value->created_at->toW3CString(), 'property');
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
            
            TwitterCard::setType('summary_large_image'); // card
            TwitterCard::setTitle($value->meta_title);  // title
            TwitterCard::setSite('@plantautomatech'); // site
            TwitterCard::setUrl(url()->current()); // url
            TwitterCard::setDescription($value->meta_description); // description 
            TwitterCard::setImage($value->og_image); // image
        }
    	$countries = DB::table('countries')->select('country_name')->get();
    	$companyprofile = CompanyProfile::select('id','active_menus','company_id','url','title','description')->where('active_flag',1)->get()->sortBy('title');
    	//print_r($companyprofile);exit();
        return view('company.index',compact('companyprofile','countries'));
    }
    public function profile($companyurl)
    {
        $profile = CompanyProfile::select('company_id','meta_keywords','og_keywords','og_image')->where('url',$companyurl)->where('active_flag',1)->first();
        if(!$profile){
            return redirect('404-page');
        }
        $value = Company::find($profile->company_id);
            SEOMeta::setTitle($value->meta_title ?? $value->comp_name.' - Company Profile, Product Range, Locations & Major Industrial Contacts');
            SEOMeta::setDescription($value->meta_description ?? $value->comp_name.' - Get all the info about the company along with its product lines, company locations and major contacts');
            SEOMeta::addMeta('Profile:published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords ?? $value->comp_name);
            OpenGraph::setDescription($value->meta_description ?? $value->comp_name.' - Get all the info about the company along with its product lines, company locations and major contacts');
            OpenGraph::setTitle($value->meta_title ?? $value->comp_name.' - Company Profile, Product Range, Locations & Major Industrial Contacts');
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'Profile');
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
            
            TwitterCard::setType('summary_large_image'); // card
            TwitterCard::setTitle($value->meta_title ?? $value->comp_name.' - Company Profile, Product Range, Locations & Major Industrial Contacts');  // title
            TwitterCard::setSite('@plantautomatech'); // site
            TwitterCard::setUrl(url()->current()); // url
            TwitterCard::setDescription($value->meta_description ?? $value->comp_name.' - Get all the info about the company along with its product lines, company locations and major contacts'); // description 
            TwitterCard::setImage($value->og_image); // image
        // foreach ($seo as $value) {
            
            
        // }
      $countries = Country::all()->pluck('country_name', 'country_name')->prepend('Select Country', '');
     
    	$companyprofile = CompanyProfile::select('id','active_menus','company_id','url','title','description')->where('url',$companyurl)->where('active_flag',1)->get();
        $time = \Carbon\Carbon::now()->format('Y-m-d');

         $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();
        
        return view('company.profile',compact('companyprofile','countries','banner1314'));
    }
    public function product($companyurl)
    {
        $profile = CompanyProfile::select('company_id','meta_keywords','og_keywords','og_image')->where('url',$companyurl)->where('active_flag',1)->first();
        if(!$profile){
            return redirect('404-page');
        }
        $value = Company::find($profile->company_id);
            SEOMeta::setTitle($value->meta_title ?? $value->comp_name.' - Industrial Manufacturer Product Line');
            SEOMeta::setDescription($value->meta_description ?? 'All Products from the Industrial Manufacturer'. $value->comp_name. 'Get detailed techical specifications, industrial applications & product reviews.');
            SEOMeta::addMeta('products:published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription('All Products from the Industrial Manufacturer'. $value->comp_name. 'Get detailed techical specifications, industrial applications & product reviews.');
            OpenGraph::setTitle($value->meta_title ?? $value->comp_name.' - Industrial Manufacturer Product Line');
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'products');
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
            
            TwitterCard::setType('summary_large_image'); // card
            TwitterCard::setTitle($value->meta_title ?? $value->comp_name.' - Industrial Manufacturer Product Line');  // title
            TwitterCard::setSite('@plantautomatech'); // site
            TwitterCard::setUrl(url()->current()); // url
            TwitterCard::setDescription($value->meta_description ?? 'All Products from the Industrial Manufacturer'. $value->comp_name. 'Get detailed techical specifications, industrial applications & product reviews.'); // description 
            TwitterCard::setImage($value->og_image); // image
            
        
        $countries = Country::all()->pluck('country_name', 'country_name')->prepend('Select Country', '');
    	// $countries = DB::table('countries')->select('country_name')->get();
    	 $companyprofile = CompanyProfile::with('pproduct')->where('url',$companyurl)->where('active_flag',1)->get();
         $time = \Carbon\Carbon::now()->format('Y-m-d');

         $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();
        
    	//print_r($companyprofile);exit();
        return view('company.product',compact('companyprofile','countries','banner1314'));
    }
    public function productview($companyurl,$producturl)
    {
   
        $countries = Country::all()->pluck('country_name', 'country_name')->prepend('Select a Country', '');

    	// $countries = DB::table('countries')->select('country_name')->get();
    	$companyprofile = CompanyProfile::select('id','active_menus','company_id','url','title','description')->where('url',$companyurl)->where('active_flag',1)->get();
        if($companyprofile->count() ==0 ){
         return view('errors.404');
        
    }
    	$prods = Product::where('company_id',@$companyprofile->first()->company_id)->where('url',$producturl)->where('active_flag',1)->where('stage',1)->get();
       if($prods->count() ==0 ){
         return view('errors.404');
        // return view('company.profile');
        //return redirect()->route('supplierCompany');
       
    }
         foreach (@$prods as $value) {
            SEOMeta::setTitle($value->meta_title ?? ucwords(strtolower($value->title)) .' | '.ucwords(strtolower($value->category->name)) .' | '.ucwords(strtolower($value->company->comp_name)));
            SEOMeta::setDescription(ucfirst(strtolower($value->meta_description)));
            // SEOMeta::addMeta('Product:published_time', $value->created_at->toW3CString(), 'property');
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
            
            TwitterCard::setType('summary_large_image'); // card
            TwitterCard::setTitle($value->meta_title ?? ucwords(strtolower($value->title)) .' | '.ucwords(strtolower($value->category->name)) .' | '.ucwords(strtolower($value->company->comp_name)));  // title
            TwitterCard::setSite('@plantautomatech'); // site
            TwitterCard::setUrl(url()->current()); // url
            TwitterCard::setDescription(ucfirst(strtolower($value->meta_description))); // description 
            TwitterCard::setImage('https://industry.plantautomation-technology.com/suppliers/'.str_slug($value->company->comp_name).'/products/'.$value->big_image); // image
    
        }    
        $time = \Carbon\Carbon::now()->format('Y-m-d');

        $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();
       
        return view('company.productview',compact('companyprofile','countries','prods','banner1314'));
    }
    public function productKeywordSearch($url)
    {
        $seo = SearchKeyword::where('url',Request::segment('2'))->get();
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->meta_title);
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->og_title);
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'suppliers');
            OpenGraph::addProperty('locale', 'en_GB');
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
            TwitterCard::setType('summary_large_image'); // card
            TwitterCard::setTitle($value->meta_title);  // title
            TwitterCard::setSite('@plantautomatech'); // site
            TwitterCard::setUrl(url()->current()); // url
            TwitterCard::setDescription($value->og_description); // description 
            TwitterCard::setImage($value->og_image); // image
        }
        $query = str_replace(['-','&'], ' ', $url);
        $products = $this->products($query);
        $pcount =   $this->productsCount($query);
        $companies = $this->compaines($query);
        $compcount = $this->compainesCount($query);
        $articles =  $this->articles($query);
        $artcount=  $this->articlesCount($query);
        $pressrelease = $this->pressreleases($query);
        $presscount    = $this->pressreleasesCount($query);
        $keyword = SearchKeyword::where('url',$url)->first();
        if ($keyword !== null) {
            $keyword = $keyword->keyword;
        } else {
            $keyword = 'default_keyword'; // or any other default value you want to use
        }
        $countries = Country::all()->pluck('country_name', 'country_name')->prepend('Select Country', '');
      return view('company.product-keyword-search',compact('products','keyword','companies','compcount','pcount','articles','artcount','pressrelease','presscount','countries','url'));
    }
    public function pressrelease($companyurl)
    {
        $profile = CompanyProfile::select('company_id','meta_keywords','og_keywords','og_image')->where('url',$companyurl)->where('active_flag',1)->first();
        $value = Company::find($profile->company_id);
            SEOMeta::setTitle($value->meta_title ?? $value->comp_name.' - Latest News, Trends & Press Releases');
            SEOMeta::setDescription($value->meta_description ?? $value->comp_name.', Latest Press Releases, Industry Insights & Company news. Keep checking this space for updated & latest news & press releases from' .$value->comp_name);
            // SEOMeta::addMeta('pressrelease:published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->meta_description ?? $value->comp_name.', Latest Press Releases, Industry Insights & Company news. Keep checking this space for updated & latest news & press releases from' .$value->comp_name);
            OpenGraph::setTitle($value->comp_name.' - Latest News, Trends & Press Releases');
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'pressrelease');
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
            
            TwitterCard::setType('summary_large_image'); // card
            TwitterCard::setTitle($value->meta_title ?? $value->comp_name.' - Latest News, Trends & Press Releases');  // title
            TwitterCard::setSite('@plantautomatech'); // site
            TwitterCard::setUrl(url()->current()); // url
            TwitterCard::setDescription($value->meta_description ?? $value->comp_name.', Latest Press Releases, Industry Insights & Company news. Keep checking this space for updated & latest news & press releases from' .$value->comp_name); // description 
            TwitterCard::setImage($value->og_image); // image
        
        $countries = Country::all()->pluck('country_name', 'country_name')->prepend('Select Country', '');
    	// $countries = DB::table('countries')->select('country_name')->get();
    	$companyprofile = CompanyProfile::with('ppress')->where('url',$companyurl)->where('active_flag',1)->get();
        $time = \Carbon\Carbon::now()->format('Y-m-d');

        $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();
       
        return view('company.pressrelease',compact('companyprofile','countries','banner1314'));
    }
    public function catalogue($companyurl)
    {
        $profile = CompanyProfile::select('company_id','meta_keywords','og_keywords','og_image')->where('url',$companyurl)->where('active_flag',1)->first();
        $value = Company::find(@$profile->company_id);
        if ($value !== null) {
            SEOMeta::setTitle($value->meta_title ?? $value->comp_name.' - Product Catalogue, PDF Brochure, Technical Documentation');
            SEOMeta::setDescription(@$value->meta_title ?? $value->comp_name. 'Technical Catalogue, Documentation and PDFs for whole range of product options & variants. Get all the technical specifications for '. $value->comp_name. ' for a better decision. Raise '. $value->comp_name. ' Enquiry or RFQs.');
            SEOMeta::addMeta('catalogue:published_time', @$value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword(@$value->meta_keywords);
            OpenGraph::setDescription(@$value->meta_description ?? $value->comp_name. 'Technical Catalogue, Documentation and PDFs for whole range of product options & variants. Get all the technical specifications for'. $value->comp_name. 'for a better decision. Raise'. $value->comp_name. 'Enquiry or RFQs.');
            OpenGraph::setTitle(@$value->meta_title ??$value->comp_name.' - Product Catalogue, PDF Brochure, Technical Documentation');
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', @$value->og_keywords);
            OpenGraph::addProperty('type', 'catalogue');
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
            
            TwitterCard::setType('summary_large_image'); // card
            TwitterCard::setTitle($value->meta_title ?? $value->comp_name.' - Product Catalogue, PDF Brochure, Technical Documentation');  // title
            TwitterCard::setSite('@plantautomatech'); // site
            TwitterCard::setUrl(url()->current()); // url
            TwitterCard::setDescription($value->meta_description ?? $value->comp_name. 'Technical Catalogue, Documentation and PDFs for whole range of product options & variants. Get all the technical specifications for '. $value->comp_name. ' for a better decision. Raise '. $value->comp_name. ' Enquiry or RFQs.'); // description 
            TwitterCard::setImage($value->og_image); // image
        }
        $countries = Country::all()->pluck('country_name', 'country_name')->prepend('Select Country', '');
    	// $countries = DB::table('countries')->select('country_name')->get();
    	$companyprofile = CompanyProfile::with('pcatalog')->where('url',$companyurl)->where('active_flag',1)->get();
        if($companyprofile->count() ==0 ){
            return view('errors.404');
           
       }
        $time = \Carbon\Carbon::now()->format('Y-m-d');

        $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();
       
        return view('company.catalogue',compact('companyprofile','countries','banner1314'));
    }
    public function whitepaper($companyurl)
    {
       
        $time = \Carbon\Carbon::now()->format('Y-m-d');

        // $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();
       $profile = CompanyProfile::select('company_id','meta_keywords','og_keywords','og_image')->where('url',$companyurl)->where('active_flag',1)->first();
    
       $value = Company::find(@$profile->company_id); 
            SEOMeta::setTitle(@$value->meta_title ?? @$value->comp_name.' Technical White Papers & Product Documentation');
            SEOMeta::setDescription(@$value->meta_description ?? 'Access '.@$value->comp_name.' cutting edge White Papers, Technical Documentation and more.');
            
            if (@$value->created_at !== null) {
                SEOMeta::addMeta('whitepaper:published_time', @$value->created_at->toW3CString(), 'property');
            } 

            SEOMeta::addKeyword(@$value->meta_keywords);
            OpenGraph::setDescription($value->meta_description ?? 'Access '.@$value->comp_name.' cutting edge White Papers, Technical Documentation and more.');
            OpenGraph::setTitle(@$value->meta_title ?? @$value->comp_name.' Technical White Papers & Product Documentation');
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', @$value->og_keywords);
            OpenGraph::addProperty('type', 'whitepaper');
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([@$value->og_image, 'size' => 300]);
            
            TwitterCard::setType('summary_large_image'); // card
            TwitterCard::setTitle(@$value->meta_title ?? @$value->comp_name.' Technical White Papers & Product Documentation'); // site
            TwitterCard::setUrl(url()->current()); // url
            TwitterCard::setDescription(@$value->meta_description ?? 'Access '.@$value->comp_name.' cutting edge White Papers, Technical Documentation and more.'); // description 
            TwitterCard::setImage(@$value->og_image); // image
        
        $countries = Country::all()->pluck('country_name', 'country_name')->prepend('Select Country', '');
    	// $countries = DB::table('countries')->select('country_name')->get();
    	$companyprofile = CompanyProfile::with('pwp')->where('url',$companyurl)->where('active_flag',1)->get();
        if($companyprofile->count() ==0 ){
            return view('errors.404');
           
       }
       
        return view('company.whitepaper',compact('companyprofile','countries'));
  
    }

    public function video($companyurl)
    {
       $profile = CompanyProfile::select('company_id','meta_keywords','og_keywords','og_image')->where('url',$companyurl)->where('active_flag',1)->first();
       if(!$profile){
        return view('errors.404');
         }
   
       $value = Company::find($profile->company_id);
            SEOMeta::setTitle($value->meta_title ??  $value->comp_name.'- Company & Product Videos');
            SEOMeta::setDescription($value->meta_description ??  'Latest ' .$value->comp_name. ' product and company videos.');
            SEOMeta::addMeta('video:published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->meta_description ??  'Latest ' .$value->comp_name. ' product and company videos.');
            OpenGraph::setTitle($value->meta_title ??  $value->comp_name.'- Company & Product Videos');
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'video');
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
            
            TwitterCard::setType('summary_large_image'); // card
            TwitterCard::setTitle($value->meta_title ??  $value->comp_name.'- Company & Product Videos'); // site
            TwitterCard::setUrl(url()->current()); // url
            TwitterCard::setDescription($value->meta_description ??  'Latest ' .$value->comp_name. ' product and company videos.'); // description 
            TwitterCard::setImage($value->og_image); // image
        
        $countries = Country::all()->pluck('country_name', 'country_name')->prepend('Select Country', '');
    	// $countries = DB::table('countries')->select('country_name')->get();
          $videos = CompanyVideo::where('company_id',$profile->company_id)->where('active_flag',1)->where('stage',1)->get();
    	$companyprofile = CompanyProfile::with('pvideo')->where('url',$companyurl)->where('active_flag',1)->get();
        $time = \Carbon\Carbon::now()->format('Y-m-d');

        $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();
       
        return view('company.video',compact('companyprofile','countries','videos','banner1314'));
    }

 public function project($companyurl)
    {
            $seo = CompanyProfile::where('url',$companyurl)->where('active_flag',1)->get();
          if($seo->count() ==0 ){
                return view('errors.404');
            }  
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->company->comp_name.' - Product Catalogue, PDF Brochure, Technical Documentation');
            SEOMeta::setDescription($value->company->comp_name. 'Technical Catalogue, Documentation and PDFs for whole range of product options & variants. Get all the technical specifications for '. $value->company->comp_name. ' for a better decision. Raise '. $value->company->comp_name. ' Enquiry or RFQs.');
            SEOMeta::addMeta('catalogue:published_time', $value->created_at->toW3CString(), 'property');
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
            
            TwitterCard::setType('summary_large_image'); // card
            TwitterCard::setTitle($value->company->comp_name.' - Product Catalogue, PDF Brochure, Technical Documentation'); // site
            TwitterCard::setUrl(url()->current()); // url
            TwitterCard::setDescription($value->company->comp_name. 'Technical Catalogue, Documentation and PDFs for whole range of product options & variants. Get all the technical specifications for '. $value->company->comp_name. ' for a better decision. Raise '. $value->company->comp_name. ' Enquiry or RFQs.'); // description 
            TwitterCard::setImage('https://industry.plantautomation-technology.com/suppliers/'.str_slug($value->company->comp_name).'/'.$value->company->comp_logo); // image
        }
        $countries = Country::all()->pluck('country_name', 'country_name')->prepend('Select Country', '');
        // $countries = DB::table('countries')->select('country_name')->get();
        $companyprofile = CompanyProfile::with('pcatalog')->where('url',$companyurl)->where('active_flag',1)->get();
        return view('company.project',compact('companyprofile','countries'));
    }
     public function suppliers()
     {
        $time = \Carbon\Carbon::now()->format('Y-m-d');
        
          $sliders = Slider::where('active_flag', 1)->orderBy('id', 'desc')->get();

         $page = 1;
         $string = 'a';
          $companies = Company::where('active_flag',1)->where('comp_name','like','a%'); 
            
         // $pageCount = ceil($this->activeCount($companies)/25); 
         $suppliers = $companies->offset(0)->limit(40)->get();
        //  $suppliers1 = $companies->(companyproduct[0]->category->ParentCategory->id==22)->get();
        //  dd($suppliers1);
        $pageCount = ceil($companies->count()/40);  
      //  return   $pageCount;     
         $count = Company::where('active_flag',1)->where('comp_name','like','a%')->count();

         $time = \Carbon\Carbon::now()->format('Y-m-d');

         $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();
         //seo tags
          $seo = $companies->get();
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->meta_title ??   'The Global Industrial automation manufacturers and suppliers list - '.strtoupper($string) .' - '. $page);  
            SEOMeta::setDescription($value->meta_description ??   'Discover the global industrial automation manufacturers and suppliers list at plant automation technology');
            TwitterCard::setType('summary_large_image'); // card
            TwitterCard::setTitle($value->meta_title ??   'The Global Industrial automation manufacturers and suppliers list - '.strtoupper($string) .' - '. $page);  // title
            TwitterCard::setSite('@plantautomatech'); // site
            TwitterCard::setUrl(url()->current()); // url
            TwitterCard::setDescription($value->meta_description ??   'Discover the global industrial automation manufacturers and suppliers list at plant automation technology'); // description 
            TwitterCard::setImage($value->og_image); // image
          
        }
       $pageno = $page;

// companies which are not having products

    //    $companies1 = DB::table('companies')
    // ->leftJoin('products', 'companies.id', '=', 'products.company_id')
    // ->select('companies.id','companies.comp_name','products.id','products.title')->where('products.id', '=',NULL)->where('companies.active_flag', '=', 1)->get();
    // return $companies1;

 
        return view('company.supplier',compact('suppliers','pageno','pageCount','string','sliders','banner1314'));

    } 
    public function suppliersFilter($string,$page){
        
        $seo = SeoPage:: whereHas('seopages' , function($query) {
        $query->where('title',Request::segment('2'));})->where('active_flag',1)->get();
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description .' - '. $string.'/'.$page);
            SEOMeta::addMeta('Project:published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords); 
            OpenGraph::setDescription($value->og_description .' - '. $string.'/'.$page);
            OpenGraph::setTitle($value->og_title);
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'Project');
            OpenGraph::addProperty('locale', 'en_GB');
           // OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
            
            TwitterCard::setType('summary_large_image'); // card
            TwitterCard::setTitle($value->meta_title);  // title
            TwitterCard::setSite('@plantautomatech'); // site
            TwitterCard::setUrl(url()->current()); // url
            TwitterCard::setDescription($value->meta_description .' - '. $string.'/'.$page); // description 
            TwitterCard::setImage($value->og_image); // image
        }
        
        if(!is_numeric($page)){
             return view('errors.404');
        }

         $sliders = Slider::where('active_flag', 1)->orderBy('id', 'desc')->get();  
       $q = $string.'%';

       $offset = $page*25-25;
       if($string == '0-9'){

           $companies = Company::where('active_flag',1)->where('comp_name','regexp', '^[0-9]+'); 
           

       }else{
        $companies = Company::where('active_flag',1)->where('comp_name','like',$q);  
         
        }

    $pageCount = ceil($companies->count()/40);        
    $suppliers = $companies->offset($offset)->limit(40)->get();              

      $seo = $companies->get();
        foreach ($seo as $value) {
            SEOMeta::setTitle('Plant Automation Technology - Manufacturing Suppliers - '.strtoupper($string) .' - '. $page);                        
        }     

          $time = \Carbon\Carbon::now()->format('Y-m-d');

         $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();

    $pageno =$page;
    
    return view('company.supplier',compact('suppliers','pageCount','pageno','string','sliders','banner1314'));
    } 


     public function featuredsuppliers()
    {
         $seo = SeoPage:: whereHas('seopages' , function($query) {
        $query->where('title',Request::segment('1'));})->where('active_flag',0)->get();
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->meta_title);
            //SEOMeta::setDescription($value->meta_description);
         //   SEOMeta::addMeta('suppliers:published_time', $value->created_at->toW3CString(), 'property');
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
          $sliders = Slider::where('active_flag', 1)->orderBy('id', 'desc')->get();
          $pageno = 1;
          $string = 'a';
            $companies = Company::where('active_flag',0)->where('profile_type','FP')->where('comp_name','like','a%');   
          $pageCount = ceil($companies->count()/25); 
          $suppliers = $companies->offset(0)->limit(25)->get();
          $pageCount = ceil($companies->count()/25);        
          $count = Company::where('active_flag',0)->where('comp_name','like','a%')->count();
          $time = \Carbon\Carbon::now()->format('Y.m.d');
          $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();
        //dd($banner1314);
        return view('company.featured_supplier',compact('suppliers','pageno','pageCount','string','sliders','banner1314'));
    }


  public function featuredFilter($string,$page)
    {
          
        $seo = SeoPage:: whereHas('seopages' , function($query) {
        $query->where('title',Request::segment('2'));})->where('active_flag',1)->get();
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->meta_title);
            //SEOMeta::setDescription($value->meta_description);
         //   SEOMeta::addMeta('suppliers:published_time', $value->created_at->toW3CString(), 'property');
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

          $sliders = Slider::where('active_flag', 0)->orderBy('id', 'desc')->get();
          $q = $string.'%';

        $offset = $page*25-25;
        if($string == '0-9'){
                
                 $companies = Company::where('active_flag',0)->where('comp_name','regexp', '^[0-9]+');   
        }else{
            $companies = Company::where('active_flag',0)->where('comp_name','like',$q)->where('profile_type','FP');  
        }
          $pageCount = ceil($companies->count()/25);        
          $suppliers = $companies->offset($offset)->where('profile_type','FP')->limit(25)->get();
        $count = Company::where('active_flag',0)->where('comp_name','like','a%')->where('profile_type','FP')->count();
       $time = \Carbon\Carbon::now()->format('Y.m.d');
        $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->orderBy('id', 'DESC')->get();
        $pageno=$page;

       
        return view('company.featured_supplier',compact('suppliers','pageno','pageCount','string','sliders','banner1314'));
    }


    public function activeCount($companies){
        $page_count = 0;
        foreach ($companies->with('active_profiles')->get() as $key => $value) {                                
           if($value->active_profiles->isEmpty()){               
           }else{
             $page_count = $page_count +1;
            }              
        }
     return $page_count;
    }


      public function profile2($companyurl)
    {
       /* $seo = SeoCompany:: whereHas('seocompanypro' , function($query) use($companyurl) {
            $query->where('url', 'like', $companyurl);})->where('active_flag',1)->where('pages','company_profile')->get();*/
            $seo = CompanyProfile::where('url',$companyurl)->where('active_flag',1)->get();
            if($seo->count() ==0 ){
                return view('errors.404');
            }
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->company->comp_name.' - Company Profile, Product Range, Locations & Major Industrial Contacts');
            SEOMeta::setDescription($value->company->comp_name.' - Get all the info about the company along with its product lines, company locations and major contacts');
            SEOMeta::addMeta('Profile:published_time', $value->created_at->toW3CString(), 'property');
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
        $companyprofile = CompanyProfile::select('id','active_menus','company_id','url','title','description')->where('url',$companyurl)->where('active_flag',1)->get();
        //print_r($companyprofile);exit();
        return view('company.profile2',compact('companyprofile','countries'));
    }

  
}
