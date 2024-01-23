@extends('../layouts/pages')

@section('style')

<!--   <link rel="stylesheet" href="{{ asset('industry/css/form-design.css')}}"> -->

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

 <!-- Start Content -->

 
@php     
       $page = getPageId(Request::segment(2));     
       $page_all = getPage(Request::segment(1));     
     @endphp
      <!-- Leader Board Banner -->
      <div class="container">
        <div class="row">
          @php
          $count =0;
          @endphp
          @foreach($banner1314 as $k=>$homebanner12)   
            @foreach($homebanner12->pagesCount as $j=>$pcount)
              @if($homebanner12->positions[0]->id == 14 and $pcount->id == $page_all)
                @php $count++;  @endphp
              @endif  
            @endforeach
          @endforeach
          @if($count == 1)
          <?php $column=12 ?>             
          @else
          <?php $column=6 ?>
          @endif
          @foreach($banner1314 as $k=>$homebanner12)   
          @foreach($homebanner12->pagesCount as $j=>$pcount)
          @if($homebanner12->positions[0]->id == 14 and $pcount->id == $page_all)
          <div class="col-12 text-center " >
            <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" class="" title="{{$homebanner12->title}}"><img class="img-fluid div-shadow mb-2" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="{{$homebanner12->img_alt}}" title="{{$homebanner12->img_title}}" /></a>
          </div>
          @else
          @endif  
          @endforeach
          @endforeach
        </div>
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
                <button type="button" class="btn btn-default" onClick="location.href=location.href">Close</button>
            </div>
          </div>
        </div>
      </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <div class="container">
      <div class="row">
       <!-- Start Left Section -->
        <div class="col-lg-8 text-left mt-5">
         <!--  <div class="mt-2 mb-2">
            <img src="{{ asset('industry/images/subscribe-now-screens.png')}}" alt="Subscribe Now" title="Subscribe Now" class="img-fluid" />
          </div> -->
          <!-- // Content -->
          <!-- Slider -->
            <div class="swiper-container" dir="rtl">
                <div class="swiper-wrapper">             
              <?php
              $i=1; 
              ?>
              @foreach($enews_letter as $newsletter)
               @if($i== count($enews_letter) )  
                  <div class="swiper-slide swiper-slide-active">
                        <a href="{{ config('app.url') }}e-newsletters/{{ $newsletter->file }}" target="_blank">
                        <img src="{{ config('app.url') }}e-newsletters/images/{{ $newsletter->image }}" class="img-fluid" alt='{{ $newsletter->title }}'>
                        </a> 

                  </div>

             @else

              <div class="swiper-slide">

                        <a href="{{ config('app.url') }}e-newsletters/{{ $newsletter->file }}" target="_blank">

                        <img src="{{ config('app.url') }}e-newsletters/images/{{ $newsletter->image }}" class="img-fluid" alt='{{ $newsletter->title }}'>

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

          <!-- Slider End -->

        </div>

        <!-- End Left Section -->







        <!-- // Form -->

        <div class="col-lg-4 mt-5" id="company-profile">

         

           

             <form  method="post" action="{{route('registration.post')}}" class="contact-form d-flex justify-content-center" id="form_count">

              <!--hidden values -->

              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <input type="hidden" name="publicid" value="7671192dbc2d395adf92cb9e119ab350">

              <input type="hidden" name="name" value="plantautomation-registration">

             

                 

                <input type="hidden" name="registration" value="registration">

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

                    @if ($errors->has('cf_leads_countryname'))

                      <div class="error text-danger">{{ $errors->first('cf_leads_countryname') }}</div>

                    @endif

                </div>

                <div class="form-group">

                  {{Form::textarea('description', null,['rows'=>3,'class'=>'form-control','placeholder'=>'Write Message...'])}}

                </div>



                <div class="mt-3"></div> 



                <div class="text-left form-group mb-0"> 

                  <label class="checkbox-inline"> 

                  <input type="checkbox" value="Yes" name="newsletter" id="newsletter" checked > &nbsp;<small>Monthly Newsletter</small>

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

                <!-- <input type="hidden" name="action" value="{{ url('registration-success') }}"> -->

                <!-- <div class="form-group mb-0">

                 {!! Form::captcha() !!}

                   @if ($errors->has('g-recaptcha-response'))

                      <div class="error text-danger">{{ $errors->first('g-recaptcha-response') }}</div>

                    @endif

                </div> -->

                <input type="submit" value="Submit" class="btn btn-primary btn-block">

              </div> 

              </form>   

          <img src="{{ config('app.url') }}img/ssl-logo.png" alt="SSL Secure Connection" width="100" class="img-fluid pull-right mt-1 mb-1" />

          <div class="clearfix"></div>

          <div class="mb-1"></div>

        </div> 

      <!-- Start Form // -->

        

                     

      </div>

    </div>

    <!-- END Container -->

   

@endsection

@section('scripts')

<script type="text/javascript" src="{{config('app.url').'js/swiper.min.js' }}"></script>

  @if(session('message_type') == 'success')    

          <script type="text/javascript">         

              history.pushState(null, null, '/registration-success');            

              $('#myModal').modal('show');         

         </script>

  @endif



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

   <script type="text/javascript">

      var url = "{{ url('registration-success') }}";

      function OnButton1(){  

        setTimeout(function(){

        document.registration_form.action = url;

        document.registration_form.submit();  

        },200);

      }



    //   function checkform() {      

    //    var flag = true;

    //    var form = $('#form_count');

    //    $("#form_count input").each(function(){

    //     if($(this)[0].hasAttribute("required")){

    //       if($(this)[0].value == ""){

    //         $('#alertModal').modal('show');                 

    //         flag = false;

    //       }else{

    //         OnButton1();

    //         return true

    //       }

    //     }

    //   });

       

    //  }

  </script>

@endsection