<?php 
namespace App\Http\Controllers;
use Request;

use App\Tender;
use \Session;
use \DB;
use \Mail;
use Carbon\Carbon;
use App\Category;
use App\Banner;
use SEOMeta;
use OpenGraph;
use Twitter;
## or
use SEO;
use App\SeoPage;
use Artesaos\SEOTools\Facades\TwitterCard;

class TenderController extends Controller
{
	protected $model;
    public function __construct(Tender $model)
    {

        $this->model = $model;
    }
    public function index(){
        $seo = SeoPage:: whereHas('seopages' , function($query) {
        $query->where('title',Request::segment('1'));})->where('active_flag',1)->get();
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta('Tender:published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->og_title);
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'Tender');
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

    	$countrylist = DB::table('tenders')->join('countries','country_id','=','countries.id')->select('country_name','countries.id')->get()->unique();
        $countries = DB::table('countries')->select('country_name')->get();
        //print_r($countries);die;
         $time = \Carbon\Carbon::now()->format('Y-m-d');
    	$tenders = tender::where('active_flag',1)->orderBy('id','desc')->take(50)->get();
        // print_r($eventprofiles);exit();
       
        $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();
        $sliders=DB::select('CALL Get_sliders()');
        return view('tenders.index',compact('tenders','countries','countrylist','banner1314','sliders'));
    }

    public function tenderview($tenderurl){
         $time = \Carbon\Carbon::now()->format('Y-m-d');
        $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();

    $this->middleware('auth');
    $countries = DB::table('countries')->select('country_name')->get();
    $tenders = tender::where('active_flag',1)->where('tender_url',$tenderurl)->get();
        // print_r($eventprofiles);exit();
    foreach ($tenders as $value) {
            SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta('Tender:published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->og_title);
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'Tender');
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
            }     
            
        if(count($tenders) == 0){
            return view('errors.404');
        }
          if(\Auth::check()){
                 $data = [
          
            'email'=>\Auth::user()->email,
            'name'=>\Auth::user()->name,
            'title'=>$tenders->first()->title
            ];
        /*Admin mail*/
        Mail::send('emails.tender.admin', $data, function($message) use ($data) {
        $message->to('omplenquiry@ochre-media.com');
        //$message->cc(['naveen@ochre-media.com','sumit@ochre-media.com','sankar@ochre-media.com']);
       // $message->cc(['venkatasiva@ochre-media.com']);
            // $message->to('nagaraj@ochre-media.com');
        // $message->cc(['venkatasiva@ochre-media.com','ravi@ochre-media.com']);
        $message->subject('Tender viewed by '. $data['name']);
        
        });
                return view('tenders.tenderview',compact('tenders','countries','banner1314')); 
            }


      return redirect('tenders');
      
    }
    public function filter(){
    
   // DB::enableQueryLog();
//         $year=$_GET['year'];      
//          $country=explode(',', @$_GET['country']);
//          //$country= $_GET['country'];
//           $category=$_GET['category'];
//           $tenders = Tender::where(function($q) use($year,$country,$category)
//                 {   $q->select('*');  
//                     $q->whereIn(DB::raw("Year(issue_date)"), [$year]);                 
//                     $q->orWhereIn('country_id',$country);
//                     $q->orWhere('category_id',$category);
//                      })->where('active_flag',1)->get();
// //print_r(DB::getQueryLog());
//             return response(view('tenders.filter', compact('tenders'))->render());

    //   if(\Request::isMethod('GET')){
    //     return view('errors.404');
    // }  
        if(@$_GET['year'] == ''){
                return view('errors.404');
        } 
        
             $country_ck = (@$_GET['country']);        
             $country=explode(',', @$country_ck);         
             $year=$_GET['year'];

             $result = Tender::where('active_flag',1)->select('*')->whereIn(DB::raw("Year(issue_date)"), [$year]); 
            if($country_ck == null){   
          
                $tenders = $result->get();
            }else{
                 $tenders = $result->whereIn('country_id', $country)->get();                         
            }
                
            return response(view('tenders.filter', compact('tenders'))->render());
    }  
    public function countryFilter(){   
         if(@$_GET['year'] == ''){
                return view('errors.404');
        }  
        $year=$_GET['year'];        
        $result = Tender::where('active_flag',1)->select('*')->whereIn(DB::raw("Year(issue_date)"), [$year]); 
        $county = $result->distinct()->orderBy('country_id')->pluck('country_id');
        $countries = DB::table('countries')->select('id','country_name')->whereIn('id',$county)->get();    
        return $countries;
    }
      public function archive(){
         $time = \Carbon\Carbon::now()->format('Y-m-d');
        $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();
        
        $seo = SeoPage:: whereHas('seopages' , function($query) {
        $query->where('title',Request::segment('1'));})->where('active_flag',1)->get();
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta('Tender:published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->og_title);
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'Tender');
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
        }

        $countrylist = DB::table('tenders')->join('countries','country_id','=','countries.id')->select('country_name','countries.id')->get()->unique();
        $countries = DB::table('countries')->select('country_name')->get();
        //print_r($countries);die;
        $tenders = tender::where('active_flag',1)->limit(50)->orderByDesc('closing_date')->where('closing_date','<',Carbon::today())->get();
        // print_r($eventprofiles);exit();
        return view('tenders.archive',compact('tenders','countries','countrylist','banner1314'));
    }

}