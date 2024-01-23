@extends('../layouts/event')
@section('style')
 
@endsection
@section('content')
 <!-- // Profile Body -->
 <div id="myModal1" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-success">{{session('message_type')}}</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              
            </div>
            <div class="modal-body">
                <p class="">{{session('message')}}</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
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
              <form method="post" action="{{url('newsletter-signup-success')}}">
                  {{csrf_field()}}
                
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
                  </div> 
                  <div class="submit-row"> 
                    <button type="submit" class="btn btn-block submit-form">Submit</button> 
                  </div> 
                
                         
            {{Form::close()}}
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

 {!! Form::open(['url' => 'wire-cable-guangzhou-2018-success']) !!}
      <div class="container pt-4 pb-3">        
        <div class="row">          
          @foreach($eventprofile as $cp)
          <div class="col-lg-9">
            <input type="hidden" name="event_name_display" value="{{$cp->name}}">
            
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title text-success">{{session('message_type')}}</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      
                    </div>
                    <div class="modal-body">
                        {{session('message')}}
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            <div class="pt-1">
              <h2 class="display-5 mb-3">
                About 
                @if($cp->event_url)
                <span class="text-blue font-weight-bold">{{$cp->name}}</span>
                @else
                <span class="text-blue font-weight-bold">{{$cp->name}}</span>
                @endif
              </h2>

              <div class="pb-3">{!! $cp->description !!}</div>
              
            </div>


            @if(count($cp->eventspeaker) > 0)
            <div class="bg-light p-3 border border-secondary">
              <h2 class="display-5 text-blue mb-3 mt-0">Speakers</h2>
              <div class="row"> 
              @foreach($cp->eventspeaker as $speakers)
              @if($speakers->show_on_profile == 1)
              <div class="col-lg-3 text-center">               
                <img class="img-fluid" src="{{ config('app.url') }}event/speaker/{{$speakers->image}}" alt="" width="120">
                  <h3 class="display-6 text-blue pt-2">{{$speakers->name}}</h3>
                  <p class="card-text"><small>{{$speakers->designation}}</small></p>                
              </div>
              @else
              @endif
              @endforeach
              </div>
              <div class="text-right"><a href="{{url('events/'.$cp->event_url.'/speakers')}}" class="text-blue small">More...</a>
              </div>
            </div>
            @else
            @endif

            <div class="mt-3 mb-3"></div>

           
            <div class="row">  
              <div class="col-lg-12 pt-3">
                @if(@$cp->eventprofile->exibitors_profile)
                <h3 class="display-5 text-blue">Exhibitors Profile</h3>
                <p class="card-text">{!!@$cp->eventprofile->exibitors_profile!!}</p>   
                @else
                @endif             
              </div>

              <div class="col-lg-12 pt-3">
                @if(@$cp->eventprofile->visitor_profile)
                <h3 class="display-5 text-blue">Visitors Profile</h3>
                <p class="card-text">{!!@$cp->eventprofile->visitor_profile!!}</p>   
                @else
                @endif            
              </div>
            </div>  
            

            

            <div class="mt-3 mb-3"></div>

            @if(count($cp->eventpartner) > 0)
            <div> 
              <h3 class="display-5 text-blue">Event Partners</h3>             
              <div class="row">
                @foreach($cp->eventpartner->take(6) as $partner)
                <div class="col-lg-2 mb-2">
                  <img class="img-fluid border border-secondary" src="{{ config('app.url') }}event/partner/{{$partner->image}}" title="{{$partner->img_title}}">
                </div>
                @endforeach
              </div>  
              <div class="text-right"><a href="{{url('events/'.$cp->event_url.'/partners')}}" class="text-blue small">More...</a>
              </div>            
            </div>  
            @else
            @endif
          </div>
           @endforeach  



          <div class="col-lg-3 pb-3">
            
            <div class="mb-4">
             <!--  <a href="{{url('newsletter-signup')}}">
                <button type="button" class="btn btn-block btn-primary"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;Events Newsletter</button>

              </a> -->
              <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;Events Newsletter</button>
            </div>

            <div id="form-sticky">
              <div class="bg-light p-2 border border-secondary div-shadow"> 
                <h3 class="text-center title mb-3 pb-2 pt-1 bg-primary text-white">Register <span class="text-white small font-italic">( for this Event )</span></h3>
                  <!-- @if(session('message'))
                    <div class="alert alert-{{ session('message_type') }} alert-dismissible" id="success-alert" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{@session('message')}}
                    </div>
                  @endif -->
                
                  <div class="form-group">
                    {{Form::text('name', null,['required'=>'required','class'=>'form-control','placeholder'=>'Name*'])}}
                    <input type="hidden" name="page" value="event_profile">
                    <input type="hidden" name="slug" value="{{\Request::segment(2)}}">
                    <input type="hidden" name="url" value="<?php echo url()->current();?>">
                    
                  </div>
                  <div class="form-group">
                   {{Form::text('company', null,['required'=>'required','class'=>'form-control','placeholder'=>'Company Name*'])}}
                  </div>
                  <div class="form-group">
                    <select class="form-control" name="country">
                      <option>Select Country</option>
                    @foreach($countries as $country)
                      <option value="{{$country->country_name}}">{{$country->country_name}}</option> 
                    @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                   {{Form::text('email', null,['required'=>'required','class'=>'form-control','placeholder'=>'Email*'])}}
                  </div>
                  <div class="form-group">
                    {{Form::text('telephone', null,['required'=>'required','class'=>'form-control','placeholder'=>'Telephone*'])}}
                  </div>
                  <div class="form-group">
                    {{Form::textarea('message', null,['rows'=>3,'class'=>'form-control','placeholder'=>'Write Message...'])}}
                  </div>
                 <div class="form-group mb-0">
                   {!! Form::captcha() !!}
                </div>
                <button type="submit"  class="btn btn-primary btn-block">Submit</button>
                {!! Form::close() !!}
              </div>  
              <img src="{{ config('app.url') }}/img/ssl-logo.png" alt="SSL Secure Connection" width="100" class="img-fluid pull-right mt-1 mb-1" />  
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>  
      <!-- Profile Body // -->
    </div>
@endsection
@section('scripts')
@if(session('message'))
    
          <script type="text/javascript">
          $(document).ready(function(){ 
              $('#myModal1').modal('show');
          });
         </script>
      @endif
   
@endsection