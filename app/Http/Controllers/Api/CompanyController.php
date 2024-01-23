<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;
use App\Form;
use Carbon\Carbon;
use App\CompanyEnquiry;
use DB;

class CompanyController extends Controller
{
    public function getCompaines()
    {
        $compaines = Company::whereNotIn('profile_type',['paid','FP'])
                              ->where('active_flag',1)
                              ->where('teamwork',0)
                              ->get();
        if($compaines->count()>0){
            $company = $compaines->map(function($query){
                return [
                         'company_id'=>$query->id,
                         'comp_name'=>$query->comp_name,
                         'contact_name'=>$query->contact_name,
                         'email'=>$query->email,
                         'phone'=>$query->phone,
                         'profile_type'=>$query->profile_type,
                         'start_date'=>$query->start_date,
                         'end_date'=>$query->end_date,
                         'country'=>$query->country,
                         'website'=>$query->website,
                         'address'=>$query->address,
                         'address'=>$query->address,
                         'active_flag'=>$query->active_flag,
                    ];
            });
         return response()->json([ 'code' => 200,'compaines'=>$company]);
        }else{
        return response()->json([ 'code' => 202,'message'=>'No data found']);
        }
        
    }
    public function updateCompaines(Request $request)
    {
        $company = Company::whereIn('id',$request->company_id)->update(['teamwork'=>1]);
        return response()->json(['code'=>200,'message'=>"Company Data Updated"]);
    }
    public function getCompanyEnquires(Request $request)
    {
        $enquires = CompanyEnquiry::whereIn('company_id',$request->company_id)->get();
         if($enquires->count()>0){
             $enquiry = $enquires->map(function($query){
                 return [
                          'company_id'=>$query->company_id,
                          'count'=> CompanyEnquiry::where('company_id',$query->company_id)->count() ?? 0
                     ];
             });
               return response()->json([ 'code' => 200,'enquires'=>$enquiry]);
         }else{
             return response()->json([ 'code' => 202,'message'=>'No data found']);
         }
    }
    public function updateCompanyProfile(Request $request)
    {
        $company = Company::where('id',$request->company_id)->update(['profile_type'=>$request->profile_type]);
        return response()->json(['code'=>200,'message'=>"Company Profile Updated"]);
    }

    public function getFormData(Request $request)
    {
        $endDate = Carbon::now();  
        $startDate = Carbon::now()->subMonth();  

        $formData = Form::whereIn('type', ['contactus', 'registration', 'mediapack-download', 'postevent', 'get-listed', 'post-requirement', 'OurServices'])
            ->whereBetween('created_at', [$startDate, $endDate])
            ->get();

        $filteredFormData = collect($formData)->groupBy('type')->map->count();

        //  Initialize an array with all types and set their count to 0
        $allTypes = ['contactus', 'registration', 'mediapack-download', 'postevent', 'get-listed', 'post-requirement', 'OurServices'];
        $initialCounts = array_fill_keys($allTypes, 0);

        //  Merge the filtered counts with the initialized counts to ensure all types are present
        $filteredFormData = array_merge($initialCounts, $filteredFormData->toArray());

        $totalFormData = Form::whereIn('type', ['contactus', 'registration', 'mediapack-download', 'postevent', 'get-listed', 'post-requirement', 'OurServices'])
            ->get()
            ->groupBy('type')
            ->map->count();

        //  Merge the total counts with the initialized counts to ensure all types are present
        $totalFormData = array_merge($initialCounts, $totalFormData->toArray());

        $result = [
            'recent_month' => $filteredFormData,
            'total' => $totalFormData,
        ];
       return response()->json($result);
    } 
}
