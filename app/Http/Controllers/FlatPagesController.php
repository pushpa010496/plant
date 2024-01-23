<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Form;
use Auth;
use App\Category;
use \DB;
use \Session;
use \Mail;
use App\Product;
use App\SeoPage;
use SEOMeta;
use OpenGraph;
use Twitter;
use App\Banner;
use App\Country;
use App\Flatpage;
use App\CompanyProfile;
use SEO;
use Artesaos\SEOTools\Facades\TwitterCard;
class FlatPagesController extends Controller
{
 protected $model;
    public function __construct(Form $model)
    {
        $this->model = $model;
        //$this->middleware('auth');
    }
    public function index()
    {   $countries = DB::table('countries')->get();
          return view('flatpages/rpa-ai',compact('countries'));
    }
    public function RpaStore(Request $request)
    {  
             $form = new Form();
        request()->validate([
            'name' => 'required',
            'email' => 'email',
            'g-recaptcha-response' => 'required|captcha'
         ]);
        $form->name = $request->input("name");
        $form->email = $request->input("email");
        $form->company = $request->input("company");
        //$form->member_type = $request->input("member_type");
        $form->title = $request->input("job_title");
        $form->country = $request->input("country");
        $form->phone = $request->input("phone");
        $form->message = $request->input("message");
        $form->type = "rpa-ai";
        $form->save();
        /*Send email admin*/  
        $data = [
            'name'=>$request->input("name"),
            'email'=>$request->input("email"),
            'company'=>$request->input("company"),
            'phone'=>$request->input("phone"),
            'job_title' =>$request->input("job_title"),
            'country' =>$request->input("country"),
            'type' => "RPA & AI Exchange Invitation",
            'membertype' => $request->input("member_type"),
            'description'=>$request->input("message")];
        /*Admin mail*/
        Mail::send('emails.rpa-ai.admin', $data, function($message) use ($data) {
        $message->to('info@plantautomation-technology.com');
        //$message->to('venkatasiva@ochre-media.com');
        $message->cc(['naveen@ochre-media.com','sumit@ochre-media.com']);
        $message->subject($data['email'].'| Generated Enquiry for RPA-AI-2018');
        });
        /*Client Mail*/
         Mail::send('emails.rpa-ai.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject('RPA/AI Exchange-2018 Invitation Request|PlantAutomation-Technology');
        });
        Session::flash('message_type', 'success');
        Session::flash('message_icon', 'checkmark');
        Session::flash('page_type',$request->input('page_type'));
        Session::flash('message_header', 'Success');
        Session::flash('message', "Thanks for your invitaion request.");
        $msg = base64_encode("success");
            /*
             $filePath = config_path("rpa/_DGdSJrpa_eu_delegate_analysis_final.pdf");
        	$headers = ['Content-Type: application/pdf'];
        	$fileName = time().'.pdf';
*/
            return redirect()->to($request->header('referer').'#-RPA-success');
    }
    public function TexWeek()
    {   $countries = DB::table('countries')->get();
          return view('flatpages/texweek',compact('countries'));
    }
    public function TexweekStore(Request $request)
    {  
            $countries = DB::table('countries')->get();
             $form = new Form();
        /*request()->validate([
            'name' => 'required',
            'email' => 'email',
            'g-recaptcha-response' => 'required|captcha'
         ]);*/
        $form->name = $request->input("name");
        $form->email = $request->input("email");
        $form->company = $request->input("company");
        //$form->member_type = $request->input("member_type");
        $form->title = $request->input("job_title");
        $form->country = $request->input("country");
        $form->phone = $request->input("phone");
        //$form->message = $request->input("message");
        $form->type = "Texweek";
        $form->save();
        /*Send email admin*/  
        $data = [
            'name'=>$request->input("name"),
            'email'=>$request->input("email"),
            'company'=>$request->input("company"),
            'phone'=>$request->input("phone"),
            'job_title' =>$request->input("job_title"),
            'country' =>$request->input("country"),
            'type' => "TexWeek",
            //'membertype' => $request->input("member_type"),
            //'description'=>$request->input("message")
        ];
        /*Admin mail*/
        Mail::send('emails.texweek.admin', $data, function($message) use ($data) {
        //$message->to('info@plantautomation-technology.com');
        $message->to('omplenquiry@ochre-media.com');
        //$message->cc(['naveen@ochre-media.com','sumit@ochre-media.com']);
        $message->subject('Generated Enquiry for Texweek');
        });
        /*Client Mail*/
         /*Mail::send('emails.texweek.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject('RPA/AI Exchange-2018 Invitation Request|PlantAutomation-Technology');
        });*/
        Session::flash('message_type', 'success');
        Session::flash('message_icon', 'checkmark');
        //Session::flash('page_type',$request->input('page_type'));
        Session::flash('message_header', 'Success');
        Session::flash('message', "Thanks for your invitaion request.");
        $msg = base64_encode("success");
            /*
             $filePath = config_path("rpa/_DGdSJrpa_eu_delegate_analysis_final.pdf");
            $headers = ['Content-Type: application/pdf'];
            $fileName = time().'.pdf';
*/
            //return redirect()->to($request->header('referer').'#-success');
            return view('flatpages/texweek-success',compact('countries'));
    }
   /* Flat page occ */
   public function pexbusinessview(Request $request){
        $countries = Country::select('id','country_name')->get();
        return view('flatpages.pex-business',compact('countries'));
   }
 public function pexbusiness(Request $request){
             $form = new Form();
             request()->validate([
            'name' => 'required',
            'email' => 'email',
            'g-recaptcha-response' => 'required|captcha'
         ]);
        $form->name = $request->input("name");
        $form->title = $request->input("job_title");
        $form->company = $request->input("company");
        $form->email = $request->input("email");
        $form->phone = $request->input("phone");
        $form->country = $request->input("country");
        //$form->message = $request->input("message");
        $form->type = "PEX-Business-Transformation";
        $form->save();
        /*Send email admin*/  
        $data = [
            'name'=>$request->input("name"),
            'email'=>$request->input("email"),
            'company'=>$request->input("company"),
            'phone'=>$request->input("phone"),
            'job_title' =>$request->input("job_title"),
            'country' =>$request->input("country"),
            'type' => "PEX-Business-Transformation"];
        /*Admin mail*/
        Mail::send('emails.pex.admin', $data, function($message) use ($data) {
       //$message->to('info@plantautomation-technology.com');
       $message->to('omplenquiry@ochre-media.com');
      $message->subject('pex-business-transformation');
        //$message->cc(['naveen@ochre-media.com','sumit@ochre-media.com','sankar@ochre-media.com']);
      // $message->cc(['vamshinath@ochre-media.com']);
        });
        /*Client Mail*/
         Mail::send('emails.pex.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject('pex-business-transformation');
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
    } 
 public function Downloadpdfpex(){
        $filePath = public_path('industry/documents/PEX.pdf');
        $headers = ['Content-Type: application/pdf'];
        $fileName = time().'.pdf';
        return response()->download($filePath, $fileName, $headers);
         redirect('/pex-business-transformation'); 
        /*return redirect()->back();*/
    }
   /* Flat page end occ */
   //coopercorp Industrial
    public function coopercorpIndustrialGet(Request $request){
         $countries = Country::where('id',99)->select('id','country_name')->get();
        return view('flatpages.coopercorp-industrial',compact('countries'));
    }
   public function coopercorpIndustrial(Request $request){     
        $form = new Form();
          request()->validate([
            'name' => 'required',
            'email' => 'email',
            'phone' => 'required',
             'g-recaptcha-response' => 'required'
            ]); 
        $form->name = $request->input("name");
        $form->title = 'Cooper Corp product enquiry';
        $form->email = $request->input("email");
        $form->phone = $request->input("phone");
        $form->kva_genset = $request->input("kva_genset");
        $form->nature_of_business = $request->input("nature_of_business");
        $form->country = $request->input("country");
        $form->type = "Cooper Corp product enquiry";
        $form->save();
        /*Send email admin*/  
        $data = [
            'name'=>$request->input("name"),
            'email'=>$request->input("email"),
            'phone'=>$request->input("phone"),
            'kva_genset' =>$request->input("kva_genset"),
            'nature_of_business' =>$request->input("nature_of_business"),
            'country' => $request->input("country"),
            'type' => "Cooper Corp Product Enquiry submitted"];
        /*Admin mail*/
        Mail::send('emails.cooper.admin', $data, function($message) use ($data) {
        //$message->to('info@plantautomation-technology.com');
        $message->to('omplenquiry@ochre-media.com');
        $message->subject('Cooper Corp Product Enquiry submitted');
        //$message->cc(['naveen@ochre-media.com','sumit@ochre-media.com','sankar@ochre-media.com']);
        });
        /*Client Mail*/
         Mail::send('emails.cooper.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject('Cooper Corp Product Enquiry submitted Successfully');
        });
        Session::flash('message_type', 'success');
        Session::flash('message_icon', 'checkmark');
        Session::flash('message_header', 'Success');   
        Session::flash('message', "Success! You have successfully posted your Enquiry");
            $msg = base64_encode("success");
            return redirect()->back()->with('status','success');
   }
      public function landingPageProducts($url){
        //  dd($url);
          $product_landingpages = DB::table('product_landingpages')->where('url',$url)->where('active_flag',1)->first();
          if(empty($product_landingpages)){
            return view('errors.404');
        }
          $countries = DB::table('countries')->get();
          $poductIds = explode(',',@$product_landingpages->products_id);
          $products = Product::whereIn('id',$poductIds)->get();
          SEOMeta::setTitle($product_landingpages->meta_title);
          SEOMeta::setDescription($product_landingpages->meta_description);
          SEOMeta::addKeyword($product_landingpages->meta_keywords);
          OpenGraph::setDescription($product_landingpages->og_description);
          OpenGraph::setTitle($product_landingpages->og_title);
          OpenGraph::setUrl(url()->current());
          SEOMeta::setCanonical(url()->current());
          OpenGraph::addProperty('keyword', $product_landingpages->og_keywords);
          OpenGraph::addProperty('locale', 'en_GB');
          //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
          OpenGraph::addImage([$product_landingpages->og_image, 'size' => 300]);
          TwitterCard::setType('summary_large_image'); // card
          TwitterCard::setTitle($product_landingpages->meta_title);  // title
          TwitterCard::setSite('@plantautomatech'); // site
          TwitterCard::setUrl(url()->current()); // url
          TwitterCard::setDescription($product_landingpages->meta_description); // description 
          TwitterCard::setImage($product_landingpages->og_image); // image
         return view('flatpages/imppro-solenoid-valves',compact('countries','product_landingpages','products'));
      }
   public function ScwsamericasStore(Request $request)
    {  
            $countries = DB::table('countries')->get();
    if(\Request::isMethod('post')){
    $form = new Form();
            request()->validate([
                'name' => 'required',
                'email' => 'email|required',
                'g-recaptcha-response' => 'required'
             ]);
        $form->name = $request->input("name");
        $form->email = $request->input("email");
        $form->company = $request->input("company");
        //$form->member_type = $request->input("member_type");
        $form->title = $request->input("job_title");
        $form->country = $request->input("country");
        $form->phone = $request->input("phone");
        //$form->message = $request->input("message");
        $form->type = "Scwsamericas";
        $form->save();
        /*Send email admin*/  
        $data = [
            'name'=>$request->input("name"),
            'email'=>$request->input("email"),
            'company'=>$request->input("company"),
            'phone'=>$request->input("phone"),
            'job_title' =>$request->input("designation"),
            'country' =>$request->input("country"),
            'type' => "Scwsamericas",
            //'membertype' => $request->input("member_type"),
            //'description'=>$request->input("message")
        ];
        /*Admin mail*/
        Mail::send('emails.scwsamericas.admin', $data, function($message) use ($data) {
        //$message->to('venkatasiva@ochre-media.com');
        $message->to('omplenquiry@ochre-media.com');
        //$message->cc(['naveen@ochre-media.com','sumit@ochre-media.com']);
        $message->subject('Generated Enquiry for Scwsamericas');
        });
        /*Client Mail*/
         Mail::send('emails.scwsamericas.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject('Scwsamericas Invitation Request|PlantAutomation-Technology');
        });
        return redirect()->route('scwsamericas')->with(['message'=>'Registration Successful Thank you for showing interest in this event. One of our staff will get back to you at the earliest to take this ahead.']);
}
            return view('flatpages/scwsamericas',compact('countries'));
    }
    public function ourServices(Request $request)
    {
    //  dd(111);   
        if (isset($_POST['g-recaptcha-response'])) {
            $captcha = $_POST['g-recaptcha-response'];
       } else {
            $captcha = false;
       }
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
           $countries = Country::select('id','country_name')->get();
           $companies_count = CompanyProfile::select('id','company_id')->where('active_flag', 1)->count();
           $companyprofile = CompanyProfile::select('id','active_menus','company_id','url','title','description')->where('active_flag',1)->orderBy('id','desc')->limit(60)->get();
           $time = \Carbon\Carbon::now()->format('Y-m-d');

           $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();
          
           //   $companies = DB::SELECT('CALL Get_companylogos()');
    if($this->checkgooglecaptha($captcha) == true){
            $form = new Form();     
            $form->name = $request->firstname;           
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->country = $request->country;
            $form->nature_of_business=implode(",",$request->areas_of_interest);      
            $form->title = $request->job_title;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            // if ($request->pdf == 'pdf'){
        //    $pdf =  "http://industry.plantautomation-technology.com/mediapack/mediapack-plant.pdf"; 
            // }
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'lastname'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'phone'=>$request->phone,
                'site_name'=>'Plantautomation',
                'nature_of_business' =>implode(",",$request->areas_of_interest),
                'type' => $request->type,
                'job_title'=>$request->job_title,    
                'country'=>$request->country,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                // 'pdf'=> $pdf ??  '',   
              //  'pdf' => $pdf,  
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
               // $message->to(trans('messages.admin-email'));
                $message->to('advertise@ochre-media.com');
               $message->cc('nag@ochre-media.com');
           // $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin']);
            });
            /*Client Mail         */             
            Mail::send('emails.our-services.client', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('ourServices.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }
        
        return view('forms.our-services',compact('countries','companyprofile','companies_count','banner1314'));
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
    public function optimizingProductionSchedulingExecution(Request $request){
        $countries = Country::select('id','country_name')->get();
        if(\Request::isMethod('post')){  
            $page =parse_url($request->page,PHP_URL_PATH);                       
              $form = new FlatPage();                
              $form->name = $request->name;
              $form->email = $request->email;
              $form->phone = $request->phone;
              $form->country = $request->country;
               $form->industry = $request->industry;
            //   $form->city = $request->city;
            //   $form->zip_code = $request->zip_code;
            //   $form->nature_of_business=implode(",",$request->areas_of_interest);      
              $form->title = $request->job_title;
              $form->company = $request->company;
              $form->type = $request->type;
              $form->save();
              // if ($request->pdf == 'pdf'){
             $pdf =  "https://bit.ly/3QVWNAg"; 
              // }
              /*Send email admin*/  
              $data = [
                  'name'=>$request->name,
                  'first_name'=>$request->name,
                  'email'=>$request->email, 
                  'company'=>$request->company,
                  'phone'=>$request->phone,
                //   'address'=>$request->address,
                //   'city'=>$request->city,
                   'industry'=>$request->industry,
                  'site_name'=>'Plantautomation',
                //   'nature_of_business' =>implode(",",$request->areas_of_interest),
                  'type' => $request->type,
                  'job_title'=>$request->job_title,    
                  'country'=>$request->country,
                  'subject_client' =>$request->client_subject,
                  'subject_admin' =>$request->admin_subject,
                  'client_message' =>$request->client_message,
                  // 'pdf'=> $pdf ??  '',   
                  'pdf' => $pdf,  
              ];
              /*Admin mail*/
              Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
             $message->to('omplenquiry@ochre-media.com');
              // $message->to('pushpalatha@ochre-media.com');
                     $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
              });
              /*Client Mail*/                    
              Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                  $message->to($data['email']);
                  $message->subject($data['subject_client']);
              });
              return redirect()->route('optimizingProductionSchedulingExecution.success')->with(['thank_message'=>$request->input('thank_message')]); 
            }
         return view('flatpages/optimizing-production-scheduling-execution',compact('countries'));
     }
     
    public function sparkplugopenSpecificationcriticalachieving(Request $request){
        $countries = Country::select('id','country_name')->get();
        if(\Request::isMethod('post')){             
              $form = new FlatPage();                
              $form->name = $request->first_name .' '.$request->last_name;
              $form->email = $request->email;
              $form->phone = $request->phone;
              $form->country = $request->country;
               $form->industry = $request->industry;   
              $form->title = $request->job_title;
              $form->company = $request->company;
              $form->type = $request->type;
              $form->save();
         
             $pdf ="http://industry.plantautomation-technology.com/promotions/pdf/Hive_MQ_sparkplug-roi-in-iiot-whitepaper.pdf"; 
             
              /*Send email admin*/  
              $data = [
                  'name'=>$request->first_name .' '.$request->last_name,
                  //'first_name'=>$request->name,
                  'email'=>$request->email, 
                  'company'=>$request->company,
                  'phone'=>$request->phone,
                //   'address'=>$request->address,
                //   'city'=>$request->city,
                   'industry'=>$request->industry,
                  'site_name'=>'Plantautomation',
                //   'nature_of_business' =>implode(",",$request->areas_of_interest),
                  'type' => $request->type,
                  'job_title'=>$request->job_title,    
                  'country'=>$request->country,
                  'subject_client' =>$request->client_subject,
                  'subject_admin' =>$request->admin_subject,
                  'client_message' =>$request->client_message,
                  // 'pdf'=> $pdf ??  '',   
                  'pdf' => $pdf,  
              ];
              /*Admin mail*/
              Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
           $message->to('omplenquiry@ochre-media.com');
               //$message->to('bhavani@ochre-media.com');
                     $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
              });
              /*Client Mail*/                    
              Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                  $message->to($data['email']);
                  $message->subject($data['subject_client']);
              });
             session()->put('thank_message', $request->input('thank_message'));
           
             return view('flatpages/sparkplug-open-specification-critical-achieving-roi-in-iiot',compact('countries'));
             
             // return redirect()->route('sparkplugopenSpecificationcriticalachieving.success')->with(['thank_message'=>$request->input('thank_message')]); 
            }
        return view('flatpages/sparkplug-open-specification-critical-achieving-roi-in-iiot',compact('countries'));
    }

    //  public function more($offset){
    //     $data =  CompanyProfile::select('id','company_id')->where('active_flag', 1)->offset($offset)->get();
    //     return response(view('home.company_loadmore', compact('data'))->render());
    // }    
    public function automanetEBlast(Request $request){
        $countries = Country::select('id','country_name')->get();
        if(\Request::isMethod('post')){             
            $form = new FlatPage();                
            $form->name = $request->first_name .' '.$request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->country = $request->country;
             $form->industry = $request->industry;   
            $form->title = $request->job_title;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
       
       //    $pdf ="http://industry.plantautomation-technology.com/promotions/pdf/Hive_MQ_sparkplug-roi-in-iiot-whitepaper.pdf"; 
           
            /*Send email admin*/  
            $data = [
                'name'=>$request->first_name .' '.$request->last_name,
                //'first_name'=>$request->name,
                'email'=>$request->email, 
                'company'=>$request->company,
                'phone'=>$request->phone,
              //   'address'=>$request->address,
              //   'city'=>$request->city,
                 'industry'=>$request->industry,
                'site_name'=>'Plantautomation',
              //   'nature_of_business' =>implode(",",$request->areas_of_interest),
                'type' => $request->type,
                'job_title'=>$request->job_title,    
                'country'=>$request->country,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                // 'pdf'=> $pdf ??  '',   
              //  'pdf' => $pdf,  
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
         $message->to('omplenquiry@ochre-media.com');
        //     $message->to('bhavani@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
           session()->put('thank_message', $request->input('thank_message'));
         
          return view('flatpages/automa-net-e-blast',compact('countries'));
           
          //  return redirect()->route('automanetEBlast.success')->with(['thank_message'=>$request->input('thank_message')]); 
          }
        return view('flatpages/automa-net-e-blast',compact('countries'));
    }
    public function kelvinaijuly23(Request $request){
        $countries = Country::select('id','country_name')->get();
        if(\Request::isMethod('post')){             
            $form = new FlatPage();                
            $form->name = $request->first_name .' '.$request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->country = $request->country;
             $form->industry = $request->industry;   
            $form->title = $request->job_title;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
       
         $pdf ="http://industry.plantautomation-technology.com/promotions/pdf/kelvin-ai-july-23.mp4"; 
           
            /*Send email admin*/  
            $data = [
                'name'=>$request->first_name .' '.$request->last_name,
                //'first_name'=>$request->name,
                'email'=>$request->email, 
                'company'=>$request->company,
                'phone'=>$request->phone,
              //   'address'=>$request->address,
              //   'city'=>$request->city,
                 'industry'=>$request->industry,
                'site_name'=>'Plantautomation',
              //   'nature_of_business' =>implode(",",$request->areas_of_interest),
                'type' => $request->type,
                'job_title'=>$request->job_title,    
                'country'=>$request->country,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                // 'pdf'=> $pdf ??  '',   
                'pdf' => $pdf,  
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
        $message->to('omplenquiry@ochre-media.com');
        // $message->to('srunik@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
           session()->put('thank_message', $request->input('thank_message'));
         if($request->from == "vedio"){
          return view('flatpages/kelvin-ai-july-23-videosuccess',compact('countries'))->with(['thank_message'=>$request->input('thank_message')]); 
        }else{
         return view('flatpages/kelvin-ai-july-23-thank-message',compact('countries')); 
         //  return redirect()->route('kelvinaijuly23.success')->with(['thank_message'=>$request->input('thank_message')]); 
          }
        }
        return view('flatpages/kelvin-ai-july-23',compact('countries'));
    }

    public function energytechmediakit(Request $request){
      $countries = Country::select('id','country_name')->get();
      if(\Request::isMethod('post')){             
        $form = new FlatPage();                
        $form->name = $request->first_name .' '.$request->last_name;
        $form->email = $request->email;
        $form->phone = $request->phone;
        $form->country = $request->country;
         $form->industry = $request->industry;   
        $form->title = $request->job_title;
        $form->company = $request->company;
        $form->type = $request->type;
        $form->save();
   
      $pdf ="http://industry.plantautomation-technology.com/promotions/pdf/energytech-media-kit.pdf"; 
       
        /*Send email admin*/  
        $data = [
            'name'=>$request->first_name .' '.$request->last_name,
            'first_name'=>$request->name,
            'email'=>$request->email, 
            'company'=>$request->company,
            'phone'=>$request->phone,
             'industry'=>$request->industry,
            'site_name'=>'Plantautomation',
            'type' => $request->type,
            'job_title'=>$request->job_title,    
            'country'=>$request->country,
            'subject_client' =>$request->client_subject,
            'subject_admin' =>$request->admin_subject,
            'client_message' =>$request->client_message,
             'pdf'=> $pdf ??  '',   
          
        ];
        /*Admin mail*/
        Mail::send('emails.flatpages.admin1', $data, function($message) use ($data) {
    $message->to('omplenquiry@ochre-media.com');
       // $message->to('srunik@ochre-media.com');
               $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
        });
        /*Client Mail*/                    
        Mail::send('emails.flatpages.client_full_msg1', $data, function($message) use ($data) {
            $message->to($data['email']);
            $message->subject($data['subject_client']);
        });
        session()->put('thank_message', $request->input('thank_message'));
        return view('flatpages/energytech-media-kit',compact('countries')); 
       // return redirect()->route('energytechmediakit.success')->with(['thank_message'=>$request->input('thank_message')]); 
      }
      return view('flatpages/energytech-media-kit',compact('countries'));
    }

    public function b2bmarketingservices(Request $request){
      $countries = Country::select('id','country_name')->get();
      if(\Request::isMethod('post')){
        $form= new FlatPage();
        $form->name=$request->firstname.' '.$request->lastname;
        $form->email=$request->email;
        $form->company=$request->company;
        $form->phone=$request->phone;
        $form->title=$request->job_title;
        $form->country=$request->country;
        $form->message=$request->message;
        $form->type=$request->type;
        $form->save();
        $pdf="http://industry.plantautomation-technology.com/mediapack/plant-mediapack.pdf";

        $data=[

          'name'=>$request->firstname .' '.$request->lastname,
        
          'email'=>$request->email, 
          'company'=>$request->company,
          'phone'=>$request->phone,
        'description'=>$request->message,
          'site_name'=>'Plantautomation',
          'type' => $request->type,
          'job_title'=>$request->job_title,    
          'country'=>$request->country,
          'subject_client' =>$request->client_subject,
          'subject_admin' =>$request->admin_subject,
          'client_message' =>$request->client_message,
           'pdf'=> $pdf, 

        ];
                /*Admin mail*/
                Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                  $message->to('omplenquiry@ochre-media.com');
                     // $message->to('srunik@ochre-media.com');
                             $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
                      });
                      /*Client Mail*/                    
                      Mail::send('emails.flatpages.client_b2bmarketing', $data, function($message) use ($data) {
                          $message->to($data['email']);
                          $message->subject($data['subject_client']);
                      });
                      session()->put('thank_message', $request->input('thank_message'));
                      return view('flatpages/b2b-marketing-services',compact('countries'));
                     // return redirect()->route('b2bmarketingservices.success')->with(['thank_message'=>$request->input('thank_message')]); 
                    }
      return view('flatpages/b2b-marketing-services',compact('countries'));
    }
}
