<?php
namespace App\Traits;
use App\Product;
use App\Company;
use App\Article;
use DB;
/**
 * Trait SearchResults
 * @package App\Traits
 */
trait SearchResults
{
    public function products($query)
    {
      /*  $exact = Product::whereHas('company',function ($q){
                             $q->where('active_flag',1)
                             ->orderByRaw('FIELD(profile_type, "paid", "free", "blind")');
                          })->where('title','LIKE','%'.$query.'%')
                          ->where('active_flag',1)
                          ->get();
        $match = Product::whereHas('company',function ($q){
                              $q->where('active_flag',1)
                              ->orderByRaw('FIELD(profile_type, "paid", "free", "blind")');
                            })->select("products.*",DB::raw("MATCH (title)  AGAINST ('$query' IN BOOLEAN MODE) AS score"))
                            ->where('active_flag',1)
                            ->havingRaw('score > 0')
                            ->orderBy("score","desc")
		                    ->get();*/
		                    
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
                            
        return $exact->merge($match)->take(8);
    }
    
    public function productsCount($query)
    {
        $exact = Product::where('title','LIKE','%'.$query.'%')
                          ->where('active_flag',1)
                          ->where('stage',1)
                          ->get();
        $match = Product::select("products.*",DB::raw("MATCH (title)  AGAINST ('$query' IN BOOLEAN MODE) AS score"))
                            ->where('active_flag',1)
                            ->havingRaw('score > 0')
                            ->orderBy("score","desc")
		                    ->get();
                         
        return $exact->merge($match)->count();
    }
    public function compaines($query)
    {
  
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
        return $exact->merge($match)->take(8);
    }
    public function compainesCount($query)
    {
        $exact = Company::where('comp_name','LIKE','%'.$query.'%')
                          ->where('active_flag',1)
                          ->get();
        $match = Company::select("companies.*",DB::raw("MATCH (comp_name)  AGAINST ('$query' IN BOOLEAN MODE) AS score"))
                         ->where('active_flag',1)
                         ->havingRaw('score > 0')
                         ->orderBy("score","desc")
                         ->get();
        return $exact->merge($match)->count();
    }
    public function articles($query)
    {
        return  Article::whereRaw("match (article_title) against('$query' in boolean mode)")
                         ->where('active_flag',1)
                         ->whereNotNull('article_url')
                         ->limit(8)
                         ->get();
    }
    public function articlesCount($query)
    {
        return  Article::whereRaw("match (article_title) against('$query' in boolean mode)")
                         ->where('active_flag',1)
                         ->whereNotNull('article_url')
                         ->count();
    }
    public function pressreleases($query)
    {
        return  DB::table('news_xml')
                   ->whereRaw("match (news_head) against('$query' in boolean mode)")
                   ->where('active_flag',1)
                   ->limit(3)
                   ->get();
    }
    public function pressreleasesCount($query)
    {
        return DB::table('news_xml')
                   ->whereRaw("match (news_head) against('$query' in boolean mode)")
                   ->where('active_flag',1)
                   ->count();
    }
}