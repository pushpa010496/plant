@extends('../layouts/event')
@section('style')
 
@endsection
<script src="https://www.google.com/recaptcha/api.js?render=6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle"></script>
<script> 
    grecaptcha.ready(function() {
      grecaptcha.execute('6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle', {action: 'action'}).then(function(token) {
        document.getElementById("g-recaptcha-response").value=token
      });
    });
</script>
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
      {!! Form::open(['url' => 'company-enquiry']) !!}
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
       <input type="hidden" name="publicid" value="50e431570883ed0d8c4871b739d7aa46">
      <input type="hidden" name="name" value="plantautomation-event-register">
      <div class="container pt-4 pb-3">        
        <div class="row">          
          @foreach($eventprofile as $cp)
          <div class="col-lg-9">
            <input type="hidden" name="event_name_display" value="{{$cp->name}}">
            <input type="hidden" name="event_url" value="{{$cp->event_url}}">
            
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
              <a href="{{url('events-newsletters')}}">
                <button type="button" class="btn btn-block btn-primary"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;Events Newsletter</button>
              </a>
             <!--  <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;Events Newsletter</button> -->
            </div>

            <div id="form-sticky">
              <div class="bg-light p-2 border border-secondary div-shadow"> 
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
                  <div class="form-group">
                    {{Form::text('firstname', null,['required'=>'required','class'=>'form-control','placeholder'=>'First Name*'])}}
                    <input type="hidden" name="cf_leads_page" value="event_profile">
                    <input type="hidden" name="slug" value="{{\Request::segment(2)}}">
                    <input type="hidden" name="url" value="<?php echo url()->current();?>">
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
                      <option>Select Country</option>
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
                   <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                 <input type="hidden" name="action" value="{{ url('company-enquiry') }}">
                 <!-- <div class="form-group mb-0">
                   {!! Form::captcha() !!}
                   @if ($errors->has('g-recaptcha-response'))
                      <div class="error text-danger">{{ $errors->first('g-recaptcha-response') }}</div>
                    @endif
                     <div class="error text-danger verifi"></div>
                </div> -->
               <!--  <button type="submit"  class="btn btn-primary btn-block">Submit</button> -->
               <input type="button" class="btn btn-primary btn-block" value="Submit" name=button1 onclick="return checkform();">
                <!-- {!! Form::close() !!} -->
              </form>
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
         var url = window.location.href.toString().split(window.location.host)[1];
            window.history.pushState("object or string", "Title",url+"-success");
              $('#myModal1').modal('show');         
         </script>
      @endif
  <script type="text/javascript">
      var url = "{{ url('company-enquiry') }}";
      function OnButton1(){
        setTimeout(function(){
           document.product_form.action = url;
           document.product_form.submit();
        },400);
      }
      function checkform() {  

       var flag = true;
       var form = $('#form_count');
       if(form.find('select').val() == ''){
         $('#alertModal').modal('show');  
         return false;
       }      
       $("#form_count input").each(function(){
        if($(this)[0].hasAttribute("required")){
          if($(this)[0].value == ""){
            $('#alertModal').modal('show');
            flag = false;
          }else{
             OnButton1();
             return true
          }
        }
      });
       
       
     }
  </script> 
@endsection