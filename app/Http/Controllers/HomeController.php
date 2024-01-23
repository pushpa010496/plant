<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Form;
use Auth;
use App\Testimonial;
use App\News;
use App\Pressrelease;
use App\Partner;
use App\Company;
use App\Article;
use App\Interview;
use App\Whitepaper;
use App\Event;
use App\Project;
use App\CompanyCatalog;
use App\Product;
use App\Tender;
use App\Slider;
use Illuminate\Http\Request;
use \Session;
use \DB;
use \Mail;
use App\SeoPage;
use SEOMeta;
use OpenGraph;
use Twitter;
use Artesaos\SEOTools\Facades\TwitterCard;
use App\CompanyProfile;
use App\Banner;
## or
use SEO;
use Analytics;
use Spatie\Analytics\Period;
use App\User;
use App\Xmlpharse;

class HomeController extends Controller
{
 protected $model;
    public function __construct(Form $model)
    {
        $this->model = $model;
        //$this->middleware('auth');
    }
    public function index()
    {

        /*$analytics = Analytics::fetchMostVisitedPages(Period::days(7));
        print_r($analytics); die;*/
        //$seo = SeoPage:: whereHas('seopages' , function($query) {
        //$query->where('title','home');})->where('active_flag',1)->get();
        
        $seo = DB::table('seo_pages')
            ->join('pages', 'seo_pages.page_id', '=', 'pages.id')
            ->select('seo_pages.*')
            ->where('pages.title', '=', 'home')
            ->where('seo_pages.active_flag', '=', 1)
            ->get();
        
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->og_title);
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'website');
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

          

         $testimonials=DB::SELECT('CALL Get_testimonials()');       
         $news = News::where('active_flag', 1)->orderBy('id', 'desc')->limit(6)->get();
         $pressreleases=DB::SELECT('CALL Get_pressrelease()'); 
       
         $partners_count = Partner::where('home_logo','!=',null)->where('active_flag', 1)->count();


         $partners=DB::SELECT('CALL Get_partners()');

         $clientele=DB::SELECT('CALL Get_client()');

         $articles=DB::SELECT('CALL Get_articles()');
         
         $interviews=DB::SELECT('CALL Get_interviews()');

         $whitepapers=DB::SELECT('CALL Get_whitepapers()');

         $events=DB::SELECT('CALL Get_events()');

         $projects=DB::SELECT('CALL Get_projects()');

         $tenders=DB::SELECT('CALL Get_tenders()');

        $companyprofile=DB::SELECT('CALL Get_companyprofile()');
         
        $catalogs = CompanyCatalog::where('active_flag', 1)->orderBy('id', 'desc')->take(6)->get();
       
        // $product = Company::whereHas('companyproduct',function ($q){
        //     $q->take(2);
            
        //  })->where('profile_type','paid')->where('active_flag', 1)->get();
         
         //Products new login
                 
         $product = Company::where('profile_type','paid')->where('active_flag', 1)->get()->random(8);
             //dd($product);
        $productluanches=DB::SELECT('CALL Get_productluanches');
      
       
        $products = $product;
        // dd($products);
         $time = \Carbon\Carbon::now()->format('Y-m-d');
         $sliders=DB::select('CALL Get_sliders()');
        $banner12 = Banner::where('active_flag','=', 1)->where('to_date', '>=' , $time)->where('from_date', '<=' , $time)->get();
        $banner34 = Banner::where('active_flag','=', 1)->where('position',3)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->get();
        $banner56 = Banner::where('active_flag','=', 1)->where('to_date', '>=' , $time)->where('from_date', '<=' , $time)->get();
        $banner78 = Banner::where('active_flag','=', 1)->where('to_date', '>=' , $time)->where('from_date', '<=' , $time)->get();
        $banner910 = Banner::where('active_flag','=', 1)->where('to_date', '>=' , $time)->where('from_date', '<=' , $time)->get();
        $banner1112 = Banner::where('active_flag','=', 1)->where('to_date', '>=' , $time)->where('from_date', '<=' , $time)->get();
        $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>=' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();
        $banner1516 = Banner::where('active_flag','=', 1)->where('to_date', '>=' , $time)->where('from_date', '<=' , $time)->get();
       //$sliders = Slider::where('active_flag', 1)->orderBy('id', 'desc')->get(); 
        return view('home/index',compact('testimonials','news','pressreleases','partners','clientele','articles','interviews','whitepapers','events','projects','catalogs','products','sliders','banner1314','banner12','banner34','banner56','banner78','banner910','banner1112','banner1516','companyprofile','tenders','partners_count','productluanches'));
    }  

    //Events load more
    public function more($offset){
        $data = Partner::where('home_logo','!=','')->where('active_flag', 1)->orderBy('id','desc')->offset($offset)->limit(6)->pluck('home_logo','id');      
        return response(view('home.loadmore', compact('data'))->render());
    }
    public function ads()
    {
        $testimonials=DB::SELECT('CALL Get_testimonials()'); 
        return view('forms.advertise',compact('testimonials'));
    }
    
    public function test(Reqquest $request)
    {
        dd($request->all());
    }


}