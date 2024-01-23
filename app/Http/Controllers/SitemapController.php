<?php
namespace App\Http\Controllers;
use Request;
use App\Company;
use App\CompanyProfile;
use App\Product;
use \DB;
use App\SearchKeyword;
use App\Page;
use App\Event;
use App\CompanyVideo;
use App\Category;
use App\Flatpage;
class SitemapController extends Controller
{
public function mainpages(){
return response()->view('sitemaps.mainpages')->header('Content-Type','text/xml');
}
public function index(){
return response()->view('sitemaps.index')->header('Content-Type','text/xml');
}
public function category(){
$pages = Category::select('slug')->where('parent_id',22)->whereNotNull('slug')->get();
return response()->view('sitemaps.category', compact('pages'))->header('Content-Type','text/xml');
}
public function categories($category){
$cat = Category::where('slug',$category)->first();
$pages = Category::select('slug')->where('parent_id',$cat->id)->whereNotNull('slug')->get();
return response()->view('sitemaps.categories', compact('pages'))->header('Content-Type','text/xml');
}
public function events(){
$pages =  Event::select('event_url')->where('active_flag',1)->whereNotNull('event_url')->get();
return response()->view('sitemaps.events', compact('pages'))->header('Content-Type','text/xml');
}
public function projects(){
$pages = DB::table("projects")->select('project_url')->whereNotNull('project_url')->get();
return response()->view('sitemaps.projects', compact('pages'))->header('Content-Type','text/xml');
}
public function tenders(){
$pages = DB::table("tenders")->select('tender_url')->where('active_flag',1)->whereNotNull('tender_url')->get();
return response()->view('sitemaps.tenders', compact('pages'))->header('Content-Type','text/xml');
}
public function articles(){
$pages = DB::table("articles")->select('article_url')->whereNotNull('article_url')->get();
return response()->view('sitemaps.articles', compact('pages'))->header('Content-Type','text/xml');
}
public function interviews(){
$pages = DB::table("interviews")->select('interviews_url')->whereNotNull('interviews_url')->get();
return response()->view('sitemaps.interviews', compact('pages'))->header('Content-Type','text/xml');
}
public function news(){
$pages = DB::table("news")->select('news_url')->whereNotNull('news_url')->get();
return response()->view('sitemaps.news', compact('pages'))->header('Content-Type','text/xml');
}
public function pressreleases(){
$pages = DB::table("news_xml")->select('news_url')->whereNotNull('news_url')->where('active_flag',1)->get();
return response()->view('sitemaps.pressreleases', compact('pages'))->header('Content-Type','text/xml');
}   
public function whitepapers(){
$pages= DB::table('whitepapers')->select('whitepapers_url')->where('active_flag',1)->whereNotNull('whitepapers_url')->get();
return response()->view('sitemaps.whitepapers', compact('pages'))->header('Content-Type','text/xml');
}
public function catalogue(){
$cmp_id= DB::table('company_catalogs')->where('active_flag',1)->whereNotNull('company_id')->pluck('company_id');
$ids = collect($cmp_id->unique()->values()->all());
$pages = CompanyProfile::select('url')->whereIn('company_id',$ids)->get();
return response()->view('sitemaps.catalogue', compact('pages'))->header('Content-Type','text/xml');
}
public function products(){
$pages =  Product::select('url')->where('active_flag',1)->whereNotNull('company_id')->with('compprofile')->get();
return response()->view('sitemaps.products', compact('pages'))->header('Content-Type','text/xml');
}
public function suppliers(){
$pages = DB::table("company_profiles")->select('url')->whereNotNull('url')->get();
return response()->view('sitemaps.suppliers', compact('pages'))->header('Content-Type','text/xml');
}
public function videos(){
$pages= CompanyVideo::with('compprofile')->where('active_flag',1)->whereNotNull('company_id')->get();
return response()->view('sitemaps.videos',compact('pages'))->header('Content-Type','text/xml');
}
public function suppliersInternal(){
$pages = CompanyProfile::select('url')->with('pcatalog','ppress','pvideo','pwp')
->whereNotNull('url')
->where('active_flag',1)
->get();
return response()->view('sitemaps.suppliers-internal', compact('pages'))->header('Content-Type','text/xml');
}
public function categorySuppier(){
$categories =  Category::where('parent_id','!=',22)->where('active_flag',1)->pluck('id');
$urls=[];
foreach ($categories as $keys => $val) {
$countries = [];
$cat = Category::find($val);
$products = Product::select('url')->with('company')->where('category_id',$val)->where('active_flag',1)->get();
info($products->count());
foreach ($products as $key => $product) {
if(in_array(@$product->company->country,$countries)){
}else{
array_push($countries, @$product->company->country);
}
}
foreach ($countries  as $key => $country) {
$urls[$keys][$key] = 'https://www.plantautomation-technology.com/'.$cat->slug.'-suppliers-in-'.str_slug($country);
}
}
return response()->view('sitemaps.caregory_supplier', compact('urls'))->header('Content-Type','text/xml');
}
public function imppro(){
$pages = DB::table('product_landingpages')->select('url')->whereNotNull('url')->get();
return response()->view('sitemaps.imppro', compact('pages'))->header('Content-Type','text/xml');
}
public function webinar(){
$pages = DB::table('webinars')->select('url')->whereNotNull('url')->get();
return response()->view('sitemaps.webinars', compact('pages'))->header('Content-Type','text/xml');
}
public function products1(){    
$pages =  Product::where('active_flag',1)->whereNotNull('company_id')->with('compprofile')->skip(0)->take(20000)->get();
return response()->view('sitemaps.products', compact('pages'))->header('Content-Type','text/xml');
}
public function products2(){    
$pages =  Product::where('active_flag',1)->whereNotNull('company_id')->with('compprofile')->skip(20000)->take(40000)->get();
return response()->view('sitemaps.products', compact('pages'))->header('Content-Type','text/xml');
}
public function pat()
{
$keywords = SearchKeyword::select('url')->where('status',1)->skip(0)->take(20000)->get();
return response()->view('sitemaps.pat', compact('keywords'))->header('Content-Type','text/xml');
}
public function pat1()
{
$keywords = SearchKeyword::select('url')->where('status',1)->skip(20000)->take(20000)->get();
return response()->view('sitemaps.pat1',compact('keywords'))->header('Content-Type','text/xml');
}
public function pat2()
{
$keywords = SearchKeyword::select('url')->where('status',1)->skip(40000)->take(20000)->get();
return response()->view('sitemaps.pat2',compact('keywords'))->header('Content-Type','text/xml');
}
public function pat3()
{
$keywords = SearchKeyword::select('url')->where('status',1)->skip(60000)->take(20000)->get();
return response()->view('sitemaps.pat3',compact('keywords'))->header('Content-Type','text/xml');
}
public function pat4()
{
$keywords = SearchKeyword::select('url')->where('status',1)->skip(80000)->take(20000)->get();
return response()->view('sitemaps.pat4',compact('keywords'))->header('Content-Type','text/xml');
}
public function pat5()
{
$keywords = SearchKeyword::select('url')->where('status',1)->skip(100000)->take(20000)->get();
return response()->view('sitemaps.pat5',compact('keywords'))->header('Content-Type','text/xml');
}
public function pat6()
{
$keywords = SearchKeyword::select('url')->where('status',1)->skip(120000)->take(20000)->get();
return response()->view('sitemaps.pat6',compact('keywords'))->header('Content-Type','text/xml');
}
public function pat7()
{
$keywords = SearchKeyword::select('url')->where('status',1)->skip(140000)->take(20000)->get();
return response()->view('sitemaps.pat7',compact('keywords'))->header('Content-Type','text/xml');
}
public function pat8()
{
$keywords = SearchKeyword::select('url')->where('status',1)->skip(160000)->take(20000)->get();
return response()->view('sitemaps.pat8',compact('keywords'))->header('Content-Type','text/xml');
}
public function pat9()
{
$keywords = SearchKeyword::select('url')->where('status',1)->skip(180000)->take(20000)->get();
return response()->view('sitemaps.pat9',compact('keywords'))->header('Content-Type','text/xml');
}
public function pat10()
{
$keywords = SearchKeyword::select('url')->where('status',1)->skip(200000)->take(20000)->get();
return response()->view('sitemaps.pat10',compact('keywords'))->header('Content-Type','text/xml');
}

public function pat11()
{
$keywords = SearchKeyword::select('url')->where('status',1)->skip(220000)->take(20000)->get();
return response()->view('sitemaps.pat11',compact('keywords'))->header('Content-Type','text/xml');
}
public function pat12()
{
$keywords = SearchKeyword::select('url')->where('status',1)->skip(240000)->take(20000)->get();
return response()->view('sitemaps.pat12',compact('keywords'))->header('Content-Type','text/xml');
}
public function pat13()
{
$keywords = SearchKeyword::select('url')->where('status',1)->skip(260000)->take(20000)->get();
return response()->view('sitemaps.pat13',compact('keywords'))->header('Content-Type','text/xml');
}
public function pat14()
{
$keywords = SearchKeyword::select('url')->where('status',1)->skip(280000)->take(20000)->get();
return response()->view('sitemaps.pat14',compact('keywords'))->header('Content-Type','text/xml');
}
public function pat15()
{
$keywords = SearchKeyword::select('url')->where('status',1)->skip(300000)->take(20000)->get();
return response()->view('sitemaps.pat15',compact('keywords'))->header('Content-Type','text/xml');
}
public function pat16()
{
$keywords = SearchKeyword::select('url')->where('status',1)->skip(320000)->take(20000)->get();
return response()->view('sitemaps.pat16',compact('keywords'))->header('Content-Type','text/xml');
}
public function pat17()
{
$keywords = SearchKeyword::select('url')->where('status',1)->skip(340000)->take(20000)->get();
return response()->view('sitemaps.pat17',compact('keywords'))->header('Content-Type','text/xml');
}
}