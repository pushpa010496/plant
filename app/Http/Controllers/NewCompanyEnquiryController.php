<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;
use App\CompanyProfile;
use App\CompanyEnquiry;
use App\Form;
use \Session;
use \DB;
use \Mail;
use App\Http\Requests\CommanRequest;
use App\Product;
use Redirect;

class NewCompanyEnquiryController extends Controller
{
    protected $model;
    public function __construct(Company $model)
    {
        $this->model = $model;
    }
    public function index(Request $request)
    {
        // if (isset($_POST['g-recaptcha-response'])) {
        //      $captcha = $_POST['g-recaptcha-response'];
        // } else {
        //      $captcha = false;
        // }
        // if($this->checkgooglecaptha($captcha) == true){
          $junk = 0;
          $limits = ['xxx','google','bing','sex','fuck'];
            if(in_array($request->company,$limits)){    
                $junk = 1;
                $c_name = $request->input('cf_leads_companyenq') ? $request->input('cf_leads_companyenq') : 'Our Event';
                Session::flash('message_type', 'success');
                Session::flash('message_icon', 'checkmark');
                Session::flash('message_header', 'Success');
                Session::flash('message', 'Thank you for your interest in <strong>'.$c_name.'</strong> .  Your enquiry was successfully generated. Our client success team will get back to you for further steps.
                    <br/> Happy Surfing!
                    ');
               return redirect()->back()->with('status','success');
            }
          $event_display = $request->input('cf_leads_eventname');
          $enquiry = new CompanyEnquiry();
            if(@$request->input("productname")){
                $pname = implode(",",$request->input("productname"));
                $enquiry->prod_name = $pname;

                $prname = $request->input("productname");
            }
            else{
                $pname ="";
            }

            if($request->input("cf_leads_page") == "event_profile"){
                $subject_admin = 'New Event Registration by ' .$request->input("firstname");
                $subject_client = ''.$event_display.' Event Registration Successful | Plantautomation Technology';
            }
        elseif($request->input("cf_leads_page") == "event_partner"){
         $subject_admin = 'Enquiry for '.$event_display.' Partnership |'. $request->input("firstname");
         $subject_client = $event_display.' Partnership - Enquiry Submitted | Plantautomation Technology';
        }

     elseif($request->input("cf_leads_page") == "event-brochure"){
        $subject_admin = $event_display. ' Brochure Sign-Up |' .$request->input("firstname");
        $subject_client = $event_display.' Brochure Sign-Up | Plantautomation Technology';
    }
    elseif($request->input("cf_leads_page") == "event-speaker"){
        $subject_admin = $event_display. ' Speaker Sign-Up |' .$request->input("firstname");
        $subject_client = $request->input("firstname").' Speaker Sign-Up | Plantautomation Technology';
    }
     elseif($request->input("cf_leads_page") == "event-Gallery"){
        $subject_admin = $event_display. ' Gallery  Sign-Up |' .$request->input("firstname");
        $subject_client = $request->input("firstname").' Gallery Sign-Up | Plantautomation Technology';
    }
     elseif($request->input("cf_leads_page") == "event-pressrealese"){
        $subject_admin = $event_display. 'Pressrealese  Sign-Up |' .$request->input("firstname");
        $subject_client = $request->input("firstname").'Pressrealese Sign-Up | Plantautomation Technology';
    }
    elseif($request->input("cf_leads_page") == "event-exhibitors"){
        $subject_admin = 'Enquiry for Exhibiting at' .$event_display. ' | '.$request->input("firstname");
        $subject_client = $event_display.'Exhibitor - Enquiry Submitted | Plantautomation Technology';
    }
      elseif($request->input("cf_leads_page") == "all_pages"){       
           $enquiry->company_id = $request->cf_leads_companyenq != '' ? Company::where('comp_name',$request->cf_leads_companyenq)->first()->id : ''; 
           $subject_admin =  'Enquiry by '.$request->company.' for '.$request->cf_leads_companyenq .' |   Plantautomation Technology';
           $subject_client =  $request->cf_leads_companyenq.' - Enquiry Submitted | Plantautomation Technology';
      }
       elseif($request->input("cf_leads_page") == "product view"){       
         $enquiry->company_id = $request->cf_leads_companyenq != '' ? Company::where('comp_name',$request->cf_leads_companyenq)->first()->id : ''; 
           $subject_admin =  'Enquiry  Plantautomation Technology';
           $subject_client =  ' Enquiry Submitted |  Plantautomation Technology';
      }
    
        else{
            $subject_admin = 'New Event Registration by ' .$request->input("firstname");
            $subject_client = ''.$event_display.$request->input('event_type').' - Enquiry Submitted | Plantautomation Technology';
        }
    $product =  $request->input("product_id") == ''?'': Product::find($request->input("product_id"));
    $enquiry->name = $request->firstname.' '. $request->lastname;   
    $enquiry->page = $request->input("cf_leads_page");
    $enquiry->country = $request->input("cf_leads_countryname");
    $enquiry->email = $request->input("email");
    $enquiry->company = $request->input("company");
    $enquiry->telephone = $request->input("mobile");
    $enquiry->message = $request->input("description");
    $enquiry->product_id = @$product->id;
    $enquiry->prod_name = @$product->title;
    $enquiry->source = @$request->source;
    $enquiry->title = $request->input("cf_leads_jobtitle");    
    $enquiry->save();
    /*Send email admin*/  
    $data = [
        'name'=>$request->firstname.' '. $request->lastname,
        'email'=>$request->input("email"),
        'company'=>$request->input("company"),
        'country'=>$request->input("cf_leads_countryname"),
        'phone'=>$request->input("mobile"),
        'description'=>$request->input("description"),
        'product'  =>$request->input("products"),
        'url'       =>$request->input("url"),
        'multiple_products' =>$pname,
        'multiproduct_admin' =>$pname,
        'event_name' => $event_display,
        'product_name' => @$product->title,
        'comp_name' =>$request->input('cf_leads_companyenq'),
        'job_title' =>$request->input('cf_leads_jobtitle'),
        'url_seg'=>$request->input('url_seg'),
        'page' =>$request->input('cf_leads_page'),
        'subject_admin' =>$subject_admin,
        'subject_client' =>$subject_client
    ];
    /*Admin mail*/
    if($request->input("cf_leads_page") == "all_pages"){
        
        
       Mail::send('emails.productall.admin',$data,function($message) use ($data){
         $message->to(trans('messages.enquiry-email'));
       // $message->to('pushpalatha@ochre-media.com');
          if($data['product_name'] != ''){
                $message->subject('Enquiry by '.$data['company'].' for '.$data['product_name'] .' | ' .$data['comp_name'].' | Plantautomation Technology');
            }else{
                $message->subject('Enquiry by '.$data['company'].' for '.$data['comp_name'] .' | Plantautomation Technology');
            }
      });
       /*Client Mail*/
       Mail::send('emails.productall.client', $data, function($message) use ($data) {
        $message->to($data['email']);

        $message->subject($data['comp_name'].' - Enquiry Submitted | Plantautomation Technology');
    });
      $companyenquiry = \URL::previous().'/enquiry-success';
    //   Session::flash('message_type', 'success');
    //   Session::flash('message_icon', 'checkmark');
    //   Session::flash('message_header', 'Success');
    //   Session::flash('message', 'Thank you for your interest in <strong>'.$request->input('cf_leads_companyenq').'</strong> .  Your enquiry was successfully generated. Our client success team will get back to you for further steps.
    //     <br/> Happy Surfing!
    //     ');
    //   return Redirect::to($redirect);
    return Redirect::to($companyenquiry)->with(['requiry_thank_message'=>'Thank you for your interest in  '.$request->input('cf_leads_product').' from '.$request->input('cf_leads_companyenq').'Your enquiry was successfully generated. Our client success team will get back to you for further steps.Happy Surfing!']);
   }

   if($request->input("cf_leads_page") == "product view"){
    Mail::send('emails.product.admin', $data, function($message) use ($data) {
        //$message->to(trans('messages.enquiry-email'));
      // $message->to('pushpalatha@ochre-media.com');
        $message->to(trans('messages.enquiry-email'));
        $message->subject('Enquiry by '.$data['company'].' for '.$data['product_name'] .' | ' .$data['comp_name'].' | Plantautomation Technology');
    });
    /*Client Mail*/
    Mail::send('emails.product.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject(''.$data['product_name']. ' | '.$data['comp_name'].' - Enquiry Submitted | Plantautomation Technology');
    });
    Session::flash('message_type', 'success');
       Session::flash('message_icon', 'checkmark');
       Session::flash('message_header', 'Success');
       Session::flash('message', 'Thank you for your interest in <strong>'.$request->input('cf_leads_companyenq').'</strong> .  Your enquiry was successfully generated. Our client success team will get back to you for further steps.
        <br/> Happy Surfing!
        ');
     Session::flash('status', 'Thank you for your interest in <strong>'.$request->input('cf_leads_product').'</strong> from <strong>'.$request->input('cf_leads_companyenq').'</strong> Your enquiry was successfully generated. Our client success team will get back to you for further steps.
         Happy Surfing!
         ');
    return Redirect::back();
   }
    elseif($request->input("cf_leads_page") == "profile"){
    Mail::send('emails.multiple-products.admin', $data, function($message) use ($data) {
        $message->to(trans('messages.enquiry-email'));
        $message->subject('Enquiry by '.$data['company'].' for '.$data['comp_name'] .' | Plantautomation Technology');
    });
    /*Client Mail*/
    Mail::send('emails.multiple-products.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject(''.$data['comp_name'].' - Enquiry Submitted | Plantautomation Technology');
    });
    Session::flash('', 'success');
    Session::flash('message_icon', 'checkmark');
    Session::flash('message_header', 'Success');
    Session::flash('message', "Thank you for your interest in ".$data['comp_name'].".Your enquiry was successfully generated. Our client success team will get back to you for further verification. <br />Happy Surfing!");
    }
    elseif($request->input("cf_leads_page") == "event-brochure" || $request->input("cf_leads_page") == "event-exhibitors" ||$request->input("cf_leads_page") == "event-Gallery" ||$request->input("cf_leads_page") == "event-pressrealese" || $request->input("cf_leads_page") == "event_profile" || $request->input("cf_leads_page") == "event-speaker" || $request->input("cf_leads_page") == "event_partner"){
         Mail::send('emails.event-details.admin', $data, function($message) use ($data) {
            $message->to(trans('messages.subscribe-email'));
            $message->subject($data['subject_admin']);
    });
    /*Client Mail*/
    Mail::send('emails.event-details.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject($data['subject_client']);
    });
    if($request->input("cf_leads_page") == "event_profile"){
        Session::flash('message', ' You have successfully registered for this event. Thank you for your interest in <strong>'.$data['event_name'].'</strong>. Your details will be duly sent to the organizer.');
    }
    elseif($request->input("cf_leads_page") == "event_partner"){
     Session::flash('message', 'Thank you for exploring partnership possibilities at <strong>'.$data['event_name'].'</strong> Our Client Verification Team will get back to you to take this ahead.');
    }
    elseif($request->input("cf_leads_page") == "event-speaker"){
    Session::flash('message', 'Thank you for exploring the possibility of being a Speaker in <strong>'.$data['event_name'].'</strong>. Your enquiry was successfully generated. Our client success team will assist you to take this ahead.');
   }
    elseif($request->input("cf_leads_page") == "event-exhibitors"){
        
        Session::flash('message', 'Thank you for exploring the possibilities of exhibiting in '.$data['event_name'].'. Your enquiry was successfully generated. Our client success team will get back to you for further steps.');
    }
    else{

        Session::flash('message', 'You have successfully registered for this event. Thank you for your interest in <strong>'.$data['event_name'].'</strong>. Your details will be duly sent to the organizer.');
    }
    Session::flash('message_type', 'success');
    Session::flash('message_icon', 'checkmark');
    Session::flash('message_header', 'Success');
    return redirect()->back()->with('status','success');
    }
    else{
         Mail::send('emails.product-pages.admin', $data, function($message) use ($data) {
             $message->to(trans('messages.enquiry-email'));
           $message->subject('Enquiry by '.$data['company'].' for '.$data['product_name'].' | '.$data['product_name'].' | Plantautomation Technology');
        });
     /*Client Mail*/
         Mail::send('emails.product-pages.client', $data, function($message) use ($data) {
            $message->to($data['email']);
            $message->subject(''.$data['company'].' - Enquiry Submitted | Plantautomation Technology');
        });
         Session::flash('message_type', 'success');
         Session::flash('message_icon', 'checkmark');
         Session::flash('message_header', 'Success');
         Session::flash('message', "Success! You have successfully posted your Enquiry.");
    }
    if($request->input("cf_leads_page") == "suppliers"){
        Mail::send('emails.postrequirement.admin', $data, function($message) use ($data) {
            $message->to('omplenquiry@ochre-media.com');
            $message->subject('Enquiry by '.$data['email'].' Generated for '.$data['product'].'|'.$data['product'].'');
        });
        /*Client Mail*/
        Mail::send('emails.postrequirement.client', $data, function($message) use ($data) {
            $message->to($data['email']);
            $message->subject(''.$data['company'].' - Enquiry Submitted | Plantautomation Technology');
        });
        Session::flash('message_type', 'success');
        Session::flash('message_icon', 'checkmark');
        Session::flash('message_header', 'Success');
        Session::flash('message', "Success! You have successfully posted your Enquiry.");

    }
    return redirect()->back()->with('status','success');
    // }
    // else{
    //     return redirect()->to('/');
    // }
}

  public function askquestion(Request $request)
  {
     if(isset($_POST['g-recaptcha-ask-response'])) {
           $captcha = $_POST['g-recaptcha-ask-response'];
      } else {
           $captcha = false;
      }
    if($this->checkgooglecaptha($captcha) == true){
  	$enquiry = new CompanyEnquiry();
  	$enquiry->name = $request->firstname.' '. $request->lastname;
  	$enquiry->page = $request->input("cf_leads_page");
  	$enquiry->country = $request->input("cf_leads_countryname");
  	$enquiry->email = $request->input("email");
  	$enquiry->company = $request->input("company");
  	$enquiry->telephone = $request->input("mobile");
  	$enquiry->message = $request->input("description");
  	$enquiry->title = $request->input("cf_leads_jobtitle");    
    $enquiry->title = $request->input("cf_leads_companyenq");    
  	$enquiry->save();
  	$data = [
  		'name'=>$request->firstname.' '. $request->lastname,
  		'email'=>$request->input("email"),
  		'company'=>$request->input("company"),
  		'country'=>$request->input("cf_leads_countryname"),
  		'phone'=>$request->input("mobile"),
  		'description'=>$request->input("description"),
  		'url'       =>$request->input("url"),
  		'comp_name' =>$request->input('cf_leads_companyenq'),
  		'job_title' =>$request->input('cf_leads_jobtitle'),
  		'url_seg'=>$request->input('url_seg'),
  		'page' =>$request->input('cf_leads_page'),
  		'subject_client' =>  ucfirst($request->firstname).' '. ucfirst($request->lastname)." Your Query (RFI) was  Successfully Submitted",
  		'subject_admin' =>  ucfirst($request->firstname).' '. ucfirst($request->lastname)." - Generated Query (RFI) for ".$request->cf_leads_companyenq,
  	];

  	Mail::send('emails.question.admin', $data, function($message) use ($data) {
           $message->to(trans('messages.enquiry-email'));
        //    $message->to('pushpalatha@ochre-media.com');
  		$message->subject($data['subject_admin']);
  	});
  	/*Client Mail*/
  	Mail::send('emails.question.client', $data, function($message) use ($data) {
  		$message->to($data['email']);
  		$message->subject($data['subject_client']);
  	});
  	Session::flash('message_type', 'success');
  	Session::flash('message_icon', 'checkmark');
  	Session::flash('message_header', 'Success');
  	Session::flash('message', "Success! Your Query (RFI) was  Successfully Submitted.");
  	return redirect()->back()->with('askquestion','success');
  }else{
    return redirect()->to('/');
  }
}  

//Post your requirement from company profile
 public function postrequirementCompany(Request $request)
 {
      if(isset($_POST['g-recaptcha-post-response'])) {
           $captcha = $_POST['g-recaptcha-post-response'];
      } else {
           $captcha = false;
      }
    if($this->checkgooglecaptha($captcha) == true){
        $form = new Form();      
        $form->name = $request->firstname .' '.$request->lastname;
        $form->email = $request->input("email");
        $form->company = $request->input("company");
        $form->phone = $request->input("mobile");
        $form->message = $request->input("description");
        $form->type = "post-requirement";
        $form->title = $request->input("cf_leads_jobtitle");
        $form->save();
        /*Send email admin*/  
        $data = [
            'name'=> $request->firstname .' '.$request->lastname,
            'email'=>$request->input("email"),
            'company'=>$request->input("company"),
            'phone'=>$request->input("mobile"),
            'description'=>$request->input("description")];
        /*Admin mail*/
        Mail::send('emails.postrequirement.admin', $data, function($message) use ($data) {
        $message->to('omplenquiry@ochre-media.com');
        //$message->to('pushpalatha@ochre-media.com');
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
        return redirect()->back()->with('requirement','success');
      }else{
        return redirect()->to('/');
      }
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
