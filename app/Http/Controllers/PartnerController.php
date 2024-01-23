<?php 

namespace App\Http\Controllers;

use Request;



use App\Partner;

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

use App\Event;



class PartnerController extends Controller

{
    protected $banner; 
	protected $model;

    public function __construct(Partner $model)

    {

        $this->model = $model;
        $time = \Carbon\Carbon::now()->format('Y-m-d');
        $this->banner = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();
       

    }

    public function index(){

        $seo = SeoPage:: whereHas('seopages' , function($query) {

        $query->where('title',Request::segment('1'));})->where('active_flag',1)->get();

        foreach ($seo as $value) {

            SEOMeta::setTitle($value->meta_title);

            SEOMeta::setDescription($value->meta_description);

            SEOMeta::addMeta('partner:published_time', $value->created_at->toW3CString(), 'property');

            SEOMeta::addKeyword($value->meta_keywords);

            OpenGraph::setDescription($value->og_description);

            OpenGraph::setTitle($value->og_title);

            OpenGraph::setUrl(url()->current());

            SEOMeta::setCanonical(url()->current());

            OpenGraph::addProperty('keyword', $value->og_keywords);

            OpenGraph::addProperty('type', 'partner');

            OpenGraph::addProperty('locale', 'en_GB');

            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

            OpenGraph::addImage([$value->og_image, 'size' => 300]);

        }

       /* $eventprofile = Event::select('*')->where('active_flag',1)->where('event_url',$eventurl)->whereDate('end_date', '>', Carbon::now())->get();*/

    	$countries = DB::table('countries')->select('country_name')->get();

    	$partners = Partner::where('active_flag',1)->get();

        $banner1314 = $this->banner; 

        return view('partners.index',compact('partners','countries','banner1314'));

    }



}