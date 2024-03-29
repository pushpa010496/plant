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
          <div class="col-12 text-center " >
            <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" class="" title="{{$homebanner12->title}}"><img class="img-fluid div-shadow mb-2" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="{{$homebanner12->img_alt}}" title="{{$homebanner12->img_title}}" /></a>
          </div>
          @else
          @endif  
          @endforeach
          @endforeach
        </div>
      </div>


<div id="publishedNews" class="modal fade" role="dialog">

  <div class="modal-dialog">

   

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

      <p><a href="<?php echo url('/');?>" title=" {{ config('app.name', 'Laravel') }}" target="_blank" style="color:#333333;"><img src="{{config('app.url')}}img/main-logo.png" alt="Plant Automation Technology" width="150"/>   </a></p> 

      

    </div>

    <div class="modal-footer">
    <a href="{{url('news')}}" type="button" class="btn btn-info" >Close</a>
     <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->

     

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

            <h1 class="main-title"><span><a href="#" class="text-blue">News</a></span></h1>

          </div>

        </div>  



        <div class="container pb-3">



             <div class="row share_box mb-4">

            <div class="col-lg-8 pt-1">

               <button class="btn button-trans mb-3" data-toggle="modal" data-target="#publishNews">Publish Your News</button>  

            </div>

            <div class="col-lg-4">

               <div class="sharethis-inline-share-buttons mb-3 " style="top:5px"></div>

            </div>

          </div> 





          

          <!-- <div class="row">

            <div class="col-lg-12 mb-3">

              <p>We provide business technology, Automation Industry Articles in this section. Our vast collection of automation articles focus mainly on new technology in industrial automation. Our automation industry articles provide information based on latest updates. Industrial Automation Articles help to stay updated with recent news.</p>

            </div>              

          </div> -->

       

          <div class="row">

            <div class="col-lg-12 mb-3">

                 @foreach($news as $lnews)

              <div class="div-shadow p-3 mb-3">

                <div class="row">

                  <div class="col-lg-10">

                    <h2 class="display-6"><a href="{{  route('news-view',$lnews->news_url) }}" class="text-blue">{{ $lnews->title }}</a></h2>

                  </div>

                  <div class="col-lg-2">

                    <p class="mb-2 text-muted">{{ date('j F Y', strtotime($lnews->date)) }}</p>

                  </div>

                </div> 

                <p class="mb-1">{{$lnews->home_description}}</p>

                <small><a href="{{ route('news-view',$lnews->news_url) }}" class="text-blue">Read more...</a></small>

              </div>

              @endforeach 

            </div>

        </div>

        </div>

        <!-- Press Releases // -->        

      </div>

    </div>

      <!-- Profile Body // -->

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
            <form method="post" action="{{route('submit-news')}}">

              
                <input type="hidden" name="publicid" value="832b07c781c03a123e5e674f1f09d1e7">

                <input type="hidden" name="name" value="plantautomation-news">

                <input type="hidden" name="subject" value="News Publish">

                <input type="hidden" name="type" value="news">

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

      <!-- Publish News End-->

@endsection

@section('scripts')   

 <script type="text/javascript" src="{{ config('app.url') }}js/publishform.js"></script>



 @if(session('message_type') == 'success')    

<script type="text/javascript"> 

    $('#publishedNews').modal('show');         

</script>

@endif

<!-- <script type="text/javascript">

        toastr.options = {

          "positionClass": "toast-center-center",

          "timeOut": "5000",

        }

  // Publish Your News

</script> -->

  
<!-- <script><
    @if( Request::segment(2) == 'abuse-success')

        

       if (performance.navigation.type == 1) {



      }else{ 

        $('#abuse').modal('show');  

        $('#abuse').addClass('show');    

      }

    @endif

</script> -->

  

@endsection

