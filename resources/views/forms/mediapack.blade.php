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

            



            <div class="mt-4"></div>  

            <form action="{{ url('mediapack-download-success') }}"  method="post" class="contact-form d-flex justify-content-center">

              <!--hidden values -->

              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <input type="hidden" name="publicid" value="cc152ee294c6ea59eaf63641c77ecc6b">

              <input type="hidden" name="name" value="plantautomation-mediapack-download">

              <select name="cf_leads_technology" data-label="label:Technology" required="" hidden="">

                <option value="">Select Value</option>

                <option value="Plantautomation-technology" selected="">Plantautomation-technology</option>

                <option value="Asianhhm">Asianhhm</option>

                <option value="Pharmafocusasia">Pharmafocusasia</option>

                <option value="Hospitals-management">Hospitals-management</option>

                <option value="Pharmaceutical-tech">Pharmaceutical-tech</option>

                <option value="Packaging-labelling">Packaging-labelling</option>

                <option value="Pulpandpaper-technology">Pulpandpaper-technology</option>

                <option value="Defence-industries">Defence-industries</option>

                <option value="Plastics-technology">Plastics-technology</option>

                <option value="Automotive-technology">Automotive-technology</option>

                <option value="Ochre-media">Ochre-media</option>

              </select>



              <div class="form-container"> 

                <h1 class="form-title CAPS text-center">Download Mediapack</h1> 

                <div class="mt-2 mb-2"></div> 

                <div class="input-container"> 

                  <div class="row input-group req-input"> 

                    {{Form::text('firstname', null,['placeholder'=>"Enter Your First Name...",'pattern'=>"[A-Za-z\s]{3,30}" ,'title'=>"Enter only alphabets ",

                    'required'=>'required'])}}

                    @if ($errors->has('firstname'))

                      <div class="error text-danger">{{ $errors->first('firstname') }}</div>

                    @endif

                  </div> 

                  <div class="row input-group req-input"> 

                    {{Form::text('lastname', null,['placeholder'=>"Enter Your Last Name...",'pattern'=>"[A-Za-z\s]{3,30}" ,'title'=>"Enter only alphabets ",

                    'required'=>'required'])}}

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

                    {{Form::text('cf_leads_jobtitle', null,['placeholder'=>"Enter Your Job Title...",'required'=>'required'])}}

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

                    <select class="custom-select" id="select2" name="cf_leads_countryname" required> 

                     <option disabled selected value="">Select Your Country *</option>

                    @foreach($countries as $country)

                      <option value="{{$country->country_name}}"> {{$country->country_name}}</option> 

                     @endforeach

                    </select> 

                    @if ($errors->has('cf_leads_countryname'))

                      <div class="error text-danger">{{ $errors->first('cf_leads_countryname') }}</div>

                    @endif                    

                  </div>



                <div class="row input-group req-input">                     

                  <select class="form-control custom-select" name="whom" required="">

                      <option value="">How did you hear about us?*</option>

                      <option value="Internet Search">Internet Search</option>

                      <option value="Social Media">Social Media</option>

                      <option value="Email">Email</option>

                      <option value="Other">Other</option>

                    </select>                                         

                </div> 



                  <div class="row input-group req-input"> 

                    {{Form::textarea('description', null,['required'=>'required','placeholder'=>'Your Message ...','rows'=>5])}}



                  </div> 



                  <div class="mt-4"></div> 



                  <div class="text-left form-group mb-0"> 

                    <label class="checkbox-inline text-white"> 

                    <input type="checkbox" required value="Yes" name="newsletter" id="newsletter" checked > &nbsp;<small>Plant Automation Technology e-Newsletters</small>

                    </label> 

                  </div> 

                  <div class="text-left form-group mb-0"> 

                    <label class="checkbox-inline text-white"> 

                    <input  value="Yes" name="agree" id="agree" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms & Conditions & Disclaimer' : '');" type="checkbox" required checked> &nbsp;<small>I have read and accept the Terms &amp; Conditions &amp; Disclaimer.</small>

                    </label> 

                  </div> 

                  <div class="text-left form-group mb-0"> 

                    <label class="checkbox-inline text-white"> 

                    <input type="checkbox" required value="Yes" name="promotions" id="promotions" checked> &nbsp;<small>You will receive the relevant promotions, products &amp; services.</small>

                    </label> 

                  </div> 

                   <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">

                  <input type="hidden" name="action" value="{{ url('mediapack-download-success') }}">

                  <!-- <div class="text-left form-group">                  

                   {!! Form::captcha() !!}

                     @if ($errors->has('g-recaptcha-response'))

                      <div class="error text-danger">{{ $errors->first('g-recaptcha-response') }}</div>

                    @endif

                  </div> --> 

                  <div class="submit-row"> 

                    <input type="submit" value="Submit" class="btn btn-block submit-form">

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



            <div class="row">                  

              <div id="testimonial" class="carousel slide" data-ride="carousel"> 

                <h2 class="main-heading"><a href="#" class="text-dark">TESTIMONIALS</a></h2>   

                <ol class="carousel-indicators carousel-indicators-round d-flex justify-content-end">

                  <li data-target="#testimonial" data-slide-to="0" class="active"></li>

                  <li data-target="#testimonial" data-slide-to="1"></li>

                  <li data-target="#testimonial" data-slide-to="2"></li>

                </ol>                 

                <div class="carousel-inner">

                  <div class="carousel-item active">

                    <img src="{{ asset('industry/img/testimonial/01.jpg')}}" width="100" class="img-fluid rounded-circle border div-shadow mb-2" alt="" />

                    <p class="discription">PlantAutomation is very customer-oriented and dedicated in understanding digital strategy to advise related content in the proposing stage and provides quality service and ensure media schedule is fulfilled. Partnering with Plant Automation has helped us to take our first step to amplify web presence.</p>

                    <p class="name"><strong>Ms. Iris Tsai</strong> - Advantech<br>

                    <small>Digital Marketing Executive</small></p>  

                  </div>

                  <div class="carousel-item">

                    <img src="{{ asset('industry/img/testimonial/02.jpg')}}" width="100" class="img-fluid rounded-circle border div-shadow mb-2" alt="" />

                    <p class="discription">What I see as strength of your team is the colleagues who are serious, professional and same time quite friendly and polite. Technical services can be obviously always update sometime by next version of programs, but finding good people is not that easy.</p>

                    <p class="name"><strong>Mr. Ardeshir Azartash</strong> - RUHFUS Systemhydraulik GmbH<br>

                    <small>Business Development & International Sales</small></p>

                  </div>

                  <div class="carousel-item">

                    <img src="{{ asset('industry/img/testimonial/03.jpg')}}" width="100" class="img-fluid rounded-circle border div-shadow mb-2" alt="" />

                    <p class="discription">Plant Automation Technology has a very global presence and offers a tremendous service. And as a bonus, we are able to reach a very interesting target group.</p>

                    <p class="name"><strong>Raphael Binder</strong> - Syslogic GmbH<br>

                    <small>Head of Product Management</small></p>

                  </div>

                </div>

              </div>

            </div> 

          </div>

          <!-- End Right Section -->

          

      </div>

    </div>

    <!-- END Container -->

     <script type="text/javascript">

      var url = "{{ url('mediapack-download-success') }}";

      function OnButton1(){  

        setTimeout(function(){

        document.mediapack_form.action = url;

        document.mediapack_form.submit();  

        },200);

      }

      //validation

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

  <script>

  document.getElementById("agree").setCustomValidity("Please indicate that you accept the Terms & Conditions & Disclaimer");

</script>

@endsection

