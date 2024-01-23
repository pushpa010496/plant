

@extends('../layouts/app')
@section('style')
<style>

</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="{{ config('app.url')}}css/jquery.ui.autocomplete.css">
<link rel="stylesheet" type="text/css" href="{{ config('app.url')}}js/slick/slick.css">
<link rel="stylesheet" type="text/css" href="{{ config('app.url')}}js/slick/slick-theme.css">
<style type="text/css">
  .slick-prev, .slick-next,.slick-prev:hover, .slick-prev:focus, .slick-next:hover, .slick-next:focus{
    background: #717070f7 !important;
  }
  .slick-prev {
    right: 47px !important;
    left: auto !important;
  }
  .slick-next{
   right: 20px !important;
 }
 .slick-prev, .slick-next {
  top:130% !important;
  border-radius: 0 !important;
  height: 25px !important;
  width:25px !important;
}
.slick-prev:before, .slick-next:before{
  color: #ffffff !important;
  font:normal normal normal 14px/1 FontAwesome !important;

}
.slick-prev:before{
  content: "\f053" !important;
} 
.slick-next:before{
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
.nav.nav-tabs{
  margin-top: -3px;
  float: right;
}

.nav-tabs > li {
  margin-bottom:0;
  margin-top:-1px;
}

.nav-tabs > li > a {
  padding:5px 10px;
  line-height: 20px;
  font-size: 16px;
  border: 1px solid #ffffff;
  border-bottom: none;
  border-right: none;
  -moz-border-radius:0px;
  -webkit-border-radius:0px;
  border-radius:0px;
  background-color: #cccccc;
}
.nav-tabs > .active > a, .nav-tabs > .active > a:hover, .nav-tabs > .active > a:focus {
  color: #555555;
  /*cursor: default;*/
  background-color: #ffffff;
  border-top-color: transparent;
}
.nav.nav-tabs li a.active{
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
  background-color: rgba(0,0,0,0.5);
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

    <!-- cytiva-->
        
</div>
</div>
<!-- end leader board banner -->
<div class="pt-2"></div>
<div class="container" >
    <hp class="pt-2">Categories </p>
    <div class="panel-group row" id="accordion">

      <div class="col-lg-4">
          <?php $i=1; ?>
        <?php $cat = ordercatfirst(22);?>
        
        @foreach($cat as $val)
        <div class="panel panel-default">
          <div class="panel-heading">                
            <h2 class="panel-title">
              <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#TEST_{{$i}}" aria-expanded="false" contenteditable="false">{{$val['name']}}</a>
            </h2>

          </div>
          <div id="TEST_{{$i}}" class="panel-collapse collapse" aria-expanded="false">
           <?php $childs = getcat($val['id']);?>
           @if(@$childs)
           <div class="panel-body">
             @foreach($childs as $child)                       
            
             <a href="{{url('categories')}}{{'/'.$child->slug}}"> 
              <p>{{ucwords(strtolower($child['name']))}} </p>
            </a>
            @endforeach
          </div>
          @endif
        </div>
      </div>
      <?php $i=$i+1; ?>
      @endforeach
    </div>
   
    <div class="col-lg-4">  
      <?php $cat = ordercatsecond(22);?>
      <?php $i=12; ?>
      @foreach($cat as $val)
      <div class="panel panel-default">
        <div class="panel-heading">                
          <h2 class="panel-title">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#TEST_{{$i}}" aria-expanded="false" contenteditable="false">{{$val['name']}}</a>
          </h2>

        </div>
        <div id="TEST_{{$i}}" class="panel-collapse collapse" aria-expanded="false">
         <?php $childs = getcat($val['id']);?>
         @if(@$childs)
         <div class="panel-body" style="">
           @foreach($childs as $child)                       
           <?php 
           $count = DB::table('products')->where('category_id',$child['id'])->count();
           ?>
           <a href="{{url('categories')}}{{'/'.$child->slug}}"> 
            <p>{{ucwords(strtolower($child['name']))}} </p></a>
            @endforeach
          </div>
          @endif
        </div>
      </div>
      <?php $i=$i+1; ?>
      @endforeach
    
    </div>
    
    <div class="col-lg-4">    @foreach($banner1314 as $k=>$homebanner12) 
        @foreach($homebanner12->pagesCount as $j=>$pcount)
            @if($homebanner12->positions[0]->id == 16 and $pcount->id == 1)
                  <div class="col-lg-12 text-center mt-2 mb-2">
                      <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;"  target="_blank" title="{{$homebanner12->title}}">
                        <img class="img-fluid div-shadow" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="{{$homebanner12->img_alt}}" title="{{$homebanner12->img_title}}" />
                      </a>
                  </div>            
            @endif  
        @endforeach
      @endforeach</div>

</div>
  </div>

 <!-- Categories // -->   

</div> 
@endsection