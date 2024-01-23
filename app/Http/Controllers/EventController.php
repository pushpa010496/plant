<?php 
namespace App\Http\Controllers;
use Request;

use App\Event;
use App\EventProfile;
use App\Product;
use App\EventSpeaker;
use App\EventPressrealese;
use App\EventBrochure;
use App\EventGallery;
use App\Country; 
use \Session;
use \DB;
use \Mail;
use Carbon\Carbon;
use App\SeoPage;
use App\SeoEvent;
use SEOMeta;
use OpenGraph;
use Twitter;
use App\EventPartner;
use App\Banner;
use App\EventCategory;
## or
use SEO;
class EventController extends Controller
{
	protected $model;
    public function __construct(event $model)
    {
        $this->model = $model;
    }
    public function index(){
        $time = \Carbon\Carbon::now()->format('Y-m-d');
        $event_banner = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();
       
        $seo = SeoPage:: whereHas('seopages' , function($query) {
        $query->where('title',Request::segment('1'));})->where('active_flag',1)->get();
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
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
        }
        $countrylist = DB::table("events")                    
                    ->groupBy("country")
                    ->pluck('country','country');
        $countries = DB::table('countries')->select('country_name')->get();
             // $countries = Country::all()->pluck('country_name', 'id')->prepend('Select Country', '');
    	/*$eventprofiles = Event::whereHas('event', function($q)
                {   $q->select('*');
                    $q->whereDate('end_date', '>', Carbon::now());
                     })->where('active_flag',1)->get();*/
                     $eventprofiles = Event::where('active_flag',1)->where('start_date','>=',Carbon::today())->orderBy('start_date', 'ASC')->get()->take(8);
    	// print_r($eventprofiles);exit();
        $eventCat = EventCategory::where('active_flag',1)->where('parent_id',22)->get();             
              

        $time = \Carbon\Carbon::now()->format('Y.m.d');             
       $banner12 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->get();
        $banner34 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->get();
        $banner56 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->get();
        $banner78 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->get();
        $banner910 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->get();
        $banner1112 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->get();
        
        $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->get();
        
        $banner1516 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->get();
         $data_count = Event::where('active_flag',1)->where('start_date','>=',Carbon::today())->orderBy('start_date', 'ASC')->count();
          $sliders=DB::select('CALL Get_sliders()');
        return view('events.index',compact('eventprofiles','countries','countrylist','eventCat','banner1314','banner12','banner34','banner56','banner78','banner910','banner1112','banner1516','event_banner','data_count','sliders'));
    }
    public function more($offset){

         $eventprofiles = Event::where('active_flag',1)->where('start_date','>=',Carbon::today())->orderBy('start_date', 'asc')->offset($offset)->limit(8)->get();
         return response(view('events.loadmore', compact('eventprofiles'))->render());

    } 
    public function aboutevent($eventurl)
    {
         
         $eventprofile = Event::select('*')->where('event_url',$eventurl)->get();
        // print_r($eventprofil->name); die;
        if(count($eventprofile) == 0){
            return view('errors.404');
        }
        $seo = SeoEvent:: whereHas('seoe' , function($query) use($eventurl) {
            $query->where('event_url', 'like', $eventurl);})->where('active_flag',1)->where('pages','event_profile')->get();
        foreach ($eventprofile as $value) {
            //$eventprofil = Event::select('*')->where('event_url',$eventurl)->first();
            SEOMeta::setTitle($value->name.' | About Event | Plant Automation Technology');
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta(Request::segment(3).':published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->name.' | About Event | Plant Automation Technology');
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', Request::segment(3));
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
        }
    	$countries = DB::table('countries')->select('country_name')->get();
        return view('events.profile',compact('eventprofile','countries'));
    }
    public function speakers($eventurl)
    {
          $eventprofile = Event::select('*')->where('event_url',$eventurl)->get();
        $seo = SeoEvent:: whereHas('seoe' , function($query) use($eventurl) {
            $query->where('event_url', 'like', $eventurl);})->where('active_flag',1)->where('pages',Request::segment(3))->get();
        foreach ($eventprofile as $value) {
            SEOMeta::setTitle($value->name );
            SEOMeta::setDescription($value->meta_description .' | Speakers | Plant Automation Technology');
            SEOMeta::addMeta(Request::segment(3).':published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->name.' | Speakers | Plant Automation Technology');
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', Request::segment(3));
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
        }
    	$countries = DB::table('countries')->select('country_name')->get();
        // $countries = Country::all()->pluck('country_name', 'id')->prepend('Select Country', '');
      
        /*$eventprofile = Event::select('*')->where('active_flag',1)->where('event_url',$eventurl)->whereDate('end_date', '>', Carbon::now())->get();*/
    	$speakers = EventSpeaker::whereHas('event', function($q) use($eventurl)
                { $q->where('event_url','=',$eventurl); })->get();
        return view('events.speakers',compact('eventprofile','speakers','countries'));
    }
    public function exhibitors($eventurl)
    {
        $seo = SeoEvent:: whereHas('seoe' , function($query) use($eventurl) {
            $query->where('event_url', 'like', $eventurl);})->where('active_flag',1)->where('pages',Request::segment(3))->get();
         $eventprofile = Event::select('*')->where('event_url',$eventurl)->get();
        foreach ($eventprofile as $value) {
            SEOMeta::setTitle($value->name.' | exhibitors | Plant Automation Technology');
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta(Request::segment(3).':published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->name.' | exhibitors | Plant Automation Technology');
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', Request::segment(3));
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
        }
    	$countries = DB::table('countries')->select('country_name')->get();
        // $countries = Country::all()->pluck('country_name', 'id')->prepend('Select Country', '');
       
        //$eventprofile = Event::select('*')->where('active_flag',1)->where('event_url',$eventurl)->whereDate('end_date', '>', Carbon::now())->get();
        return view('events.exhibitors',compact('eventprofile','countries'));
    }
    public function pressrelease($eventurl)
    {
        $seo = SeoEvent:: whereHas('seoe' , function($query) use($eventurl) {
            $query->where('event_url', 'like', $eventurl);})->where('active_flag',1)->where('pages',Request::segment(3))->get();
             $eventprofile = Event::select('*')->where('event_url',$eventurl)->get();
        foreach ($eventprofile as $value) {
            SEOMeta::setTitle($value->name.' | Press Release | Plant Automation Technology');
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta(Request::segment(3).':published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->name.' | Press Release | Plant Automation Technology');
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', Request::segment(3));
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
        }
    	$countries = DB::table('countries')->select('country_name')->get();
        // $countries = Country::all()->pluck('country_name', 'id')->prepend('Select Country', '');
       /* $eventprofile = Event::select('*')->where('active_flag',1)->where('event_url',$eventurl)->whereDate('end_date', '>', Carbon::now())->get();*/
      
        $pressreleases = EventPressrealese::whereHas('event', function($q) use($eventurl)
                { $q->where('event_url','=',$eventurl); })->get();
        return view('events.pressrelease',compact('eventprofile','countries','pressreleases'));
    }
    public function brochure($eventurl)
    {
        $seo = SeoEvent:: whereHas('seoe' , function($query) use($eventurl) {
            $query->where('event_url', 'like', $eventurl);})->where('active_flag',1)->where('pages',Request::segment(3))->get(); 
        $eventprofile = Event::select('*')->where('event_url',$eventurl)->get();
        foreach ($eventprofile as $value) {
            SEOMeta::setTitle($value->name.' | Broucher | Plant Automation Technology');
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta(Request::segment(3).':published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->name.' | Broucher | Plant Automation Technology');
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', Request::segment(3));
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
        }
        $countries = DB::table('countries')->select('country_name')->get();
        // $countries = Country::all()->pluck('country_name', 'id')->prepend('Select Country', '');
        /*$eventprofile = Event::select('*')->where('active_flag',1)->where('event_url',$eventurl)->whereDate('end_date', '>', Carbon::now())->get();*/
       
        $brochures = EventBrochure::whereHas('event', function($q) use($eventurl)
                { $q->where('event_url','=',$eventurl); })->get();
        return view('events.brochure',compact('eventprofile','countries','brochures'));
    }
     public function gallery($eventurl)
    {
        $seo = SeoEvent:: whereHas('seoe' , function($query) use($eventurl) {
            $query->where('event_url', 'like', $eventurl);})->where('active_flag',1)->where('pages',Request::segment(3))->get();
        $eventprofile = Event::select('*')->where('event_url',$eventurl)->get();
        foreach ($eventprofile as $value) {
            SEOMeta::setTitle($value->name.' | Gallery | Plant Automation Technology');
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta(Request::segment(3).':published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->name.' | Gallery | Plant Automation Technology');
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', Request::segment(3));
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
        }
        $countries = DB::table('countries')->select('country_name')->get();
        // $countries = Country::all()->pluck('country_name', 'country_name')->prepend('Select Country', '');
       /* $eventprofile = Event::select('*')->where('active_flag',1)->where('event_url',$eventurl)->whereDate('end_date', '>', Carbon::now())->get();*/
       
        $galleries = EventGallery::whereHas('event', function($q) use($eventurl)
                { $q->where('event_url','=',$eventurl); })->get();
        return view('events.gallery',compact('eventprofile','countries','galleries'));
    }
    public function partners($eventurl)
    {
        $seo = SeoEvent:: whereHas('seoe' , function($query) use($eventurl) {
            $query->where('event_url', 'like', $eventurl);})->where('active_flag',1)->where('pages',Request::segment(3))->get(); 
        $eventprofile = Event::select('*')->where('event_url',$eventurl)->get();
        foreach ($eventprofile as $value) {
            SEOMeta::setTitle($value->name.' | Partners | Plant Automation Technology');
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta(Request::segment(3).':published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->name.' | Partners | Plant Automation Technology');
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', Request::segment(3));
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
        }
        $countries = DB::table('countries')->select('country_name')->get();
        // $countries = Country::all()->pluck('country_name', 'id')->prepend('Select Country', '');
        /*$eventprofile = Event::select('*')->where('active_flag',1)->where('event_url',$eventurl)->whereDate('end_date', '>', Carbon::now())->get();*/

       
        $partners = EventPartner::whereHas('event', function($q) use($eventurl)
                { $q->where('event_url','=',$eventurl); })->get();
        return view('events.partners',compact('eventprofile','countries','partners'));
    }
     public function filter(){
    
   // DB::enableQueryLog();
            $country_ck = (@$_GET['country']);
            $month_ck = (@$_GET['month']);
            $month = explode(',', @$month_ck);      
            $country=@$_GET['country'];
          
         //$country= $_GET['country'];


            @$year=$_GET['year'];

           if($year=="")
{
     $year='2020';
}
        
          
            $result = Event::where('active_flag',1)->where('end_date','>=', date('Y-m-d'))->whereIn(DB::raw("Year(start_date)"), [$year])->orderBy('start_date', 'asc'); 
                if($month_ck == 'null' && $country_ck == ''){   
                    $eventprofiles = $result->get();
                 }elseif($month_ck != "null" && $country_ck == "" || $country_ck == "null"){
                /*}elseif($month_ck != "" && $country_ck == ""){*/
                     $eventprofiles = $result->whereIn(DB::raw("Month(start_date)"), $month)->orderBy('start_date')->get();
                }elseif($month_ck == "null" && $country_ck != ""){                   
                     $eventprofiles = $result->where('country', $country)->get();                         
                }
                else{
                    $steptwo = $result->whereIn(DB::raw("Month(start_date)"), $month);
                     $eventprofiles = $steptwo->where('country', $country)->get();  

               }
          /*$eventprofiles = EventProfile::whereHas('event', function($q) use($month,$country,$year)
                {   $q->select('*');  
                    $q->whereIn(DB::raw("Month(start_date)"), [$month]);                 
                    $q->orwhereIn(DB::raw("Year(start_date)"), [$year]);
                    $q->orWhereIn('country',$country);
                     })->where('active_flag',1)->get();*/
//print_r(DB::getQueryLog());
            return response(view('events.filter', compact('eventprofiles'))->render());
    
    }  

         public function selectFilter(){
          if(@$_GET['event'] == ''){
            return view('errors.404');
            }     
            $input=$_GET['event'];
           
           $eventprofiles = Event::where('active_flag',1)->where('end_date','>=', date('Y-m-d'))->where('name', 'like', '%' . $input . '%')->get();
            
                     
            return response(view('events.filter', compact('eventprofiles'))->render());
    
    }
     public function categoryFilter($catid){

            $eventprofiles = Event::where('active_flag',1)->where('end_date','>=', date('Y-m-d'))->where('cat_id',$catid)->get(); 
                 

            return response(view('events.filter', compact('eventprofiles'))->render());
    
    }
        public function monthFilter(){
        
         $year=$_GET['year'];                        
         $result = Event::where('active_flag',1)->where('end_date','>=', date('Y-m-d'))->whereIn(DB::raw("Year(start_date)"), [$year]); 

         $months =  $result->select(DB::raw("Month(start_date) month"))->distinct()->orderBy('month')->get();
       
         $monthlist=[];
         foreach($months as $val){
            $monthlist[]=$val->month;
         }      
         // countries
          $event = Event::where('active_flag',1)->where('end_date','>=', date('Y-m-d'))->whereIn(DB::raw("Year(start_date)"), [$year]); 

         $countries = $event->select('country')->whereIn(DB::raw("Month(start_date)"), $monthlist)->distinct()->orderBy('country')->get();

         
         return [
            'month_list'=>$months,
            'countries'=>$countries
         ];
    }
    public function countryFilter(){
       if(@$_GET['year'] == ''){
        return view('errors.404');
    }         
    $year=$_GET['year'];
    $month = explode(',', $_GET['month']);   
    $result = Event::where('active_flag',1)->where('end_date','>=', date('Y-m-d'))->whereIn(DB::raw("Year(start_date)"), [$year]);                 
    $countries = $result->select('country')->whereIn(DB::raw("Month(start_date)"), $month)->distinct()->orderBy('country')->get();
    return $countries;
}
public function geturlinfo(Request $request,$short_urlid)
    {
               $url_info=DB::table('tracklinks')->select('*')->where('shorturl_id',$short_urlid)->first();
           // $url_info=DB::table('tracklinks')->select('*')->first();
              //  print_r($url_info);

               

                if( $url_info){
                       $urlshortcode=$url_info->shorturl_id;
                       $clientip=$request->getClientIp();
                       $oriurl=$url_info->oriurl;
                       $titleid=$url_info->titleid;
                       $cliks_count=$url_info->cliks_count;
                       $newclick=$cliks_count+1;
                       $date=date('Y-m-d');
                       DB::table('trackurl_info')->insert([
                        'shorturl_id' => $urlshortcode,
                        'titleid' => $titleid, 
                        'client_ip' =>  $clientip,
                        'created_at'=>$date,
                        'updated_at'=>$date]
                    );

                             /* DB::table('tracklinks')
                             ->where('shorturl_id',$short_urlid)
                             ->update(['cliks_count' => $newclick]);
*/
                    return redirect($oriurl);  
                
                  }





    }
       public function archive(){

        $seo = SeoPage:: whereHas('seopages' , function($query) {
        $query->where('title',Request::segment('1'));})->where('active_flag',1)->get();
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
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
        }
        $countrylist = DB::table("events")                    
                    ->groupBy("country")
                    ->pluck('country','country');
      $countries = DB::table('countries')->select('country_name')->get();
        /*$eventprofiles = Event::whereHas('event', function($q)
                {   $q->select('*');
                    $q->whereDate('end_date', '>', Carbon::now());
                     })->where('active_flag',1)->get();*/
                     /*$eventprofiles = Event::where('active_flag',1)->where('start_date','<',Carbon::createFromDate(2020,1,01)->subDays(330)->toDateTimeString())->orderby('start_date','desc')->get();*/

                     $from = date("Y-m-d", strtotime("-2 years"));
                    $to =date("Y-m-d");

                    $eventprofiles =Event::whereBetween('start_date', [$from, $to])->orderby('start_date','desc')->get()->take(8);
        // print_r($eventprofiles);exit();
        $time = \Carbon\Carbon::now()->format('Y.m.d');             
       $banner12 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->get();
        $banner34 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->get();
        $banner56 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->get();
        $banner78 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->get();
        $banner910 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->get();
        $banner1112 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->get();
        
        $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->get();
        
        $banner1516 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->get();
         $data_count =Event::whereBetween('start_date', [$from, $to])->orderby('start_date','desc')->count();
        return view('events.archive',compact('eventprofiles','countries','countrylist','banner1314','banner12','banner34','banner56','banner78','banner910','banner1112','banner1516','data_count'));
    }
     public function morearchive($offset){

          $from = date("Y-m-d", strtotime("-2 years"));
        $to =date("Y-m-d");

        $eventprofiles =Event::whereBetween('start_date', [$from, $to])->offset($offset)->orderby('start_date','desc')->limit(8)->get();

    
         return response(view('events.archive_loadmore', compact('eventprofiles'))->render());

    } 
}
