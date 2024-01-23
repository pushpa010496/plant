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
use App\CompanyWhitePaper;
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

class IndustryController extends Controller
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
    public function article(Request $request)
    {   
        $seo = SeoPage:: whereHas('seopages' , function($query) {
        $query->where('title',Request::segment('1'));})->where('active_flag',1)->get();
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
            OpenGraph::addProperty('type', 'article');
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
        $article = Article::where('active_flag', 1)->orderBy('id', 'desc')->get()->take(8);
         $data_count = Article::where('active_flag', 1)->orderBy('date', 'desc')->count(); 
        $banner1314 = $this->banner;  
        $sliders=DB::select('CALL Get_sliders()');      
        return view('industry.article' ,compact('article','banner1314','data_count','sliders'));
    }  
    public function more($offset){

         $data = Article::where('active_flag',1)->orderBy('id','desc') ->offset($offset)->limit(8)->get();
         return response(view('industry.loadmore', compact('data'))->render());

    }
   public function articleview($articleurl)
    {       
       $analyticsData = Analytics::fetchMostVisitedPages(Period::days(7),500);       
       $query = [];
       foreach($analyticsData as $data){        
        if(substr($data['url'], 1, 8) == 'articles' ){
            $url = ltrim($data['url'], '/articles/');
            if($url != ''){                
                $query[] =$url;   
            }    
        }
       }
         $top_viewed_articles =  DB::table('articles')->whereIn('article_url',$query)->where('small_image','!=','')->take(7)->get();

           $article = Article::where('active_flag', 1)->where('article_url',$articleurl)->get();
          $realted_articles = Article::where('active_flag','1')->where('small_image','!=','')->take(50)->get()->random(3);
          //print_r($realted_articles);die();
          foreach ($article as $value) {
            SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta('article:published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->og_title);
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'article');
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
      if(count($article) == 0){
            return view('errors.404');
        }
        $banner1314 = $this->banner;
        return view('industry.articleview' ,compact('article','realted_articles','top_viewed_articles','banner1314'));
    } 
    public function news()
    {
        $currentYear = date('Y');
            $lastYear = $currentYear-1;
        $seo = SeoPage:: whereHas('seopages' , function($query) {

        $query->where('title',Request::segment('1'));})->where('active_flag',1)->get();
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta('news:published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->og_title);
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'news');
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
        $news = News::where('active_flag', 1)->whereBetween('created_at', [$lastYear.'-01-01', $currentYear.'-12-31'])->orderBy('date', 'desc')->get();    
        $banner1314 = $this->banner;   
         $sliders=DB::select('CALL Get_sliders()');  
        return view('industry.news' ,compact('news','banner1314','sliders'));
    }  
    public function newsview($newsurl)
    {       
        $news = News::where('active_flag', 1)->where('news_url',$newsurl)->get();
         foreach ($news as $value) {
            SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);           
            SEOMeta::addMeta('interview:published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->og_title);
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'news');
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
            if(count($news) == 0){
            return view('errors.404');
        }
        //Google analytics
             $analyticsData = Analytics::fetchMostVisitedPages(Period::days(7),500);    
          
               $query = [];

               foreach($analyticsData as $data){        
                if(substr($data['url'], 1, 4) == 'news' ){
                    $url = ltrim($data['url'], '/news/');
                    if($url != ''){                        
                        $query[] =$url;   
                    }    
                }
               }
             //  dd($query);
        $count_top_news = DB::table('news')->whereIn('news_url',$query)->take(100)->get();
       // dd($count_top_news);
        $top_news = DB::table('news')->whereIn('news_url',$query)->take(100)->get()->random(count($count_top_news));
          $banner1314 = $this->banner;    
        return view('industry.newsview' ,compact('news','top_news','banner1314'));
    } 
     public function pressrelease()
    {       
        
 
        $seo = SeoPage:: whereHas('seopages' , function($query) {
        $query->where('title',Request::segment('1'));})->where('active_flag',1)->get();
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta('pressrelease:published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->og_title);
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'pressrelease');
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
        $pressrelease = Xmlpharse::select('news_head','story_date','Data','news_url')->where('active_flag', 1)->orderBy('created_at', 'desc')->limit(8)->get();
         $data_count = Xmlpharse::select('news_head','story_date','Data')->where('active_flag', 1)->orderBy('id', 'desc')->count();
         //$pressrelease = Xmlpharse::select('news_head','story_date','Data')->where('type','prnews')->orderBy('id', 'desc')->get();
        $banner1314 = $this->banner;    
         $sliders=DB::select('CALL Get_sliders()'); 
        return view('industry.pressrelease' ,compact('pressrelease','banner1314','data_count','sliders'));
    }  
      public function morepressrelease($offset){

        $pressrelease =Xmlpharse::select('news_head','story_date','Data','news_url')->where('active_flag', 1)->orderBy('id', 'desc') ->offset($offset)->limit(8)->get();
         return response(view('industry.pressreleases_loadmore', compact('pressrelease'))->render());

    } 
    public function pressreleaseview($pressreleaseurl)
    {       

        /*$pressrelease = Pressrelease::where('active_flag', 1)->where('pressreleases_url',$pressreleaseurl)->get();*/
          $pressrelease =Xmlpharse::where('active_flag', 1)->where('news_url',$pressreleaseurl)->orderBy('id', 'desc')->limit(10)->get();
         foreach ($pressrelease as $value) {
             SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
         // SEOMeta::addMeta('article:published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);

            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->og_title);
             OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'pressrelease');
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
            if(count($pressrelease) == 0){
            return view('errors.404');
        }

        
        //Google analytics
             $analyticsData = Analytics::fetchMostVisitedPages(Period::days(7),500);    
          
               $query = [];

               foreach($analyticsData as $data){        
                if(substr($data['url'], 1, 13) == 'pressreleases' ){
                    $url = ltrim($data['url'], '/pressreleases/');
                    if($url != ''){                        
                        $query[] =$url;   
                    }    
                }
               }

        /*$top_pressrelease = DB::table('pressreleases')->whereIn('pressreleases_url',$query)->take(10)->get();*/
         $top_pressrelease = Xmlpharse::select('news_head','story_date','Data','news_url')->whereIn('news_url',$query)->limit(10)->get();
        if(count($top_pressrelease) < 6){

            $top_press = $top_pressrelease;
        } 
        else{
            $top_press = $top_pressrelease->random(6);
        }      
        $banner1314 = $this->banner;    
        return view('industry.pressreleaseview' ,compact('pressrelease','top_press','banner1314'));
    } 
     public function interview()
    {       
        $seo = SeoPage:: whereHas('seopages' , function($query) {
        $query->where('title',Request::segment('1'));})->where('active_flag',1)->get();
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta('interview:published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->og_title);
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'interview');
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
        $interview = Interview::where('active_flag', 1)->orderBy('id', 'desc')->get()->take(8);  
        $data_count = Interview::where('active_flag', 1)->orderBy('id', 'desc')->count(); 
        $banner1314 = $this->banner;   
         $sliders=DB::select('CALL Get_sliders()');        
        return view('industry.interview' ,compact('interview','banner1314','data_count','sliders'));
    }  
     public function moreinterview($offset){

        $data = Interview::where('active_flag',1)->orderBy('id','desc')->offset($offset)->limit(8)->get();
         return response(view('industry.interview_loadmore', compact('data'))->render());

    } 
    public function interviewview($interviewurl)
    {   
        $interview = Interview::where('interviews_url',$interviewurl)->get();
             foreach ($interview as $value) {
            SEOMeta::setTitle($value->name.' | '.$value->designation.' | '.$value->company.' | Plant Automation Technology');
            SEOMeta::setDescription(\Illuminate\Support\Str::words($value->description,23,'.'));
            SEOMeta::addMeta('interview:published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription(\Illuminate\Support\Str::words($value->description,23,'.'));
            OpenGraph::setTitle($value->name.' | '.$value->designation.' | '.$value->company.' | Plant Automation Technology');
             OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'interview');
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
            if(count($interview) == 0){
            return view('errors.404');
        }   
        $banner1314 = $this->banner;          
        return view('industry.interviewview' ,compact('interview','banner1314'));
    } 
    public function whitepaper()
    {       
     
        $seo = SeoPage:: whereHas('seopages' , function($query) {
        $query->where('title',Request::segment('1'));})->where('active_flag',1)->get();
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta('whitepaper:published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->og_title);
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'whitepaper');
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
        $cmp_whitepapers = CompanyWhitePaper::where('active_flag', 1)->orderBy('id', 'desc')->get();  
        $whitepaper = Whitepaper::where('active_flag', 1)->orderBy('id', 'desc')->get()->take(8);  
        $data_count = Whitepaper::where('active_flag', 1)->orderBy('id', 'desc')->count();
        $banner1314 = $this->banner;    
        $sliders=DB::select('CALL Get_sliders()');       
        
        return view('industry.whitepaper' ,compact('whitepaper','cmp_whitepapers','banner1314','data_count','sliders'));
    }  
     public function morewhitepapers($offset){

        $data = Whitepaper::where('active_flag',1)->orderBy('id','desc') ->offset($offset)->limit(8)->get();
         return response(view('industry.whitepaper_loadmore', compact('data'))->render());

    }
    public function whitepaperview($whitepaperurl)
    {       
        $whitepaper = Whitepaper::where('active_flag', 1)->where('whitepapers_url',$whitepaperurl)->get();
         foreach ($whitepaper as $value) {
             SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
            //SEOMeta::addMeta('article:published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);

            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->og_title);
             OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'whitepaper');
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
            if(count($whitepaper) == 0){
            return view('errors.404');
        }
        //Google analytics
             $analyticsData = Analytics::fetchMostVisitedPages(Period::days(7),500);    
          
               $query = [];

               foreach($analyticsData as $data){        
                if(substr($data['url'], 1, 12) == 'whitepapers/' ){                         
                    $url = substr($data['url'],13);                  
                    if($url != ''){
                        $query[] =$url;   
                    }    
                }
               }
             
             $top_whitepapers = DB::table('whitepapers')->whereIn('whitepapers_url',$query)->take(10)->get()->random(0);
             $banner1314 = $this->banner;
        return view('industry.whitepaperview' ,compact('whitepaper','top_whitepapers','banner1314'));
    } 
    public function report()
    {      
        $seo = SeoPage:: whereHas('seopages' , function($query) {
        $query->where('title',Request::segment('1'));})->where('active_flag',1)->get();
        foreach ($seo as $value) {
            SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta('report:published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);
            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->og_title);
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'report');
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
        $report = Report::where('active_flag', 1)->orderBy('id', 'desc')->get();        
        return view('industry.report' ,compact('report'));
    }  
    public function reportview($reporturl)
    {       
        $report = Report::where('active_flag', 1)->where('reports_url',$reporturl)->get();
         foreach ($report as $value) {
             SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta('article:published_time', $value->created_at->toW3CString(), 'property');
            SEOMeta::addKeyword($value->meta_keywords);

            OpenGraph::setDescription($value->og_description);
            OpenGraph::setTitle($value->og_title);
            OpenGraph::setUrl(url()->current());
            SEOMeta::setCanonical(url()->current());
            OpenGraph::addProperty('keyword', $value->og_keywords);
            OpenGraph::addProperty('type', 'report');
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
        return view('industry.reportview' ,compact('report'));
    } 

      public function reportAbuse(CommanRequest $request){
        
        $form = new Form();
        $form->name = $request->firstname.' '.$request->lastname;
        $form->email = $request->input("email");
        $form->company = $request->input("company");
        $form->phone = $request->input("mobile");
        $form->message = $request->input("description");
        // $form->designation = $request->input("designation");
        $form->type = $request->input("subject");
        $form->save();
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'company' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        //     'message' => 'required'
        // ]);
        $news_title =  News::find($request->input("news_id"));  
          $data = [
            'name'=>$request->firstname.' '.$request->lastname,
            'email'=>$request->input("email"),
            'company'=>$request->input("company"),
            'phone'=>$request->input("mobile"),
            'description'=>$request->input("description"),
            'designation'=>$request->input("cf_leads_jobtitle"),
            'news_id'=>$request->input("news_id"),
            'types' =>$request->input("type"),
            'news_title'=>$news_title->title];
        /*Admin mail*/
        Mail::send('emails.news-press.news-abuse', $data, function($message) use ($data) {
        $message->to('omplenquiry@ochre-media.com');
        //$message->to('bhavani@ochre-media.com');
        // $message->cc(['naveen@ochre-media.com','sumit@ochre-media.com','sankar@ochre-media.com']);
        $message->subject('News Abuse!');
        });
         /*Client Mail*/
         Mail::send('emails.news-press.news-abuse-client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject('Your report has been created!');
        });
         return [
                   'status'=>'success'
            ];
        //  if ($validator->passes()) {
        //      return [
        //            'status'=>'success'
        //     ];
        // }
        // return response()->json(['error'=>$validator->errors()->all()]); 

    }

    public function pressreportAbuse(CommanRequest $request){
        
        $form = new Form();
        $form->name = $request->firstname.''.$request->lastname;
        $form->email = $request->input("email");
        $form->company = $request->input("company");
        $form->phone = $request->input("mobile");
        $form->message = $request->input("description");
        $form->type = $request->input("subject");
        $form->save();  

         $press =  Xmlpharse::find($request->input("press_id"));  
          $data = [            
             'name'=>$request->firstname.''.$request->lastname,
            'email'=>$request->input("email"),
            'company'=>$request->input("company"),
            'phone'=>$request->input("mobile"),
            'description'=>$request->input("description"),
            'designation'=>$request->input("cf_leads_jobtitle"),
            'data_id'=>$request->input("press_id"),
            'types' =>$request->input("type"),
            'data_title'=>$press->title];
    
      Mail::send('emails.news-press.press-abuse', $data, function($message) use ($data) {
       $message->to('omplenquiry@ochre-media.com');
        //$message->to('bhavani@ochre-media.com');
        // $message->cc(['naveen@ochre-media.com','sumit@ochre-media.com','sankar@ochre-media.com']);
        $message->subject('Pressrelease Abuse!');
            });
           /*Client Mail*/
         Mail::send('emails.news-press.press-abuse-client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject('Your report has been created!');
        });


         return [
                   'status'=>'success'
            ];
       
    }


    public function publishNews(Request $request)
    {
            $news =new Form();
            $news->email = ucfirst($request->input("email"));
            $news->name = ucfirst($request->firstname.' '.$request->lastname);      
            $news->phone = ucfirst($request->input("mobile"));   
            $news->company = ucfirst($request->input("company"));       
            $news->message = ucfirst($request->input("description"));  
            $news->title = ucfirst($request->input("cf_leads_jobtitle"));       
            //$news->active_flag = 0;    
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
            $message->to(trans('messages.subscribe-email'));
            $message->subject($data['subject']);
            });
             /*Client Mail*/
             Mail::send('emails.news-press.news-publish-client', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject('Thank You!');
            });
          
            //  Session::flash('message_type', 'success');
            //   return redirect()->back()->with('status','success');
     }

       public function publishPressrelease(CommanRequest $request){
        $news = new Pressrelease();
            $news->date = ucfirst($request->input("date"));
        $news->title = ucfirst($request->input("title"));      
        $news->location = ucfirst($request->input("location"));   
        $news->home_title = ucfirst($request->input("home_title"));       
        $news->description = ucfirst($request->input("description"));       
        $news->active_flag = 0;    
        $news->save();

         $data = [
             'email'=>$request->input("email"),
             'date'=>$request->input("date"),
            'title'=>$request->input("title"),
            'location'=>$request->input("location"),
            'home_title'=>$request->input("home_title"),
            'types' =>$request->input("type"),
            'description'=>$request->input("description")];
    
      Mail::send('emails.news-press.press-publish', $data, function($message) use ($data) {
        $message->to(trans('messages.subscribe-email'));
        
        //$message->to('omplenquiry@ochre-media.com');
        // $message->cc(['naveen@ochre-media.com','sumit@ochre-media.com','sankar@ochre-media.com']);
        $message->subject('Pressrelease publishNews!');
        });
         /*Client Mail*/
         Mail::send('emails.news-press.news-publish-client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject('Thank You!');
        });
        return [
           'status'=>'success'     
        ];
    }

     public function productlaunch()
    {   
      
         $productluanch = Productlaunch::where('active_flag', 1)->orderBy('id', 'desc')->get();
             
        return view('industry.productluanch' ,compact('productluanch'));
    }  
   public function productlaunchview($url)
    {       
       

        $launches = Productlaunch::where('active_flag', 1)->where('project_url',$url)->get();
     

        return view('industry.productlauanchview' ,compact('launches'));
    } 
   public function bitrixLeadApi($data)
    {
        $company = $data['company'] ?? '';
        $first_name = $data['first_name'] ?? '';
        $last_name = $data['last_name'] ?? '';
        $email = $data['email'] ?? '';
        $phone = $data['phone'] ?? '';
        $job_title = $data['job_title'] ?? '';
        $description = $data['description'] ?? '';
        $country = $data['country'] ?? '';
        $type = $data['type'] ?? '';
        $address = $data['address'] ?? '';
        try{
             $curl = curl_init();
             $url ="https://ochre-media.bitrix24.in/rest/1/io7ypfbnh8qftxw1/crm.lead.add.json?FIELDS[TITLE]=".$company."&FIELDS[NAME]=".$first_name."&FIELDS[LAST_NAME]=".$last_name."&FIELDS[EMAIL][0][VALUE]=".$email."&FIELDS[PHONE][0][VALUE]=".$phone."&FIELDS[POST]=".$job_title."&FIELDS[COMPANY_TITLE]=".$company."&FIELDS[COMMENTS]=".$description."&FIELDS[SOURCE_ID]=".$type."&FIELDS[ADDRESS_COUNTRY]=".$country."&FIELDS[ADDRESS]=".$address."";
             curl_setopt($curl, CURLOPT_URL, $url);
             curl_setopt ($curl, CURLOPT_POST, 0);
             curl_setopt ($curl, CURLOPT_FOLLOWLOCATION, 0);
             curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
             $result = curl_exec ($curl);
          } catch (RequestException $e) {
             dd($e->getMessage());
             throw new Exception($e->getMessage());
          }  
          return $result;
    }
}