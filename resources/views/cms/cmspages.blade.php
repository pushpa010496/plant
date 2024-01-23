@extends('../layouts/pages')

@section('style')



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

       @foreach($cmspage as $page)

       <h1 class="main-title font-weight-bold"><span>{{$page->title}}</span></h1>

       @endforeach          

    </div>

 </div>

 <div class="container">

    <div class="row">

       @foreach($cmspage as $page)

       <div class="col-lg-12 col-12 mb-4">

        {!!$page->description!!}

      </div>

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