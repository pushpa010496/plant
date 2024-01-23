<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Request;
use App\Http\Controllers\Controller;

use App\Form;
use Auth;
use App\Article;
use App\News;
use App\Interview;
use App\Pressrelease;
use App\Report;
use App\Whitepaper;
use App\CompanyWhitepaper;
//use Illuminate\Http\Request;
use \Session;
use \DB;
use \Mail;
use App\Banner;
use SEOMeta;
use OpenGraph;
use Twitter;
use App\Productlaunch;
use Artesaos\SEOTools\Facades\TwitterCard;

## or
use SEO;
use App\SeoPage;
use App\Http\Requests\CommanRequest;
use Analytics;
use Spatie\Analytics\Period;
use App\Xmlpharse;

class IndustryControllerNew extends Controller
{
   public function newpublishNews(Request $request)
    {
        dd(111);
            $news =new Form();
            $news->email = ucfirst($request->input("email"));
            $news->name = ucfirst($request->firstname.' '.$request->lastname);      
            $news->phone = ucfirst($request->input("mobile"));   
            $news->company = ucfirst($request->input("company"));       
            $news->message = ucfirst($request->input("description"));  
            $news->title = ucfirst($request->input("cf_leads_jobtitle"));       
            $news->type = ucfirst($request->input("type"));  
            // $news->save();
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
    
            // Mail::send('emails.news-press.news-publish', $data, function($message) use ($data) {
            // $message->to(trans('messages.subscribe-email'));
            // $message->subject($data['subject']);
            // });
            //  /*Client Mail*/
            //  Mail::send('emails.news-press.news-publish-client', $data, function($message) use ($data) {
            //     $message->to($data['email']);
            //     $message->subject('Thank You!');
            // });
            dd(111);
            //  Session::flash('message_type', 'success');
            //   return redirect()->back()->with('status','success');
     }
}
