@extends('../layouts/pages')

@section('style')

 <link rel="stylesheet" type="text/css" href="{{ config('app.url')}}css/sharethis.css">

 <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5af1a3927610d3001177ca34&product=custom-share-buttons"></script>

@endsection
<link rel="stylesheet" type="text/css" href="{{ config('app.url')}}css/sharethis.css">

 <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5af1a3927610d3001177ca34&product=custom-share-buttons"></script>

 <script src="https://www.google.com/recaptcha/api.js?render=6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle"></script>

<script> 

    grecaptcha.ready(function() {

      grecaptcha.execute('6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle', {action: 'action'}).then(function(token) {

        document.getElementById("g-recaptcha-response").value=token

      });

    });

</script> 
@section('content')



@php     

  $page = getPageId(Request::segment(2));     

  $page_all = getPage(Request::segment(1));     

@endphp



<!-- Leader Board Banner -->

  @include('layouts.partials._leaderboard_banner')

<!-- End Leader Board Banner-->



<div id="publishedNews" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <!-- Modal content-->

    <div class="modal-content">

      <div class="modal-header">

        <h4 class="modal-title">Success</h4>

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        

      </div>

      <div class="modal-body">

       <p>Thank you for your interest in publishing press release with Packaging-Labelling. Our client success team member will get in touch with you shortly to take this ahead.

        While you're here, check out our informative and insightful press releases. Happy Surfing!



      </p>

      <p>Regards,</p>

      <p>Client Success Team (CRM),</p>

      <p><a href="<?php echo url('/');?>" title=" {{ config('app.name', 'Laravel') }}" target="_blank" style="color:#333333;"><img src="{{config('app.url')}}img/main-logo.png" alt="Defence Industries" width="150"/>   </a></p> 

      

    </div>

    <div class="modal-footer">

     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

     <!-- <a href="{{url('news')}}" type="button" class="btn btn-info" >Close</a> -->

   </div>

 </div>

</div>

</div>

 <!-- report abuse success modal -->

<div id="abuse" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <!-- Modal content-->

    <div class="modal-content">

      <div class="modal-header">

        <h4 class="modal-title">Success</h4>

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        

      </div>

      <div class="modal-body">

       <p>Successfully repored......



      </p>

      <p>Regards,</p>

      <p>Client Success Team (CRM),</p>

      <p><a href="<?php echo url('/');?>" title=" {{ config('app.name', 'Laravel') }}" target="_blank" style="color:#333333;"><img src="{{config('app.url')}}img/main-logo.png" alt="Defence Industries" width="150"/>   </a></p> 

      

    </div>

    <div class="modal-footer">

     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

     <!-- <a href="{{url('news')}}" type="button" class="btn btn-info" >Close</a> -->

   </div>

 </div>

</div>

</div>

 <!-- // Modal end -->

 <!-- // Profile Body -->

     <div role="main" class="bg-white">          

      <!-- // news -->  

      <div class="container-fluid">

        <div class="container">

          <div class="text-center pt-2">

            <h2 class="main-title"><span><a href="#" class="text-blue">Press releases</a></span></h2>

          </div>           

          <div class="row share_box mb-4">

            <div class="col-lg-8 pt-1">

               <button class="btn button-trans mb-3" id="prrel" name="prrel" data-toggle="modal" data-target="#publishPress">Publish Your PressRelease</button>  

            </div>

            <div class="col-lg-4">

               <div class="sharethis-inline-share-buttons mb-3 " style="top:5px"></div>

            </div>

          </div> 
        </div>  
         @foreach($pressrelease as $pressreleases)

        <div class="container">

          <div class="row">

            <div class="col-lg-10">

              <h1 class="display-6 mb-3 text-blue">{{ $pressreleases->news_head }}</h1>

            </div>

            <div class="col-lg-2 text-right">

              <p class="mb-2 text-muted mb-3">{{ date('j F Y', strtotime($pressreleases->story_date)) }}</p>

            </div>

          </div> 

          <p>{!!$pressreleases->Data!!}</p>    

             <button class="btn btn-primary mb-3 press_id" data-id="{{ $pressreleases->id }}" data-toggle="modal" data-target="#reportAbuse">Report Abuse</button>

        </div>

         @endforeach

        <!-- news  // -->        

      </div>

    </div>

      <!-- Profile Body // -->

       



    </div>

     <!-- Report abuse form -->

      <div id="reportAbuse" class="modal fade" role="dialog">

        <div class="modal-dialog">

          <!-- Modal content-->

          <div class="modal-content">

            <div class="modal-header">

              <h4 class="modal-title">Report Abuse</h4>

              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <form id='reportForm' name="pressrelease_report_form">

                 <input type="hidden" name="publicid" value="d029090815ad27550db84914430c27f8">

                  <input type="hidden" name="name" value="plantautomation-pressreleases Abuse">

                 <input type="hidden" name="subject" value="PressRelease Abuse">

                 <input type="hidden" name="type" value="pressrelease">

                  <input type="hidden" name="data_id" value="{{ $pressrelease[0]->id }}">

                 <input type="hidden" name="data_title" value="{{ $pressrelease[0]->news_head }}">

                 @include('industry._infoForm')    
           </form>
              <button class="btn btn-block submit-btn2">Submit</button> 
            </div>

            <div class="modal-footer">

              <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>

            </div>

          </div>

        </div>

      </div>

      <!-- Report abuse form End-->

     

        <!-- Publish pressrelease model -->

     <div id="publishPress" class="modal fade" role="dialog">

        <div class="modal-dialog">

          <!-- Modal content-->

          <div class="modal-content">

            <div class="modal-header">

              <h4 class="modal-title">Publish Your PressRelease</h4>

              <button type="button" class="close" data-dismiss="modal">&times;</button>

              

            </div>

            <div class="modal-body">

              <form id='publishpressForm' class="publishform" name="pressrelease_form">

                <input type="hidden" name="publicid" value="ed863517ac8773a0d4058c7883b939df">

                <input type="hidden" name="name" value="plantautomation-pressreleases">

                 <input type="hidden" name="subject" value="PressRelease Publish |">

                  <input type="hidden" name="client_subject" value="Publishing PressRelease - Enquiry Submitted | Packaging-Labelling">

                  <input type="hidden" name="type" value="pressrelease">

                 @include('industry._infoForm') 

              </form>

              <button class="btn btn-block submit-btn">Submit</button> 

           

            </div>

            <div class="modal-footer">

              <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>

            </div>

          </div>

        </div>

      </div>

    <!-- Publish pressrelease model End-->

@endsection

@section('scripts')



 {{-- <script type="text/javascript" src="{{ config('app.url') }}js/publishform.js"></script> --}}

<script>

  $('.submit-btn2').on('click',function(e) {

    var form = $('#reportAbuse');

    var firstname = form.find("input[name='firstname']").val();

    var lastname = form.find("input[name='lastname']").val();

    var email = form.find("input[name='email']").val();

    var company = form.find("input[name='company']").val();

    var designation = form.find("input[name='cf_leads_jobtitle']").val();

    var phone = form.find("input[name='mobile']").val();

    var message = form.find("textarea[name='description']").val();

    var press_id =$('.press_id').attr('data-id');  

    

    $.ajax({

      type: 'post',

      url: "{{ url('pressrepostabuse') }}",

      data: {firstname:firstname, lastname:lastname,company:company, email:email, mobile:phone, cf_leads_jobtitle:designation, description:message, press_id:press_id },     

      headers: {

        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

      },

      success:function(data){

        $('#reportAbuse').modal('hide');

        //$('#abuse').modal('show');

                 // var url = window.location.href.toString().split(window.location.host)[1];

                 var newURL = window.location.protocol + "://" + window.location.host + "/" + window.location.pathname; 

                 //var url = window.location.pathname.split( '/' );

                // window.history.pushState("object or string", "Title"url[2]+"/report-success"); 

                //history.pushState(null, null, '/pressreleases/'+url[2]+'/report-success');

               // toastr["success"]("Successfully submitted");    

                document.pressrelease_report_form.action = "https://ochremediapvtltd1.od2.vtiger.com/modules/Webforms/capture.php";

              document.pressrelease_report_form.submit();            

               $('form')[0].reset();

               $(".error").empty();

               grecaptcha.reset();         

             },

             error: function (data) {

              $(".error").empty();

              grecaptcha.reset();   

              $.each( data.responseJSON.errors, function( key, value ) {

                $(".error").append('<li class="text-danger">'+value+'</li>');

              });

            }

          });

  }); 

   @if( Request::segment(2) == 'abuse-success')

        

       if (performance.navigation.type == 1) {



      }else{ 

        $('#abuse').modal('show');  

        $('#abuse').addClass('show');    

      }

    @endif     







  $('body').on('click','.submit-btn',function() {     

    var form = $('#publishPress');

    var firstname = form.find("input[name='firstname']").val();

    var lastname = form.find("input[name='lastname']").val();

    var email = form.find("input[name='email']").val();

    var company = form.find("input[name='company']").val();

    var designation = form.find("input[name='cf_leads_jobtitle']").val();

    var phone = form.find("input[name='mobile']").val();

    var client_subject = form.find("input[name='client_subject']").val();

    var admin_subject = form.find("input[name='subject']").val();

    var message = form.find("textarea[name='description']").val();



    var news_id =$('.news-id').attr('data-id');  



    $.ajax({

      type: 'post',

      url: publishUrl,

      headers: {

        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

      },

      data: { firstname:firstname,lastname:lastname, company:company, email:email, mobile:phone, cf_leads_jobtitle:designation, description:message , client_subject:client_subject , subject:admin_subject},



      success:function(data){

        $('.modal').modal('hide');                                

       // $('#publishedNews').modal('show');                            

        var newURL = window.location.protocol + "://" + window.location.host + "/" + window.location.pathname; 

        //var url = window.location.pathname.split( '/' );      

        //history.pushState(null, null, '/pressreleases/'+url[2]+'/report-success');       

         document.pressrelease_form.action = "https://ochremediapvtltd1.od2.vtiger.com/modules/Webforms/capture.php";

        document.pressrelease_form.submit();                         

        $(".error").empty();

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

    @if( Request::segment(2) == 'success')

        

       if (performance.navigation.type == 1) {



      }else{ 

        $('#publishedNews').modal('show');  

        $('#publishedNews').addClass('show');    

      }

    @endif

// Report Abuse Ajax code end



       



</script>





@endsection