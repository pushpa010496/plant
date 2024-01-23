@extends('../layouts/pages')

@section('style')

  <link rel="stylesheet" href="{{ asset('industry/css/form-design.css')}}">

  <style type="text/css">

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
 <!-- Start Content -->

     <div class="container">

      <div class="row">

        <!-- // Form -->

        <div class="col-lg-6 form-bg-color">

           <!-- <center> @include('error')</center>    -->



            <div class="mt-4"></div>  

           {{--  {!! Form::open(['url' => 'post-requirement-success','class'=>'contact-form d-flex justify-content-center']) !!} --}}

            <form name="post_requirement_form" method="post" class="contact-form d-flex justify-content-center" id="form_count">



              <!--hidden values-->              

              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <input type="hidden" name="name" value="plantautomation-post-requirement">

              

              <div class="form-container"> 

                <h1 class="form-title CAPS text-center">Post Your Requirement</h1> 

                <div class="mt-2 mb-2"></div> 

                <div class="input-container"> 

                  <div class="row input-group req-input"> 

                    {{Form::text('firstname', null,['placeholder'=>"Enter Your First Name...",'pattern'=>"[A-Za-z\s]{3,30}", 'title'=>"Enter only Alphabet characters ",'required'=>'required'])}}



                    @if ($errors->has('firstname'))

                      <div class="error text-danger">{{ $errors->first('firstname') }}</div>

                    @endif

                  </div>

                  <div class="row input-group req-input"> 

                    {{Form::text('lastname', null,['placeholder'=>"Enter Your Last Name...",'pattern'=>"[A-Za-z\s]{3,30}", 'title'=>"Enter only Alphabet characters ",'required'=>'required'])}}



                    @if ($errors->has('lastname'))

                      <div class="error text-danger">{{ $errors->first('lastname') }}</div>

                    @endif

                  </div>  



                  <div class="row input-group req-input"> 

                    {{Form::text('email', null,['placeholder'=>"Enter Your Email...",'required'=>'required'])}}

                    @if ($errors->has('email'))

                      <div class="error text-danger">{{ $errors->first('email') }}</div>

                    @endif

                  </div> 



                  <div class="row input-group req-input"> 

                    {{Form::text('company', null,['placeholder'=>"Enter Your Company name...",'pattern'=>"[A-Za-z0-9\s]{3,30}",'required'=>'required'])}}



                    @if ($errors->has('company'))

                      <div class="error text-danger">{{ $errors->first('company') }}</div>

                    @endif

                  </div> 

                   <div class="row input-group req-input"> 

                    {{Form::text('cf_leads_jobtitle', null,['placeholder'=>"Enter Your Job Title...",'pattern'=>"[A-Za-z0-9\s]{3,30}",'required'=>'required'])}}



                    @if ($errors->has('cf_leads_jobtitle'))

                      <div class="error text-danger">{{ $errors->first('cf_leads_jobtitle') }}</div>

                    @endif

                  </div> 



                  <div class="row input-group req-input"> 

                    {{Form::text('mobile', null,['placeholder'=>"Enter Your Phone Number...",'pattern'=>"[0-9\s._*#()+-]+",'required'=>'required'])}}

                    @if ($errors->has('mobile'))

                      <div class="error text-danger">{{ $errors->first('mobile') }}</div>

                    @endif



                  </div> 



                  <div class="row input-group req-input"> 

                    <select id="select2" name="cf_leads_countryname" required> 

                     <option disabled selected value="">Select Your Country </option>

                     @foreach($countries as $country)

                      <option value="{{$country->country_name}}"> {{$country->country_name}}</option> 

                     @endforeach

                    </select> 

                  </div>



                  <div class="row input-group req-input"> 

                    {{Form::textarea('description', null,['placeholder'=>'Your Message ...','rows'=>5])}}

                  </div> 



                  <div class="mt-4"></div> 

                <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">

                <input type="hidden" name="action" value="{{ url('post-requirement-success') }}">

                  <!-- <div class="text-left form-group">                  

                   {!! Form::captcha() !!}

                   <span class="error text-danger verifi"></span>

                  </div> 

                    @if ($errors->has('g-recaptcha-response'))

                      <div class="error text-danger">{{ $errors->first('g-recaptcha-response') }}</div>

                    @endif -->

                  <div class="submit-row"> 

                    <input type="button" value="Submit" class="btn btn-block submit-form" onclick="return checkform();">

                  </div> 

                </div> 

              </div>              

            </form>            

          <div class="clearfix"></div>



          <div class="mb-1"></div>

        </div> 

        <!-- Start Form // -->



        <div class="col-lg-1"></div>                

          <!-- Start Right Section -->

          <div class="col-lg-5 text-center">

            <div class="mt-2 mb-2">

              <img src="{{ asset('industry/img/profile-screen.png')}}" alt="Company Profile" title="Company Profile" class="img-fluid" />

            </div>

          </div>

          <!-- End Right Section -->

          

      </div>

    </div>

    <!-- END Container -->

      <div id="myModal" class="modal fade" role="dialog">

        <div class="modal-dialog">

          <!-- Modal content-->

          <div class="modal-content">

           <div class="modal-header">

              <h4 class="modal-title text-success">Success! You have successfully posted your requirement.</h4>

              <button type="button" class="close" onClick="location.href=location.href">&times;</button>

              

            </div>

           <div class="modal-body">

                <p class="">For any further queries or issue resolution reach us at <strong>+91 40 4961 4567</strong> or email us at <strong>info@plantautomation-technology.com</strong>. And our support staff will get back to you at the earliest.</p>

           {{--  <p class="mb-0">Regards,</p>

            <p class="mb-0">Client Success Team (CRM),</p>

            <img src="{{ config('app.url')}}img/main-logo.png" width="150px"> --}}

            </div>

            <div class="modal-footer">

               <button type="button" class="btn btn-default" onClick="location.href=location.href">Close</button>

            </div>

          </div>

        </div>

      </div>

@endsection

@section('scripts')

  <script type="text/javascript">

    var url = "{{ url('post-requirement-success') }}";

      function OnButton1(){    

        setTimeout(function(){

        document.post_requirement_form.action = url;

        document.post_requirement_form.submit();  

        },200);

      }

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

            return true

          }

        }

      }); 

    }

  </script>

@endsection

