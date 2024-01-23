<?php 
namespace App\Http\Controllers;
use Request;

use App\Project;
use \Session;
use \DB;
use \Mail;
use Carbon\Carbon;
use SEOMeta;
use OpenGraph;
use Twitter;
use App\Banner;
## or
use SEO;
use App\SeoPage;
use Artesaos\SEOTools\Facades\TwitterCard;

class ProjectController extends Controller
{
	protected $model;
    public function __construct(Project $model)
    {
        $this->model = $model;
    }
    public function index(){
        $seo = SeoPage:: whereHas('seopages' , function($query) {
        $query->where('title',Request::segment('1'));})->where('active_flag',1)->get();
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
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
            
            TwitterCard::setType('summary_large_image'); // card
            TwitterCard::setTitle($value->meta_title);  // title
            TwitterCard::setSite('@plantautomatech'); // site
            TwitterCard::setUrl(url()->current()); // url
            TwitterCard::setDescription($value->meta_description); // description 
            TwitterCard::setImage($value->og_image); // image
            
        }

    	$countrylist = DB::table("projects")                    
                    ->groupBy("country")
                    ->pluck('country','country');
          $countries = DB::table('countries')->select('country_name')->get();          

    	$projects = Project::where('active_flag',1)->orderBy('id','desc')->get();
        $sliders=DB::select('CALL Get_sliders()'); 
        $time = \Carbon\Carbon::now()->format('Y-m-d');
        $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();
        // print_r($eventprofiles);exit();
        if(count($projects) == 0){
            return view('errors.404');
        }
        return view('projects.index',compact('projects','countrylist','countries','sliders','banner1314'));
    }

    public function projectview($projecturl)
    {

      $countries = DB::table('countries')->select('country_name')->get();
      $projects = Project::where('active_flag',1)->where('project_url',$projecturl)->get();
      $realated_projects = Project::where('active_flag','1')->where('image','!=','')->take(50)->get()->random(6);
        // print_r($eventprofiles);exit();
       foreach ($projects as $value) {
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
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
            
            TwitterCard::setType('summary_large_image'); // card
            TwitterCard::setTitle($value->meta_title);  // title
            TwitterCard::setSite('@plantautomatech'); // site
            TwitterCard::setUrl(url()->current()); // url
            TwitterCard::setDescription($value->meta_description); // description 
            TwitterCard::setImage($value->og_image); // image
            
            
            
            
            }     
            if(count($projects) == 0){
            return view('errors.404');
        }
        return view('projects.projectview',compact('projects','countries','realated_projects'));  
    }
    public function filter(){
    
//    // DB::enableQueryLog();
//         $year=$_GET['year'];      
//          $country=explode(',', @$_GET['country']);
//          //$country= $_GET['country'];
//           $category=$_GET['category'];
//           $projects = Project::where(function($q) use($year,$country,$category)
//                 {   $q->select('*');  
//                     $q->whereIn(DB::raw("Year(date)"), [$year]);                 
//                     $q->orWhereIn('country',$country);
//                     $q->orWhere('category_id',$category);
//                      })->where('active_flag',1)->get();
// //print_r(DB::getQueryLog());
//             return response(view('projects.filter', compact('projects'))->render());
        if(@$_GET['year'] == ''){
            return view('errors.404');
        } 
        
             $country_ck = (@$_GET['country']);        
             $country=explode(',', @$country_ck);  
                    
             $year=$_GET['year'];
             $result = Project::where('active_flag',1)->select('*')->whereIn(DB::raw("Year(date)"), [$year]); 
                if($country_ck == 'null'){   
                    $projects = $result->get();
                }else{
                     $projects = $result->whereIn('country', $country)->get();                         
                }
                
            return response(view('projects.filter', compact('projects'))->render());
    
    }  
     public function countryFilter(){
        
        if(@$_GET['year'] == ''){
                return view('errors.404');
        } 
         $year=$_GET['year'];
        
        $result = Project::where('active_flag',1)->select('*')->whereIn(DB::raw("Year(date)"), [$year]);                
        $countries = $result->select('country')->distinct()->orderBy('country')->get();
        return $countries;
    }
    public function archive(){
        $seo = SeoPage:: whereHas('seopages' , function($query) {
        $query->where('title',Request::segment('1'));})->where('active_flag',1)->get();
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
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
            TwitterCard::setType('summary_large_image'); // card
            TwitterCard::setTitle($value->meta_title);  // title
            TwitterCard::setSite('@plantautomatech'); // site
            TwitterCard::setUrl(url()->current()); // url
            TwitterCard::setDescription($value->meta_description); // description 
            TwitterCard::setImage($value->og_image); // image
        }

        $countrylist = DB::table("projects")                    
                    ->groupBy("country")
                    ->pluck('country','country');
          $countries = DB::table('countries')->select('country_name')->get();          

        $projects = Project::where('active_flag',1)->where('date','<',Carbon::today())->get();
        // print_r($eventprofiles);exit();
        return view('projects.archive',compact('projects','countrylist','countries'));
    }
}