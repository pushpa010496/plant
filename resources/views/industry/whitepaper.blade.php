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

<!-- success popup -->
<div id="publishedNews" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Success</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                <!-- modal body -->
                    <div class="modal-body">
                    <p>Thank you for your interest in submitting whitepapers with Plantautomation Technology. Our client success team member will get in touch with you shortly to take this ahead.</p>
                    <p>While you are here, check out our informative and insightful whitepapers. Happy Surfing!</p>
                    <p>Regards,</p>
                    <p>Client Success Team (CRM),</p>
                    <p><a href="<?php echo url('/');?>" title=" {{ config('app.name', 'Laravel') }}" target="_blank" style="color:#333333;"><img src="{{config('app.url')}}img/main-logo.png" alt="Defence Industries" width="150"/>   </a></p> 
                  </div>
          <!-- modal footer -->
              <div class="modal-footer">
                <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                <a href="{{url('whitepapers')}}" type="button" class="btn btn-info" >Close</a> 
              </div>
       </div>
   </div>
</div>
<!-- end success popup -->

 <!-- // Profile Body -->
     <div role="main" class="bg-white">    
             <!-- // Press Releases -->  
      <div class="container-fluid">
                <div class="container">
                  <div class="text-center pt-2">
                    <h1 class="main-title"><span><a href="#" class="text-blue">Whitepapers</a></span></h1>
                  </div>
                </div> 
                <div class="container pb-3">
                   <div class="row mb-2 share_box mb-4 pt-3">
                       <div class="col-lg-8 mb-3">
                         <!-- <img src="{{ config('app.url') }}img/get-in-touch-banner2.png" class="img-fluid"> -->
                           <!-- <a href="" data-toggle="modal" data-target="#seeYourself" style="outline:none"><img src="{{ config('app.url') }}img/get-in-touch-banner2.png" class="img-fluid"></a> -->
                             <div class="border p-2 d-table" style="width:fit-content">
                              <span class="text-white pt-2 display-5 p-3">Have a white paper?
                                <button class="btn button-trans ml-3 mb-1 mt-1" data-toggle="modal" data-target="#publishNews">Publish with us!</button>  
                              </span>
                            </div>
                          </div>
                      <div class="col-lg-4 mb-3 mt-3">
                          <div class="sharethis-inline-share-buttons" style="top:0">
                            </div>
                      </div>
                   </div>
                      <div class="row">
                      <div class="col-lg-12">
                          @foreach($whitepaper as $whitepapers)
                        <div class="div-shadow p-3 mb-3">
                          <div class="row">
                              <div class="col-lg-10">
                                <h2 class="display-6"><a href="{{ route('whitepaper-view',$whitepapers->whitepapers_url) }}" class="text-blue">{{ $whitepapers->title }}</a></h2>
                              </div>
                                <div class="col-lg-2">
                                  <!-- <p class="mb-2 text-muted">{{ date('j F Y', strtotime($whitepapers->date)) }}</p> -->
                                </div>
                          </div> 
                          <p class="mb-1">{!!$whitepapers->home_description!!}</p>
                          <small><a href="{{ route('whitepaper-view',$whitepapers->whitepapers_url) }}" class="text-blue">Read more...</a></small>
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



      <!-- Publish whitepaper Modal -->
      <div id="publishNews" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Publish Your Whitepaper</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- modal body -->
            <div class="modal-body">
              <form method="post" action="{{route('submit-whitepapers')}}">
              <!-- <form id='publishNewsForm' class="publishform" name="insight_form"> -->
                <input type="hidden" name="publicid" value="d3ebf898fe22b1139e7ec09b8d33fa4f">
                <input type="hidden" name="name" value="plantautomation-whitepapers">
                <input type="hidden" name="subject" value="Whitepaper Publish">
                <input type="hidden" name="type" value="whitepaper">
                @include('industry._infoForm')                    
                <button class="btn btn-block submit-btn btn-primary">Submit</button> 
              </form>
            </div>
            <!-- modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Publish whitepaper End-->


@endsection
@section('scripts')  

@if(session('message_type') == 'success')    
    <script type="text/javascript"> 
        $('#publishedNews').modal('show');         
   </script>
 @endif
<!--<script type="text/javascript" src="{{ config('app.url') }}js/publishform.js"></script> -->
<!--<script type="text/javascript">-->
<!--   toastr.options = {-->
<!--          "positionClass": "toast-center-center",-->
<!--          "timeOut": "5000",-->
<!--        }-->
<!--     @if( Request::segment(2) == 'success')-->
<!--       if (performance.navigation.type == 1) {-->
<!--      }else{ -->
<!--        $('#publishedNews').modal('show');  -->
<!--        $('#publishedNews').addClass('show');    -->
<!--      }-->
<!--    @endif-->
<!--</script>-->
<script type="text/javascript">
  var url = "{{ url('whitepapers/morewp') }}";
 @include('layouts/partials/_loadmorejs')
</script>
@endsection