@extends('../layouts/pages')
@section('style')
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
</style>
@endsection
@section('content')
<!-- // Profile Body -->
<div role="main">

  <div class="container">
    <div class="row">   

      <div class="col-lg-8 text-center mt-5">
        <?php
        $i=1; 

        ?>
        <div class="row">
          @foreach($event_newsletter as $newsletter)
          <div class="col-md-3 col-md-3 col-sm-6 col-xs-6 e-news-btn mb-3"> 
            <div class="bg-secondary p-2">
              <a href="{{ config('app.url') }}e-newsletters/{{ $newsletter->file }}" target="_blank" class="text-white font-12">{{$newsletter->title }}
              </a> 
            </div>
          </div>
          @endforeach
        </div>
      </div>  
      <!-- // Form -->
      <div class="col-lg-4 mt-5" id="company-profile">


        {!! Form::open(['url' => 'registration-success','class'=>'contact-form d-flex justify-content-center']) !!}

        <div class=" border border-secondary bg-light p-3"> 

          <h1 class="text-center text-blue display-4 pb-2">Subscribe our News Letter</h1> 

          <div class="form-group">
            {{Form::text('name', null,['required'=>'required','pattern'=>"[A-Za-z\s]{3,30}" ,'title'=>"Enter only alphabets ",'class'=>'form-control','placeholder'=>'Name*'])}}
            <input type="hidden" name="page" value="profile">
            <input type="hidden" name="slug" value="{{\Request::segment(2)}}">
            @if ($errors->has('name'))
            <div class="error text-danger">{{ $errors->first('name') }}</div>
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
          {{Form::text('phone', null,['required'=>'required','pattern'=>"[0-9\s._*#()+-]+",'class'=>'form-control','placeholder'=>'Telephone*'])}}
          @if ($errors->has('text'))
          <div class="error text-danger">{{ $errors->first('text') }}</div>
          @endif
        </div>
        <div class="form-group">
          <select class="form-control" name="country" required>
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
        {{Form::textarea('message', null,['rows'=>3,'class'=>'form-control','placeholder'=>'Write Message...'])}}
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
      <div class="form-group mb-0">
       {!! Form::captcha() !!}
       @if ($errors->has('g-recaptcha-response'))
       <div class="error text-danger">{{ $errors->first('g-recaptcha-response') }}</div>
       @endif
     </div>
     <button type="submit" class="btn btn-primary btn-block">Submit</button>
   </div>              
   {{Form::close()}}   
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

@endsection