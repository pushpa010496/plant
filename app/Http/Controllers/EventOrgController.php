<?php 
namespace App\Http\Controllers;
use \Request;
use App\EventOrg;
use App\EventOrgArticle;
use App\EventOrgBrochure;
use App\EventOrgGallery;
use App\EventOrgInterview;
use App\EventOrgPressrealese;
use \Session;
use \DB;
use \Mail;
use Carbon\Carbon;
use App\SeoEventOrg;
use SEOMeta;
use OpenGraph;
use Twitter;
## or
use SEO;
class EventOrgController extends Controller
{
	protected $model;
    public function __construct(EventOrg $model)
    {
        $this->model = $model;
    }
    public function index($eventurl){
    	$countries = DB::table('countries')->select('country_name')->get();
    	$eventorg = EventOrg::where('url',$eventurl)->where('active_flag',1)->get();
        // print_r($eventprofiles);exit();
        return view('eventorg.index',compact('eventorg','countries'));
    }
    public function aboutevent($eventurl)
    {
         $seo = SeoEventOrg:: whereHas('seoevnorg' , function($query) use($eventurl) {
            $query->where('url', 'like', $eventurl);})->where('active_flag',1)->where('pages','about')->get();
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta(Request::segment(1).':published_time', $value->created_at->toW3CString(), 'property');
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
        }

    	$countries = DB::table('countries')->select('country_name')->get();
    	$eventorg = EventOrg::where('url',$eventurl)->where('active_flag',1)->get();
    	//print_r($eventprofile);exit();
        return view('eventorg.profile',compact('eventorg','countries'));
    }
    public function interviews($eventurl)
    {
         $seo = SeoEventOrg:: whereHas('seoevnorg' , function($query) use($eventurl) {
            $query->where('url', 'like', $eventurl);})->where('active_flag',1)->where('pages',Request::segment(3))->get();
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta(Request::segment(3).':published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->og_title);
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', Request::segment(3));
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
        }
    	$countries = DB::table('countries')->select('country_name')->get();
        $eventorg = EventOrg::select('*')->where('active_flag',1)->where('url',$eventurl)->get();
    	$interviews = EventOrgInterview::whereHas('eventorg', function($q) use($eventurl)
                { $q->where('url','=',$eventurl); })->where('active_flag',1)->get();
        return view('eventorg.interviews',compact('eventorg','interviews','countries'));
    }
    public function articles($eventurl)
    {
         $seo = SeoEventOrg:: whereHas('seoevnorg' , function($query) use($eventurl) {
            $query->where('url', 'like', $eventurl);})->where('active_flag',1)->where('pages',Request::segment(3))->get();
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta(Request::segment(3).':published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->og_title);
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', Request::segment(3));
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
        }
    	$countries = DB::table('countries')->select('country_name')->get();
        $eventorg = EventOrg::select('*')->where('active_flag',1)->where('url',$eventurl)->get();
        $articles = EventOrgArticle::whereHas('eventorg', function($q) use($eventurl)
                { $q->where('url','=',$eventurl); })->where('active_flag',1)->get();
        return view('eventorg.articles',compact('eventorg','articles','countries'));
    }
    public function pressrelease($eventurl)
    {$seo = SeoEventOrg:: whereHas('seoevnorg' , function($query) use($eventurl) {
            $query->where('url', 'like', $eventurl);})->where('active_flag',1)->where('pages',Request::segment(3))->get();
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta(Request::segment(3).':published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->og_title);
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', Request::segment(3));
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
        }

    	$countries = DB::table('countries')->select('country_name')->get();
        $eventorg = EventOrg::select('*')->where('active_flag',1)->where('url',$eventurl)->get();
        $pressreleases = EventOrgPressrealese::whereHas('eventorg', function($q) use($eventurl)
                { $q->where('url','=',$eventurl); })->where('active_flag',1)->get();
        return view('eventorg.pressrelease',compact('eventorg','pressreleases','countries'));
    }
    public function brochure($eventurl)
    {
        $seo = SeoEventOrg:: whereHas('seoevnorg' , function($query) use($eventurl) {
            $query->where('url', 'like', $eventurl);})->where('active_flag',1)->where('pages',Request::segment(3))->get();
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta(Request::segment(3).':published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->og_title);
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', Request::segment(3));
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
        }
        $countries = DB::table('countries')->select('country_name')->get();
        $eventorg = EventOrg::select('*')->where('active_flag',1)->where('url',$eventurl)->get();
        $brochures = EventOrgBrochure::whereHas('eventorg', function($q) use($eventurl)
                { $q->where('url','=',$eventurl); })->where('active_flag',1)->get();
        return view('eventorg.brochures',compact('eventorg','brochures','countries'));
    }
     public function gallery($eventurl)
    {
        $seo = SeoEventOrg:: whereHas('seoevnorg' , function($query) use($eventurl) {
            $query->where('url', 'like', $eventurl);})->where('active_flag',1)->where('pages',Request::segment(3))->get();
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta(Request::segment(3).':published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->og_title);
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', Request::segment(3));
            OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
        }
        $countries = DB::table('countries')->select('country_name')->get();
        $eventorg = EventOrg::select('*')->where('active_flag',1)->where('url',$eventurl)->get();
        $galleries = EventOrgGallery::whereHas('eventorg', function($q) use($eventurl)
                { $q->where('url','=',$eventurl); })->where('active_flag',1)->get();
        return view('eventorg.gallery',compact('eventorg','galleries','countries'));
    }
  
}
