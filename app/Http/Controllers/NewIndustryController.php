<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
use \Session;
use \DB;
use \Mail;
use Illuminate\Support\Facades\Redirect;
use App\Banner;
use App\Article;
use App\Interview;
use App\CompanyWhitepaper;
use App\Whitepaper;

class NewIndustryController extends Controller
{



    public function submitNews(Request $request)
    {
        
        if (isset($_POST['g-recaptcha-response'])) {
            $captcha = $_POST['g-recaptcha-response'];
       } else {
            $captcha = false;
       }
        if (\Request::isMethod('post') && $this->checkgooglecaptha($captcha) == true) {
             $news =new Form();
             $news->email = ucfirst($request->input("email"));
             $news->name = ucfirst($request->firstname.' '.$request->lastname);      
             $news->phone = ucfirst($request->input("mobile"));   
             $news->company = ucfirst($request->input("company"));       
             $news->message = ucfirst($request->input("description"));  
             $news->title = ucfirst($request->input("cf_leads_jobtitle"));       
             $news->type = ucfirst($request->input("type"));  
             $news->save();
             $data = [
                  'email'=>$request->input("email"),
                  'name'=>$request->firstname.' '.$request->lastname,
                  'first_name'=>$request->firstname,
                  'last_name'=>$request->lastname,
                 'phone'=>$request->input("mobile"),
                 'designation'=>$request->input("cf_leads_jobtitle"),
                 'company'=>$request->input("company"),
                 'subject'=>$request->input("subject").ucfirst($request->firstname.' '.$request->lastname),
                 'client_subject'=>$request->input("client_subject"),
                 'types' =>$request->input("type"),
                 'type'=>$request->input("type"),
                 'description'=>$request->input("description")];
                 //$this->bitrixLeadApi($data);
     
             Mail::send('emails.news-press.news-publish', $data, function($message) use ($data) {
           $message->to('subscribe@ochre-media.com');
                 // $message->to('pushpalatha@ochre-media.com');
             $message->subject($data['subject']);
             });
              /*Client Mail*/
              Mail::send('emails.news-press.news-publish-client', $data, function($message) use ($data) {
                 $message->to($data['email']);
                 $message->subject('Thank You!');
             });
             // Session::flash('message_type', 'success');
         }
         $news = DB::table('news')->where('active_flag', 1)->orderBy('created_at', 'desc')->take(8)->get();
         $data_count = DB::table('news_xml')->where('active_flag', 1)->orderBy('id', 'desc')->count();
        
         $time = \Carbon\Carbon::now()->format('Y-m-d');
         $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();  
          $sliders = DB::select('CALL Get_sliders()');        
         return view('industry.news' ,compact('banner1314','data_count','sliders','news'));
         

    }
    public function submitArticles(Request $request)
    {
          if (\Request::isMethod('post')) {
           $news =new Form();
            $news->email = ucfirst($request->input("email"));
            $news->name = ucfirst($request->firstname.' '.$request->lastname);      
            $news->phone = ucfirst($request->input("mobile"));   
            $news->company = ucfirst($request->input("company"));       
            $news->message = ucfirst($request->input("description"));  
            $news->title = ucfirst($request->input("cf_leads_jobtitle"));       
            $news->type = ucfirst($request->input("type"));  
            $news->save();
            $data = [
                 'email'=>$request->input("email"),
                 'name'=>$request->firstname.' '.$request->lastname,
                 'first_name'=>$request->firstname,
                 'last_name'=>$request->lastname,
                'phone'=>$request->input("mobile"),
                'designation'=>$request->input("cf_leads_jobtitle"),
                'company'=>$request->input("company"),
                'subject'=>$request->input("subject").ucfirst($request->firstname.' '.$request->lastname),
                'client_subject'=>$request->input("client_subject"),
                'types' =>$request->input("type"),
                'type'=>$request->input("type"),
                'description'=>$request->input("description")];
                //$this->bitrixLeadApi($data);
    
            Mail::send('emails.news-press.news-publish', $data, function($message) use ($data) {
            $message->to('subscribe@ochre-media.com');
         //  $message->to('pushpalatha@ochre-media.com');
            $message->subject($data['subject']);
            });
             /*Client Mail*/
             Mail::send('emails.news-press.news-publish-client', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject('Thank You!');
            });
             Session::flash('message_type', 'success');
        }
        $article = Article::where('active_flag', 1)->orderBy('id', 'desc')->get()->take(8);
         $data_count = Article::where('active_flag', 1)->orderBy('date', 'desc')->count(); 
        $time = \Carbon\Carbon::now()->format('Y-m-d');
        $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();  
        $sliders=DB::select('CALL Get_sliders()');      
        return view('industry.article' ,compact('article','banner1314','data_count','sliders'));
        
    }
    public function submitInterviews(Request $request)
    {
        if (isset($_POST['g-recaptcha-response'])) {
            $captcha = $_POST['g-recaptcha-response'];
       } else {
            $captcha = false;
       }
          if (\Request::isMethod('post') && $this->checkgooglecaptha($captcha) == true) {
           $news =new Form();
            $news->email = ucfirst($request->input("email"));
            $news->name = ucfirst($request->firstname.' '.$request->lastname);      
            $news->phone = ucfirst($request->input("mobile"));   
            $news->company = ucfirst($request->input("company"));       
            $news->message = ucfirst($request->input("description"));  
            $news->title = ucfirst($request->input("cf_leads_jobtitle"));       
            $news->type = ucfirst($request->input("type"));  
            $news->save();
            $data = [
                 'email'=>$request->input("email"),
                 'name'=>$request->firstname.' '.$request->lastname,
                 'first_name'=>$request->firstname,
                 'last_name'=>$request->lastname,
                'phone'=>$request->input("mobile"),
                'designation'=>$request->input("cf_leads_jobtitle"),
                'company'=>$request->input("company"),
                'subject'=>$request->input("subject").ucfirst($request->firstname.' '.$request->lastname),
                'client_subject'=>$request->input("client_subject"),
                'types' =>$request->input("type"),
                'type'=>$request->input("type"),
                'description'=>$request->input("description")];
                //$this->bitrixLeadApi($data);
    
            Mail::send('emails.news-press.news-publish', $data, function($message) use ($data) {
           $message->to('subscribe@ochre-media.com');
                // $message->to('pushpalatha@ochre-media.com');
            $message->subject($data['subject']);
            });
             /*Client Mail*/
             Mail::send('emails.news-press.news-publish-client', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject('Thank You!');
            });
             Session::flash('message_type', 'success');
        }
        $interview = Interview::where('active_flag', 1)->orderBy('id', 'desc')->get()->take(8);  
        $data_count = Interview::where('active_flag', 1)->orderBy('id', 'desc')->count(); 
        $time = \Carbon\Carbon::now()->format('Y-m-d');
        $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();  
         $sliders = DB::select('CALL Get_sliders()');        
        return view('industry.interview' ,compact('interview','banner1314','data_count','sliders'));
        
    }
    public function submitPressreleases(Request $request)
    {
        if (isset($_POST['g-recaptcha-response'])) {
            $captcha = $_POST['g-recaptcha-response'];
       } else {
            $captcha = false;
       }
          if (\Request::isMethod('post') && $this->checkgooglecaptha($captcha) == true) {
           $news =new Form();
            $news->email = ucfirst($request->input("email"));
            $news->name = ucfirst($request->firstname.' '.$request->lastname);      
            $news->phone = ucfirst($request->input("mobile"));   
            $news->company = ucfirst($request->input("company"));       
            $news->message = ucfirst($request->input("description"));  
            $news->title = ucfirst($request->input("cf_leads_jobtitle"));       
            $news->type = ucfirst($request->input("type"));  
            $news->save();
            $data = [
                 'email'=>$request->input("email"),
                 'name'=>$request->firstname.' '.$request->lastname,
                 'first_name'=>$request->firstname,
                 'last_name'=>$request->lastname,
                'phone'=>$request->input("mobile"),
                'designation'=>$request->input("cf_leads_jobtitle"),
                'company'=>$request->input("company"),
                'subject'=>$request->input("subject").ucfirst($request->firstname.' '.$request->lastname),
                'client_subject'=>$request->input("client_subject"),
                'types' =>$request->input("type"),
                'type'=>$request->input("type"),
                'description'=>$request->input("description")];
                //$this->bitrixLeadApi($data);
    
            Mail::send('emails.news-press.news-publish', $data, function($message) use ($data) {
            $message->to('subscribe@ochre-media.com');
               //  $message->to('pushpalatha@ochre-media.com');
            $message->subject($data['subject']);
            });
             /*Client Mail*/
             Mail::send('emails.news-press.news-publish-client', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject('Thank You!');
            });
             Session::flash('message_type', 'success');
        }
         $pressrelease = DB::table('news_xml')->where('active_flag', 1)->orderBy('created_at', 'desc')->take(8)->get();
         $data_count = DB::table('news_xml')->where('active_flag', 1)->orderBy('id', 'desc')->count();
        $time = \Carbon\Carbon::now()->format('Y-m-d');
        $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();  
        $sliders=DB::select('CALL Get_sliders()');      
        return view('industry.pressrelease' ,compact('pressrelease','banner1314','data_count','sliders'));
        
    }
    public function submitWhitepapers(Request $request)
    {
        if (isset($_POST['g-recaptcha-response'])) {
            $captcha = $_POST['g-recaptcha-response'];
       } else {
            $captcha = false;
       }
          if (\Request::isMethod('post') && $this->checkgooglecaptha($captcha) == true) {
           $news =new Form();
            $news->email = ucfirst($request->input("email"));
            $news->name = ucfirst($request->firstname.' '.$request->lastname);      
            $news->phone = ucfirst($request->input("mobile"));   
            $news->company = ucfirst($request->input("company"));       
            $news->message = ucfirst($request->input("description"));  
            $news->title = ucfirst($request->input("cf_leads_jobtitle"));       
            $news->type = ucfirst($request->input("type"));  
            $news->save();
            $data = [
                 'email'=>$request->input("email"),
                 'name'=>$request->firstname.' '.$request->lastname,
                 'first_name'=>$request->firstname,
                 'last_name'=>$request->lastname,
                'phone'=>$request->input("mobile"),
                'designation'=>$request->input("cf_leads_jobtitle"),
                'company'=>$request->input("company"),
                'subject'=>$request->input("subject").ucfirst($request->firstname.' '.$request->lastname),
                'client_subject'=>$request->input("client_subject"),
                'types' =>$request->input("type"),
                'type'=>$request->input("type"),
                'description'=>$request->input("description")];
                //$this->bitrixLeadApi($data);
    
            Mail::send('emails.news-press.news-publish', $data, function($message) use ($data) {
           $message->to('subscribe@ochre-media.com');
             //    $message->to('pushpalatha@ochre-media.com');
            $message->subject($data['subject']);
            });
             /*Client Mail*/
             Mail::send('emails.news-press.news-publish-client', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject('Thank You!');
            });
             Session::flash('message_type', 'success');
        }
        //  $cmp_whitepapers = CompanyWhitepaper::where('active_flag', 1)->orderBy('id', 'desc')->get();  
        $whitepaper = Whitepaper::where('active_flag', 1)->orderBy('id', 'desc')->get()->take(8);  
        $data_count = Whitepaper::where('active_flag', 1)->orderBy('id', 'desc')->count(); 
        $time = \Carbon\Carbon::now()->format('Y-m-d');
        $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();  
        $sliders=DB::select('CALL Get_sliders()');      
        return view('industry.whitepaper' ,compact('whitepaper','banner1314','data_count','sliders'));
        
    }

    public function checkgooglecaptha($token)
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
