@extends('../layouts/pages')
@section('style')
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrapa.min.css"> -->
  <link rel="stylesheet" type="text/css" href="{{config('app.url').'css/swiper.min.css' }}">
 <style type="text/css">
 
 .swiper-container {
      width: 100%;
    
      padding-bottom: 50px;
    }
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 480px;
      /*height: 300px;*/
    }
      .grecaptcha-badge { 
    bottom: 100px !important;
  }
  .rc-anchor-normal{
    background: #000 !important;
    color: #000 !important; 
  }

</style>
<script src="https://www.google.com/recaptcha/api.js?render=6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle"></script>
<script> 
    grecaptcha.ready(function() {
      grecaptcha.execute('6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle', {action: 'action'}).then(function(token) {
        document.getElementById("g-recaptcha-response").value=token
      });
    });
</script>
@endsection
@section('content')
 <!-- // Profile Body -->
    <div role="main">
      <!-- // EVENTS NEWSLETTERS -->
      <!-- <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center pt-2">
            <h2 class="main-title"><span>EVENTS NEWSLETTER</span></h2>
          </div>

          <div class="col-lg-3 mt-4">
            <a href="{{url('event-newsletter-signup')}}">
              <button type="button" class="btn btn-block btn-primary mt-2">
                <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;Event Newsletter Signup
              </button>
            </a>
          </div>
        </div>
      </div> -->

      <div class="container">
        <div class="row">   

          <div class="col-lg-8 text-center mt-5">
            <div class="swiper-container" dir="rtl">
                <div class="swiper-wrapper">             
              <?php
              $i=1; 

              ?>

              @foreach($event_newsletter as $newsletter)

               @if($i== count($event_newsletter) )  

                  <div class="swiper-slide swiper-slide-active">
                        <a href="{{ config('app.url') }}events-newsletters/{{ $newsletter->file }}" target="_blank">
                        <img src="{{ config('app.url') }}events-newsletters/images/{{ $newsletter->image }}" class="img-fluid" alt='{{$newsletter->title }}'>
                        </a> 
                  </div>
             @else
              <div class="swiper-slide">
                        <a href="{{ config('app.url') }}events-newsletters/{{ $newsletter->file }}" target="_blank">
                        <img src="{{ config('app.url') }}events-newsletters/images/{{ $newsletter->image }}" class="img-fluid" alt='{{$newsletter->title }}'>
                        </a> 
                  </div>
              @endif
              <?php $i++; ?>
            
              @endforeach
                
                </div>

                <!-- Add Pagination -->
                 <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
              </div>                  
     </div>
                 <!-- // Form -->
        <div class="col-lg-4 mt-5" id="company-profile">
         
           
            <!--<form name="registration_form" method="post" id="form_count" class="contact-form d-flex justify-content-center">-->
            <form  method="post" action="{{url('events-newsletters-success')}}" class="contact-form d-flex justify-content-center">
              <!--hidden values -->
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="publicid" value="7671192dbc2d395adf92cb9e119ab350">
              <input type="hidden" name="name" value="plantautomation-registration">
           
                <input type="hidden" name="registration" value="events-newsletters">
              <div class=" border border-secondary bg-light p-3"> 

                <h1 class="text-center text-blue display-4 pb-2">Subscribe our Newsletter</h1> 

                <div class="form-group">
                  {{Form::text('firstname', null,['required'=>'required','pattern'=>"[A-Za-z\s]{3,30}" ,'title'=>"Enter only alphabets ",'class'=>'form-control','placeholder'=>'First Name*'])}}
                  <input type="hidden" name="page" value="profile">
                  <input type="hidden" name="slug" value="{{\Request::segment(2)}}">
                    @if ($errors->has('firstname'))
                      <div class="error text-danger">{{ $errors->first('firstname') }}</div>
                    @endif
                </div>
                 <div class="form-group">
                  {{Form::text('lastname', null,['required'=>'required','pattern'=>"[A-Za-z\s]{3,30}" ,'title'=>"Enter only alphabets ",'class'=>'form-control','placeholder'=>'Last Name*'])}}
                  <input type="hidden" name="page" value="profile">
                  <input type="hidden" name="slug" value="{{\Request::segment(2)}}">
                    @if ($errors->has('lastname'))
                      <div class="error text-danger">{{ $errors->first('lastname') }}</div>
                    @endif
                </div>
                <div class="form-group">
                 {{Form::text('email', null,['required'=>'required','class'=>'form-control','placeholder'=>'Email*'])}}
                   @if ($errors->has('email'))
                      <div class="error text-danger">{{ $errors->first('email') }}</div>
                    @endif
                </div>
                <div class="form-group">
                 {{Form::text('company', null,['required'=>'required','pattern'=>"[A-Za-z0-9\s]{3,30}",'class'=>'form-control','placeholder'=>'Company Name*'])}}
                   @if ($errors->has('company'))
                      <div class="error text-danger">{{ $errors->first('company') }}</div>
                    @endif
                </div>
                 <div class="form-group">
                 {{Form::text('cf_leads_jobtitle', null,['required'=>'required','class'=>'form-control','placeholder'=>'Job Title'])}}
                   @if ($errors->has('cf_leads_jobtitle'))
                      <div class="error text-danger">{{ $errors->first('cf_leads_jobtitle') }}</div>
                    @endif
                </div>
                <div class="form-group">
                  {{Form::text('mobile', null,['required'=>'required','pattern'=>"[0-9\s._*#()+-]+",'class'=>'form-control','placeholder'=>'Telephone*'])}}
                    @if ($errors->has('mobile'))
                      <div class="error text-danger">{{ $errors->first('mobile') }}</div>
                    @endif
                </div>
                <div class="form-group">
                  <select class="form-control" name="cf_leads_countryname" required>
                       <option disabled selected value="">Select Your Country </option>

                  @foreach($countries as $country)
                    <option value="{{$country->country_name}}">{{$country->country_name}}</option> 
                  @endforeach
                  </select>
                    @if ($errors->has('country'))
                      <div class="error text-danger">{{ $errors->first('country') }}</div>
                    @endif
                </div>
                <div class="form-group">
                  {{Form::textarea('description', null,['rows'=>3,'class'=>'form-control','placeholder'=>'Write Message...'])}}
                </div>

                <div class="mt-3"></div> 

                <div class="text-left form-group mb-0"> 
                  <label class="checkbox-inline"> 
                  <input type="checkbox" value="Yes" name="newsletter" id="newsletter" checked> &nbsp;<small>Monthly Newsletter</small>
                  </label> 
                </div> 
                <div class="text-left form-group mb-0"> 
                  <label class="checkbox-inline"> 
                  <input type="checkbox" value="Yes" name="newsletter" id="newsletter" checked> &nbsp;<small>Events Newsletter</small>
                  </label> 
                </div> 
                <div class="text-left form-group mb-0"> 
                  <label class="checkbox-inline"> 
                  <input type="checkbox" value="Yes" name="agree" id="agree" checked> &nbsp;<small>I have read and accept the Terms &amp; Conditions.</small>
                  </label> 
                </div> 
                <div class="text-left form-group mb-0"> 
                  <label class="checkbox-inline"> 
                  <input type="checkbox" value="Yes" name="promotions" id="promotions" checked> &nbsp;<small>Receive promotions, products &amp; services info.</small>
                  </label> 
                </div> 
                <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                <input type="hidden" name="action" value="{{ url('registration-success') }}">
                <!-- <div class="form-group mb-0">
                 {!! Form::captcha() !!}
                   @if ($errors->has('g-recaptcha-response'))
                      <div class="error text-danger">{{ $errors->first('g-recaptcha-response') }}</div>
                    @endif
                </div> -->
                 <input type="submit" value="Submit" class="btn btn-primary btn-block" >
              </div>              
            </form> 
          <img src="{{ config('app.url') }}img/ssl-logo.png" alt="SSL Secure Connection" width="100" class="img-fluid pull-right mt-1 mb-1" />
          <div class="clearfix"></div>
          <div class="mb-1"></div>
        </div> 
      <!-- Start Form // -->                        
        </div>
      </div>
      <!-- EVENTS NEWSLETTERS // -->        
    </div>
      <!-- Profile Body // -->
    </div>
     <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
           <div class="modal-header">
              <h4 class="modal-title text-success">{{session('message')}}</h4>
              <button type="button" class="close"  onClick="location.href=location.href">&times;</button>
              
            </div>
            <div class="modal-body">
                <p class="">For any further queries or issue resolution reach us at +91 40 4961 4567 or email us at info@plantautomation-technology.com. And our support staff will get back to you at the earliest.</p></p>
            </div>
            <div class="modal-footer">
                <a class="btn btn-default" role="button" id="aa" name="aa"  href="{{url('events-newsletters')}}" aria-expanded="false">
              Close
            </a> 
            </div>
          </div>
        </div>
      </div>
@endsection
@section('scripts')  
<script type="text/javascript" src="{{config('app.url').'js/swiper.min.js' }}"></script>
<script type="text/javascript">
 
  var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: false,
      centeredSlides: true,
      slidesPerView: 'auto',
  
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: false,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

    $('body').on('click','.swiper-slide',function(){

       if ($(this).hasClass("swiper-slide-active")) {
             return true;
       }else{
            return false;
        
       };
       });
</script>
 @if(session('message_type') == 'success')    
          <script type="text/javascript">         
              history.pushState(null, null, 'events-newsletters/success');             
              $('#myModal').modal('show');         
         </script>
  @endif
  <script type="text/javascript">
      var url = "{{ url('registration-success') }}";
      function OnButton1(){    
        setTimeout(function(){
        document.registration_form.action = url;
        document.registration_form.submit();  
        },200);
      }
// validations
      function checkform() {      
       var flag = true;
       var form = $('#form_count');
       $("#form_count input").each(function(){
        if($(this)[0].hasAttribute("required")){
          if($(this)[0].value == ""){
            $('#alertModal').modal('show');                 
            flag = false;
          }else{
            OnButton1();
            return true;
          }
        }
      });      
    }
  </script>

@endsection