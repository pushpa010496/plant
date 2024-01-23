<?php
use App\Category;

use App\User;

use App\Page;

use App\Country;

use App\Company;

use Illuminate\Support\Facades\DB;





use Illuminate\Http\Request;



function getcat($categoryid)

{

		$category = \App\Category::where('parent_id',$categoryid)->get();

		return $category;

}

function ordercatfirst($categoryid)

{

		$category = \App\Category::where('parent_id',$categoryid)->orderBy('catorder', 'asc')->take(11)->get();

		return $category;

}

function ordercatsecond($categoryid)

{

		$category = \App\Category::where('parent_id',$categoryid)->where('active_flag',1)->orderBy('catorder', 'asc')->skip(11)->take(11)->get();

		return $category;

}



function getPageId($page)

{
		$page = \App\Page::where('title',$page)->where('parent_id',101)->first();
		if($page){
			return $page->id;	
		}
		return 0;

}



function getPage($page)

{

	if(!empty($page)){	
		$page = \App\Page::where('title',$page)->where('parent_id',0)->first();

		if($page){

			$page = $page->id;	

		}else{

			$page = 0;

		}

  }else{

		$page = 1;

	}

	return $page;
}


function getCompnayCountry($id)

{

    // DB::enableQueryLog();
        return DB::table('companies')

                 ->whereIn('id',$id)

                 ->select('country')

                 ->groupBy('country')

                 ->get();

                //  dd(DB::getQueryLog());

}

function getSuppliers($id)

{

    return  DB::table('companies')

                 ->whereIn('id',$id)

                 ->select('comp_name')

                 ->groupBy('comp_name')

                 ->get();

}