<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Form;
use Auth;
use App\Company;
use App\CmsPage;
use App\Banner;
use \Session;
use \DB;
use \Mail;
use App\SeoPage;
use Request;
use SEO;
use SEOMeta;
use OpenGraph;
use Twitter;
class CmsController extends Controller
{
 protected $model;
 protected $banner; 
    public function __construct(Form $model)
    {
        $this->model = $model;
        //$this->middleware('auth');
        $time = \Carbon\Carbon::now()->format('Y-m-d');
        $this->banner = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();
       
    }
    public function clientele()
    { 
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
           // OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
        }

        $clientele = Company::where('active_flag', 1)->inRandomOrder()->limit(52)->orderBy('id', 'desc')->get();
        $sliders=DB::select('CALL Get_sliders()');
        $banner1314 = $this->banner; 
        return view('cms/clientele' ,compact('clientele','sliders','banner1314'));
    }  

     public function eventsnewsletters()
    {       
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
           // OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
        }
       // $clientele = Company::where('active_flag', 1)->orderBy('id', 'desc')->take(12)->pluck('comp_logo');
        $event_newsletter = DB::table('newsletters')->where('active_flag',1)->where('type','eventnewsletters')->orderBy('id','desc')->latest()->limit(5)->get();
      
         $countries = DB::table('countries')->get();
        //print_r( $event_newsletter);die;
        $banner1314 = $this->banner; 
        return view('cms/eventsnewsletters',compact('event_newsletter','countries','banner1314'));
    }  

    public function aboutus()
    {       
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
           // OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
        }
       $cmspage = Cmspage::where('slug', 'aboutus')->get();
       $banner1314 = $this->banner; 
        return view('cms/cmspages' ,compact('cmspage','banner1314'));
    }  

     public function terms()
    {     
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
           // OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
        }
       $cmspage = Cmspage::where('slug', 'terms')->get();
       $banner1314 = $this->banner; 
        return view('cms/cmspages' ,compact('cmspage','banner1314'));
    }  

     public function sitemap()
    {       
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
           // OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
        }
       $cmspage = Cmspage::where('slug', 'sitemap')->get();
       $banner1314 = $this->banner; 
        return view('cms/cmspages' ,compact('cmspage','banner1314'));
    }  


 public function archive()
    {       

        

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
           // OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
        }
        $countries = DB::table('countries')->get();
         $event_newsletter = DB::table('newsletters')->where('active_flag',1)->where('type','eventnewsletters')->orderBy('id','desc')->get();
         $banner1314 = $this->banner; 
      //  print_r( $event_newsletter);exit;
        return view('cms/archive',compact('event_newsletter','countries','banner1314'));
    }  

    
public function eblastarchive()
    {       

        

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
           // OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
        }
        $countries = DB::table('countries')->get();
         $event_newsletter = DB::table('newsletters')->where('active_flag',1)->where('type','clientemailblast')->orderBy('id','desc')->get();
         $banner1314 = $this->banner; 
      //  print_r( $event_newsletter);exit;
        return view('cms/eblast',compact('event_newsletter','countries','banner1314'));
    }  


public function enewsarchive()
    {       

        

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
           // OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
        }
        $countries = DB::table('countries')->get();
         $event_newsletter = DB::table('newsletters')->where('active_flag',1)->where('type','e-newsletter')->orderBy('id','desc')->get();
         $banner1314 = $this->banner;
      //  print_r( $event_newsletter);exit;
        return view('cms/enewsarchive',compact('event_newsletter','countries','banner1314'));
    }  
    public function checkgooglecaptha($token)
   {
          $secretKey = '6Lcggi0aAAAAAIgbunCIyGtCXcEZk0uPu-gTX7xn';
          $url = 'https://www.google.com/recaptcha/api/siteverify';
          $data = ['secret'=>$secretKey,'response'=>$token];
          $options = [
              'http'=>[
                'header'=> 'Content-Type: application/x-www-form-urlencoded\r\n',
                'method'=>'POST',
                'content'=>http_build_query($data)
              ]
          ];
          $context = stream_context_create($options);
          $result = file_get_contents($url, false, $context);
          $resultJson = json_decode($result);
          return $resultJson->success;
    }



}