@extends('../layouts/pages')

@section('style')

 <style type="text/css">

  .event-bg {

    background-image: url("{{config('app.url')}}img/events/event-list/event-listing-bg.jpg");

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
 <!-- Begin page content -->

    <div role="main" id="company-profile">



      <div class="container">

        <div class="text-center pt-2">

          <h1 class="main-title"><span>Partners</span></h1>

        </div>

      </div>



    <!--  <div class="container-fluid pl-0 pr-0">

        <div class="event-bg">

          <h1 class="text-center text-uppercase">Partners</h1>

        </div>

      </div> -->



      <!-- // Event Listing -->

      <div class="container pt-2 pb-3">

        <div class="row">          

               @foreach ($partners as $partner)

               

                  <div class="col-lg-2 col-6 mb-4">

                    <div class="partner-list partner-disc div-shadow">

                     @if($partner->url_active==1)

                        <a href="{{$partner->partner_url}}" target="_blank"> 

                          <img class="img-fluid" src="{{config('app.url')}}partner/{{$partner->image}}" alt="{{$partner->img_alt}}"/>

                          </a>   

                      @else

                       <img class="img-fluid" src="{{config('app.url')}}partner/{{$partner->image}}" alt="{{$partner->img_alt}}"/>

                     @endif 

                    </div>                  

                   </div> 

                  @endforeach                  

                 

        </div>

      </div>

      <!-- Event Listing // -->

    </div>

  </div>

@endsection

@section('scripts')

<script>

      // Form Sticky

      $(window).scroll(function() {

        var y = $(window).scrollTop();

        if (y > 0) {

          $("#form-sticky").addClass('sticky-top').addClass('pt-180');

        } else {

          $("#form-sticky").removeClass('sticky-top').removeClass('pt-180');

        }

      });

    </script>



  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script>

    $('.from').datepicker({

      autoclose: true,

      minViewMode: 1,

      format: 'mm/yyyy'

    })

  </script>

  

  <!-- <script src="assets/js/jquery-1.11.1.min.js"></script>  -->

  <script src="{{ asset('industry/js/multiselect.js')}}"></script>

  <script>

    $(document).ready(function() {

      $('#example-getting-started').multiselect();

    });

  </script>



   

@endsection