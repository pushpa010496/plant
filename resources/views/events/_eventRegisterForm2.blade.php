<div class="mb-4">
              <a href="{{url('events-newsletters')}}">
                <button type="button" class="btn btn-block btn-primary"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;Events Newsletter</button>
              </a>
              <!-- <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;Events Newsletter</button> -->
            </div>
            
            <div id="form-sticky">
              <div class="bg-white p-2 border border-secondary"> 
                <h3 class="text-center display-5 mb-3 pb-2 pt-1 bg-primary text-white">Register <span class="text-white small font-italic">( for this Event )</span></h3>
                 <!-- @if(session('message'))
                    <div class="alert alert-{{ session('message_type') }} alert-dismissible" id="success-alert" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{@session('message')}}
                    </div>
                @endif -->
                @if (session('error'))
              <div class="alert alert-danger" role="alert">{{ session('error') }}</div>
                @endif
                {{-- {!! Form::open(['url' => 'company-enquiry']) !!} --}}
               

                @foreach($eventprofile as $cp)
                <input type="hidden" name="cf_leads_eventname" value="{{$cp->name}}"> 
                @endforeach
                <input type="hidden" name="slug" value="{{'events/'.\Request::segment(2).'/'.\Request::segment(3)}}">
                    <input type="hidden" name="url" value="<?php echo url()->current();?>">
                  
                  <div class="form-group">
                    {{Form::text('firstname', null,['required'=>'required','class'=>'form-control','placeholder'=>'First Name*'])}}
                                      
                   @if ($errors->has('firstname'))
                      <div class="error text-danger">{{ $errors->first('firstname') }}</div>
                    @endif
                  </div>
                    <div class="form-group">
                    {{Form::text('lastname', null,['required'=>'required','class'=>'form-control','placeholder'=>'Last Name*'])}}
                    
                  
                   @if ($errors->has('lastname'))
                      <div class="error text-danger">{{ $errors->first('lastname') }}</div>
                    @endif
                  </div>
                  <div class="form-group">
                   {{Form::text('company', null,['required'=>'required','class'=>'form-control','placeholder'=>'Company Name*'])}}
                  </div>
                   <div class="form-group">
                   {{Form::text('cf_leads_jobtitle', null,['required'=>'required','class'=>'form-control','placeholder'=>'Job Title*'])}}
                  </div>
                  <div class="form-group">
                       <select class="form-control" name="cf_leads_countryname">
                      <option selected disabled="disabled" value="">Select Country</option>
                    @foreach($countries as $country)
                      <option value="{{$country->country_name}}">{{$country->country_name}}</option> 
                    @endforeach
                    </select>
                    @if ($errors->has('cf_leads_countryname'))
                      <div class="error text-danger">{{ $errors->first('cf_leads_countryname') }}</div>
                    @endif
                  </div>
                  <div class="form-group">
                   {{Form::text('email', null,['required'=>'required','class'=>'form-control','placeholder'=>'Email*'])}}
                  
                  @if ($errors->has('email'))
                      <div class="error text-danger">{{ $errors->first('email') }}</div>
                    @endif
                  </div>
                  <div class="form-group">
                    {{Form::text('mobile', null,['required'=>'required','class'=>'form-control','placeholder'=>'Telephone*'])}}

                    @if ($errors->has('mobile'))
                      <div class="error text-danger">{{ $errors->first('mobile') }}</div>
                    @endif
                  </div>
                  <div class="form-group">
                    {{Form::textarea('description', null,['rows'=>3,'class'=>'form-control','placeholder'=>'Write Message...'])}}
                    @if ($errors->has('description'))
                      <div class="error text-danger">{{ $errors->first('description') }}</div>
                    @endif
                  </div>
                 <div class="form-group">
                   {!! Form::captcha() !!}

                  @if ($errors->has('g-recaptcha-response'))
                      <div class="error text-danger">{{ $errors->first('g-recaptcha-response') }}</div>
                    @endif
                     <div class="error text-danger verifi"></div>
                </div>
                {{-- <button type="submit"  class="btn btn-primary btn-block">Submit</button> --}}
                   <INPUT type="button" class="btn btn-primary btn-block" value="Submit" onclick="return checkform()">
                {!! Form::close() !!}
              </div>  
              <img src="{{ config('app.url') }}/img/ssl-logo.png" alt="SSL Secure Connection" width="100" class="img-fluid pull-right mt-1 mb-1" />  
              <div class="clearfix"></div>
            </div>

             <div id="myModal1" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-success">{{session('message_type')}}</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              
            </div>
            <div class="modal-body">
                <p class="">{!! session('message') !!}</p>
                <p>Happy Surfing!</p>
            <p class="mb-0">Regards,</p>
            <p class="mb-0">Events-Client Success Team (CRM),</p>
            <img src="{{ config('app.url')}}img/main-logo.png" width="150px">
            </div>
            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-info" data-dismiss="modal">Close</button> -->
              <a href="{{Request::url()}}" class="btn btn-info text-right">Close</a>
            </div>
          </div>
        </div>
      </div>
 <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-success">Event News letter</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              
            </div>
            <div class="modal-body">
              <ul class="error" style="list-style-type: none"></ul>
              <form>
                 
                
                   <div class="form-group"> 
                    {{Form::text('name', null,['placeholder'=>"Enter Your Name...",'required'=>'required','class'=> 'form-control'])}}
                  </div> 

                   <div class="form-group"> 
                    {{Form::text('email', null,['placeholder'=>"Enter Your Email...",'required'=>'required','class'=> 'form-control'])}}
                  </div> 

                   <div class="form-group"> 
                    {{Form::text('company', null,['placeholder'=>"Enter Your Company name...",'required'=>'required','class'=> 'form-control'])}}
                  </div> 

                   <!-- <div class="form-group"> 
                    {{Form::text('phone', null,['placeholder'=>"Enter Your Phone Number...",'required'=>'required','class'=> 'form-control'])}}
                  </div> --> 

                   <div class="form-group"> 
                    <select id="select2" name="country" class="form-control"> 
                      <option value="">Select Your Country</option> 
                     @foreach($countries as $country)
                      <option value="{{$country->country_name}}"> {{$country->country_name}}</option> 
                     @endforeach
                    </select> 
                  </div> 

                   <!-- <div class="form-group"> 
                    {{Form::textarea('message', null,['placeholder'=>'Your Message ...','rows'=>5,'class'=> 'form-control'])}}
                  </div>  -->

                  <div class="mt-4"></div> 

                  <div class="text-left form-group mb-0 text-black" > 
                    <label class="checkbox-inline "> 
                    <input type="checkbox" name="newsletter" id="newsletter" checked> &nbsp;<small>Plant Automation Technology e-Newsletters</small>
                    </label> 
                  </div> 
                  <div class="text-left form-group mb-0 text-black" > 
                    <label class="checkbox-inline "> 
                    <input type="checkbox" name="agree" id="agree" checked> &nbsp;<small>I have read and accept the Terms &amp; Conditions &amp; Disclaimer.</small>
                    </label> 
                  </div> 
                  <div class="text-left form-group mb-0 text-black" > 
                    <label class="checkbox-inline "> 
                    <input type="checkbox" name="promotions" id="promotions" checked> &nbsp;<small>You will receive the relevant promotions, products &amp; services.</small>
                    </label> 
                  </div> 
                  <div class="text-left form-group">                  
                   {!! Form::captcha() !!}
                   <span class="verifi"></span>
                  </div> 
                
                         
            {{Form::close()}}
              <div class="submit-row"> 
                    <button type="submit" class="btn btn-block submit-btn">Submit</button> 

                  </div> 
                
            </div>
            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-info" data-dismiss="modal">Close</button> -->
               <a href="{{Request::url()}}" class="btn btn-info text-right">Close</a>
            </div>
          </div>
        </div>
      </div>

       <div id="modalSuccess" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-success">success</h4>
              <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
              
            </div>
            <div class="modal-body">
                <p class="">Thank You. You have successfully registered for our newsletter.</p>
            </div>
            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>              -->
               <a href="{{Request::url()}}" class="btn btn-info text-right">Close</a>
            </div>
          </div>
        </div>
      </div>