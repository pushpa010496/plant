@extends('../layouts/pages')
@section('style')
<style>
  .card-header h2 {font-size: 12px !important;} /* For Main Nav */
  .filter > ul{margin-left: -30px;}
  .filter > ul li{list-style: none;float:left;margin-right: 7px;color: #92278f;margin-bottom: 10px; width: 20px;height: 20px;border:1px solid #92278f; text-align: center;vertical-align: middle;}
  .filter > ul li a{color: #92278f;font-size: 14px;background-color: transparent;display: block;line-height: 18px;}
  .filter > ul li a:hover{color: #fff;}
  .filter > ul li:hover{ background-color: rgba(145, 37, 142, 0.8);color: #fff; }
  .filter > ul li a:active {background-color: #92278f;color: #fff;}
  .breadcrumb{background-color: transparent;padding: 5px 0;margin-bottom: 5px;font-size: 14px;} 
  .breadcrumb-item + .breadcrumb-item::before {
    display: inline-block;
    padding-right: .5rem;
    padding-left: .5rem;
    color: #6c757d;
    content: "\f101";
    font-family: fontawesome;
  }
  .suppliers a{color: #333;}
  .suppliers a:hover{color: #91258E;}
  .pagination{border-radius: 0px;}
  .page-link {    
    color: #222;
    background-color: #e4e4e4;
    border: 1px solid #d5d5d5;
    margin-right: 7px;
  }
  .page-link:hover {
    color: #fff;
    text-decoration: none;
    background-color: rgba(145, 37, 142, 0.8);
    border-color: #91258E;
  }
  .page-item.active .page-link {
    z-index: 1;
    color: #fff;
    background-color: #91258E;
    border-color: #91258E;
  }
  .page-item:last-child .page-link, .page-item:first-child .page-link{border-radius: 0px;}
  .suppliers h3{
    width: 100%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
  .filter .active{
    background-color: #92278f;
    color:#ffffff;
  }
  .carousel-indicators {
    right: 10px;
    left: auto;
    margin-right: 7%;
    bottom: 0px;
  }
  .carousel-indicators li{
    height:8px;
    width:8px;
    background: #e2e2e2;
    border-radius: 50%;
  }
  .carousel-indicators .active{
    background: transparent;
    border:1px solid #e2e2e2;
  }
.page-link {
    color: #222;
    background-color: #e4e4e4;
    border: 1px solid #d5d5d5;
    margin-right: -20px !important;
}
</style>
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
          <div class="col-12 text-center " >
            <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" class="" title="{{$homebanner12->title}}"><img class="img-fluid div-shadow mb-2" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="{{$homebanner12->img_alt}}" title="{{$homebanner12->img_title}}" /></a>
          </div>
          @else
          @endif  
          @endforeach
          @endforeach
        </div>
      </div>
      <!-- End Leader Board Banner-->
      <!-- // Slider --> 
      <!-- <div class="container-fluid">
        <div class="row">
          <div id="slider" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                @if(!empty($sliders))
                 @for($i=0; $i< count($sliders);$i++)
                 <li data-target="#slider" data-slide-to="{{ $i }}" class="{{ $i == 0 ?'active':'' }}"></li>
                 @endfor
              </ol>
              <div class="carousel-inner shadow border-top">                
                @foreach($sliders as $key => $homesliders)
                <div class="carousel-item  {{ $key == 0 ?'active':'' }}">
                  <a href="{{$homesliders->url}}" target="_blank" title="{{$homesliders->title}}">
                    <img class="img-fluid" src="{{ config('app.url') }}slider/{{$homesliders->image}}" alt="{{$homesliders->title}}" />
                  </a>
                </div>                             
                @endforeach
              </div>
              @endif
          </div>
        </div>
      </div> -->
      <!-- Slider // --> 
      <div class="p-2"></div>
 <!-- Begin page content -->
    <div role="main {{ @$page_all}}">
      <div class="pt-2 pb-2 d-none d-sm-block"></div>
      <!-- // Event Listing -->
      <div class="container pb-3">
        <div class="row">        
           @include('company.filter')          
          <div class="col-lg-3 pt-5">
            <!--<div class="bg-gray p-2 border border-secondary">-->
            <div class=" p-2 border border-secondary">
              <div class="text-center">
                <!--<h3 class="adv-title">Advertisements</h3>-->
              </div>
              <!-- @foreach($banner1314 as $k=>$homebanner12)   
                    @foreach($homebanner12->pagesCount as $j=>$pcount)
                      @if($homebanner12->positions[0]->id == 16 and $pcount->id == $page)
                      <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" class="mb-3" title="{{$homebanner12->title}}">
                        <img class="img-fluid div-shadow mb-3" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="{{$homebanner12->img_alt}}"  title="{{$homebanner12->img_title}}" />
                      </a>
                      @else
                    @endif  
                    @endforeach
                  @endforeach  -->
              @foreach($banner1314 as $k=>$homebanner12)   
                @foreach($homebanner12->pagesCount as $j=>$pcount)
                    @if($homebanner12->positions[0]->id == 16 and $pcount->id == $page_all)
                      <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" class="mb-3" title="{{$homebanner12->title}}">
                        <img class="img-fluid div-shadow mb-3" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="{{$homebanner12->img_alt}}"  title="{{$homebanner12->img_title}}"/>
                      </a>
                      @else
                    @endif  
                @endforeach
              @endforeach 
              <div class="mt-3 text-center">
              <video controls="" ttile="steel"  width="230" height="130" style="margin-bottom:5px;" allowfullscreen>
                          <source src="https://industry.plantautomation-technology.com/suppliers/moxa-india-industrial-networking-pvt-ltd/video/Moxa.mp4" type="video/mp4">
                      
                    </video>
                    <video controls="" ttile="steel"  width="230" height="130" style="margin-bottom:5px;" allowfullscreen>
                          <source src="https://industry.plantautomation-technology.com/suppliers/sms-tork/video/WIN-Eurasia-2023.mp4" type="video/mp4">
                      
                    </video>
                    <!-- <video controls="" ttile="steel"  width="230" height="130" allowfullscreen>
                          <source src="https://industry.plantautomation-technology.com/suppliers/mpl-ag/video/MPL-AGSwitzerland-Company.mp4" type="video/mp4">
                </video>
                <video controls="" ttile="steel"  width="230" height="130" allowfullscreen>
                          <source src="https://industry.plantautomation-technology.com/suppliers/scaglia-indeva-spa/video/indeva-manipulators.mp4" type="video/mp4">
                </video> -->


                    </div>

            </div>
          </div>
          </div>
        </div>
      </div>
      <!-- Event Listing // -->
    </div>
    

    <div id="myModal2" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-success">{!!session('message_type')!!}</h4>
              <button type="button" class="close" onClick="location.href=location.href">&times;</button>
            </div>
            <div class="modal-body">
                <p class="">{!!session('message')!!}</p>
                <p>Sincerely Planautomation Technology</p>
            <p class="mb-0">Regards,</p>
            <p class="mb-0">Client Success Team (CRM),</p>
            <img src="{{ config('app.url')}}img/main-logo.png" width="150px">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" onClick="location.href=location.href">Close</button>
              {{-- <a href="{{Request::url()}}" class="btn btn-info text-right">Close</a> --}}
            </div>
          </div>
        </div>
      </div>
@endsection
@section('scripts')
   @if(session('message_type') == 'success')    
<script type="text/javascript">         
  $('#myModal2').modal('show');
</script>
@endif
@endsection