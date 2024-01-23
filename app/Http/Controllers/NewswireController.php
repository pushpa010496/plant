<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Xmlpharse;
use SEOMeta;
use OpenGraph;
use Twitter;
## or
use SEO;
use App\SeoPage;

class NewswireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=Xmlpharse::take(10)->get();
         $prnews =Xmlpharse::take(10)->where('type','prnews')->orderBy('id', 'DESC')->get();
        $businesnews =Xmlpharse::take(10)->whereIn('type',['bussinesswire','indwire'])->orderBy('id', 'DESC')->get();
        $globalnews =Xmlpharse::take(10)->where('type','globalnews')->orderBy('id', 'DESC')->get();
        return view('newswires.index',compact('prnews','businesnews','globalnews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function morenews(Request $request,$type)
    {

      if($type=="bnw"){ $type="bussinesswire";}
        elseif($type=="pnw"){$type="prnews";}
            else{ $type="globalnews";}
      $news=Xmlpharse::where('type',$type)->get();

     return view('newswires.allnews',compact('news'));
    }

    public function newsview(Request $request,$type,$id)
    {

     $news=Xmlpharse::where('id',$id)->get();

     

     return view('newswires.newsview',compact('news'));

    }

     public function viewprnews(){
       
        $news=Xmlpharse::where('type','prnews')->orderBy('created_at', 'DESC')->get();
foreach ($news as $value){
              SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
            //SEOMeta::addMeta('article:published_time', $value->created_at->toW3CString(), 'property');
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
            }
     return view('newswires.allnews',compact('news'));
    }

     public function viewbussiness(){
       
        $news=Xmlpharse::whereIn('type',['bussinesswire','indwire'])->orderBy('created_at', 'DESC')->get();
foreach ($news as $value) {
             SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta('article:published_time', $value->created_at->toW3CString(), 'property');
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
            }
     return view('newswires.allnews',compact('news'));
    }

     public function viewglobalnews(){
       
        $news=Xmlpharse::where('type','globalnews')->orderBy('created_at', 'DESC')->get();
foreach ($news as $value) {
             SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta('article:published_time', $value->created_at->toW3CString(), 'property');
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
            }
     return view('newswires.allnews',compact('news'));
    }

      public function prnewsview($id){
        //rb

          $news=Xmlpharse::where('id',$id)->get();

   foreach ($news as $value) {
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
            }
          return view('newswires.newsview',compact('news'));

    }
     public function bwnewsview($id){
         $news=Xmlpharse::where('id',$id)->get();
foreach ($news as $value) {
             SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta('article:published_time', $value->created_at->toW3CString(), 'property');
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
            }
          return view('newswires.newsview',compact('news'));

    }
     public function gwnewsview($id){
         $news=Xmlpharse::where('id',$id)->get();
foreach ($news as $value) {
             SEOMeta::setTitle($value->meta_title);
            SEOMeta::setDescription($value->meta_description);
            SEOMeta::addMeta('article:published_time', $value->created_at->toW3CString(), 'property');
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
            }
          return view('newswires.newsview',compact('news'));

    }

}
