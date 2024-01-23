@extends('../layouts/pages')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ config('app.url')}}css/sharethis.css">
 <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5af1a3927610d3001177ca34&product=custom-share-buttons"></script>
 <style type="text/css">
   hr{
        border: 0;
        height: 1px;
        width: 75%;
        margin-top: 5px;    
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(128, 117, 117, .6), rgba(0, 0, 0, 0));
   }
   .ellipsis{
    white-space: nowrap;
    width: 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    padding: 2px 3px;
   }
   .table {border-color: #ccc !important;}
 </style>
@endsection
@section('content')
<div id="publishedNews" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Success</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
       <p>Thank you for your interest in publishing industrial news with Plantautomation Technology. Our client success team member will get in touch with you shortly to take this ahead.
        While you're here, check out our other highly informative and insightful news pieces. Happy Reading!
      </p>
      <p>Regards,</p>
      <p>Client Success Team (CRM),</p>
      <p><a href="<?php echo url('/');?>" title=" {{ config('app.name', 'Laravel') }}" target="_blank" style="color:#333333;"><img src="{{config('app.url')}}img/main-logo.png" alt="Plantautomation Technology" width="250"/>   </a></p> 
      
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
        <button type="button" class="close" onClick="location.href=location.href">&times;</button>
        
      </div>
      <div class="modal-body">
       <p>Successfully repored......

      </p>
      <p>Regards,</p>
      <p>Client Success Team (CRM),</p>
      <p><a href="<?php echo url('/');?>" title=" {{ config('app.name', 'Laravel') }}" target="_blank" style="color:#333333;"><img src="{{config('app.url')}}img/main-logo.png" alt="Plantautomation Technology" width="250"/></a></p> 
      
    </div>
    <div class="modal-footer">
     <button type="button" class="btn btn-default" onClick="location.href=location.href">Close</button>
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
            <div class="col-lg-8 pt-1">
               <button class="btn button-trans mb-3" data-toggle="modal" data-target="#publishNews">Publish Your News</button>  
            </div>
            <!-- <div class="col-lg-4">
               <div class="sharethis-inline-share-buttons mb-3 " style="top:5px"></div>
            </div> -->
          </div> 
         
        </div>
         @foreach($launches as $product)
        <div class="container">
         <div class="col-lg-12">
              <h1 class="display-5 pb-3 text-blue">{{ $product->title }}</h1>
              <img class="img-fluid div-shadow mb-2 mr-4 pull-left" src="<?php echo config('app.url'); ?>productlaunch/<?php echo $product->image;?>" alt=""/>
               <p>{!! $product->description !!}</p>
            </div>  
          
        </div>


         
         @endforeach
        <!-- news  // -->   
      
     
      </div>
      
    </div>
      <!-- Profile Body // -->
    <div class="container">
    <div id="disqus_thread"></div>
      <!-- <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript> -->
</div>
<!--  -->
    </div>

      <!-- Publish News Modal -->
      <div id="publishNews" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Publish Your News Story</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              
            </div>
            <div class="modal-body">
              <form id='publishNewsForm' class="publishform" name="news_form">
                 <input type="hidden" name="publicid" value="832b07c781c03a123e5e674f1f09d1e7">
                <input type="hidden" name="name" value="plantautomation-news">
                 {{-- <input type="hidden" name="subject" value="News Publish"> --}}
                 <input type="hidden" name="client_subject" value="Publishing News - Enquiry Submitted | Packaging-Labelling">
                  <input type="hidden" name="admin_subject" value="Publishing News Enquiry | ">
                 <input type="hidden" name="type" value="news">
                 @include('industry._infoForm') 
              </form>
              <button class="btn btn-block submit-btn" id="sub">Submit</button> 
           
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal End -->
      <!-- Report abuse form -->
      <div id="reportAbuse" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title ">Report Abuse</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              
            </div>
            <div class="modal-body">
              <form id='reportForm' name="newsreport_form">
                {{-- <input type="hidden" name="subject" value="News Abuse"> --}}
                  <input type="hidden" name="publicid" value="a27f06b975693d4904d80cca44a7eb45">
                  <input type="hidden" name="name" value="plantautomation-newsabuse">
                 {{-- <input type="hidden" name="subject" value="News Publish"> --}}
                 <input type="hidden" name="client_subject" value="Publishing News - Enquiry Submitted | Packaging-Labelling">
                  <input type="hidden" name="admin_subject" value="Publishing News Enquiry | ">
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
@endsection
@section('scripts')


<!-- <script id="dsq-count-scr" src="//plantautomation-technology-1.disqus.com/count.js" async></script> -->
 {{-- <script type="text/javascript" src="{{ config('app.url') }}js/publishform.js"></script> --}}
<script>
     $('.submit-btn2').on('click',function(e) {
    var form = $('#reportForm');
    var firstname = form.find("input[name='firstname']").val();
    var lastname = form.find("input[name='lastname']").val();
    var email = form.find("input[name='email']").val();
    var company = form.find("input[name='company']").val();
    var designation = form.find("input[name='cf_leads_jobtitle']").val();
    var phone = form.find("input[name='mobile']").val();
    var message = form.find("textarea[name='description']").val();
    var news_id =$('.news_id').attr('data-id');  
    
    $.ajax({
      type: 'post',
      url: "{{ url('repostabuse') }}",
      data: {firstname:name,lastname:lastname, company:company, email:email, mobile:phone, cf_leads_jobtitle:designation, description:message, news_id:news_id },     
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
               // history.pushState(null, null, '/news/'+url[2]+'/report-success');
               // toastr["success"]("Successfully submitted"); 
               document.newsreport_form.action = "https://ochremediapvtltd1.od2.vtiger.com/modules/Webforms/capture.php";
              document.newsreport_form.submit();               
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
    var form = $('#publishNewsForm');
    var firstname = form.find("input[name='firstname']").val();
    var lastname = form.find("input[name='lastname']").val();
    var email = form.find("input[name='email']").val();
    var company = form.find("input[name='company']").val();
    var cf_leads_jobtitle = form.find("input[name='cf_leads_jobtitle']").val();
    var mobile = form.find("input[name='mobile']").val();
    var client_subject = form.find("input[name='client_subject']").val();
    var admin_subject = form.find("input[name='admin_subject']").val();
    var description = form.find("textarea[name='description']").val();
    

    $.ajax({
      type: 'post',
      url: publishUrl,
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      data: { firstname:firstname,lastname:lastname, company:company, email:email, mobile:mobile, cf_leads_jobtitle:cf_leads_jobtitle, description:description,client_subject:client_subject,subject:admin_subject },

      success:function(data){
        $('.modal').modal('hide');                                
        //$('#publishedNews').modal('show');                            
       /* var newURL = window.location.protocol + "://" + window.location.host + "/" + window.location.pathname; */
        //var url = window.location.pathname.split( '/' );      
        //history.pushState(null, null, '/news/'+url[2]+'/report-success');    
         document.news_form.action = "https://ochremediapvtltd1.od2.vtiger.com/modules/Webforms/capture.php";
        document.news_form.submit();                             
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
  
       

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
// (function() { // DON'T EDIT BELOW THIS LINE
// var d = document, s = d.createElement('script');
// s.src = 'https://plantautomation-technology-1.disqus.com/embed.js';
// s.setAttribute('data-timestamp', +new Date());
// (d.head || d.body).appendChild(s);
// })();
// </script>

//   <script>
//     $( "table" ).addClass( "table" );
//   </script>

<!-- <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>  -->
  
@endsection