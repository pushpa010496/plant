<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
use App\Article;
use App\Company;
use Illuminate\Support\Facades\View;
use App\Country;
use App\CompanyEnquiry;
use Mail;
use App\Traits\SearchResults;
use SEOMeta;
use OpenGraph;
use Twitter;
use App\Banner;
use SEO;
use App\SearchKeyword;
use Artesaos\SEOTools\Facades\TwitterCard;

class SearchResultController extends Controller
{
    use SearchResults;

    public function searchResult(Request $request)
    {
        $query = str_replace(['-','&'], ' ', $request->get('q'));
        SEOMeta::setTitle($query);
        SEOMeta::setDescription($query);
        SEOMeta::addKeyword($query);
        OpenGraph::setDescription($query);
        OpenGraph::setTitle($query);
        OpenGraph::setUrl(url()->current());
        SEOMeta::setCanonical(url()->current());
        OpenGraph::addProperty('keyword', $query);
        OpenGraph::addProperty('type', 'suppliers');
        OpenGraph::addProperty('locale', 'en_GB');
        TwitterCard::setType('summary_large_image'); // card
        TwitterCard::setTitle($query);  // title
        TwitterCard::setSite('@plantautomatech'); // site
        TwitterCard::setUrl(url()->current()); // url
        TwitterCard::setDescription($query); // description 
        TwitterCard::setImage($query); // image
        if($request->key == 'company'){
            $time = \Carbon\Carbon::now()->format('Y-m-d');
            $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>=' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();
           
            $companies = $this->compaines($query);
    	    $compcount = $this->compainesCount($query);
    	    $countries = Country::all()->pluck('country_name', 'country_name')->prepend('Select Country', '');
           return view('search.new-search-company',compact('companies','query','banner1314','compcount','countries'));
        }
        if($request->key == 'product'){
             $products = $this->products($query);
    		 $pcount =   $this->productsCount($query);
    		 $countries = Country::all()->pluck('country_name', 'country_name')->prepend('Select Country', '');
             $time = \Carbon\Carbon::now()->format('Y-m-d');
             $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>=' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();
            
           return view('search.new-search-products',compact('products','query','banner1314','pcount','countries'));
        }
        if($request->key == 'article'){
            $articles = $this->articles($query);
            $artcount =   $this->articlesCount($query);
            $countries = Country::all()->pluck('country_name', 'country_name')->prepend('Select Country', '');
            $time = \Carbon\Carbon::now()->format('Y-m-d');
            $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>=' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();
           
          return view('search.new-search-articles',compact('articles','query','artcount','banner1314','countries'));
       }
       if($request->key == 'pressreleases'){
        $pressrelease = $this->pressreleases($query);
        $presscount =   $this->pressreleasesCount($query);
        $countries = Country::all()->pluck('country_name', 'country_name')->prepend('Select Country', '');
        $time = \Carbon\Carbon::now()->format('Y-m-d');
        $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>=' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();
       
      return view('search.new-search-pressreleases',compact('pressrelease','query','presscount','countries','banner1314'));
   }
        if($request->key == null){
            $products = $this->products($query);
    		$pcount =   $this->productsCount($query);
            $companies = $this->compaines($query);
    	    $compcount = $this->compainesCount($query);
            $articles =  $this->articles($query);
            $artcount=  $this->articlesCount($query);
            $pressrelease = $this->pressreleases($query);
            $presscount    = $this->pressreleasesCount($query);
            $countries = Country::all()->pluck('country_name', 'country_name')->prepend('Select Country', '');
            $time = \Carbon\Carbon::now()->format('Y-m-d');
            $banner1314 = Banner::where('active_flag','=', 1)->where('to_date', '>=' , $time)->where('from_date', '<=' , $time)->orderBy('id','desc')->get();
           
           return view('search.new-search',compact('products','companies','articles','pressrelease','query','pcount','banner1314','artcount','presscount','compcount','countries'));
        }
    }
    public function productAjaxLoad( Request $request )
    {
        $query = $request->get('query');
        if($query == null){
            return view('errors.404');
       }

        if($request->ajax()){
            $query = $request->get('query');
          
                              
                $exact = Product::join('companies', 'products.company_id', '=', 'companies.id')
                            ->where('companies.active_flag', 1)
                            ->where('products.title', 'LIKE', '%' . $query . '%')
                            ->where('products.active_flag', 1)
                            ->orderByRaw('FIELD(companies.profile_type, "paid", "free", "blind")')
                            ->get();
                            
                $match = Product::join('companies', 'products.company_id', '=', 'companies.id')
                            ->select("products.*", DB::raw("MATCH (title) AGAINST ('$query' IN BOOLEAN MODE) AS score"))
                            ->where('companies.active_flag', 1)
                            ->where('products.active_flag', 1)
                            ->whereRaw("MATCH (title) AGAINST ('$query' IN BOOLEAN MODE)")
                            ->orderByRaw('FIELD(companies.profile_type, "paid", "free", "blind")')
                            ->havingRaw('score > 0')
                            ->get();
                            
            $product = $exact->merge($match);
            $products = $product->slice($request->get('st'))->take($request->get('lmt'));
            
             $html = (string)view('search.ajax-search-product-load',compact('products'))->render();
             $showBtn = ($products->count() < $request->get('lmt') ) ? false : true;
             $data = [
                'showbtn' => $showBtn,
                'html' => $html,
             ];
             return response()->json($data);
        }
    }
    public function companyAjaxLoad( Request $request )
    {
        if($request->ajax()){
            $query = $request->get('query');
            $exact = Company::where('comp_name','LIKE','%'.$query.'%')
                          ->where('active_flag',1)
                          ->orderByRaw('FIELD(profile_type, "paid", "free", "blind")')
                          ->get();
            $match = Company::select("companies.*",DB::raw("MATCH (comp_name)  AGAINST ('$query' IN BOOLEAN MODE) AS score"))
                         ->where('active_flag',1)
                         ->orderByRaw('FIELD(profile_type, "paid", "free", "blind")')
                         ->havingRaw('score > 0')
                         ->orderBy("score","desc")
                         ->get();
            $company = $exact->merge($match);
            $companies = $company->slice($request->get('st'))->take($request->get('lmt'));
		    $html = view('search.ajax-search-company-loads',compact('companies'))->render();
            $showBtn = ($companies->count() < $request->get('lmt') ) ? false : true;
            $data = [
                'showbtn' => $showBtn,
                'html' => $html,
            ];
             return response()->json($data);
        }
    }

    public function articleAjaxLoad( Request $request )
    {
        if($request->ajax()){
            $query = $request->get('query');
            $articles =  Article::whereRaw("match (article_title) against('$query' in boolean mode)")
                             ->where('active_flag',1)
                             ->whereNotNull('article_url')
                             ->offset( $request->get('st') )
                             ->limit( $request->get('lmt') )
                             ->get();
             $html = (string)view('search.ajax-search-article-load',compact('articles'))->render();
             $showBtn = ($articles->count() < $request->get('lmt') ) ? false : true;
             $data = [
                'showbtn' => $showBtn,
                'html' => $html,
             ];
             return response()->json($data);
        }
    }


    public function pressreleaseAjaxLoad( Request $request )
    {
        if($request->ajax()){
            $query = $request->get('query');
            $pressrelease = DB::table('news_xml')
                               ->select('news_head','story_date','news_url','Data')
	                           ->whereRaw("match (news_head) against('$query' in boolean mode)")
	                           ->where('active_flag',1)
	                           ->offset( $request->get('st') )
	                           ->limit( $request->get('lmt') )
	                           ->get(); 
                $html = (string)view('search.ajax-search-pressrelease-load',compact('pressrelease'))->render();
              $showBtn = ($pressrelease->count() < $request->get('lmt') ) ? false : true;
             $data = [
                'showbtn' => $showBtn,
                'html'=>$html,
             ];
              return response()->json($data);
        }
    }

    
    public function productEnquiry(Request $request)
    {
        
        $enquiry =  new CompanyEnquiry;
        $enquiry->name = $request->firstname.' '. $request->lastname;    
        $enquiry->page = $request->page;
        $enquiry->country = $request->country;
        $enquiry->email = $request->email;
        $enquiry->company = $request->company;
        $enquiry->telephone = $request->mobile;
        $enquiry->message = $request->message;
        $enquiry->product_id = $request->product_id;
        $enquiry->prod_name = $request->prod_name;
        $enquiry->company_id = $request->company_id;
        $enquiry->title = $request->job_title;    
        // $enquiry->save();

         /*Send email admin*/  
        $data = [
            'name'=>$request->firstname.' '. $request->lastname,
            'email'=>$request->input("email"),
            'company'=>$request->input("company"),
            'country'=>$request->input("country"),
            'phone'=>$request->input("mobile"),
            'description'=>$request->input("message"),
            'product_name' => $request->prod_name,
            'comp_name' =>$request->company_name,
            'job_title' =>$request->job_title,
            'page' =>$request->input('page'),
            'subject_admin' =>$request->subject_admin,
            'subject_client' =>$request->subject_client
        ];
        /*Admin mail*/                   
          Mail::send('emails.productall.admin',$data,function($message) use ($data){
          $message->to(trans('messages.enquiry-email'));
           //  $message->to('pushpalatha@ochre-media.com');
            //  Enquiry by Meta for Laboratory coating machines | FMP Technology GmbH | Pulp and Paper Technology.
            // $message->subject('Enquiry by ' .$data['comp_name']. ' for ' .$data['product_name'] . '  | ' .$data['comp_name']. ' | Plantautomation Technology');
            $message->subject('Enquiry by '.$data['company'].' for '.$data['product_name'] .' | ' .$data['comp_name'].' | Plantautomation Technology');
          });
           /*Client Mail*/
          Mail::send('emails.productall.client', $data, function($message) use ($data) {
            $message->to($data['email']);

            $message->subject($data['comp_name'].' - Enquiry Submitted | Plantautomation Technology');
        });
         $data = [
                'html' => "Thank you for your interest in ".$request->prod_name.".  Your enquiry was successfully generated. Our client success team will get back to you for further steps.",
            ];
        return response()->json($data);
    }
    public function keywords()
    {
        $keywords = SearchKeyword::where('status',1)->orderBy('keyword','asc')->paginate(120);
        return view('search.search-keywords',compact('keywords'));
    }
}


