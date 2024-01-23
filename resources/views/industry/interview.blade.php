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

            <img class="img-fluid div-shadow mb-2" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="{{$homebanner12->img_alt}}" title="{{$homebanner12->img_title}}" /></a>

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

       <p>Thank you for showcasing interest in our interviews section. We have received your request and a client success team member will get in touch with you shortly to take this ahead.</p>

       <p>Regards,</p>

       <p>Client Success Team (CRM),</p>

       <p><a href="<?php echo url('/');?>" title=" {{ config('app.name', 'Laravel') }}" target="_blank" style="color:#333333;"><img src="{{config('app.url')}}img/main-logo.png" alt="Defence Industries" width="150"/>   </a></p> 

       

     </div>

     <div class="modal-footer">

       <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->

        <a href="{{url('interviews')}}" type="button" class="btn btn-info" >Close</a> 

     </div>

   </div>

 </div>

</div>

 <!-- // Profile Body -->

     <div role="main" class="bg-white">    

      

      <!-- // Press Releases -->  

      <div class="container-fluid">

        <div class="container">

          <div class="text-center pt-2">

            <h1 class="main-title"><span>Interviews</a></span></h1>

          </div>

        </div>  



        <div class="container pb-3">

             <div class="row mb-2 share_box mb-4 pt-3">

            <div class="col-lg-8 mb-3">

              <!-- <img src="{{ config('app.url') }}img/get-in-touch-banner2.png" class="img-fluid"> -->

              <!-- <a href="" data-toggle="modal" data-target="#seeYourself" style="outline:none"><img src="{{ config('app.url') }}img/get-in-touch-banner2.png" class="img-fluid"></a> -->

              <div class="border p-2 d-table" style="width:fit-content">

                              

              <span class="text-white pt-2 display-5 p-3">Want to see yourself here...

                  <button class="btn button-trans ml-3 mb-1 mt-1" data-toggle="modal" data-target="#seeYourself">Get in touch</button>  

            </span>

               </div>

            </div>

          

            <div class="col-lg-4 mb-3 mt-3">

               <div class="sharethis-inline-share-buttons" style="top:0"></div>

            </div>

          </div>

           

          <!-- <div class="row">

            <div class="col-lg-12 mb-3">

              <p>We provide business technology, Automation Industry Articles in this section. Our vast collection of automation articles focus mainly on new technology in industrial automation. Our automation industry articles provide information based on latest updates. Industrial Automation Articles help to stay updated with recent news.</p>

            </div>              

          </div> -->

          <div class="row">

            <div class="col-lg-12 mb-3">

              @foreach($interview as $interviews)

              <div class="div-shadow p-3 mb-4 interviews">

                <div class="row">

                  <div class="col-lg-3 text-center">

                    <img class="img-fluid" src="<?php echo config('app.url'); ?>interview/<?php echo $interviews->small_image;?>" alt="{{ $interviews->img_alt }}" title="{{ $interviews->name }}">                    

                    <h2 class="display-6 font-weight-bold mt-2">{{ $interviews->name }}</h2>

                    <h3 class="small"><span class="font-weight-light font-italic text-sm">{{ $interviews->designation }}</span></h3>

                    <h4 class="display-6">

                      <a href="{{ route('interview-view',$interviews->interviews_url)  }}" class="text-blue">{{ $interviews->company }}</a>

                    </h4>

                  </div>



                  <div class="col-lg-9">

                    <h5 class="font-italic font-weight-bold mb-4">

                      <!-- <span class="quotes mr-2">“</span> -->

                      <a href="{{ route('interview-view',$interviews->interviews_url) }}" class="bio">

                        {{ $interviews->title }}

                      </a>

                      <!-- <span class="quotes ml-1">”</span> -->

                    </h5>

                    <p>{{ $interviews->description }}</p> 

                    <!-- Social Icons -->

                     <!--  <div class="share_icons social-widget pt-2 text-right">

                        <ul class="social-icons">

                          <li>

                            <a target="_blank" title="Facebook" class="facebook" href="{{ config('app.furl') }}"><i class="fa fa-facebook"></i></a>

                          </li>

                          <li><a target="_blank" title="Google Plus" class="google" href="{{ config('app.gurl') }}"><i class="fa fa-google-plus"></i></a></li>

                        

                          <li><a target="_blank" title="Twitter" class="twitter" href="{{ config('app.turl') }}"><i class="fa fa-twitter"></i></a></li>

                         

                          <li><a target="_blank" title="LinkedIn" class="linkdin" href="{{ config('app.lurl') }}"><i class="fa fa-linkedin"></i></a></li>

                        </ul>                                   

                      </div>     -->

                   <!-- Social Icons End-->               

                  </div>                  

                </div>                 

              </div>

              @endforeach 

               @include('layouts/partials/_loadmorehtml')

            </div>



        </div>



        </div>

        <!-- Press Releases // -->        

      </div>

    </div>

      <!-- Profile Body // -->

    </div>



      <div id="seeYourself" class="modal fade" role="dialog">

        <div class="modal-dialog">

          <!-- Modal content-->

          <div class="modal-content">

            <div class="modal-header">

              <h4 class="modal-title">Want to see yourself here...</h4>

              <button type="button" class="close" data-dismiss="modal">&times;</button>

              

            </div>

            <div class="modal-body">

              <form  method="post" action="{{route('submit-interviews')}}" >

                    <!-- <form id='publishpressForm' class="publishform" name="insight_form"> -->

                 <input type="hidden" name="subject" value="want to see yourself here">

                 <input type="hidden" name="type" value="interview">

                  <input type="hidden" name="publicid" value="28ae98237c1e4dc32c702c6072178788">

                  <input type="hidden" name="name" value="plantautomation-interviews">

                 @include('industry._infoForm') 

                 <button class="btn btn-block submit-btn" type="submit">Submit</button> 

              </form>

              

           

            </div>

            <div class="modal-footer">

              <!--<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>-->

              <a href="{{ url()->previous() }}" type="button" class="btn btn-info" >Close</a> 

            </div>

          </div>

        </div>

      </div>

@endsection

@section('scripts')  



@if(session('message_type') == 'success')    

    <script type="text/javascript"> 

        $('#publishedNews').modal('show');         

   </script>

 @endif



<script type="text/javascript">

  var url = "{{ url('interviews/morein') }}";

 @include('layouts/partials/_loadmorejs')

</script>



@endsection