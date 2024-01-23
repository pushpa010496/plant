<?php

namespace App\Http\Controllers;

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\Webinar;
use App\WebinarData;
use \DB;
use \Mail;
use App\Banner;
use App\SeoPage;
use SEOMeta;
use OpenGraph;
use Twitter;
use App\CompanyProfile;
use Artesaos\SEOTools\Facades\TwitterCard;


## or
use SEO;
use Analytics;

class WebinarController extends HomeController
{

   
      public function index()
    {
        $time = \Carbon\Carbon::now()->format('Y-m-d');
        $upcome=Webinar::where('active_flag',1)->where('webinar_date', '>=' , $time)->orderBy('webinar_date','asc')->get();
        $complete=Webinar::where('active_flag',1)->where('webinar_date', '<' , $time)->orderBy('webinar_date','desc')->get();
        $data = Webinar::where('active_flag',1)->orderBy('webinar_date','desc')->get();
        $seo = SeoPage:: whereHas('seopages' , function($query) {
        $query->where('title','webinars');})->where('active_flag',1)->get();
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta('article:published_time', $value->created_at->toW3CString(), 'property');
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
        $time = \Carbon\Carbon::now()->format('Y-m-d');
        $banner1314= $this->banner = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();
          
        return view('webinars.index',compact('data','upcome','complete','banner1314'));
    }


    public function driving(Request $request)
    {


         $countries = DB::table('countries')->get();
            if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
        //return "page is under development";
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
            $form->save();
            /*Send email admin*/
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'Plantautomation Technology',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                
                'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                'client_message'=>$request->client_message,
                'subject_client' =>'Thank you for your interest in 5G driving webinar.',
                'subject_admin' => "5G driving webinar registrations |".$request->email."| PAT - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
              $message->to(trans('messages.adminemail'));     
              $message->to('omplenquiry@ochre-media.com');            
                $message->subject($data['subject_admin']);
            });
           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
        /* return redirect()->route('psiwebinar.success')->with(['thank_message'=>$request->input('thank_message')]);*/

       return view('webinars.suezozonia.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  webinar video . Happy Surfing. "]);

        }    
        return view('webinars.suezozonia.index',compact('countries'));
    }



    public function productionizing(Request $request)
    {


        $countries = DB::table('countries')->get();
            if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
       
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
            $form->save();
            /*Send email admin*/
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'Plantautomation Technology',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                
                'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                'client_message'=>$request->client_message,
                'subject_client' =>'Thank you for your interest in productionizing webinar.',
                'subject_admin' => "Productionizing webinar registrations |".$request->email."| PAT - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
             //$message->to(trans('messages.adminemail'));     
             $message->to('omplenquiry@ochre-media.com');            
                $message->subject($data['subject_admin']);
            });
           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
        /* return redirect()->route('psiwebinar.success')->with(['thank_message'=>$request->input('thank_message')]);*/

       return view('webinars.productionizing.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  webinar video of productionizing. Happy Surfing. "]);

        }    
        return view('webinars.productionizing.index',compact('countries'));
    }


     public function ups(Request $request)
    {


        $countries = DB::table('countries')->get();
            if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
       /*  return "page is under development";*/
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
            $form->save();
            /*Send email admin*/
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'Plantautomation Technology',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                
                'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                'client_message'=>$request->client_message,
                'subject_client' =>'Thank you for your interest in Enabling The Future Of The Global Smart Logistics Network webinar.',
                'subject_admin' => "Enabling The Future Of The Global Smart Logistics Network webinar registrations |".$request->email."| PAT - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
              $message->to(trans('messages.adminemail'));     
               $message->to('omplenquiry@ochre-media.com');              
                $message->subject($data['subject_admin']);
            });
           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
        /* return redirect()->route('psiwebinar.success')->with(['thank_message'=>$request->input('thank_message')]);*/

       return view('webinars.ups.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  webinar video of psi. Happy Surfing. "]);

        }    
        return view('webinars.ups.index',compact('countries'));
    }





public function yokogawa(Request $request)
    {


        $countries = DB::table('countries')->get();
            if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
         //return "page is under development";
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
            $form->save();
            /*Send email admin*/
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'Plantautomation Technology',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                
                'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                'client_message'=>$request->client_message,
                'subject_client' =>'Thank you for your interest in Yokogawa  webinar.',
                'subject_admin' => "Yokogawa  webinar registrations |".$request->email."| PAT - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
              // $message->to(trans('messages.adminemail'));     
              $message->to('omplenquiry@ochre-media.com');             
                $message->subject($data['subject_admin']);
            });
           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
        /* return redirect()->route('psiwebinar.success')->with(['thank_message'=>$request->input('thank_message')]);*/

       return view('webinars.yokogawa.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  webinar video of yokogawa"]);

        }    
        return view('webinars.yokogawa.index',compact('countries'));
    }


    public function mtdg(Request $request)
    {


        $countries = DB::table('countries')->get();
            if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
         /* return "page is under development";*/
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
            $form->save();
            /*Send email admin*/
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'Plantautomation Technology',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                
                'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                'client_message'=>$request->client_message,
                'subject_client' =>'Thank you for your interest in Creating a prototype additive manufacturing supply chain including a cyber secure digital transport system webinar.',
                'subject_admin' => "Creating a prototype additive manufacturing supply chain including a cyber secure digital transport system webinar registrations |".$request->email."| PAT - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
              // $message->to(trans('messages.adminemail'));     
             $message->to('omplenquiry@ochre-media.com');            
                $message->subject($data['subject_admin']);
            });
           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
        /* return redirect()->route('psiwebinar.success')->with(['thank_message'=>$request->input('thank_message')]);*/

       return view('webinars.mtdg.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  webinar video of psi. Happy Surfing. "]);

        }    
        return view('webinars.mtdg.index',compact('countries'));
    }


        public function joachim(Request $request)
    {


        $countries = DB::table('countries')->get();
            if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
         /* return "page is under development";*/
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
            $form->save();
            /*Send email admin*/
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'Plantautomation Technology',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                
                'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                'client_message'=>$request->client_message,
                'subject_client' =>'Thank you for your interest in the transition of manufacturing areas into the 21st century.',
                'subject_admin' => "The transition of manufacturing areas into the 21st century webinar registrations |".$request->email."| PAT - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
              //$message->to(trans('messages.adminemail'));     
                $message->to('omplenquiry@ochre-media.com');            
                $message->subject($data['subject_admin']);
            });
           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
        /* return redirect()->route('psiwebinar.success')->with(['thank_message'=>$request->input('thank_message')]);*/

       return view('webinars.joachim.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  webinar video of joachim. Happy Surfing. "]);

        }    
        return view('webinars.joachim.index',compact('countries'));
    }


    public function infogain(Request $request)
    {


        $countries = DB::table('countries')->get();
            if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
         /* return "page is under development";*/
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
            $form->save();
            /*Send email admin*/
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'Plantautomation Technology',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                
                'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                'client_message'=>$request->client_message,
                'subject_client' =>'Thank you for your interest in Predictive Maintenance with IoT and Data Analytics – Challenges and Solution',
                'subject_admin' => "Predictive Maintenance with IoT and Data Analytics – Challenges and Solution |".$request->email."| PAT - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
              //$message->to(trans('messages.adminemail'));     
                $message->to('omplenquiry@ochre-media.com');            
                $message->subject($data['subject_admin']);
            });
           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
        /* return redirect()->route('psiwebinar.success')->with(['thank_message'=>$request->input('thank_message')]);*/

       return view('webinars.infogain.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  webinar video of joachim. Happy Surfing. "]);

        }    
        return view('webinars.infogain.index',compact('countries'));
    }


    public function orange(Request $request)
    {


        $countries = DB::table('countries')->get();
            if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
         /* return "page is under development";*/
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
            $form->save();
            /*Send email admin*/
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'Plantautomation Technology',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                
                'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                'client_message'=>$request->client_message,
                'subject_client' =>'Thank you for your interest in IoT Platforms mange and create by Telecom as a main driver of IoT – use case of Live Object',
                'subject_admin' => "IoT Platforms mange and create by Telecom as a main driver of IoT – use case of Live Object|".$request->email."| PAT - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
              //$message->to(trans('messages.adminemail'));     
                $message->to('omplenquiry@ochre-media.com');            
                $message->subject($data['subject_admin']);
            });
           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
        /* return redirect()->route('psiwebinar.success')->with(['thank_message'=>$request->input('thank_message')]);*/

       return view('webinars.orange.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  webinar video of joachim. Happy Surfing. "]);

        }    
        return view('webinars.orange.index',compact('countries'));
    }
   
    
   public function KelvinIncFutureOfDigitalPAT(Request $request){
    $countries = DB::table('countries')->get();
    return view('webinars.kelvin-inc-future-of-digital-pat.index',compact('countries'));
   }
}
