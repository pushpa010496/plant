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

              <h5 class="modal-title text-success">Success! You have successfully submitted your Event</h5>

              <button type="button" class="close" data-dismiss="modal">&times;</button>

              

            </div>

           <div class="modal-body">

                <p class="">Thank you for your interest in our Events section. We have received your posting and a client success team member will get in touch with you shortly to take this ahead.</p>

                 <p>Happy Surfing!</p>

            <p class="mb-0">Regards,</p>

            <p class="mb-0">Events -Client Success Team (CRM),</p>

            <img src="{{ config('app.url')}}img/main-logo.png" width="150px">

            </div>

            <div class="modal-footer">

             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

              

            </div>

          </div>

        </div>

      </div>



     <div class="container">

      <div class="row">

        <!-- // Form -->

        <div class="col-lg-6 form-bg-color">

          

            <div class="mt-4"></div>  

            <form name="post_event_form" method="post" class="contact-form d-flex justify-content-center" id="form_count">

              @csrf



                {{-- Vtiger hidden fields --}}

                <input type="hidden" name="name" value="plantautomation-postevent">

                <input type="hidden" name="publicid" value="13b995ecf7c8379f8c864cc74d737bd9">

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

                {{-- Vtiger hidden fields end  --}}



              <div class="form-container"> 

                <h1 class="form-title CAPS text-center">Post your Events and Exhibitions</h1> 

                <div class="mt-2 mb-2"></div> 

                <ul class="error"></ul>

                <div class="input-container"> 

                  <div class="row input-group req-input"> 

                    {{Form::text('cf_leads_eventname', null,['placeholder'=>"Enter Event Name...",'pattern'=>"[A-Za-z\s]{3,30}" ,'title'=>"Enter only alphabets ",'required'=>'required'])}}

                  </div> 

                  @if ($errors->has('cf_leads_eventname'))

                  <span class="text-danger">{{ $errors->first('cf_leads_eventname') }}</span>

                  @endif



                  <div class="row input-group req-input"> 

                    {{Form::text('email', null,['placeholder'=>"Enter Your Email...",'required'=>'required'])}}

                  </div> 

                  @if ($errors->has('email'))

                  <span class="text-danger">{{ $errors->first('email') }}</span>

                  @endif



                  <div class="row input-group req-input"> 

                    {{Form::text('cf_leads_eventvenue', null,['placeholder'=>"Event Venue "])}}

                  </div> 

                  @if ($errors->has('cf_leads_eventvenue'))

                  <span class="text-danger">{{ $errors->first('cf_leads_eventvenue') }}</span>

                  @endif



                  <div class="row input-group req-input"> 

                    {{Form::text('cf_leads_eventaddress', null,['placeholder'=>"Enter Your Event Address..."])}}

                  </div> 

                  @if ($errors->has('cf_leads_eventaddress'))

                  <span class="text-danger">{{ $errors->first('cf_leads_eventaddress') }}</span>

                  @endif



                  <div class="row input-group req-input"> 

                    {{Form::text('cf_leads_startdate', null,['placeholder'=>"Start Date...",'id'=>'from'])}}

                  </div> 

                  @if ($errors->has('cf_leads_startdate'))

                  <span class="text-danger">{{ $errors->first('cf_leads_startdate') }}</span>

                  @endif



                  <div class="row input-group req-input"> 

                    {{Form::text('cf_leads_enddate', null,['placeholder'=>"End Date...",'id'=>'to'])}}

                  </div> 

                  @if ($errors->has('cf_leads_enddate'))

                  <span class="text-danger">{{ $errors->first('cf_leads_enddate') }}</span>

                  @endif

                   <div class="row input-group req-input"> 

                    {{Form::text('cf_leads_jobtitle', null,['placeholder'=>"Enter Job Title..." ,'title'=>"Enter only alphabets ",'required'=>'required'])}}

                  </div> 

                  @if ($errors->has('cf_leads_jobtitle'))

                  <span class="text-danger">{{ $errors->first('cf_leads_jobtitle') }}</span>

                  @endif

                   <div class="row input-group req-input"> 

                    {{Form::text('cf_leads_organiser', null,['placeholder'=>" Event Organiser..."])}}

                  </div> 

                  @if ($errors->has('cf_leads_organiser'))

                  <span class="text-danger">{{ $errors->first('cf_leads_organiser') }}</span>

                  @endif

                   <div class="row input-group req-input"> 

                    {{Form::text('cf_leads_weblink', null,['placeholder'=>"Event Web Link..."])}}

                  </div> 

                 



                  <div class="row input-group req-input"> 

                    <select id="country" name="cf_leads_countryname" required> 

                      <option disabled selected value="">Select Your Country </option>

 

                     @foreach($countries as $country)

                      <option value="{{$country->country_name}}"> {{$country->country_name}}</option> 

                     @endforeach

                    </select> 

                  </div> 

                  @if ($errors->has('cf_leads_countryname'))

                  <span class="text-danger">{{ $errors->first('cf_leads_countryname') }}</span>

                  @endif



                <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">

                <input type="hidden" name="action" value="{{ url('postevent-success') }}">



                  <!-- <div class="text-left form-group">                  

                   {!! Form::captcha() !!}

                  </div> 

                  @if ($errors->has('g-recaptcha-response'))

                  <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>

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



  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script> -->

<script> 

    grecaptcha.ready(function() {

      grecaptcha.execute('6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle', {action: 'submit'}).then(function(token) {

        document.getElementById("g-token").value=token

      });

    });

</script>

  <script type="text/javascript">

    var url = "{{ url('postevent-success') }}";

      function OnButton1(){    

        setTimeout(function(){

        document.post_event_form.action = url;

        document.post_event_form.submit();  

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

    <script>

    $( function() {

    var dateFormat = "yy-mm-dd",

      from = $( "#from" )

        .datepicker({

          defaultDate: "+1w",

          changeMonth: true,

          numberOfMonths: 1

        })

        .on( "change", function() {

          to.datepicker( "option", "minDate", getDate( this ) );

        }),

      to = $( "#to" ).datepicker({

        defaultDate: "+1w",

        changeMonth: true,

        numberOfMonths: 1

      })

      .on( "change", function() {

        from.datepicker( "option", "maxDate", getDate( this ) );

      });

 

    function getDate( element ) {

      var date;

      try {

        date = $.datepicker.parseDate( dateFormat, element.value );

      } catch( error ) {

        date = null;

      }

 

      return date;

    }

  } );

  </script>

 <!--  <script type="text/javascript">

     $('body').on('click','.submit-form',function() {     

          var dataString = $('form').serialize(); 

          var url = "{{ url('postevent-success') }}";

      

       $.ajax({

            type: 'post',

            url: url,

           headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

          },

           data: dataString,

            success:function(data){

                 

           

               

              history.pushState(null, null, '/postevent-success');                                       

               $(".error").empty();

                document.event_form.action = "https://ochremediapvtltd1.od2.vtiger.com/modules/Webforms/capture.php";

               document.event_form.submit();   

               $('form')[0].reset();

               grecaptcha.reset();

            },

              error: function (data) {

                $(".error").empty();

                  $.each( data.responseJSON.errors, function( key, value ) {

                      $(".error").append('<li class="text-danger">'+value+'</li>');

                    });

                }

        });

    });

      @if ( Request::segment(2) == 'success')

        

       if (performance.navigation.type == 1) {



      }else{        

        $('#myModal').modal('show');      

      }

    @endif

  </script> -->

@endsection