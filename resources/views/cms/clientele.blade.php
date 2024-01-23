@extends('../layouts/pages')

@section('style')

  <style type="text/css">

   .country_flag{

    vertical-align: bottom;

    position: relative;

    right: 24px;    

    top: 0px;

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
 <!-- // Profile Body -->



    <div role="main" class="bg-white">

      <!-- // CLIENTELE -->

      <div class="container">

        <div class="text-center pt-2">

          <h1 class="main-title"><span><a href="{{url('clientele')}}" class="text-blue">CLIENTELE</a></span></h1>

        </div>

      </div>



      <div class="container">

        <div class="row">

           @foreach($clientele as $comp_logo)

               @php

                  $clitlie_url = App\CompanyProfile::where('company_id',$comp_logo->id)->pluck('url');

                  

                @endphp

                @foreach($clitlie_url as $url)

            <div class="col-lg-3 col-6 text-center mb-4">

              <a href="{{url('suppliers/'.$url)}}">

                <img src="<?php echo config('app.url'); ?>suppliers/{{ str_slug($comp_logo->comp_name) }}/<?php echo $comp_logo->comp_logo;?>" class="div-shadow p-2 img-fluid">

                <img class="country_flag" src="{{ config('app.url')}}img/flags/{{ str_replace(' ', '_', ucfirst($comp_logo->country)) }}.png" alt="{{ $comp_logo->country }}">

              </a>  

            </div>

            @endforeach

            @endforeach



        </div>

      </div>

      <!-- CLIENTELE // -->        

    </div>

      <!-- Profile Body // -->

    </div>

@endsection

@section('scripts')   

@endsection