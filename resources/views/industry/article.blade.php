@extends('../layouts/pages')

@section('style')

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



<div id="publishedNews" class="modal fade" role="dialog"{{ $page_all }}>

  <div class="modal-dialog">

    <!-- Modal content-->

    <div class="modal-content">

      <div class="modal-header">

        <h4 class="modal-title">Success</h4>

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        

      </div>

      <div class="modal-body">

       <p>Thank you for your interest in publishing an article with Plantautomation Technology. Our client success team member will get in touch with you shortly to take this ahead.

        While you're here, check out our high-quality and insightful articles. Happy Reading!

      </p>

      <p>Regards,</p>

      <p>Client Success Team (CRM),</p>

      <p><a href="<?php echo url('/');?>" title=" {{ config('app.name', 'Laravel') }}" target="_blank" style="color:#333333;"><img src="{{config('app.url')}}img/main-logo.png" alt="Defence Industries" width="150"/>   </a></p> 

      

    </div>

    <div class="modal-footer">

     <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->

      <a href="{{ url()->previous() }}" type="button" class="btn btn-info" >Close</a> 

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

            <h1 class="main-title"><span><a href="#" class="text-blue">Articles</a></span></h1>

          </div>

         

        </div>  



        <div class="container pb-3 ">

          <div class="row share_box mb-4">

            <div class="col-lg-8 pt-1">

               <button class="btn button-trans mb-3" data-toggle="modal" data-target="#publishNews">Publish Your Article</button>  

            </div>

            <div class="col-lg-4">

               <div class="sharethis-inline-share-buttons mb-3" style="top:5px"></div>

            </div>

          </div>

          <div class="row">

            <div class="col-lg-9 mb-4">

              <div class="row" id="product">  

                @foreach($article as $articles)

                <div class="col-lg-3 mb-4">

                  <div class="product div-shadow"> 

                    <a href="{{ route('article-view',$articles->article_url) }}">

                      @if($articles->small_image)

                      <img class="img-fluid div-scal" src="{{ config('app.url') }}articles/{{ $articles->small_image }}" alt="{{ config('app.url')}}articles/1519109395-article-default.jpg" title="{{$articles->article_title}}">

                      @else

                        <img class="img-fluid div-scal" src="{{ config('app.url') }}articles/article-img.jpg" alt="{{ config('app.url')}}articles/article-img.jpg" title="{{$articles->article_title}}">

                      @endif

                    </a>

                    <h2>

                      <a href="{{ route('article-view',$articles->article_url)  }}">{!! $articles->article_title !!}</a>

                    </h2>

                  </div>

                </div>

                @endforeach                  

              </div>  

                @include('layouts/partials/_loadmorehtml')          

            </div>


            <!-- square baneners -->
            <div class="col-lg-3">
@foreach($banner1314 as $k=>$homebanner12) 
        @foreach($homebanner12->pagesCount as $j=>$pcount)
            @if($homebanner12->positions[0]->id == 16 and $pcount->id == 1)
                  <div class="col-lg-12 text-center mt-2 mb-2">
                      <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;"  target="_blank" title="{{$homebanner12->title}}">
                        <img class="img-fluid div-shadow" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="{{$homebanner12->img_alt}}" title="{{$homebanner12->img_title}}" />
                      </a>
                  </div>            
            @endif  
        @endforeach
      @endforeach

</div>
         
<!-- square banners end -->
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

              <h4 class="modal-title">Publish Your Article</h4>

              <button type="button" class="close" data-dismiss="modal">&times;</button>

              

            </div>

            <div class="modal-body">

              <form  action="{{route('submit-articles')}}" method="post">

                  <!-- <form id='publishpressForm' class="publishform" name="insight_form"> -->

                <input type="hidden" name="name" value="plantautomation-articles">

                <input type="hidden" name="subject" value="Article Publish">

                <input type="hidden" name="type" value="article">

                

                @include('industry._infoForm')       

                 <button type="submit" class="btn btn-block submit-btn btn-primary">Submit</button>

              </form>

             

           

            </div>

            <div class="modal-footer">

              <button type="submit" class="btn btn-info" data-dismiss="modal">Close</button>

            </div>

          </div>

        </div>

      </div>

      <!-- Publish News End-->

@endsection

@section('scripts')   





<!-- POP-UP -->

<style>

  button.close{

    position: absolute;

    right: 5px;

  }

  .modal{background-color: rgba(0,0,0,0.4) !important;}

</style>



<div id="myModal1" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <!-- Modal content-->

    <div class="modal-content p-0">           

      <div class="modal-body p-0">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <a href="{{url('events/light-middle-east')}}" target="_blank">

          <img src="{{ config('app.url') }}images/Light-Middle-East.jpg" width="100%">

        </a> 

      </div>          

    </div>

  </div>

</div>





@if(session('message_type') == 'success')    

    <script type="text/javascript"> 

        $('#publishedNews').modal('show');         

   </script>

 @endif

<script type="text/javascript">

  var url = "{{ url('articles/more') }}";

 @include('layouts/partials/_loadmorejs')

</script>

@endsection