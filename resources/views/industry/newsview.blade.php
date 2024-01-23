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

 </style>

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

      <p><a href="<?php echo url('/');?>" title=" {{ config('app.name', 'Laravel') }}" target="_blank" style="color:#333333;"><img src="{{config('app.url')}}img/main-logo.png" alt="Defence Industries" width="150"/>   </a></p> 

      

    </div>

    <div class="modal-footer">

     <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->

     <a href="{{url('news')}}" type="button" class="btn btn-info" >Close</a>

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

      <p><a href="<?php echo url('/');?>" title=" {{ config('app.name', 'Laravel') }}" target="_blank" style="color:#333333;"><img src="{{config('app.url')}}img/main-logo.png" alt="Defence Industries" width="150"/>   </a></p> 

      

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

          <div class="text-center pt-2">

            <h2 class="main-title"><span><a href="#" class="text-blue">News</a></span></h2>

          </div>

          <div class="row share_box mb-4">

            <div class="col-lg-8 pt-1">

               <button class="btn button-trans mb-3" data-toggle="modal" data-target="#publishNews">Publish Your News</button>  

            </div>

            <div class="col-lg-4">

               <div class="sharethis-inline-share-buttons mb-3 " style="top:5px"></div>

            </div>

          </div> 

          

        </div>

         @foreach($news as $lnews)

        <div class="container">

          <div class="row">

            <div class="col-lg-10">

              <h1 class="display-6 mb-3 text-blue">{{ $lnews->title }}</h1>

            </div>

            <div class="col-lg-2 text-right">

              <p class="mb-2 text-muted mb-3">{{ date('j F Y', strtotime($lnews->date)) }}</p>

            </div>

          </div> 

          <p>{!!$lnews->description!!}</p>  

           <button class="btn btn-primary mb-3 news_id" data-id='{{ $lnews->id }}' data-toggle="modal" data-target="#reportAbuse">Report Abuse</button>  

        </div>

         @endforeach

        <!-- news  // -->   

      

     

      </div>

      

    </div>

      <!-- Profile Body // -->

    <div class="container">

    <div id="disqus_thread"></div>

      <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

</div>

<div class="container">

          <div class="text-center pt-2">

            <h2 class="main-title"><span><a href="#" class="text-blue">Top News of this week</a></span></h2>

          </div>



          <div class="row" id="product">  

            @foreach($top_news as $news)

             <div class="col-lg-6 mb-2">

              <a href="{{ url('news/'.$news->news_url) }}">

              <h6 class="ellipsis"><i class="fa fa-angle-double-right mr-2" aria-hidden="true"></i> {{ $news->title }}</h6>  

              </a>

              

              <hr>

            </div>

          <!--   <div class="col-lg-2 col-md-3 mb-4">

              <a href="{{ url('news/'.$news->news_url) }}">{{ $news->title }}</a>



              <div class="product div-shadow"> 

           

                     <a href="{{ url('news/'.$news->news_url) }}"><img class="img-fluid div-scal" src="{{ config('app.url') }}news/{{  $news->image }}" alt=""/>

                </a>

               <h2><a href="{{ url('news/'.$news->news_url) }}">{{ $news->title }}</a></h2>



              </div>

            </div> -->

            @endforeach                  

          </div>

        </div>

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

              <form action="{{route('submit-news')}}" method="post">
@csrf
                 <input type="hidden" name="publicid" value="832b07c781c03a123e5e674f1f09d1e7">

                <input type="hidden" name="name" value="plantautomation-news">

              

                 <input type="hidden" name="client_subject" value="Publishing News - Enquiry Submitted | Packaging-Labelling">

                  <input type="hidden" name="admin_subject" value="Publishing News Enquiry | ">

                 <input type="hidden" name="type" value="news">

                 @include('industry._infoForm') 
                 <button class="btn btn-block submit-btn" type="submit">Submit</button> 
              </form>

              

           

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

              

                  <input type="hidden" name="publicid" value="a27f06b975693d4904d80cca44a7eb45">

                  <input type="hidden" name="name" value="plantautomation-newsabuse">


                 <input type="hidden" name="client_subject" value="Publishing News - Enquiry Submitted | Packaging-Labelling">

                  <input type="hidden" name="admin_subject" value="Publishing News Enquiry | ">

                @include('industry._infoForm')   
                <button class="btn btn-block submit-btn2" type="submit">Submit</button> 
              </form>

              

           

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



<script type="text/javascript" src="{{ config('app.url') }}js/publishform.js"></script>

@if(session('message_type') == 'success')    

<script type="text/javascript"> 

    $('#publishedNews').modal('show');         

</script>

@endif

@endsection