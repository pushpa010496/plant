@extends('../layouts/pages')

@section('style')

<link rel="stylesheet" type="text/css" href="{{ config('app.url')}}css/sharethis.css">

<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5af1a3927610d3001177ca34&product=custom-share-buttons"></script>



<style type="text/css">

  .btn-purple{

    color: #fff;

    background-color: #7A0E77;

    border-color: #7A0E77;

  }

  .main-title {

    margin: 20px 0 40px;

    padding: 0 0 0 20px;

    font-size: 1.16em;

    border-bottom: 1px solid #d3d3d3;

    text-align: left !important;

    text-transform: none !important;

  }

  .main-title .btn{

    bottom: -6px;

    position: relative;

  }

  @media only screen and (max-width: 450px) {

    .main-title{padding-bottom: 20px;}

    .main-title .btn-purple{ margin-top: 20px; }

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

          <div class="col-12 text-center mt-2" >

            <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" class="" title="{{$homebanner12->title}}">

            <img class="img-fluid div-shadow mb-2" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="{{$homebanner12->img_alt}}"  title="{{$homebanner12->img_title}}"/></a>

          </div>

          @else

          @endif  

          @endforeach

          @endforeach

        </div>

      </div>

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

       <p>Thank you for your interest in publishing press release with Plantautomation Technology. Our client success team member will get in touch with you shortly to take this ahead.

        While you're here, check out our informative and insightful press releases. Happy Surfing!



      </p>

      <p>Regards,</p>

      <p>Client Success Team (CRM),</p>

      <p>

        <a href="<?php echo url('/');?>" title=" {{ config('app.name', 'Laravel') }}" target="_blank" style="color:#333333;">

          <img src="{{config('app.url')}}img/main-logo.png" alt="Defence Industries" width="150"/>

        </a>

      </p>       

    </div>

    <div class="modal-footer">

      <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->

       <a href="{{url('pressreleases')}}" type="button" class="btn btn-info" >Close</a> 

    </div>

  </div>

  </div>

</div>





<div role="main" class="bg-white">    



  <!-- // Press Releases -->  

  <div class="container-fluid">



    <div class="container">

      <div class="text-center pt-3">

        <h1 class="main-title">

          <span><a href="{{ url('newswires') }}" target="_blank" class="text-blue display-5">Press Releases</a></span>

            <a href="{{ url('newswires') }}" target="_blank" class="btn btn-sm btn-purple btn-radius float-right pl-3 pr-3">Press Release by Source</a>

        </h1>

      </div>

    </div>  



    <div class="container pb-3">



      <div class="row share_box mb-4">

        <div class="col-lg-8 pt-1">

         <button class="btn button-trans mb-3" id="prrel" name="prrel" data-toggle="modal" data-target="#publishPress">Publish Your PressRelease</button>  

       </div>

       <div class="col-lg-4">

         <div class="sharethis-inline-share-buttons mb-3" style="top:5px"></div>

       </div>

     </div> 





          <!-- <div class="row">

            <div class="col-lg-12 mb-3">

              <p>We provide business technology, Automation Industry Articles in this section. Our vast collection of automation articles focus mainly on new technology in industrial automation. Our automation industry articles provide information based on latest updates. Industrial Automation Articles help to stay updated with recent news.</p>

            </div>              

          </div> -->

          <div class="row">

            <div class="col-lg-12 mb-3">

             @foreach($pressrelease as $pressreleases)

             <div class="div-shadow p-3 mb-3">

              <div class="row">

                <div class="col-lg-10">

                  <h2 class="display-6"><a href="{{ route('pressrelease-view',$pressreleases->news_url) }}" class="text-blue">{{ $pressreleases->news_head }}</a></h2>

                </div>

                <div class="col-lg-2">

                  <p class="mb-2 text-muted">{{ date('j F Y', strtotime($pressreleases->story_date)) }}</p>

                </div>

              </div> 

              <p class="mb-1">{!!strip_tags(substr($pressreleases->Data,0,500))!!}</p>

              <small><a href="{{ route('pressrelease-view',$pressreleases->news_url) }}" class="text-blue">Read more...</a></small>

            </div>

            @endforeach 

          </div>

        </div>

         @include('layouts/partials/_loadmorehtml') 

      </div>

      <!-- Press Releases // -->        

    </div>

  </div>

  <!-- Profile Body // -->

</div>



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

        <form method="post" action="{{route('submit-pressreleases')}}">

        <!-- <form id='publishpressForm' class="publishform" name="insight_form"> -->

          <input type="hidden" name="publicid" value="ed863517ac8773a0d4058c7883b939df">

          <input type="hidden" name="name" value="plantautomation-pressreleases">

          <input type="hidden" name="subject" value="PressRelease Publish">

          <input type="hidden" name="type" value="pressrelease">

          @include('industry._infoForm') 

           <button class="btn btn-block submit-btn btn-primary" type="submit">Submit</button> 

        </form>

       



      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>

      </div>

    </div>

  </div>

</div>

<!-- Publish pressrelease model End-->

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

@endsection



@section('scripts')   



<script type="text/javascript">



  toastr.options = {

    "positionClass": "toast-center-center",

    "timeOut": "5000",

  }





</script>

@if(session('message_type') == 'success')    

    <script type="text/javascript"> 

        $('#publishedNews').modal('show');         

   </script>

 @endif

<script type="text/javascript">





@if( Request::segment(2) == 'abuse-success')



if (performance.navigation.type == 1) {



}else{ 

  $('#abuse').modal('show');  

  $('#abuse').addClass('show');    

}

@endif

</script>

<script type="text/javascript">

  var url = "{{ url('pressreleases/morepr') }}";

 @include('layouts/partials/_loadmorejs')

</script>

@endsection