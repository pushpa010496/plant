<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CommanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      
  
           $rules = [];

         if(Input::has('name')){
                //$rules['name'] = 'required';
               $rules['name'] =['required','regex:/[A-Za-z\s]{3,30}/'];

            }

         if(Input::has('firstname')){
                //$rules['name'] = 'required';
               $rules['firstname'] =['required','regex:/[A-Za-z\s]{3,30}/'];

            }

         if(Input::has('lastname')){
                //$rules['name'] = 'required';
               $rules['lastname'] =['required','regex:/[A-Za-z\s]{3,30}/'];

            }
            if(Input::has('product_id')){             
                $rules['product_id'] ='required';
              }
            if(Input::has('company')){
                //$rules['company'] = ['required','alpha_num'];

                $rules['company'] =['required','regex:/[A-Za-z0-9\s]{3,30}/' ];
                // $rules['company'] =['required','regex:/^[a-z .,\-]+$/i' ];
                  // $rules['company'] = ['required','regex:/^[ A-Za-z0-9_@.\/#&+-]*$/'];
            }
            if(Input::has('category')){              
                $rules['category'] = 'required';
            }
              if(Input::has('country')){              
                $rules['country'] = 'required';
            }
              if(Input::has('cf_leads_countryname')){              
                $rules['cf_leads_countryname'] = 'required';
            }
            
            if(Input::has('email')){ 
                $rules['email'] = 'required|email';
            }
            if(Input::has('phone')){ 
                $rules['phone'] =['required','regex:/[0-9\s._*#()+-]+/' ];
                //$rules['phone'] = 'required';
            }
             if(Input::has('mobile')){ 
                $rules['mobile'] =['required','regex:/[0-9\s._*#()+-]+/' ];
                //$rules['phone'] = 'required';
            }
            if(Input::has('Telephone')){ 
                $rules['Telephone'] =['required','regex:/[0-9\s._*#()+-]+/' ];
                //$rules['phone'] = 'required';
            }
            if(Input::has('message')){ 
                $rules['message'] = 'required|max:800';
            }  
             if(Input::has('description')){ 
                $rules['description'] = 'required|max:800';
            }
              if(Input::has('title')){ 
                $rules['title'] = 'required';
            }    
            if(Input::has('cf_leads_jobtitle')){ 
                $rules['cf_leads_jobtitle'] = 'required';
            } 
            
            if(Input::has('location')){ 
                $rules['location'] = 'required';
            }    
            if(Input::has('date')){ 
                $rules['date'] = 'required';
            }

            if(Input::has('g-recaptcha-response')){
              $rules['g-recaptcha-response'] = 'required';
            }

            if(Input::has('cf_leads_eventname')){

             $rules['cf_leads_eventname'] = 'required';
            
            }

            if(Input::has('cf_leads_eventvenue')){

             $rules['cf_leads_eventvenue'] = 'required';
            
            }

            if(Input::has('event_address')){

             $rules['event_address'] = 'required';
            
            }

            if(Input::has('cf_leads_organiser')){

             $rules['cf_leads_organiser'] = 'required';
            
            }

            if(Input::has('start_date')){

             $rules['start_date'] = 'required';
            
            }

            if(Input::has('end_date')){

             $rules['end_date'] = 'required';
            
            }
             if(Input::has('cf_leads_startdate')){

             $rules['cf_leads_startdate'] = 'required';
            
            }

            if(Input::has('cf_leads_enddate')){

             $rules['cf_leads_enddate'] = 'required';
            
            }
            if(Input::has('cf_leads_weblink')){

             $rules['cf_leads_weblink'] = 'required';
            
            }

            



            

            

            
             return $rules;

             /*$notification = array(
            'message' =>"All", 
            'alert-type' => 'error'
        );
       return redirect()->back()->with($notification);*/
            }
    

   
public function messages()
{
    return [
       
        'message.required'  => 'A message is required',
        'product_id.required'  => 'A product is required',
    ];
}
}
