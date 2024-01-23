<?php
namespace App\Http\Controllers;

/*use App\Http\Requests;*/
use App\Http\Controllers\Controller;

use App\Form;
use App\Getlistsubscribe;
use Auth;
use App\Testimonial;
use Illuminate\Http\Request;
/*use Request;*/
use \Session;
use \DB;
use \Mail;
use App\Country;
use Carbon\Carbon;
use App\Event;
use App\EventCategory;
use App\Banner;
use App\Company;
use App\CompanyProfile;
use App\SeoPage;
use SEO;
use SEOMeta;
use OpenGraph;
use Twitter;
Use Redirect;
use App\Http\Requests\CommanRequest;
use Artesaos\SEOTools\Facades\TwitterCard;


class FormController extends Controller
{
    protected $banner; 
 protected $model;
    public function __construct(Form $model)
    {
        $this->model = $model;
        $time = \Carbon\Carbon::now()->format('Y-m-d');
        $this->banner = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();
       
        //$this->middleware('auth');
    }
    public function register()
    {
         $sliders=DB::select('CALL Get_sliders()');
         $banner1314 = $this->banner; 
        return view('forms.register',compact('sliders','banner1314'));
    }

    public function EnewsLetter()
    {
        $enews_letter = DB::table('newsletters')->where('active_flag',1)->where('type','e-newsletter')->orderBy('created_at','desc')->first();
             $sliders=DB::select('CALL Get_sliders()');
             $banner1314 = $this->banner; 
        //print_r($enews_letter); die;
         return view('forms.enews_letter',compact('enews_letter','sliders','banner1314'));
    }
    public function registration()
    {
        $seo = SeoPage:: whereHas('seopages' , function($query) {
        $query->where('title',\Request::segment('1'));})->where('active_flag',1)->get();
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
        $countries = DB::table('countries')->get();
        $categories = DB::table('categories')->where('active_flag',1)->where('parent_id',22)->get();

        // Enews letter
         $enews_letter =  DB::table('newsletters')->where('active_flag',1)->where('type','e-newsletter')->orderBy('id','desc') ->latest()->limit(5)->get();
 $sliders=DB::select('CALL Get_sliders()');
 $banner1314 = $this->banner; 
        return view('forms.registration',compact('countries','categories','enews_letter','sliders','banner1314'));
    }
    public function storeregistration(Request $request)
    {
       if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
        } else {
             $captcha = false;
        }
        if($this->checkgooglecaptcha($captcha)){
        if($request->isMethod('post')){
         $form = new Form();
        $form->name = $request->firstname .' '.$request->lastname;
        $form->email = $request->input("email");
        $form->company = $request->input("company");
        $form->title = $request->input("cf_leads_jobtitle");
        $form->phone = $request->input("mobile");
        $form->category = $request->input("category");
        $form->country = $request->input("cf_leads_countryname");
        $form->message = $request->input("description");
        $form->newsletter = $request->input("newsletter");
        $form->agree = $request->input("agree");
        $form->promotions = $request->input("promotions");
        $form->type = $request->input("registration");
        $form->save();
        /*Send email admin*/  
        $data = [
            'name'=>$request->firstname .' '.$request->lastname,
            'first_name'=>$request->firstname,
            'last_name'=>$request->lastname,
            'email'=>$request->input("email"),
            'company'=>$request->input("company"),
            'phone'=>$request->input("mobile"),
            'category'=>$request->input("category"),
            'country'=>$request->input("cf_leads_countryname"),
            'description'=>$request->input("description"),
            'newsletter'=>$request->input("newsletter"),
            'agree'=>$request->input("agree"),
            'promotions'=>$request->input("promotions")];
            //$this->bitrixLeadApi($data);
        /*Admin mail*/
        Mail::send('emails.registration.admin', $data, function($message) use ($data) {

            $message->to(trans('messages.subscribe-email'));
        $message->subject('New User Signed Up for Plant Automation Technology!');
        });
        /*Client Mail*/
         Mail::send('emails.registration.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject('Welcome to Plant Automation Technology!');
        });
        Session::flash('message_type', 'success');
        Session::flash('message_icon', 'checkmark');
        Session::flash('message_header', 'Success');
        Session::flash('message', "Success! Your registration has been successfully submitted! ");
        }
        $event_newsletter = DB::table('newsletters')->where('active_flag',1)->where('type','eventnewsletters')->orderBy('id','desc')->latest()->limit(5)->get();
        $countries = DB::table('countries')->get();
        return view('cms/eventsnewsletters',compact('event_newsletter','countries'));
    }else
    {}}
    public function postrequirement()
    {
        $seo = SeoPage:: whereHas('seopages' , function($query) {
        $query->where('title',\Request::segment('1'));})->where('active_flag',1)->get();
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
        $countries = DB::table('countries')->get();
        $banner1314 = $this->banner; 
        return view('forms.postrequirement',compact('countries','banner1314'));
    }
    public function storepostrequirement(Request $request)
    {
        if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
        } else {
             $captcha = false;
        }
        if($this->checkgooglecaptcha($captcha)){
        $form = new Form();
        $form->name = $request->firstname .' '.$request->lastname;
        $form->email = $request->input("email");
        $form->company = $request->input("company");
        $form->phone = $request->input("mobile");
        $form->message = $request->input("description");
        $form->type = "post-requirement";
        $form->title = $request->input("cf_leads_jobtitle");
        $form->country = $request->input("cf_leads_countryname");
        $form->save();
        /*Send email admin*/  
        $data = [
            'name'=> $request->firstname .' '.$request->lastname,
            'first_name'=>$request->firstname,
            'last_name'=>$request->lastname,
            'email'=>$request->input("email"),
            'type'=>'Postrequirement',
            'company'=>$request->input("company"),
            'phone'=>$request->input("mobile"),
            'country'=>$request->input("cf_leads_countryname"),
            'description'=>$request->input("description")];
            //$this->bitrixLeadApi($data);
        /*Admin mail*/
        Mail::send('emails.postrequirement.admin', $data, function($message) use ($data) {
            // $message->to(trans('messages.enquiry-email'));
            $message->to(trans('chris@ochre-media.com'));
            $message->cc(trans('advertise@ochre-media.com'));
        $message->subject('A User has posted requirement on Plant Automation Technology!');
        });
        /*Client Mail*/
         Mail::send('emails.postrequirement.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject('Plant Automation Technology | Post your Requirement');
        });
        Session::flash('message_type', 'success');
        Session::flash('message_icon', 'checkmark');
        Session::flash('message_header', 'Success');
        Session::flash('message', "Success! You have successfully posted your requirement.");
        return view('forms.postrequirement-success');
      }else{
        return redirect()->to('/');
      }
    }
     public function postevent()
    {
        $seo = SeoPage:: whereHas('seopages' , function($query) {
        $query->where('title',\Request::segment('1'));})->where('active_flag',1)->get();
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
        $countries = DB::table('countries')->get();
        $banner1314 = $this->banner; 
        return view('forms.postevent',compact('countries','banner1314'));
    }
    public function storepostevent(Request $request)
    {
       if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
        } else {
             $captcha = false;
        }
        if($this->checkgooglecaptcha($captcha)){
        if($request->isMethod('post')){
        $url = $request->url;
        $form = new Form();
        $form->event_name = $request->input("cf_leads_eventname");
        $form->title  = $request->input("cf_leads_jobtitle");
        $form->email = $request->input("email");
        $form->event_venue = $request->input("cf_leads_eventvenue");
        $form->country = $request->input("cf_leads_countryname");
        $form->event_address = $request->input("cf_leads_eventaddress");
        $form->start_date = date("Y-m-d H:i:s",strtotime($request->input("cf_leads_startdate")));       
        $form->end_date = date("Y-m-d H:i:s",strtotime($request->input("cf_leads_enddate")));        
        $form->organiser = $request->input("cf_leads_organiser");
        $form->web_link = $request->input("cf_leads_weblink");
        $form->type = "postevent";
    
        $form->save();
        /*Send email admin*/  
        $data = [
            'event_name'=>$request->input("cf_leads_eventname"),
            'email'=>$request->input("email"),
            'event_venue'=>$request->input("cf_leads_eventvenue"),
            'country'=>  $request->input("cf_leads_countryname"),
            'event_address'=>$request->input("cf_leads_eventaddress"),
            'start_date'=>$request->input("cf_leads_startdate"),
            'end_date'=>$request->input("cf_leads_enddate"),
            'organiser'=>$request->input("cf_leads_organiser"),
            'url'       =>$url,
            'web_link'=>$request->input("cf_leads_weblink")];
        /*Admin mail*/
        Mail::send('emails.postevent.admin', $data, function($message) use ($data) {
             $message->to(trans('messages.subscribe-email'));
        
           //  $message->to('pushpalatha@ochre-media.com');
        $message->subject('New Event Posting by '.$data['event_name'].'');
        });
        /*Client Mail*/
         Mail::send('emails.postevent.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject($data['event_name'].' - Event Posted | PlantAutomation-Technology');
        });
        Session::flash('message_type', 'success');
       }
       
       $countrylist = DB::table("events")                    
                    ->groupBy("country")
                    ->pluck('country','country');
        $countries = DB::table('countries')->select('country_name')->get();
        $eventprofiles = Event::where('active_flag',1)->where('start_date','>=',Carbon::today())->orderBy('start_date', 'ASC')->get()->take(8);
        $eventCat = EventCategory::where('active_flag',1)->where('parent_id',22)->get();             
              

       $time = \Carbon\Carbon::now()->format('Y.m.d');             
       $banner12 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->get();
        $banner34 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->get();
        $banner56 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->get();
        $banner78 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->get();
        $banner910 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->get();
        $banner1112 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->get();
        
        $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->get();
        $event_banner = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();
        $banner1516 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->get();
         $data_count = Event::where('active_flag',1)->where('start_date','>=',Carbon::today())->orderBy('start_date', 'ASC')->count();
          $sliders=DB::select('CALL Get_sliders()');
       return view('events.index',compact('eventprofiles','countries','countrylist','eventCat','banner1314','banner12','banner34','banner56','banner78','banner910','banner1112','banner1516','event_banner','data_count','sliders'));
    }else
    {}}
    public function mediapack()
    {
        $seo = SeoPage:: whereHas('seopages' , function($query) {
        $query->where('title',\Request::segment('1'));})->where('active_flag',1)->get();
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
        $countries = DB::table('countries')->get();
        $banner1314 = $this->banner; 
        return view('forms.mediapack',compact('countries','banner1314'));
    }
    public function storemediapack(Request $request)
    {
        if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
        } else {
             $captcha = false;
        }
        if($this->checkgooglecaptcha($captcha) == true){
        $form = new Form();
        $form->name = $request->firstname.' '.$request->lastname;
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->email = $request->input("email");
        $form->company = $request->input("company");
        $form->phone = $request->input("mobile");
        $form->country = $request->input("cf_leads_countryname");
        $form->message = $request->input("description");
        $form->newsletter = $request->input("newsletter");
        $form->agree = $request->input("agree");
        $form->promotions = $request->input("promotions");
        $form->type = "mediapack-download";
        $form->title = $request->input("cf_leads_jobtitle");
        $form->whom = $request->whom; 
    
        $form->save();
        /*Send email admin*/  
        $data = [
            'name'=>$request->firstname.' '.$request->lastname,
            'email'=>$request->input("email"),
            'company'=>$request->input("company"),
            'phone'=>$request->input("mobile"),
            'type'=>'Mediapack-Download',
            'country'=>$request->input("cf_leads_countryname"),
            'description'=>$request->input("description"),
            'newsletter'=>$request->input("newsletter"),
            'agree'=>$request->input("agree"),
            'whom' => $request->whom,  
            'promotions'=>$request->input("promotions")];
            //$this->bitrixLeadApi($data);
        /*Admin mail*/
        Mail::send('emails.mediapack.admin', $data, function($message) use ($data) {
            // $message->to(trans('messages.advert-email'));
            $message->to('advertise@ochre-media.com');
            $message->cc('nag@ochre-media.com');
            //$message->to('srinivas.i@ochre-media.com');
            $message->subject('Plant Automation Technology Media-Pack Downloaded!');
        });
        /*Client Mail*/
         Mail::send('emails.mediapack.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject('Thanks for downloading Plant Automation Technology Media-Pack');
        });
        Session::flash('message_type', 'success');
        Session::flash('message_icon', 'checkmark');
        Session::flash('message_header', 'Success');
        Session::flash('message', "Success! Your registration has been successfully submitted! ");
        return view('forms.mediapack-success');
       }else{
        return redirect()->to('/');
       }

    }
    public function newsletter()
    {
        $seo = SeoPage:: whereHas('seopages' , function($query) {
        $query->where('title',\Request::segment('1'));})->where('active_flag',1)->get();
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
        $countries = DB::table('countries')->get();
        $banner1314 = $this->banner; 
        return view('forms.newslettersignup',compact('countries','banner1314'));
    }
    public function storenewsletter(Request $request)
    {
         if (isset($_POST['g-recaptcha-newsletter-response'])) {
             $captcha = $_POST['g-recaptcha-newsletter-response'];
        } else {
             $captcha = false;
        }
        if($this->checkgooglecaptcha($captcha) == true){
        $form = new Form();
        $form->name = $request->firstname .' '.$request->lastname ;
        $form->email = $request->input("email");
        $form->company = $request->input("company");
        $form->phone = $request->input("mobile");
        $form->country = $request->input("cf_leads_countryname");
        $form->message = $request->input("description");
        $form->newsletter = $request->input("newsletter");
        $form->agree = $request->input("agree");
        $form->promotions = $request->input("promotions");
        $form->type = "newsletter-signup";
        $form->save();
        /*Send email admin*/  
        $data = [
            'name'=>$request->firstname .' '.$request->lastname ,
            'first_name'=>$request->firstname,
            'last_name'=>$request->lastname,
            'email'=>$request->input("email"),
            'company'=>$request->input("company"),
            'phone'=>$request->input("mobile"),
            'country'=>$request->input("cf_leads_countryname"),
            'description'=>$request->input("description"),
            'newsletter'=>$request->input("newsletter"),
            'type'=>'Events-Newsletter',
            'agree'=>$request->input("agree"),
            'promotions'=>$request->input("promotions")];
            //$this->bitrixLeadApi($data);
        /*Admin mail*/
        Mail::send('emails.newslettersignup.admin', $data, function($message) use ($data) {
        
        $message->to(trans('messages.subscribe-email'));
        $message->subject('New subscriber for E-newsletter has been signed up!');
        });
        /*Client Mail*/
         Mail::send('emails.newslettersignup.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject('Plant Automation Technology | Newsletter Signup Successful');
        });
        Session::flash('message_type', 'success');
        Session::flash('message_icon', 'checkmark');
        Session::flash('message_header', 'Success');
        Session::flash('message', "Thank You. You have successfully registered for our newsletter.");
        if($request->formType == 'modal'){
            return [
                  'status'=>'success'  
            ];
         }
         else if($request->formType == 'returnback'){
             return redirect()->back()->with('success','done');
         }
        return view('forms.newslettersignup-success');
       }else{
        return redirect()->to('/');
       }
    }
     public function storenewsletterAjax(CommanRequest $request){
        if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
        } else {
             $captcha = false;
        }
        if($this->checkgooglecaptcha($captcha)){
        $form = new Form();
        $form->name = $request->input("name");
        $form->email = $request->input("email");
        $form->company = $request->input("company");
        $form->phone = $request->input("phone");
        $form->country = $request->input("country");
        $form->message = $request->input("message");
        $form->newsletter = $request->input("newsletter");
        $form->agree = $request->input("agree");
        $form->promotions = $request->input("promotions");
        $form->type = "newsletter-signup";
    
        $form->save();
        /*Send email admin*/  
        $data = [
            'name'=>$request->input("name"),
            'email'=>$request->input("email"),
            'company'=>$request->input("company"),
            'phone'=>$request->input("phone"),
            'country'=>$request->input("country"),
            'description'=>$request->input("message"),
            'newsletter'=>$request->input("newsletter"),
            'agree'=>$request->input("agree"),
            'promotions'=>$request->input("promotions")];
        /*Admin mail*/
        Mail::send('emails.newslettersignup.admin', $data, function($message) use ($data) {
        $message->to('omplenquiry@ochre-media.com');
        $message->subject('New subscriber for E-newsletter has been signed up!');
        });
        /*Client Mail*/
         Mail::send('emails.newslettersignup.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject('Plant Automation Technology | Newsletter Signup Successful');
        });
        Session::flash('message_type', 'success');
        Session::flash('message_icon', 'checkmark');
        Session::flash('message_header', 'Success');
        Session::flash('message', "Thank You. You have successfully registered for our newsletter.");
        return [
              'status'=>'success'  
        ];
    }else
    {}}
    public function eventnewsletter()
    {
        $seo = SeoPage:: whereHas('seopages' , function($query) {
        $query->where('title',\Request::segment('1'));})->where('active_flag',1)->get();
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
        $countries = DB::table('countries')->get();
        $banner1314 = $this->banner; 
        return view('forms.event-news-letter-signup',compact('countries','banner1314'));
    }
    public function storeventnewsletter(Request $request){
        if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
        } else {
             $captcha = false;
        }
        if($this->checkgooglecaptcha($captcha)){
        $form = new Form();
        request()->validate([
            'name' => 'required',
            'email' => 'email',
         ]);
        $form->name = $request->input("name");
        $form->email = $request->input("email");
        $form->company = $request->input("company");
        $form->phone = $request->input("phone");
        $form->country = $request->input("country");
        $form->message = $request->input("message");
        $form->newsletter = $request->input("newsletter");
        $form->agree = $request->input("agree");
        $form->promotions = $request->input("promotions");
        $form->type = "event-newsletter-signup";
    
        $form->save();
        /*Send email admin*/  
        $data = [
            'name'=>$request->input("name"),
            'first_name'=>$request->input("name"),
            'email'=>$request->input("email"),
            'company'=>$request->input("company"),
            'phone'=>$request->input("phone"),
            'country'=>$request->input("country"),
            'description'=>$request->input("message"),
            'newsletter'=>$request->input("newsletter"),
            'agree'=>$request->input("agree"),
            'promotions'=>$request->input("promotions")];
            //$this->bitrixLeadApi($data);
        /*Admin mail*/
        Mail::send('emails.event-news-letter-signup.admin', $data, function($message) use ($data) {
          //  $message->to(trans('messages.subscribe-email'));
          $message->to('pushpalatha@ochre-media.com');
        $message->subject('New subscriber for Event-newsletter has been signed up!');
        });
        /*Client Mail*/
         Mail::send('emails.event-news-letter-signup.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject('Plant Automation Technology | Newsletter Signup Successful');
        });
        Session::flash('message_type', 'success');
        Session::flash('message_icon', 'checkmark');
        Session::flash('message_header', 'Success');
        Session::flash('message', "Thank You. You have successfully registered for our event newsletter.");
        return view('forms.event-news-letter-signup-success');

    }else
    {}}
    public function contactus(){

        $seo = SeoPage:: whereHas('seopages' , function($query) {
        $query->where('title',\Request::segment('1'));})->where('active_flag',1)->get();
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
       
        $countries = DB::table('countries')->get();
        $banner1314 = $this->banner;
   
        return view('forms.contactus',compact('countries','banner1314'));
    }
    public function storecontactus(Request $request)
    {
     if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
        } elseif(isset($_POST['g-recaptcha-response-new'])) {
            $captcha = $_POST['g-recaptcha-response-new'];
        }else{
             $captcha = false;
        }
        if($this->checkgooglecaptcha($captcha) == true){   
        $validatedData = $this->validate($request, [
                'firstname' => 'required',
                'lastname' => 'required',
                'email' => 'required',
                'company'=>'required',                    
                'cf_leads_jobtitle'=>'required',
                'mobile' =>'required|max:20',
        ]);

    
        
        $form = new Form();
        $form->name    = $request->firstname .' '.$request->lastname;
        $form->email   = $request->input("email");
        $form->company = $request->input("company");
        $form->phone   = $request->input("mobile");
        
        $form->message = $request->input("description");
        $form->type    = "contactus";
        $form->title    = $request->input("cf_contacts_jobtitle");
        $form->whom = $request->whom ?? '';  
    
       // $form->save();
        /*Send email admin*/  
        $data = [
            'name'=> $request->firstname .' '.$request->lastname,
            'first_name'=>$request->firstname,
            'last_name'=>$request->lastname,
            'email'=>$request->input("email"),
            'company'=>$request->input("company"),
            'type'=>'Contact Us',
            'phone'=>$request->input("mobile"),
            'whom' => $request->whom ?? '',   
            'description'=>$request->input("description")];
            //$this->bitrixLeadApi($data);
        /*Admin mail*/
        Mail::send('emails.contactus.admin', $data, function($message) use ($data) {
             $message->to('pushpalatha@ochre-media.com');
            //   $message->to('advertise@ochre-media.com');
            //    $message->cc('omplenquiry@ochre-media.com');
             $message->subject(' Advertising & Marketing Enquiry -'.$data['email'].'Plant Automation Technology');
        });
        /*Client Mail*/
         Mail::send('emails.contactus.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject('Registration to Contact Successful- Plant Automation Technology');
        });
           return redirect()->route('contactus.success')->with('status','true');
         }else{
            return redirect()->to('/');
         }

    }

    public function advertise()
    {
        $seo = SeoPage:: whereHas('seopages' , function($query) {
        $query->where('title',\Request::segment('1'));})->where('active_flag',1)->get();
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
        $testimonials = Testimonial::select('id','description','client_name','company_name','designation','image','img_alt','img_title')->where('active_flag', 1)->orderBy('id', 'desc')->get(); 
        $banner1314 = $this->banner;
        //print_r($testimonials);die;  
       return view('forms.advertise',compact('testimonials','banner1314'));
    }

    public function storeadvertise(Request $request){
        if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
        } else {
             $captcha = false;
        }
        if($this->checkgooglecaptcha($captcha)){
             $form = new Form();
             request()->validate([
            'name' => 'required',
            'email' => 'email',
            'g-recaptcha-response' => 'required|captcha'
         ]);
        $form->name = $request->input("name");
        $form->email = $request->input("email");
        $form->company = $request->input("company");
        $form->phone = $request->input("phone");
        $form->message = $request->input("message");
        $form->type = "advertise";
    
        $form->save();
        /*Send email admin*/  
        $data = [
            'name'=>$request->input("name"),
            'first_name'=>$request->input("name"),
            'email'=>$request->input("email"),
            'company'=>$request->input("company"),
            'phone'=>$request->input("phone"),
            'type' => "Advertise",
            'description'=>$request->input("message")];
            //$this->bitrixLeadApi($data);
        /*Admin mail*/
        Mail::send('emails.contactus.admin', $data, function($message) use ($data) {
        //$message->to('info@plantautomation-technology.com');
        $message->to('omplenquiry@ochre-media.com');
        //$message->cc(['naveen@ochre-media.com','sumit@ochre-media.com','sankar@ochre-media.com']);
        $message->subject('A query for Advertising on Plant Automation Technology');
        });
        /*Client Mail*/
         Mail::send('emails.contactus.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject('Plant Automation Technology | Advertise With Us');
        });
        Session::flash('message_type', 'success');
        Session::flash('message_icon', 'checkmark');
        Session::flash('message_header', 'Success');
        Session::flash('message', "Plant Automation Technology| Thanks for Showing interest to advertise");
            $msg = base64_encode("success");
                
        return redirect()->back()->with('status','success');

    }else
    {}}
    public function getlist1()
    {
        $countries = Country::select('id','country_name')->get();
        //print_r($country);die; 
        $banner1314 = $this->banner;
        //print_r($testimonials);die;  
       return view('forms.get-listed1',compact('countries','banner1314'));
    }
    public function storegetlist1(CommanRequest $request){
        if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
        } else {
             $captcha = false;
        }
        if($this->checkgooglecaptcha($captcha)){

             $form = new Form();
         //     request()->validate([
         //    'name' => 'required',
         //    'email' => 'email',
         //    'g-recaptcha-response' => 'required|captcha'
         // ]);

        
        $form->name =  $request->firstname .' '.$request->lastname;
        $form->email = $request->input("email");
        $form->company = $request->input("company");
        $form->member_type = $request->input("cf_leads_membertype");
        $form->title = $request->input("job_title");
        $form->country = $request->input("cf_leads_countryname");
        $form->phone = $request->input("mobile");
        $form->message = $request->input("description");
        $form->type = "get-listed";
    
        $form->save();
        /*Send email admin*/  
        $data = [
            'name'=> $request->firstname .' '.$request->lastname,
            'email'=>$request->input("email"),
            'company'=>$request->input("company"),
            'phone'=>$request->input("mobile"),
            'job_title' =>$request->input("cf_leads_membertype"),
            'country' =>$request->input("cf_leads_countryname"),
            'type' => "get-listed",
            'membertype' => $request->input("cf_leads_membertype"),
            'description'=>$request->input("description")];
        /*Admin mail*/
        Mail::send('emails.getlist.admin', $data, function($message) use ($data) {
       //$message->to('info@plantautomation-technology.com');
       $message->to('omplenquiry@ochre-media.com');
        //$message->cc(['naveen@ochre-media.com','sumit@ochre-media.com','sankar@ochre-media.com']);
        // $message->subject('Enquiry by '.$data['email'].' Generated for '.$data['membertype'].'');
       $message->subject( ucfirst($data['company']).' was submitted for Get Listed');
        });
        /*Client Mail*/
         Mail::send('emails.getlist.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        // $message->subject(''.$data['name'].' - Submitted Enquiry for '.$data['membertype'] .' | PlantAutomation-Technology');
        $message->subject('Submitted your company to get listed | PlantAutomation-Technology');
        });
        Session::flash('message_type', 'success');
        Session::flash('message_icon', 'checkmark');
        Session::flash('message_header', 'Success');
        Session::flash('member_type',$request->input("member_type"));
        Session::flash('message', "Thank you for your interest in becoming our partner. A staff member will get in touch with you in next 48 hours.Sincerely Plant Automation Technology");
            $msg = base64_encode("success");

            // return redirect()->to($request->header('referer'). '#'.$request->input("member_type").'-success');
            return redirect()->back()->with('status','success');
                
        /*return redirect()->back();*/

    }else
    {}}

     public function getlist2()
    {
        $countries = Country::select('id','country_name')->get();
        //print_r($country);die; 
        $banner1314 = $this->banner;
        //print_r($testimonials);die;  
       return view('forms.get-listed2',compact('countries','banner1314'));
    }
    public function storegetlist2(Request $request){
        if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
        } else {
             $captcha = false;
        }
        if($this->checkgooglecaptcha($captcha)){
             $form = new Form();
             request()->validate([
            'name' => 'required',
            'email' => 'email',
            'g-recaptcha-response' => 'required'
         ]);

        
        $form->name = $request->input("name");
        $form->email = $request->input("email");
        $form->company = $request->input("company");
        $form->member_type = $request->input("member_type");
        $form->title = $request->input("job_title");
        $form->country = $request->input("country");
        $form->phone = $request->input("phone");
        $form->message = $request->input("message");
        $form->type = "get-listed2";
    
        $form->save();
        /*Send email admin*/  
        $data = [
            'name'=>$request->input("name"),
            'email'=>$request->input("email"),
            'company'=>$request->input("company"),
            'phone'=>$request->input("phone"),
            'job_title' =>$request->input("job_title"),
            'country' =>$request->input("country"),
            'type' => "get-listed",
            'membertype' => ucwords(str_replace('-', ' ', $request->input("member_type"))),
            'description'=>$request->input("message")];
        /*Admin mail*/
        Mail::send('emails.getlist.admin', $data, function($message) use ($data) {
       //$message->to('info@plantautomation-technology.com');
       $message->to('omplenquiry@ochre-media.com');
        //$message->cc(['naveen@ochre-media.com','sumit@ochre-media.com','sankar@ochre-media.com']);
        $message->subject('Enquiry by '.$data['email'].' Generated  by CRM sales ');
        });
        /*Client Mail*/
         Mail::send('emails.getlist.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject(''.$data['name'].' - Submitted Enquiry for '.$data['membertype'] .' | PlantAutomation-Technology');
        });
        Session::flash('message_type', 'success');
        Session::flash('message_icon', 'checkmark');
        Session::flash('message_header', 'Success');
        Session::flash('member_type',ucwords(str_replace('-', ' ', $request->input("member_type"))) );
        Session::flash('message', "Thank you for your interest in becoming our partner. A staff member will get in touch with you in next 48 hours.Sincerely Plant Automation Technology");
            $msg = base64_encode("success");
            return redirect()->back()->with('status','success');
                
        /*return redirect()->back();*/

    } else
    {}}
    public function getlist()
    {
        $seo = SeoPage:: whereHas('seopages' , function($query) {
        $query->where('title',\Request::segment('1'));})->where('active_flag',1)->get();
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta('Project:published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);

            OpenGraph::setDescription($value->og_description);
            OpenGraph::setUrl(url('/get-listed'));
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::setTitle($value->og_title);
            OpenGraph::addProperty('type', 'website');
            OpenGraph::addProperty('locale', 'en_GB');
            OpenGraph::addProperty('site_name', 'Plant Automation Technology');
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
			
			Twitter::setType('summary_large_image'); // type of twitter card tag
			Twitter::setTitle('B2B Manufacturers, Suppliers and Buyers | Be Found, Get Enquiries, Make Sales - With Plant Automation Technology'); // title of twitter card tag
			Twitter::setSite('@plantautomatech'); // site of twitter card tag
			TwitterCard::setUrl(url()->current());
			Twitter::setDescription('Be Found, Get Enquiries, Make Sales - With Plant Automation Technology'); // 
			Twitter::setImage('https://industry.plantautomation-technology.com/images/market-chart.png'); // add 

            
        }
        $countries = Country::select('id','country_name')->get();
        //print_r($country);die; 
         $clientele = Company::where('active_flag', 1)->orderBy('id', 'desc')->take(8)->get();
        //print_r($testimonials);die;
        $banner1314 = $this->banner;  
       return view('forms.get-listed',compact('countries','clientele','banner1314'));
    }


     public function getlistnew()
    {
        $seo = SeoPage:: whereHas('seopages' , function($query) {
        $query->where('title',\Request::segment('1'));
    })->where('active_flag',1)->get();
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta('Project:published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);

            OpenGraph::setDescription($value->og_description);
            OpenGraph::setUrl(url('/get-listed'));
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::setTitle($value->og_title);
            OpenGraph::addProperty('type', 'website');
            OpenGraph::addProperty('locale', 'en_GB');
            OpenGraph::addProperty('site_name', 'Plant Automation Technology');
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addImage([$value->og_image, 'size' => 300]);
            
            Twitter::setType('summary'); // type of twitter card tag
            Twitter::setTitle('B2B Manufacturers, Suppliers and Buyers | Be Found, Get Enquiries, Make Sales - With Plant Automation Technology'); // title of twitter card tag
            Twitter::setSite('@plantautomatech'); // site of twitter card tag
            TwitterCard::setUrl(url()->current());
            Twitter::setDescription('Be Found, Get Enquiries, Make Sales - With Plant Automation Technology'); // 
            Twitter::setImage('https://industry.plantautomation-technology.com/images/market-chart.png'); // add 

            
        }
         $countries = Country::select('id','country_name','calling_code','country_code')->get();
        //print_r($country);die; 
         $clientele = Company::where('active_flag', 1)->orderBy('id', 'desc')->take(8)->get();
         $banner1314 = $this->banner; 
        //print_r($testimonials);die;  
    return view('forms.get-listed-new',compact('countries','clientele','banner1314'));

    }


 public function newgetliststore(Request $request)
 {
        if(isset($_POST['g-recaptcha-manufacturer-response'])){
          $captcha = $_POST['g-recaptcha-manufacturer-response'];
        }elseif(isset($_POST['g-recaptcha-distributor-response'])){
         $captcha = $_POST['g-recaptcha-distributor-response'];
        }elseif(isset($_POST['g-recaptcha-buyer-response'])){
          $captcha = $_POST['g-recaptcha-buyer-response'];
        }else{
            $captcha = false;
        }
        if($this->checkgooglecaptcha($captcha) == true){
          $form = new Getlistsubscribe();
         @$interested=implode(",",$request->buyer_request);
         @$message=$request->input("message");
         @$callcode=$request->input("calling_code");
         @$callcode=$request->input("calling_code1");
         @$callcode=$request->input("calling_code2");
        $form->firstname = $request->input("firstname");
        $form->lastname = $request->input("lastname");
        $form->email = $request->input("email");
        $form->company = $request->input("company");
        $form->company_type = $request->input("company_type");
        $form->website = $request->input("website");
        $form->mobile =$callcode.$request->input("mobile");
        $form->country =$request->input("country");
        $form->phone =$callcode.$request->input("phone");
        $form->street= $request->input("street_address");
        $form->city= $request->input("city");
        $form->zipcode= $request->input("postal_code");
        $form->form_type =$request->input("form_type");
        @$form->distributorship=$request->input("distributorship");
        @$form->distributor_type=$request->input("distributorship_type");
        //@$form->type =$request->input("type");
        @$form->message =$request->input("message");
        @$form->intrested=$interested;
        $form->whom = $request->whom; 
        $form->job_title = $request->job_title;   
        $form->save();
        /*Send email admin*/  
        $data = [
            'name'=>$request->input("firstname")." ".$request->input("lastname"),
            'first_name'=>$request->input("firstname"),
            'last_name'=>$request->input("lastname"),
            'job_title'=>$request->job_title,
            'email'=>$request->input("email"),
            'company'=>$request->input("company"),
            'distributorship'=>$request->input("distributorship"),
            'distributor_type'=>$request->input("distributorship_type"),
            'phone'=>$request->input("phone"),
            'mobile'=>$request->input("mobile"),
            'company_type' =>$request->input("company_type"),
            'country' =>$request->input("country"),
            //'membertype' =>$request->input("type"),
            'type'=>$request->input("type"),
            'city' =>$request->input("city"),
            'street' =>$request->input("street_address"),
            'postal' =>$request->input("postal_code"),
            'messagee' =>$message,
            'intrested'=>$interested,
            'whom' => $request->whom,   
            'website'=>$request->input("website")];
        /*Admin mail*/
        if($request->input("form_type")=="manufacture"){
           Mail::send('emails.getlist.admin-getlist', $data, function($message) use ($data) {
            // $message->to(trans('messages.admin-email'));
            // $message->cc(trans('messages.advert-email'));
             $message->to(trans('chris@ochre-media.com'));
             $message->cc(trans('advertise@ochre-media.com'));
            //  $message->to('pushpalatha@ochre-media.com');
            $message->subject($data['company'].'|'."registered for get listed as Manufacturer" );
            });
            /*Client Mail*/
             Mail::send('emails.getlist.client-getlist', $data, function($message) use ($data) {
            $message->to($data['email']);

            $message->subject('Sign-up Success'.'|'.$data['company'] ." as Manufacturer" );
            });
              return redirect()->route('getlistedmnf.success')->with(['thank_message'=>$request->input('thank_message')]);
        }
        if($request->input("form_type")=="distributor"){
           Mail::send('emails.getlist.admin-getlist', $data, function($message) use ($data) {
            $message->to(trans('chris@ochre-media.com'));
            $message->cc(trans('advertise@ochre-media.com'));
            $message->subject($data['distributorship'].'|'."registered for get listed as distributor" );
            });
            /*Client Mail*/
             Mail::send('emails.getlist.client-getlist-dist', $data, function($message) use ($data) {
            $message->to($data['email']);

            $message->subject('Sign-up Success'.'|'.$data['distributorship'] ." as Distributorship" );
            });
            return redirect()->route('getlisteddist.success')->with(['thank_message'=>$request->input('thank_message')]);
        }
        if($request->input("form_type")=="buyer"){
            Mail::send('emails.getlist.admin-getlist', $data, function($message) use ($data) {
                $message->to(trans('chris@ochre-media.com'));
             $message->cc(trans('advertise@ochre-media.com'));
            $message->subject($data['company'].'|'."registered for get listed as Buyer" );
            });
            /*Client Mail*/
             Mail::send('emails.getlist.client-getlist-buyer', $data, function($message) use ($data) {
            $message->to($data['email']);
            $message->subject($data['company'] ." Registered as Buyer  | Project Requirement Posted " );
            });
            return redirect()->route('getlistedbuy.success')->with(['thank_message'=>$request->input('thank_message')]);
        }
        Session::flash('message_type', 'success');
        Session::flash('message_icon', 'checkmark');
        Session::flash('message_header', 'Success');
        Session::flash('member_type',$request->input("cf_leads_membertype"));
        Session::flash('thank_message', "Thank you for your interest in becoming our partner. A staff member will get in touch with you in next 48 hours.Sincerely Pulp and Paper");
      }else{
        return redirect()->to('/');
      }
    }
    public function storegetlist(CommanRequest $request){
        if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
        } else {
             $captcha = false;
        }
        if($this->checkgooglecaptcha($captcha)){
        $form = new Form();
        $form->name = $request->firstname.' '.$request->lastname;
        $form->email = $request->input("email");
        $form->company = $request->input("company");
        $form->member_type = $request->input("member_type");
        $form->title = $request->input("cf_leads_jobtitle");
        $form->country = $request->input("cf_leads_countryname");
        $form->phone = $request->input("mobile");
        $form->message = $request->input("description");
        $form->type = $request->input("member_type");
    
        $form->save();
        /*Send email admin*/  
        $data = [
            'name'=>$request->firstname.' '.$request->lastname,
            'first_name'=>$request->firstname,
            'last_name'=>$request->lastname,
            'email'=>$request->input("email"),
            'company'=>$request->input("company"),
            'phone'=>$request->input("mobile"),
            'job_title' =>$request->input("cf_leads_jobtitle"),
            'country' =>$request->input("cf_leads_countryname"),
            'type' =>$request->input("member_type"),
            'source' =>$request->source,    
            'membertype' => $request->input("member_type"),
            'description'=>$request->input("description")];
            //$this->bitrixLeadApi($data);
        /*Admin mail*/
        Mail::send('emails.getlist.admin', $data, function($message) use ($data) {
        //$message->to('info@plantautomation-technology.com');
        $message->to('omplenquiry@ochre-media.com');
        $message->subject('Get listed membership request submitted');
        });
        /*Client Mail*/
         Mail::send('emails.getlist.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject('Submitted your company to get listed | PlantAutomation-Technology');
        });
        Session::flash('message_type', 'success');
        Session::flash('message_icon', 'checkmark');
        Session::flash('message_header', 'Success');
         Session::flash('member_type',$request->input("member_type"));
        Session::flash('message', "Thank you for your interest in becoming our partner. A staff member will get in touch with you in next 48 hours.Sincerely Plant Automation Technology");
             return [
                'status'=>'success'     
            ];
    }else
    {}}
    public function Downloadpdf(){

           $filePath = public_path('industry/rpa/_DGdSJrpa_eu_delegate_analysis_final.pdf');
        $headers = ['Content-Type: application/pdf'];
        $fileName = time().'.pdf';
        return response()->download($filePath, $fileName, $headers);
                
        /*return redirect()->back();*/

    }
    public function DownloadpdfTexweek(){


           $filePath = public_path('industry/promotions/tex-week-2018-june.pdf');
        $headers = ['Content-Type: application/pdf'];
        $fileName = time().'.pdf';
        return response()->download($filePath, $fileName, $headers);
                
        /*return redirect()->back();*/

    }

 public function LinkedInOffer()
    {
         $seo = SeoPage:: whereHas('seopages' , function($query) {
        $query->where('title',\Request::segment('1'));})->where('active_flag',1)->get();
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta('Project:published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->meta_title);
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'Website');
            OpenGraph::addProperty('locale', 'en_GB');
            OpenGraph::addProperty('site_name', 'Plant Automation Technology');
           // //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage([$value->og_image, 'width' =>1024,'height' =>512]);
            Twitter::setType('summary'); // type of twitter card tag
			Twitter::setTitle($value->meta_title); // title of twitter card tag
			Twitter::setSite('@plantautomatech'); // site of twitter card tag
			Twitter::setDescription($value->meta_description); // 
			Twitter::addImage([$value->og_image,'width' =>1024,'height' =>512]); // add 
        }
        
        $countries = Country::select('id','country_name')->get();
        //print_r($country);die; 
        $banner1314 = $this->banner; 
        //print_r($testimonials);die;  
       return view('forms.linkedin-offer',compact('countries','banner1314'));
    }

     public function linkedinstore(Request $request){
        if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
        } else {
             $captcha = false;
        }
        if($this->checkgooglecaptcha($captcha)){

             $form = new Form();
        request()->validate([
            'name' => 'required',
            'email' => 'email',
           // 'g-recaptcha-response' => 'required|captcha'
         ]);

        
        $form->name = $request->input("name");
        $form->email = $request->input("email");
        $form->company = $request->input("company");
        //$form->member_type = $request->input("member_type");
        $form->title = $request->input("job_title");
        $form->country = $request->input("country");
        $form->phone = $request->input("phone");
        $form->message = $request->input("message");
        $form->type = "linkedin-offer";
    
        $form->save();
        /*Send email admin*/  
        $data = [
            'name'=>$request->input("name"),
            'first_name'=>$request->input("name"),
            'email'=>$request->input("email"),
            'company'=>$request->input("company"),
            'phone'=>$request->input("phone"),
            'job_title' =>$request->input("job_title"),
            'country' =>$request->input("country"),
            'type' =>"linkedin-offer",
            'membertype' => $request->input("member_type"),
            'description'=>$request->input("message")];
            //$this->bitrixLeadApi($data);
        /*Admin mail*/
        
        Session::flash('message_type', 'success');
        Session::flash('message_icon', 'checkmark');
        Session::flash('message_header', 'Success');
        Session::flash('message', "Plant Automation Technology| Thanks for Showing interest to Getlist");
            $msg = base64_encode("success");

       return redirect()->to($request->header('referer'). '#success');
                
                
        /*return redirect()->back();*/

    }else
    {}}
    public function  getlistedCampaignget(){
         
        return view('forms.get-listed-campaign');
    }

     public function getlistedCampaign(CommanRequest $request){
            if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
        } else {
             $captcha = false;
        }
        if($this->checkgooglecaptcha($captcha)){

             $form = new Form();
        $form->name = $request->input('fullname');
        $form->email = $request->input("email");
        $form->company = $request->input("company");
        $form->phone = $request->input("mobile");
        $form->web_link  = $request->input("company_url");
        $form->type = $request->input("type");

    
        $form->save();
        /*Send email admin*/  
        $data = [
            'name'=>$request->input('fullname'),
            'email'=>$request->input("email"),
            'company'=>$request->input("company"),
            'phone'=>$request->input("mobile"),
            'type' =>$request->input("type"),
            'admin_subject'=> $request->input("company").' | Get Listed | Social Media' ,
            'web_link'=>$request->input("company_url")];
        /*Admin mail*/
        Mail::send('emails.getlist.campaign.admin', $data, function($message) use ($data) {
        //$message->to('info@plantautomation-technology.com');
        $message->to('omplenquiry@ochre-media.com');
      
        $message->subject($data['company'].' -'.$data['admin_subject']);
        });
        /*Client Mail*/
         Mail::send('emails.getlist.campaign.client', $data, function($message) use ($data) {
        $message->to($data['email']);

        $message->subject('Welcome, '.$data['company'].' signed-up for Free-Trial Program');
        });
        Session::flash('message_type', 'success');
        Session::flash('message_icon', 'checkmark');
        Session::flash('message_header', 'Success');
         Session::flash('member_type',$request->input("type"));
        Session::flash('message', "Thank you for your interest in becoming our partner. A staff member will get in touch with you in next 48 hours.Sincerely Plant Automation Technology");
        return redirect('get-listed-campaign-success');

    }else
    {}}

     public function  getlistedCampaignBget(){
         
        return view('forms.get-listed-campaign-b');
    }

     public function getlistedCampaignB(CommanRequest $request){
        if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
        } else {
             $captcha = false;
        }
        if($this->checkgooglecaptcha($captcha)){      

        $form = new Form();
        $form->name = $request->input('fullname');
        $form->email = $request->input("email");
        $form->company = $request->input("company");
        $form->phone = $request->input("mobile");
        $form->web_link  = $request->input("company_url");
        $form->type = $request->input("type");

    
        $form->save();
        /*Send email admin*/  
        $data = [
            'name'=>$request->input('fullname'),
            'email'=>$request->input("email"),
            'company'=>$request->input("company"),
            'phone'=>$request->input("mobile"),
            'type' =>$request->input("type"),
            'admin_subject'=>$request->input("admin_subject"),
            'web_link'=>$request->input("company_url")];
        /*Admin mail*/
        Mail::send('emails.getlist.campaign.admin', $data, function($message) use ($data) {
        //$message->to('info@plantautomation-technology.com');
        $message->to('omplenquiry@ochre-media.com');
        $message->subject($data['company'].' -'.$data['admin_subject']);
        });
        /*Client Mail*/
         Mail::send('emails.getlist.campaign.client_b', $data, function($message) use ($data) {
        $message->to($data['email']);

        $message->subject('Welcome, '.$data['company'].' registered to claim their profile');
        });
        Session::flash('message_type', 'success');
        Session::flash('message_icon', 'checkmark');
        Session::flash('message_header', 'Success');
         Session::flash('member_type',$request->input("type"));
        Session::flash('message', "Thank you for your interest in becoming our partner. A staff member will get in touch with you in next 48 hours.Sincerely Plant Automation Technology");
        return redirect('get-listed-campaign-b-success');

    }else
    {}}


     public function getlistSaudi(CommanRequest $request){


       $countries = Country::select('id','country_name')->get();
       $clientele = Company::where('active_flag', 1)->orderBy('id', 'desc')->take(8)->get();
        if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
        } else {
             $captcha = false;
        }
        if($this->checkgooglecaptcha($captcha)){
       if(\Request::isMethod('post')){
        $form = new Form();
        $form->name = $request->firstname.' '.$request->lastname;
        $form->email = $request->input("email");
        $form->company = $request->input("company");
        $form->member_type = $request->input("member_type");
        $form->title = $request->input("cf_leads_jobtitle");
        $form->country = $request->input("cf_leads_countryname");
        $form->phone = $request->input("mobile");
        $form->message = $request->input("description");
        $form->type = $request->input("type");
        $form->web_link = $request->source;
        $form->save();
        /*Send email admin*/  
        $data = [
            'name'=>$request->firstname.' '.$request->lastname,
            'email'=>$request->input("email"),
            'company'=>$request->input("company"),
            'phone'=>$request->input("mobile"),
            'job_title' =>$request->input("cf_leads_jobtitle"),
            'country' =>$request->input("cf_leads_countryname"),
            'source' =>$request->source,            
            'type' =>$request->input("type"),
            'membertype' => $request->input("member_type"),
            'description'=>$request->input("description")];
            /*Admin mail*/
            Mail::send('emails.getlist.admin', $data, function($message) use ($data) {

                $message->to('omplenquiry@ochre-media.com');
        //$message->cc(['naveen@ochre-media.com','sumit@ochre-media.com','sankar@ochre-media.com']);
       // $message->cc(['venkatasiva@ochre-media.com']);
             
        // $message->cc(['venkatasiva@ochre-media.com','ravi@ochre-media.com']);
                $message->subject('Get listed membership request submitted');
            });

            /*Client Mail*/
            Mail::send('emails.getlist.client', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject('Your Request for '. title_case(str_replace_last('-',' ',$data['membertype'])) .' was Successfully Submitted | PlantAutomation Technology');
            });

            Session::flash('message_type', 'success');
            Session::flash('message_icon', 'checkmark');
            Session::flash('message_header', 'Success');
            Session::flash('member_type',$request->input("member_type"));
            Session::flash('message', "Thank you for your interest in becoming our partner. A staff member will get in touch with you in next 48 hours.Sincerely PlantAutomation Technology");

            $route = "storegetlist".$request->segment(2).".success";
            return redirect()->route($route)->with(['status'=>'success']);          

        }
        return view('forms/get-listed-saudi',compact('countries','clientele'));
        
    }else
    {}}



  public function profileclaim(Request $request){
     if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
        } else {
             $captcha = false;
        }
        if($this->checkgooglecaptcha($captcha)){

         $restricteddompany = 'google'; 

         $restrictedmails = '@yahoo\.com|@gmail\.com'; 


            request()->validate([
                'firstname' => 'required'
               
                ]);


             $form = new Form();
       
        $form->name = $request->firstname;
       


       
        $form->save();
        $company_profile = CompanyProfile::where('id',$request->company_id)->first();
        $company_profile->profileclaim  = 1;
        $company_profile->save();
        /*Send email admin*/  
        $data = [
            'name'=>$request->firstname,
            'email'=>'ravi@ochre-media.com' ];
        /*Admin mail*/
        Mail::send('emails.contactus.claim_admin', $data, function($message) use ($data) {
        $message->to('omplenquiry@ochre-media.com');
        $message->subject(''.$data['email'].' Submitted Contact Us Form ');
        });
        return redirect()->back()->with('profileclaim','success')->with(['thank_message'=>$request->input('firstname')]);
    }else
    {}}


    public function cmpMediapack(CommanRequest $request){

    $countries = Country::select('id','country_name')->get();
     if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
        } else {
             $captcha = false;
        }
        if($this->checkgooglecaptcha($captcha)){

      if(\Request::isMethod('post')){
         
         $form = new Form();
        $form->name = $request->input("firstname");
        $form->email = $request->input("email");
        $form->company = $request->input("company");
        //$form->member_type = $request->input("member_type");
        $form->title = $request->input("job_title");
        $form->country = $request->input("country");
        $form->phone = $request->input("mobile");
         $form->message = $request->input("description");
        $form->type = $request->input('type');
    
//return $form;
        $form->save();
        /*Send email admin*/  
        $data = [
            'name'=>$request->input("firstname"),
            'first_name'=>$request->input("firstname"),
            'email'=>$request->input("email"),
            'company'=>$request->input("company"),
            'phone'=>$request->input("mobile"),
            'job_title' =>$request->input("job_title"),
            'country' =>$request->input("country"),
            'type' => $request->input('type'),
            'description'=>$request->input("description"),
         ];
         //$this->bitrixLeadApi($data);

           /*Admin mail*/
        Mail::send('emails.cmp-mediapack.admin', $data, function($message) use ($data) {

            $message->to(trans('messages.advert-email'));
         
        $message->subject('CMP- Media Pack Download');
        });
        /*Client Mail*/
         Mail::send('emails.cmp-mediapack.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject('CMP- Media Pack Download Success');
        });


     
            return redirect()->route('cmpmediapack.success')->with(['thank_message'=>$request->input('thank_message')]);
    }
    return view('forms.mediapack-cmp',compact('countries'));
        }else
        {}}
   public function countryDailCode(Request $request)
   {
      $country = Country::where('country_name',$request->country)->first();
      return $country;
   }
   public function checkgooglecaptcha($token)
   {
          $secretKey = config('services.recaptcha.secret_key');
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
