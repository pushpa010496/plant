@extends('../layouts/app')
@section('style')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
<!-- <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"> -->
    <link rel="stylesheet" type="text/css" href="{{ config('app.url')}}js/slick/slick-theme.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="{{ config('app.url')}}css/jquery.ui.autocomplete.css">
<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<!-- <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css" > -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="{{ config('app.url')}}css/jquery.ui.autocomplete.css">
<link rel="stylesheet" type="text/css" href="{{ config('app.url')}}js/slick/slick.css">
 -->


<style type="text/css">
.slick-prev,
.slick-next,
.slick-prev:hover,
.slick-prev:focus,
.slick-next:hover,
.slick-next:focus {
    background: #717070f7 !important;
}

.slick-prev {
    right: 47px !important;
    left: auto !important;
}

.slick-next {
    right: 20px !important;
}

.slick-prev,
.slick-next {
    top: 130% !important;
    border-radius: 0 !important;
    height: 25px !important;
    width: 25px !important;
}

.slick-prev:before,
.slick-next:before {
    color: #ffffff !important;
    font: normal normal normal 14px/1 FontAwesome !important;

}

.slick-prev:before {
    content: "\f053" !important;
}

.slick-next:before {
    content: "\f054" !important;
}

/*///////////////////////////////////*/
.tab-content {
    /*padding:10px;*/
    /*   border:1px solid #ddd;
 border-bottom:0px;*/
}

.nav-tabs {
    /*border-bottom: 0px;
border-top: 1px solid #ddd;*/

}

.nav.nav-tabs {
    margin-top: -3px;
    float: right;
}

.nav-tabs>li {
    margin-bottom: 0;
    margin-top: -1px;
}

.nav-tabs>li>a {
    padding: 5px 10px;
    line-height: 20px;
    font-size: 16px;
    border: 1px solid #ffffff;
    border-bottom: none;
    border-right: none;
    -moz-border-radius: 0px;
    -webkit-border-radius: 0px;
    border-radius: 0px;
    background-color: #cccccc;
}

.nav-tabs>.active>a,
.nav-tabs>.active>a:hover,
.nav-tabs>.active>a:focus {
    color: #555555;
    /*cursor: default;*/
    background-color: #ffffff;
    border-top-color: transparent;
}

.nav.nav-tabs li a.active {
    cursor: default;
    background: #a9a9a9;
}

#overlay {
    position: fixed;
    display: none;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 2;
    cursor: pointer;
}

.overlay-content {
    position: relative;
    top: 15%;
    width: 100%;
    text-align: center;
    margin-top: 10px;
}

.links a:hover {
    color: #5d085a !important;
}
.owl-carousel .owl-item img {
    display: block !important;
    width: 100% !important;
}
.latest-posts-classic .post-row {
    margin-bottom: 5px;
}

.latest-posts-classic .post-row {
    margin-bottom: 5px;
}

.custom-carousel .item {
    padding-right: 20px;
}

.latest-posts-classic .left-meta-post {
    float: left;
    text-align: center;
    margin-right: 12px;
    margin-bottom: 0;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -o-border-radius: 3px;
    overflow: hidden;
}

.latest-posts-classic .left-meta-post .post-date {
    padding: 8px 0;
    width: 42px;
    background-color: #444;
    color: #fff;
}

.latest-posts-classic .left-meta-post .post-date .month {
    display: block;
    text-transform: uppercase;
    line-height: 14px;
    font-size: 11px;
    letter-spacing: 1px;
}

.latest-posts-classic .item .post-row .left-meta-post .post-type i {
    background-color: #892f79;
}

.latest-posts-classic .item .post-row .left-meta-post .post-type i {
    display: block;
    height: 40px;
    line-height: 39px;
    width: 42px;
    color: #fff;
    font-size: 1.4em;
}
.text {
   overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 1; /* number of lines to show */
           line-clamp: 2;
   -webkit-box-orient: vertical;
}
</style>
@endsection
@section('content')

<!-- Leader Board Banner -->
<div class="container">
    <div class="row">
    @php
      $count =0;
      foreach($banner1314 as $banner){            
      if ($banner->positions[0]->id == 14 and $banner->pagesCount[0]->id == 1) {
      $count++; 
    }
  }   
  @endphp


  @if($count == 1)

  <?php $column=12 ?>             
  @else
  <?php $column=6 ?>
  @endif
  @foreach($banner1314 as $k=>$homebanner12)           


  @if($homebanner12->positions[0]->id == 14 and $homebanner12->pagesCount[0]->id == 1)

  <div class="col-lg-12 text-center mt-2 mb-2">
    @if($homebanner12->type == 'swf')
    @else
    <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;"  target="_blank" title="{{$homebanner12->title}}">
      <img class="img-fluid div-shadow" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="{{$homebanner12->img_alt}}" title="{{$homebanner12->img_title}}" />
    </a>
    @endif
  </div>     
     
  @else
  @endif  
  @endforeach


      </div>
    </div>

<!-- Leader Board Banner end -->

<!-- // Slider -->

<div class="container pt-3">
    <div class="row">
        <div id="slider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators" style="right:38% !important; top:105% !important; ">
                @if(!empty($sliders))
                @for($i=0; $i< count($sliders);$i++) <li data-target="#slider" data-slide-to="{{ $i }}" 
                class="{{ $i == 0 ?'active':'' }}" >
                    </li>
                    @endfor

            </ol>


            <div class="carousel-inner shadow border-top">
                @foreach($sliders as $key => $homesliders)
                <div class="carousel-item  {{ $key == 0 ?'active':'' }}">
                    <a href="{{$homesliders->url}}" target="_blank" title="{{$homesliders->title}}">
                        <img class="img-fluid" src="{{ config('app.url') }}slider/{{$homesliders->image}}"
                            alt="{{$homesliders->title}}" style="height: auto;" />
                    </a>
                </div>
                @endforeach
            </div>
            @endif

        </div>
    </div>
</div>
<!-- // Slider -->

<div class="p-2"></div>


<!-- // MAIN SEARCH -->

<!-- <div class="position-relative container pt-2 pb-1">
              <div class="row justify-content-center">
                <div class="col-lg-8 mt-4" id="main-search">
                  <form method="get" action="{{url('/search-result')}}">
                    <div class="input-group input-group-lg">
                        <input type="text" id="search" name="q" class="form-control" placeholder="Search Products & Manufacturers..." autocomplete="off" />
                    
                      <span class="input-group-btn">
                        <button class="btn btn-secondary h-100" type="submit">
                          <i class="fa fa-search" aria-hidden="true"></i></button>
                      </span>
                    </div>
                    {{Form::close()}}
                </div>
              </div>
              <div id="display"></div>
            </div> -->

<!-- MAIN SEARCH // -->

<div class="pt-2"></div>
<!-- Prime Banner -->

<div class="container">
    <div class="row">
        @php
        $count =0;
        foreach($banner1314 as $banner){
        if ($banner->positions[0]->id == 75 and $banner->pagesCount[0]->id == 1) {
        $count++;
        }
        }
        @endphp


        @if($count == 1)

        <?php $column=12 ?>
        @else
        <?php $column=6 ?>
        @endif
        @foreach($banner1314 as $k=>$homebanner12)


        @if($homebanner12->positions[0]->id == 75 and $homebanner12->pagesCount[0]->id == 1)

        <div class="col-lg-<?php echo $column ?> text-center mt-4 mb-2">


            @if($homebanner12->type == 'swf')

            @else
            <a href="javascript:void(0)" target="_blank" title="{{$homebanner12->title}}"
                onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;">
                <img class="img-fluid div-shadow"
                    src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>"
                    alt="{{$homebanner12->img_alt}}" title="{{$homebanner12->img_title}}" />
            </a>
            @endif


        </div>
        @else

        @endif

        @endforeach
    </div>
</div>
<div class="pt-1"></div>
<!-- Prime Banner end -->

<!-- Start Top/Full Banner1  -->
@if($banner1314)
@foreach($banner1314 as $k=>$homebanner12)
@foreach($homebanner12->pagesCount as $j=>$pcount)
@if($homebanner12->positions[0]->id == 1 and $pcount->id == 1)
<div class="col-lg-12 text-center mt-2 mb-3">
    <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank"
        class="mb-3" title="{{$homebanner12->title}}"><img class="img-fluid div-shadow mb-3"
            src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>"
            alt="{{$homebanner12->img_alt}}" title="{{$homebanner12->img_title}}" /></a>
</div>
@else
@endif
@endforeach
@endforeach
@endif
<!-- End Top/Full Banner1  -->




<!-- Start Top/Full Banner2  -->
<div class="pb-1"></div>
<div class="container">
    <div class="row">
        @if($banner1314)
        @foreach($banner1314 as $k=>$homebanner12)
        @foreach($homebanner12->pagesCount as $j=>$pcount)
        @if($homebanner12->positions[0]->id == 2 and $pcount->id == 1)
        <div class="col-lg-12 text-center mt-2 mb-3">
            <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;"
                target="_blank" class="mb-3" title="{{$homebanner12->title}}"><img class="img-fluid div-shadow mb-3"
                    src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>"
                    alt="{{$homebanner12->img_alt}}" title="{{$homebanner12->img_title}}" /></a>
        </div>
        @else
        @endif
        @endforeach
        @endforeach
        @endif
    </div>
</div>
<!-- End Top/Full Banner2  -->

<div class="p-2"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12 p-0">
            <h1 style="border-bottom:1px solid #bababa; font-size:16px;"><span class="text-uppercase"
                    style="border-bottom:1px solid #892f79;">Latest on Automation Industry</span></h1>
        </div>
    </div>
</div>

<div class="p-2"></div>

<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-12">
            <!-- News Start -->
            <div class="row m-0">
                <div class="col-12 p-0">
                    <a href="{{url('/news')}}">
                        <h4 class="classic-title text-uppercase"
                            style="font-weight:400;font-size:14px;padding:0px;color:#892f79;border-bottom:1px solid #bababa;">
                            <!-- <span class="" style="padding:0px;border-bottom:1px solid #892f79;">News</span> -->
                            News
                        </h4>

                        </a>
                    <div class="owl-nav disabled position-absolute" style="top:-8px; right:0;">
                        <button type="button" role="presentation" class="owl-news-next rounded"
                            style="background-color:transparent;"><span aria-label="PreviouRegister Nows" class="text-secondary"
                                style="font-size:20px; line-height:12px;">‹</span></button>
                        <button type="button" role="presentation" class="owl-news-prev rounded"
                            style="background-color:transparent;"><span aria-label="Next" class="text-secondary"
                                style="font-size:20px; line-height:12px;">›</span></button>
                    </div>
                </div>

                <div class="col-12 p-0">
                    <div class="latest-posts-classic owl-news owl-carousel owl-theme" data-appeared-items="2"
                        style="opacity: 1; display: block;">
                        @foreach($news as $new)
                           <div class="item pr-2">
                            <div class="post-row">
                                <div class="left-meta-post">
                                    <div class="post-date"><span class="day">{{date('d', strtotime($new->date))}}</span><span class="month">{{date('M', strtotime($new->date))}}</span>
                                    </div>
                                    <div class="post-type"><i class="fa fa-picture-o "></i></div>
                                </div>
                                <h3 class="font-weight-bold" style="font-size:14px;">
                                  <a style="color:#892f79;" href="{{ url('news/'.$new->news_url) }}" title="{{$new->title}}">{{ str_limit($new->title, 90, '...') }}</a></h3>
                              <p class="post-content mb-0" >{!! str_limit( $new->description, 90, '...')  !!}</p>
                                  <div class=" text-right" >
                                    
                                      <a style="color:#892f79;" class="read-more" href="{{ url('news/'.$new->news_url) }}">Read More...</a>
                                   
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- News End -->

            <div class="p-3"></div>

            <!-- Events Start -->
            <div class="row m-0">
                <div class="col-12 p-0">
                    <a href="{{url('/events')}}" target="_blank">
                        <h4 class="classic-title text-uppercase"
                            style="font-weight:400;font-size:14px;padding:0px;color:#892f79;border-bottom:1px solid #bababa;">
                            <!-- <span class="" style="padding:0px;border-bottom:1px solid #892f79;">Events</span> -->
                            Events
                        </h4>
                    </a>
                    <div class="owl-nav disabled position-absolute" style="top:-8px; right:0;">
                        <button type="button" role="presentation" class="owl-events-next rounded"
                            style="background-color:transparent;"><span aria-label="Previous" class="text-secondary"
                                style="font-size:20px; line-height:12px;">‹</span></button>
                        <button type="button" role="presentation" class="owl-events-prev rounded"
                            style="background-color:transparent;"><span aria-label="Next" class="text-secondary"
                                style="font-size:20px; line-height:12px;">›</span></button>
                    </div>
                </div>

                <div class="col-12 p-0">
                    <div class="latest-posts-classic owl-events owl-carousel owl-theme" data-appeared-items="2"
                        style="opacity: 1; display: block;">
                          @foreach($events as $event)
                           <div class="item pr-2">
                            <div class="post-row">
                                <div class="left-meta-post">
                                    <div class="post-date"><span class="day">{{date('d', strtotime($event->start_date))}}</span><span class="month">{{date('M', strtotime($event->start_date))}}</span>
                                    </div>
                                    <div class="post-type"><i class="fa">{{date('y', strtotime($event->start_date))}}</i></div>
                                </div>
                                <h3 class="font-weight-bold" style="font-size:14px;">
                                 @if($event->event_url)
                                 <a href="{{url('/events')}}"  style="color:#892f79;" target="_blank"   title="{{$event->name}}">{{$event->name}}</a>
                                  @else
                                  <a href="{{url('/events')}}" style="color:#892f79;" target="_blank" title="{{$event->name}}">{{$event->name}}</a>
                                  @endif
                                  
                                </h3>
                                <div class="post-content">
                               <span class="">{!! date('j F Y', strtotime($event->start_date)) !!} &nbsp; - &nbsp; {!! date('j F Y', strtotime($event->end_date))!!}</span> 
    </br>
                                    <span class="">{{$event->organiser}},{{$event->country}}</span>
                                    
                                </div>
                            </div>
                        </div>
                          @endforeach()
                    </div>
                </div>
            </div>
            <!-- Events End -->

            <div class="p-3"></div>
      
            <!-- PressRelease Start -->
            <div class="row m-0 ">
                <div class="col-12 p-0">
                    <a href="{{url('/pressreleases')}}" target="_blank">
                        <h4 class="classic-title text-uppercase"
                            style="font-weight:400;font-size:14px;padding:0px;color:#892f79;border-bottom:1px solid #bababa;">
                            <!-- <span class="" style="padding:0px;border-bottom:1px solid #892f79;">Press Release</span> -->
                            Press Release
                        </h4>
                    </a>
                    <div class="owl-nav disabled position-absolute" style="top:-8px; right:0;">
                        <button type="button" role="presentation" class="owl-pressrelease-next rounded"
                            style="background-color:transparent;"><span aria-label="Previous" class="text-secondary"
                                style="font-size:20px; line-height:12px;">‹</span></button>
                        <button type="button" role="presentation" class="owl-pressrelease-prev rounded"
                            style="background-color:transparent;"><span aria-label="Next" class="text-secondary"
                                style="font-size:20px; line-height:12px;">›</span></button>
                    </div>
                </div>

                <div class="col-12 p-0">
                    <div class="latest-posts-classic owl-pressrelease owl-carousel owl-theme" data-appeared-items="2"
                        style="opacity: 1; display: block;">
                          @foreach($pressreleases as $press)
                            <div class="item pr-2">
                              <div class="post-row">
                                  <div class="left-meta-post">
                                      <div class="post-date">
                                        <span class="day">{{date('d', strtotime($press->story_date))}}</span>
                                      <span class="month">{{date('M', strtotime($press->story_date))}}</span>
                                      </div>
                                      <div class="post-type"><i class="fa fa-picture-o "></i></div>
                                  </div>
                                  <h3 class="font-weight-bold" style="font-size:14px;">
                                    <a style="color:#892f79;"
                                          href="{{url('pressreleases/'.$press->news_url)}}"
                                          title="{{$press->news_head}}">{{ str_limit( $press->news_head, 88, '...') }}</a></h3>
                                          <p>{{  str_limit( $press->home_description, 90, '...')  }}</p>
                                  <div class="post-content text-right">
                                     <a style="color:#892f79;" class="read-more"
                                              href="{{url('pressreleases/'.$press->news_url)}}">Read
                                              More...</a>
                                  </div>
                              </div>
                          </div>
                          @endforeach
                    </div>
                </div>
            </div>
            <!-- PressRelease End -->

            <div class="p-2"></div>

            <!-- Products Start -->
            <div class="row m-0">
                <div class="col-12 p-0">
                    <a href="{{'/products'}}" target="_blank">
                        <h4 class="classic-title text-uppercase"
                            style="font-weight:400;font-size:14px;padding:0px;color:#892f79;border-bottom:1px solid #bababa;">
                            <!-- <span class="" style="padding:0px;border-bottom:1px solid #892f79;">Products</span> -->
                            Products
                        </h4>
                    </a>
                    <div class="owl-nav disabled position-absolute" style="top:-8px; right:0;">
                        <button type="button" role="presentation" class="owl-products-next rounded"
                            style="background-color:transparent;"><span aria-label="Previous" class="text-secondary"
                                style="font-size:20px; line-height:12px;">‹</span></button>
                        <button type="button" role="presentation" class="owl-products-prev rounded"
                            style="background-color:transparent;"><span aria-label="Next" class="text-secondary"
                                style="font-size:20px; line-height:12px;">›</span></button>
                    </div>
                </div>

                <div class="col-12 pt-3 pb-3 bg-gray nav-cust border border-secondary">
                    <div class="latest-posts-classic owl-products owl-carousel owl-theme" data-appeared-items="2"
                        style="opacity: 1; display: block;">
                          @foreach($products as $cp)
                          @foreach($cp->companyproduct->take(5) as $product)
                          <div class="item bg-white shadow">
                              <div class="product">
                                  <div id="prodimage{{$cp->id}}">
                                      <a href="{{url('products/'.@$cp->profile->url.'/'.@$product->url)}}">
                                          <img class="img-fluid"
                                              src="{{config('app.url').'suppliers/'.str_slug($cp->comp_name).'/products/'.$product->small_image}}"
                                              alt="{{$product->alt_tag}}" />
                                      </a>
                                  </div>

                                  <div class="d-flex align-items-center justify-content-center pt-2"
                                      style="min-height: 46px;max-height: 46px;overflow: hidden;">
                                      <h2 class="small text-center">
                                          <a href="{{url('products/'.@$cp->profile->url.'/'.@$product->url)}}"
                                              class="text-secondary font-weight-bold">{{@$product->title}}</a>
                                      </h2>
                                  </div>

                                  <div class="pb-5 pt-2"align="center" >
                                  <a href="{{url('products/'.@$cp->profile->url.'/'.@$product->url)}}"
                                  style="color:#892f79 !important; font-weight:bold;" >{{ str_limit(@$cp->comp_name ,'25','..')}}</a>
    
                                  </div>
                                  <!--<div class="pb-2 pt-2">-->
                                  <!--      <img class="img-fluid"-->
                                  <!--          src="{{config('app.url').'suppliers/'.str_slug($cp->comp_name).'/'.$cp->comp_logo}}"-->
                                  <!--          alt="{{$cp->companyproduct[0]->alt_tag}}" width="100" />-->
                                  <!--  </div>-->
                              </div>
                          </div>
                          @endforeach
                          @endforeach
                          
                          <!-- Products New Login Start-->
                          
                          <!-- @foreach($products as $cp)-->
                          <!--  @foreach($cp->companyproduct->take(2) as $product)-->
                          <!--  <div class="item bg-white shadow">-->
                          <!--    <div class="product">-->
                          <!--        <div id="prodimage{{$cp->id}}">-->
                          <!--            <a href="{{url('products/'.@$cp->profile->url.'/'.@$product->url)}}">-->
                          <!--                <img class="img-fluid"-->
                          <!--                    src="{{config('app.url').'suppliers/'.str_slug($cp->comp_name).'/products/'.$product->small_image}}"-->
                          <!--                    alt="{{$product->alt_tag}}" />-->
                          <!--            </a>-->
                          <!--        </div>-->

                          <!--        <div class="d-flex align-items-center justify-content-center pt-2"-->
                          <!--            style="min-height: 46px;max-height: 46px;overflow: hidden;">-->
                          <!--            <h2 class="small text-center">-->
                          <!--                <a href="{{url('products/'.@$cp->profile->url.'/'.@$product->url)}}"-->
                          <!--                    class="text-secondary font-weight-bold">{{@$product->title}}</a>-->
                          <!--            </h2>-->
                          <!--        </div>-->

                                  <!--<div class="pb-5 pt-2"align="center" >-->
                                  <!--<a href="{{url('products/'.@$cp->profile->url.'/'.@$product->url)}}"-->
                                  <!--style="color:#892f79 !important; font-weight:bold;" >{{ str_limit(@$cp->comp_name ,'10','..')}}</a>-->
                                  <!--</div>-->
                                  
                          <!--        <div class="pb-2 pt-2">-->
                          <!--          <img class="img-fluid"-->
                          <!--              src="{{config('app.url').'suppliers/'.str_slug($cp->comp_name).'/'.$cp->comp_logo}}"-->
                          <!--              alt="{{$product->alt_tag}}" width="100" />-->
                          <!--      </div>-->
                          <!--    </div>-->
                          <!--</div>-->
                          <!--  @endforeach()-->
                          <!--@endforeach-->
                          
                          <!-- Products New Login End-->
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Products End -->


            <div class="p-2"></div>

            <!-- Start Top/Full Banner3  -->
            <div class="pb-1"></div>
            <div class="container">
                <div class="row">
                    @if($banner1314)
                    @foreach($banner1314 as $k=>$homebanner12)
                    @foreach($homebanner12->pagesCount as $j=>$pcount)
                    @if($homebanner12->positions[0]->id == 3 and $pcount->id == 1)
                    <div class="col-lg-12 text-center mt-2 mb-3">
                        <a href="javascript:void(0)"
                            onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank"
                            class="mb-3" title="{{$homebanner12->title}}"><img class="img-fluid div-shadow mb-3"
                                src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>"
                                alt="{{$homebanner12->img_alt}}" title="{{$homebanner12->img_title}}" /></a>
                    </div>
                    @else
                    @endif
                    @endforeach
                    @endforeach
                    @endif
                </div>
            </div>
            <!-- End Top/Full Banner3  -->


             <!-- Product Launch Start -->
            <div class="row m-0">
                <div class="col-12 p-0">
                    <a href="{{url('/productlaunch')}}" target="_blank">
                        <h4 class="classic-title text-uppercase"
                            style="font-weight:400;font-size:14px;padding:0px;color:#892f79;border-bottom:1px solid #bababa;">
                            <!-- <span class="" style="padding:0px;border-bottom:1px solid #892f79;">Product Launch</span> -->
                            Product Launch
                        </h4>
                    </a>
                    <div class="owl-nav disabled position-absolute" style="top:-8px; right:0;">
                        <button type="button" role="presentation" class="owl-product-launch-next rounded"
                            style="background-color:transparent;"><span aria-label="Previous" class="text-secondary"
                                style="font-size:20px; line-height:12px;">‹</span></button>
                        <button type="button" role="presentation" class="owl-product-launch-prev rounded"
                            style="background-color:transparent;"><span aria-label="Next" class="text-secondary"
                                style="font-size:20px; line-height:12px;">›</span></button>
                    </div>
                </div>

                <div class="col-12 p-0">
                    <div class="latest-posts-classic owl-product-launch owl-carousel owl-theme" data-appeared-items="2"
                        style="opacity: 1; display: block;">
                       @foreach($productluanches as $productluanch)
                        <div class="item pr-2">
                            <img src="<?php echo config('app.url'); ?>productlaunch/<?php echo $productluanch->image;?>"
                                class="mr-3 mb-1 div-shadow float-left" alt="" style="max-width:150px;" width="150" />
                            <h3 class="display-6"><a style="color:#892f79;" href="{{url('productlaunch/'.$productluanch->project_url)}}">{{$productluanch->title}}</a>
                            </h3>
                            <p class="mb-0  font-13 text-justify">{!! $productluanch->home_description !!}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Product Launch End -->

            <div class="p-2"></div>

            <div class="row">
              <div class="col-12 col-md-12">
                <!-- Articles Start -->
                    <div class="row m-0">
                      <div class="col-12 p-0">
                          <a href="{{url('articles')}}" target="_blank">
                              <h4 class="classic-title text-uppercase"
                                  style="font-weight:400;font-size:14px;padding:0px;color:#892f79;border-bottom:1px solid #bababa;">
                                  <!-- <span class="" style="padding:0px;border-bottom:1px solid #892f79;">Articles</span> -->
                                  Articles
                              </h4>
                          </a>
                          <div class="owl-nav disabled position-absolute" style="top:-8px; right:0;">
                              <button type="button" role="presentation" class="owl-articles-next rounded"
                                  style="background-color:transparent;"><span aria-label="Previous" class="text-secondary"
                                      style="font-size:20px; line-height:12px;">‹</span></button>
                              <button type="button" role="presentation" class="owl-articles-prev rounded"
                                  style="background-color:transparent;"><span aria-label="Next" class="text-secondary"
                                      style="font-size:20px; line-height:12px;">›</span></button>
                          </div>
                      </div>

                      <div class="col-12 p-0">
                          <div class="latest-posts-classic owl-articles owl-carousel owl-theme" data-appeared-items="2"
                              style="opacity: 1; display: block;">
                              @foreach($articles as $homearticles)
                              <div class="item">
                                  <img src="<?php echo config('app.url'); ?>articles/<?php echo $homearticles->small_image;?>"
                                      class="img-fluid mr-3 mb-1 div-shadow float-left" style="max-width:180px;" alt="" width="180" />
                                  <h3 class="display-6"><a style="color:#892f79;" href="{{url('articles/'.$homearticles->article_url)}}">{!! $homearticles->article_title !!}</a>
                                  </h3>
                                  <p class="mb-0  font-13 text-justify">{{ @$homearticles->short_description}}</p>
                                  <div class="text-right">
                                      <small><a style="color:#892f79;" href="{{url('articles/'.$homearticles->article_url)}}">Read More...</a></small>
                                  </div>
                              </div>
                              @endforeach
                          </div>
                      </div>
                    </div>
                  <!-- Article End -->
              </div>

              <div class="col-12 col-md-12 mt-3">
                    <!-- Expert Talk Start -->
                    <div class="row m-0">
                      <div class="col-12 p-0">
                         
                              <h4 class="classic-title text-uppercase"
                                  style="font-weight:400;font-size:14px;padding:0px;color:#892f79;border-bottom:1px solid #bababa;">
                                  <!-- <span class="" style="padding:0px;border-bottom:1px solid #892f79;">Expert Talk</span> -->
                                  Expert Talk
                              </h4>
                          
                          <div class="owl-nav disabled position-absolute" style="top:-8px; right:0;">
                              <button type="button" role="presentation" class="owl-experttalk-next rounded"
                                  style="background-color:transparent;"><span aria-label="Previous" class="text-secondary"
                                      style="font-size:20px; line-height:12px;">‹</span></button>
                              <button type="button" role="presentation" class="owl-experttalk-prev rounded"
                                  style="background-color:transparent;"><span aria-label="Next" class="text-secondary"
                                      style="font-size:20px; line-height:12px;">›</span></button>
                          </div>
                      </div>
                      <div class="col-12 p-0">
                          <div class="latest-posts-classic owl-experttalk owl-carousel owl-theme" data-appeared-items="2"
                              style="opacity: 1; display: block;">
                                <?php $i=1; ?>
                                  @foreach($interviews as $homeinterviews)
                                  @if($i==1)
                                  <div class="item active ">
                                    <div class="">
                                          <img src="<?php echo config('app.url'); ?>interview/<?php echo $homeinterviews->small_image;?>"
                                          class="img-fluid mr-3 rounded-circle mb-1 div-shadow float-left" style="max-width:180px;" alt="" width="180" />
                                          <div>
                                            <h3 class="name mb-2 mt-3 display-6">
                                            <a href="{{ url('/interviews').'/'.$homeinterviews->interviews_url }}" style="color:#892f79 !important;" > {{$homeinterviews->name}}</a></h3>
                                            <p class="mb-2">{{$homeinterviews->designation}}</p>
                                            <p class="discription mb-2 text-justify">{{$homeinterviews->company}}</p>
                                          </div>
                                    </div><p class="discription mb-2 text-justify">{{$homeinterviews->title}}</p>
                                  </div>
                                  @else
                                  <div class="item">
                                    <div class="">
                                        <img src="<?php echo config('app.url'); ?>interview/<?php echo $homeinterviews->small_image;?>"
                                        class="img-fluid mr-3 rounded-circle mb-1 div-shadow float-left" style="max-width:180px;" alt="" width="180" />
                                          <div>
                                            <p class="name mb-2 mt-3 display-6  "> 
                                            <a  href="{{ url('/interviews').'/'.$homeinterviews->interviews_url }}" style="color:#892f79 !important;" > {{$homeinterviews->name}}</a></p>
                                            <p class="mb-2 ">{{$homeinterviews->designation}}</p>
                                            <p class="discription mb-2 text-justify">{{$homeinterviews->company}}</p>
                                          </div>
                                      </div>
                                      <p class="discription mb-2 text-justify">{{ $homeinterviews->title }} </p>
                                  </div>
                                  @endif
                                  <?php $i++; ?>
                                  @endforeach
                          </div>
                      </div>
                    </div>
                  <!-- Expert Talk End -->
              </div>
            </div>

            <div class="p-2"></div>
            
            <div class="row">
              <div class="col-12 col-md-12 mt-3">
                <!-- Tenders Start -->
                    <div class="row m-0">
                      <div class="col-12 p-0">
                          <a href="{{url('tenders')}}" target="_blank">
                              <h4 class="classic-title text-uppercase"
                                  style="font-weight:400;font-size:14px;padding:0px;color:#892f79;border-bottom:1px solid #bababa;">
                                  <!-- <span class="" style="padding:0px;border-bottom:1px solid #892f79;">Tenders</span> -->
                                  Tenders
                              </h4>
                          </a>
                          <div class="owl-nav disabled position-absolute" style="top:-8px; right:0;">
                              <button type="button" role="presentation" class="owl-tenders-prev rounded"
                                  style="background-color:transparent;"><span aria-label="Previous" class="text-secondary"
                                      style="font-size:20px; line-height:12px;">‹</span></button>
                              <button type="button" role="presentation" class="owl-tenders-next rounded"
                                  style="background-color:transparent;"><span aria-label="Next" class="text-secondary"
                                      style="font-size:20px; line-height:12px;">›</span></button>
                          </div>
                      </div>

                      <div class="col-12 p-0">
                          <div class="latest-posts-classic owl-tenders owl-carousel owl-theme" data-appeared-items="2"
                              style="opacity: 1; display: block;">
                              @foreach($tenders as $tender)
                                <div class="item">  
                                <p class="mb-2"><strong>Title:</strong> {{@$tender->title}}</p>
                                <p class="mb-2"><strong>Country:</strong> {{@$tender->region}}   </p>
                                <!-- <img style="margin:7px 0 0 7px;" src="{{ config('app.url')}}img/flags/{{ str_replace(' ', '_', @$tender->country->country_name) }}.png" align="right" alt="{{ @$tender->country->country_name }}">  -->
                                <p class="mb-2"><strong>Tender Reference:</strong> {{@$tender->tender_reference}}</p>
                                <p class="mb-2"><strong>Published Date:</strong> {{date('d M Y',strtotime(@$tender->issue_date))}}</p>
                                <p class="mb-2"><strong>Action Deadline:</strong> {{ date('j F Y', strtotime(@$tender->action_deadline)) }}</p>
                                <p class="mb-2 text-start"><strong>Short Description:</strong> {{@$tender->home_description}} </p>
                                <p class="mb-2 text-right small"><a style="color:#892f79;" href="{{url('/tenders')}}">Read More...</a></p> 
                              </div>
                              @endforeach
                          </div>
                      </div>
                    </div>
                  <!-- Tenders End -->
              </div>

              <div class="col-12 col-md-12 mt-3">
                    <!-- Latest Projects Start -->
                    <div class="row m-0">
                      <div class="col-12 p-0">
                          <a href="{{url('projects')}}" target="_blank">
                              <h4 class="classic-title text-uppercase"
                                  style="font-weight:400;font-size:14px;padding:0px;color:#892f79;border-bottom:1px solid #bababa;">
                                  <!-- <span class="" style="padding:0px;border-bottom:1px solid #892f79;">Latest Projects</span> -->
                                  Latest Projects
                              </h4>
                          </a>
                          <div class="owl-nav disabled position-absolute" style="top:-8px; right:0;">
                              <button type="button" role="presentation" class="owl-projects-next rounded"
                                  style="background-color:transparent;"><span aria-label="Previous" class="text-secondary"
                                      style="font-size:20px; line-height:12px;">‹</span></button>
                              <button type="button" role="presentation" class="owl-projects-prev rounded"
                                  style="background-color:transparent;"><span aria-label="Next" class="text-secondary"
                                      style="font-size:20px; line-height:12px;">›</span></button>
                          </div>
                      </div>
                      <div class="col-12 p-0">
                          <div class="latest-posts-classic owl-projects owl-carousel owl-theme" data-appeared-items="2"
                              style="opacity: 1; display: block;">
                                 @foreach($projects as $homeprojects)
                                  <div class="item">
                                    <div class="">
                                      <div class="float-left text-center">
                                        <img src="<?php echo config('app.url'); ?>project/<?php echo $homeprojects->image;?>" class="img-fluid mr-3 mb-2 div-shadow" alt="" width="150" style="max-width:180px;height:172px;"  />
                                      </div>   
                                      <div class="media-body">
                                        <h3 class="mt-0"><a style="color:#892f79;" href="{{url('projects/'.$homeprojects->project_url)}}">{{$homeprojects->title}}</a></h3>
                                       
                                      </div>
                                       <p class="mb-0">{!! str_limit( $homeprojects->home_description, 150, '...') !!}</p>
                                       <div class="text-right">
                                      <small><a style="color:#892f79;" href="{{url('projects/'.$homeprojects->project_url)}}">Read More...</a></small>
                                  </div>
                                    </div>  
                                  </div>
                                  @endforeach
                          </div>
                      </div>
                    </div>
                  <!-- Expert Talk End -->
              </div>
            </div>


                      

            <div class="">

                @php
                $i;
                $partner_count = count($clientele);
                @endphp

                <div class="owl-carousel owl_carousel_latest owl-theme">
                    @for($i=0; $i<$partner_count; $i++) @php $j=$i+1; @endphp <div class="item">
                       

                       
                </div>
                @php $i=$j; @endphp

                @endfor

            </div>
        </div>
        <!-- // Latest Partnered Companies -->


        <!-- Start Top/Full Banner4  -->
        <div class="pb-1"></div>
        <div class="container">
            <div class="row">
                @if($banner1314)
                @foreach($banner1314 as $k=>$homebanner12)
                @foreach($homebanner12->pagesCount as $j=>$pcount)
                @if($homebanner12->positions[0]->id == 4 and $pcount->id == 1)
                <div class="col-lg-12 text-center mt-2 mb-3">
                    <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;"
                        target="_blank" class="mb-3" title="{{$homebanner12->title}}"><img
                            class="img-fluid div-shadow mb-3"
                            src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>"
                            alt="{{$homebanner12->img_alt}}" title="{{$homebanner12->img_title}}" /></a>
                </div>
                @else
                @endif
                @endforeach
                @endforeach
                @endif
            </div>
        </div>
        <!-- End Top/Full Banner4  -->

        <!-- Start Top/Full Banner5  -->
        <div class="pb-1"></div>
        <div class="container">
            <div class="row">
                @if($banner1314)
                @foreach($banner1314 as $k=>$homebanner12)
                @foreach($homebanner12->pagesCount as $j=>$pcount)
                @if($homebanner12->positions[0]->id == 5 and $pcount->id == 1)
                <div class="col-lg-12 text-center mt-2 mb-3">
                    <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;"
                        target="_blank" class="mb-3" title="{{$homebanner12->title}}"><img
                            class="img-fluid div-shadow mb-3"
                            src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>"
                            alt="{{$homebanner12->img_alt}}" title="{{$homebanner12->img_title}}" /></a>
                </div>
                @else
                @endif
                @endforeach
                @endforeach
                @endif
            </div>
        </div>
        <!-- End Top/Full Banner2  -->


        <!-- Start Top/Full Banner6  -->
        <div class="pb-1"></div>
        <div class="container">
            <div class="row">
                @if($banner1314)
                @foreach($banner1314 as $k=>$homebanner12)
                @foreach($homebanner12->pagesCount as $j=>$pcount)
                @if($homebanner12->positions[0]->id == 6 and $pcount->id == 1)
                <div class="col-lg-12 text-center mt-2 mb-3">
                    <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;"
                        target="_blank" class="mb-3" title="{{$homebanner12->title}}"><img
                            class="img-fluid div-shadow mb-3"
                            src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>"
                            alt="{{$homebanner12->img_alt}}" title="{{$homebanner12->img_title}}" /></a>
                </div>
                @else
                @endif
                @endforeach
                @endforeach
                @endif
            </div>
        </div>
        <!-- End Top/Full Banner6  -->

        <!-- Start Top/Full Banner7  -->
        <div class="pb-1"></div>
        <div class="container">
            <div class="row">
                @if($banner1314)
                @foreach($banner1314 as $k=>$homebanner12)
                @foreach($homebanner12->pagesCount as $j=>$pcount)
                @if($homebanner12->positions[0]->id == 7 and $pcount->id == 1)
                <div class="col-lg-12 text-center mt-2 mb-3">
                    <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;"
                        target="_blank" class="mb-3" title="{{$homebanner12->title}}"><img
                            class="img-fluid div-shadow mb-3"
                            src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>"
                            alt="{{$homebanner12->img_alt}}" title="{{$homebanner12->img_title}}" /></a>
                </div>
                @else
                @endif
                @endforeach
                @endforeach
                @endif
            </div>
        </div>
        <!-- End Top/Full Banner7  -->
        <!-- Testimonials // -->
        <div class="row toggleOwl mt-2">
            <div class="col-lg-12 text-center">
                <div class="home-title">
                    <h2><span>Testimonials</span>
                        <ul class="nav nav-tabs">
                            <li><a href="#testimonial_text" data-toggle="tab" class="active"><i
                                        class="fa  fa-commenting-o " aria-hidden="true"></i></a></li>
                            <li><a href="#testimonial_video" data-toggle="tab"><i class="fa fa-video-camera text-danger"
                                        aria-hidden="true"></i></a></li>

                        </ul>
                    </h2>
                </div>

                <div class="tab-content">
                    <div id="testimonial_text" class="tab-pane active">
                        <div class="nav-cust p-2 testimonial">
                            <div class="owl_testimonials owl-carousel owl-theme text-center">
                                <?php $i=1; ?>
                                @foreach($testimonials as $testimonial)
                                @if($i==1)
                                <div class="item active text-center">
                                    <img src="<?php echo config('app.url'); ?>testimonial/<?php echo $testimonial->image;?>"
                                        class="img-fluid rounded-circle mx-auto d-block mb-2 mt-2"
                                        alt="{{$testimonial->img_alt}}" title="{{$testimonial->img_title}}"  style="max-width:180px;"/>
                                    <p class="discription">{{$testimonial->description}}</p>
                                    <p class="name"><strong>{{$testimonial->client_name}}</strong> -
                                        {{$testimonial->company_name}}</p>
                                    <p>{{$testimonial->designation}}</p>
                                </div>
                                @else
                                <div class="item text-center">
                                    <img src="<?php echo config('app.url'); ?>testimonial/<?php echo $testimonial->image;?>"
                                        class="img-fluid rounded-circle mx-auto d-block mb-2 mt-2"
                                        alt="{{$testimonial->img_alt}}" title="{{$testimonial->img_title}}" style="max-width:180px;" />
                                    <p class="discription">{{$testimonial->description}}</p>
                                    <p class="name"><strong>{{$testimonial->client_name}}</strong> -
                                        {{$testimonial->company_name}}</p>
                                    <p>{{$testimonial->designation}}</p>
                                </div>
                                @endif
                                <?php $i++; ?>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div id="testimonial_video" class="tab-pane">
                        <div class="nav-cust p-2 testimonial">
                            <div class="owl_testimonials3 owl-carousel owl-theme text-center">

                                <div class="item text-center">
                                    <video controls="" width="100%" height="auto" allowfullscreen=""
                                        style="max-height:300px">
                                        <source src="{{config('app.url').'testimonial/plant-testimonial2.mp4'}}"
                                            type="video/mp4" />
                                    </video>
                                </div>

                                <div class="item text-center">
                                    <video controls="" width="100%" height="auto" allowfullscreen=""
                                        style="max-height:300px">
                                        <source src="{{config('app.url').'testimonial/2019-07-19 17.37.17.mp4'}}"
                                            type="video/mp4" />
                                    </video>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                {{--  <ul class="nav nav-tabs">
     <li><a href="#testimonial_text" data-toggle="tab" class="active"><i class="fa  fa-commenting-o " aria-hidden="true"></i></a></li>
     <li><a href="#testimonial_video" data-toggle="tab"><i class="fa fa-video-camera text-danger" aria-hidden="true"></i></a></li>

   </ul> --}}


            </div>
        </div>



    </div>



    <div class="col-lg-3 col-md-3  col-sm-12 col-12 text-center" align="center">
        <!--<div class="bg-gray p-2 border border-secondary">-->
        <div class="p-2 border border-secondary">
            <div class="text-center">
                <!--<h3 class="adv-title">Advertisements</h3>-->
            </div>
<!--

            <SCRIPT language='JavaScript1.1'
                SRC="https://ad.doubleclick.net/ddm/adj/N30602.8383INFORMARESEARCHSERVIC/B22226009.253585932;sz=300x416;ord=[timestamp];dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=?">
            </SCRIPT>
                -->
            <div class="mb-3"></div>

            @foreach($banner1314 as $k=>$homebanner12)
            @foreach($homebanner12->pagesCount as $j=>$pcount)
            @if($homebanner12->positions[0]->id == 16 and $pcount->id == 1)
            <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;"
                target="_blank" class="mb-3" title="{{$homebanner12->title}}">
                <img class="img-fluid div-shadow mb-3"
                    src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>"
                    alt="{{$homebanner12->img_alt}}" title="{{$homebanner12->img_title}}" /></a>
            @else
            @endif
            @endforeach
            @endforeach


            
            <video controls="" ttile="steel"  width="230" height="130" allowfullscreen>
                          <source src="https://industry.plantautomation-technology.com/suppliers/moxa-india-industrial-networking-pvt-ltd/video/Moxa.mp4" type="video/mp4">
                      
                    </video>
                    <video controls="" ttile="steel"  width="230" height="130" allowfullscreen>
                          <source src="https://industry.plantautomation-technology.com/suppliers/sms-tork/video/WIN-Eurasia-2023.mp4" type="video/mp4">
                      
                    </video>
                    <video controls="" ttile="steel"  width="230" height="130" allowfullscreen>
                          <source src="https://industry.plantautomation-technology.com/suppliers/mpl-ag/video/MPL-AGSwitzerland-Company.mp4" type="video/mp4">
                </video>
                <video controls="" ttile="steel"  width="230" height="130" allowfullscreen>
                          <source src="https://industry.plantautomation-technology.com/suppliers/scaglia-indeva-spa/video/indeva-manipulators.mp4" type="video/mp4">
                </video>


        </div>
    </div>
</div>

</div>


<div class="pb-1"></div>
<div class="container">
    <div class="row">
        @if($banner1314)
        @foreach($banner1314 as $k=>$homebanner12)
        @foreach($homebanner12->pagesCount as $j=>$pcount)
        @if($homebanner12->positions[0]->id == 15 and $pcount->id == 1)
        <div class="col-lg-12 text-center mt-2 mb-3">
            <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;"
                target="_blank" class="mb-3" title="{{$homebanner12->title}}">
                <img class="img-fluid div-shadow mb-3"
                    src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>"
                    alt="{{$homebanner12->img_alt}}" title="{{$homebanner12->img_title}}" /></a>
        </div>
        @else
        @endif
        @endforeach
        @endforeach
        @endif
    </div>
</div>



<div class="container">
    <div class="partners">
        <div class="text-center">
            <h2 class="main-title"><span><a href="{{url('partners')}}">Media / Event Partners</a></span></h2>
        </div>


        <div class="col-12 mb-3">
            <div class="slick">


                @foreach($partners as $profile_logo)


                <div><img src="<?php echo config('app.url'); ?>partner/<?php echo @$profile_logo->home_logo;?>"
                        class="img-fluid"></div>
                @endforeach
            </div>
        </div>
    </div>
</div>




<div class="quick-btn">
    <a href="{{url('contactus')}}">
        <img src="<?php echo config('app.url'); ?>img/btn-contact.png" alt="Contact Us" class="img-fluid mb-1" />
    </a>
    <br />
    <a href="{{url('registration')}}">
        <img src="<?php echo config('app.url'); ?>img/btn-subscribe.png" alt="Subscribe" class="img-fluid" />
    </a>
</div>


<!-- <script>
(function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-TPK8NKZ');
</script> -->


@endsection

@section('scripts')
<script type="text/javascript" src="{{ config('app.url')}}js/slick/slick.min.js"></script>


<script type="text/javascript">
$(document).ready(function() {
    $('.slick').slick({
        slidesToShow: 6,
        slidesToScroll: 5,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 6,
                    slidesToScroll: 5,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
        ]
    });

    var loaded_messages = 6;
    var is_loading = true;
    var num_messages = {{ $partners_count }};

var slide_count = 6;

    var url = "{{ url('eventajaxmore') }}";
    setInterval(function() {
        if (num_messages + 2 >= loaded_messages) {
            $.ajax({
                url: url + "/" + loaded_messages,
                type: 'get',
                success: function(data) {
                    loaded_messages += 6;
                    slide_count += 5;
                    $('.slick').slick('slickAdd', data);
                }
            });
        }
    }, 2000);
});
</script>

<script>
$('.carousel').carousel({
    pause: "hover"
})
</script>
<script type="text/javascript">
$('.panel-title a').on('click', function() {
    $('.accordion-toggle').not($(this)).addClass('collapsed');
    $('.panel-collapse').not($(this).closest('.panel').find('.panel-collapse')).removeClass('show');

});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script>

 // owl news script start     
  $('.owl-news').owlCarousel({
      rtl:false,
      loop:false,
     
      margin:10,
      nav:false,
      dots: false,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:2
          },
          1000:{
              items:2
          }
      }
  })
  var owl_news = $('.owl-news');
  owl_news.owlCarousel();
  $('.owl-news-prev').click(function() {
      owl_news.trigger('next.owl.carousel');
  })
  $('.owl-news-next').click(function() {
      owl_news.trigger('prev.owl.carousel', [300]);
  })
  // owl news script end

 // owl events script start     
  $('.owl-events').owlCarousel({
      rtl:false,
    //   loop:true,
      margin:10,
      nav:false,
      dots: false,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:2
          },
          1000:{
              items:2
          }
      }
  })
  var owl_events = $('.owl-events');
  owl_events.owlCarousel();
  $('.owl-events-prev').click(function() {
      owl_events.trigger('next.owl.carousel');
  })
  $('.owl-events-next').click(function() {
      owl_events.trigger('prev.owl.carousel', [300]);
  })
  // owl events script end

 // owl pressrelease script start     
  $('.owl-pressrelease').owlCarousel({
      rtl:false,
    //   loop:true,
      margin:10,
      nav:false,
      dots: false,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:2
          },
          1000:{
              items:2
          }
      }
  })
  var owl_pressrelease = $('.owl-pressrelease');
  owl_pressrelease.owlCarousel();
  $('.owl-pressrelease-prev').click(function() {
      owl_pressrelease.trigger('next.owl.carousel');
  })
  $('.owl-pressrelease-next').click(function() {
      owl_pressrelease.trigger('prev.owl.carousel', [300]);
  })
  // owl pressrelease script end

 // owl products script start     
  $('.owl-products').owlCarousel({
      rtl:false,
    //   loop:true,
    autoplay:true,
      margin:10,
      nav:false,
      dots: false,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:3
          },
          1000:{
              items:3
          }
      }
  })
  var owl_products = $('.owl-products');
  owl_products.owlCarousel();
  $('.owl-products-prev').click(function() {
      owl_products.trigger('next.owl.carousel');
  })
  $('.owl-products-next').click(function() {
      owl_products.trigger('prev.owl.carousel', [300]);
  })
  // owl products script end

 // owl articles script start     
  $('.owl-articles').owlCarousel({
      rtl:false,
    //   loop:true,
      margin:10,
      nav:false,
      dots: false,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:1
          }
      }
  })
  var owl_articles = $('.owl-articles');
  owl_articles.owlCarousel();
  $('.owl-articles-prev').click(function() {
      owl_articles.trigger('next.owl.carousel');
  })
  $('.owl-articles-next').click(function() {
      owl_articles.trigger('prev.owl.carousel', [300]);
  })
  // owl articles script end

  // owl experttalk script start     
  $('.owl-experttalk').owlCarousel({
      rtl:false,
    //   loop:true,
    autoplay: true,
      margin:10,
      nav:false,
      dots: false,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:1
          }
      }
  })
  var owl_experttalk = $('.owl-experttalk');
  owl_experttalk.owlCarousel();
  $('.owl-experttalk-prev').click(function() {
      owl_experttalk.trigger('next.owl.carousel');
  })
  $('.owl-experttalk-next').click(function() {
      owl_experttalk.trigger('prev.owl.carousel', [300]);
  })
  // owl experttalk script end

  // owl tenders script start  
  $('.owl-tenders').owlCarousel({
      rtl:true,
      loop:true,
      margin:10,
      nav:false,
      dots: false,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:1
          }
      }
  })
  var owl_tenders = $('.owl-tenders');
  owl_tenders.owlCarousel();
  $('.owl-tenders-prev').click(function() {
      owl_tenders.trigger('next.owl.carousel');
  })
  $('.owl-tenders-next').click(function() {
      owl_tenders.trigger('prev.owl.carousel', [300]);
  })
  // owl tenders script end

 // owl projects script start     
  $('.owl-projects').owlCarousel({
      rtl:false,
    //   loop:true,
      margin:10,
      nav:false,
      dots: false,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:1
          }
      }
  })
  var owl_projects = $('.owl-projects');
  owl_projects.owlCarousel();
  $('.owl-projects-prev').click(function() {
      owl_projects.trigger('next.owl.carousel');
  })
  $('.owl-projects-next').click(function() {
      owl_projects.trigger('prev.owl.carousel', [300]);
  })
  // owl projects script end

 // owl experttalk script start     
  $('.owl_testimonials').owlCarousel({
      rtl:false,
    //   loop:true,
  
      margin:10,
      nav:false,
      dots: false,
      autoplay:true,
    //  autoplayTimeout:1000,
      auto:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:1
          }
      }
  })


  // owl experttalk script end

   // owl product launch script start     
  $('.owl-product-launch').owlCarousel({
      rtl:false,
    //   loop:true,
      margin:10,
      nav:false,
      dots: false,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:1
          }
      }
  })
  var owl_product_launch = $('.owl-product-launch');
  owl_product_launch.owlCarousel();
  $('.owl-product-launch-prev').click(function() {
      owl_product_launch.trigger('next.owl.carousel');
  })
  $('.owl-product-launch-next').click(function() {
      owl_product_launch.trigger('prev.owl.carousel', [300]);
  })
  // owl product launch script end


// Form Sticky
$(window).scroll(function() {
    var y = $(window).scrollTop();
    if (y > 0) {
        $("#form-sticky").addClass('sticky-top').addClass('pt-180');
    } else {
        $("#form-sticky").removeClass('sticky-top').removeClass('pt-180');
    }
});
function initialize_owl() {
    $('.owl_testimonials3').owlCarousel({
        loop: true,
        margin: 20,
        responsiveClass: true,

        dots: false,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 1,
                nav: false
            },
            1000: {
                items: 1,
                nav: true,
                loop: false
            }
        }
    });
    $('.owl_testimonials3').closest('.nav-cust').after($('.owl_testimonials3 .owl-nav'));
};

$('a[href="#testimonial_video"]').on('shown.bs.tab', function() {
    initialize_owl();
});




</script>
<script>
$(document).ready(function() {
    $("#search").keyup(function() {
        var name = $('#search').val();
        if (name == "") {
            $("#display").html("");
        } else {
            $.ajax({
                headers: {
                    'Accept': "application/json"
                },
                type: "GET",
                url: "{{ route('searchajax') }}",
                dataType: 'json',
                data: {
                    search: name
                },
                success: function(data) {
                    console.log(data);
                    console.log(data.html);
                    $("#display").html(data.html);
                }
            });
        }
    });
});
</script>


@endsection