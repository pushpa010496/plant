<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductGroup;
use App\Product;
use DB;
use App\Country;
use App\CompanyEnquiry;
use Mail;
use App\Company;

class ProductGroupController extends Controller
{
    public function getGroupProducts($slug)
    {
        $keywords = ProductGroup::where('slug',$slug)->first();
        $countries = Country::all()->pluck('country_name', 'country_name')->prepend('Select Country', '');
        if(!empty($keywords)){
            $products = Product::whereRaw("MATCH (title)  AGAINST ('$keywords->excludekeywords')")
                             ->where('active_flag',1)
                             ->whereNotNull('company_id')
                             ->paginate(10);
            $companyIds = Product::whereRaw("MATCH (title)  AGAINST ('$keywords->excludekeywords')")
                             ->where('active_flag',1)
                             ->whereNotNull('company_id')
                             ->pluck('company_id');
            return view('search.group-products',compact('products','keywords','countries','companyIds','slug'));
        }else{
            return redirect()->route('mainhome');
        }
        
        
    }
    public function groupProductsFilter(Request $request)
    {
         $countrys =  $request->countrys;
         $comp_names = $request->comp_names;
         $keywords = ProductGroup::where('slug',$request->slug)->first();
         $companyIds = Company::when(!empty($countrys),function ($query) use($countrys){
                                    $query->whereIn('country', $countrys);
                              })
                              ->when(!empty($comp_names),function ($query) use($comp_names){
                                    $query->whereIn('comp_name', $comp_names);
                              })
                              ->where('active_flag',1)
                              ->pluck('id');
        $products = Product::whereRaw("MATCH (title)  AGAINST ('$keywords->excludekeywords')")
                             ->whereIn('company_id',$companyIds)
                             ->where('active_flag',1)
                             ->whereNotNull('company_id')
                             ->paginate(10);
        $html = view('search.group-products-search',compact('products'))->render();
        $data = [
                'html' => $html,
            ];
             return response()->json($data);
    }
    public function groupProductEnquiry(Request $request)
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
        $enquiry->save();

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
            // $message->to(trans('srinivas.i@ochre-media.com'));
            $message->subject('Enquiry by '.$data['product_name'].' for '.$data['comp_name'] .' | Plantautomation Technology');
          });
           /*Client Mail*/
           Mail::send('emails.productall.client', $data, function($message) use ($data) {
            $message->to($data['email']);

            $message->subject($data['product_name'].' - Enquiry Submitted | Plantautomation Technology');
        });
         $data = [
                'html' => "Thank you for your interest in ".$request->prod_name.".  Your enquiry was successfully generated. Our client success team will get back to you for further steps.",
            ];
        return response()->json($data);
    }
}
