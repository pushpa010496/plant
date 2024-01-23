@extends('../layouts/pages')
@section('style')
<style type="text/css">
.help-block strong{
  color: #ff6666;
  font-weight: 100;
  font-size: 14px;
}
</style>


<?php use App\Category; ?>
@endsection
@section('content')
<!-- Begin page content -->
<div role="main" id="company-profile">

  <div class="container">
    <div class="text-center pt-2">
      <h2 class="main-title"><span class="font-weight-bold">News</span></h2>
    </div>      
  </div>

  <!-- // Event Listing -->
  <div class="container pb-3">
    <div class="row">
      <div class="col-lg-12"> 
        <div class="mt-3 mb-3 text-center">

          <div class="row">

            <!-- <div class="col-lg-2"></div> -->
            <div class="col-lg-4">
              <h2 class="display-5 text-left pb-2">
                <span class="font-weight-bold">PR NEWSWIRE</span> 
                <a class="pull-right display-7" href="{{url('viewprnewswire')}}">More...</a> 
              </h2>
             
              <div class="row">
                <div class="col-lg-12 mb-3">
                  @php $count= 0; @endphp
                  @foreach($prnews as $k=> $lnews)
                  @if($count==0)
                  <div class="div-shadow p-3 mb-3">
                    <div class="row">
                      <div class="col-lg-12">
                        <h2 class="display-6 font-weight-bold"><a href="{{  route('news-view',$lnews->news_url) }}" class="text-blue"><a href="{{  url('prnews/id',$lnews->id) }}" class="text-blue">{{substr($lnews->news_head,0,30) }}</a>...</h2>
                      </div>
                      <div class="col-lg-12">
                        <p class="mb-0 text-muted">{{ date('j F Y', strtotime($lnews->story_date)) }}</p>
                      </div>
                    </div> 
                    <hr>
                    <p class="mb-1 text-justify">{{$lnews->news_head}}</p>
                    <small><a href="{{  url('prnews/id',$lnews->id) }}" class="text-blue">Read more...</a></small>
                  </div>
                  @else
                  <h3 class="display-7 text-left font-weight-bold pb-2"> <i class="fa fa-angle-double-right mr-2" aria-hidden="true"></i> <a href="{{  route('news-view',$lnews->news_url) }}" class="text-blue">
                    <a href="{{  url('prnews/id',$lnews->id) }}" class="text-blue">{{substr($lnews->news_head,0,30) }}</a>
                  </h3>
                  @endif 
                  @php $count++; @endphp
                  @endforeach 
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <h2 class="display-5 text-left pb-2">
                <span class="font-weight-bold">BUSINESS WIRE </span> 
                <a class="pull-right display-7" href="{{url('viewbussinesswire')}}">More...</a> 
              </h2>

              <div class="row">
                <div class="col-lg-12 mb-3">
                 @php $count= 0; @endphp
              @foreach($businesnews as $k=> $lnews)
              @if($count==0)
                  <div class="div-shadow p-3 mb-3">
                    <div class="row">
                      <div class="col-lg-12">
                        <h2 class="display-6 font-weight-bold"><a href="{{  route('news-view',$lnews->news_url) }}" class="text-blue"><a href="{{  url('bwnews/id',$lnews->id) }}" class="text-blue">{{substr($lnews->news_head,0,30) }}</a>...</h2>
                      </div>
                      <div class="col-lg-12">
                        <p class="mb-0 text-muted">{{ date('j F Y', strtotime($lnews->created_at)) }}</p>
                      </div>
                    </div> 
                    <hr>
                    <p class="mb-1 text-justify">{{$lnews->news_head}}</p>
                    <small><a href="{{  url('bwnews/id',$lnews->id) }}" class="text-blue">Read more...</a></small>
                  </div>
                  @else
                  <h3 class="display-7 text-left font-weight-bold pb-2"> <i class="fa fa-angle-double-right mr-2" aria-hidden="true"></i> <a href="{{  route('news-view',$lnews->news_url) }}" class="text-blue">
                    <a href="{{  url('bwnews/id',$lnews->id) }}" class="text-blue">{{substr($lnews->news_head,0,30) }}</a>
                  </h3>
                  @endif 
                  @php $count++; @endphp
                  @endforeach 
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <h2 class="display-5 text-left pb-2">
                <span class="font-weight-bold">GLOBE NEWSWIRE</span> 
                <a class="pull-right display-7" href="{{url('viewglobalnewswire')}}">More...</a> 
              </h2>

              <div class="row">
                <div class="col-lg-12 mb-3">
                 @php $count= 0; @endphp
              @foreach($globalnews as $k=> $lnews)
              
              @if($count==0)
                  <div class="div-shadow p-3 mb-3">
                    <div class="row">
                      <div class="col-lg-12">
                        <h2 class="display-6 font-weight-bold"><a href="{{  route('news-view',$lnews->news_url) }}" class="text-blue"><a href="{{  url('gwnews/id',$lnews->id) }}" class="text-blue">{{substr($lnews->news_head,0,30) }}</a>...</h2>
                      </div>
                      <div class="col-lg-12">
                        <p class="mb-0 text-muted">{{ date('j F Y', strtotime($lnews->created_at)) }}</p>
                      </div>
                    </div> 
                    <hr>
                    <p class="mb-1 text-justify">{{$lnews->news_head}}</p>
                    <small><a href="{{  url('gwnews/id',$lnews->id) }}" class="text-blue">Read more...</a></small>
                  </div>
                  @else
                  <h3 class="display-7 text-left font-weight-bold pb-2"> <i class="fa fa-angle-double-right mr-2" aria-hidden="true"></i> <a href="{{  route('news-view',$lnews->news_url) }}" class="text-blue">
                    <a href="{{  url('gwnews/id',$lnews->id) }}" class="text-blue">{{substr($lnews->news_head,0,30) }}</a>
                  </h3>
                  @endif 
                  @php $count++; @endphp
                  @endforeach 
                </div>
              </div>
            </div>


          </div>
        </div>


                 <!--  <div class="form-group col-lg-4 mb-1">
                    {!! \App\Category::attr(['name' => 'parent_id','class'=>'form-control','placeholder'=>'Selcet One','id'=>'filter_category'])
                   ->renderAsDropdown() !!}
                 </div> -->


                 <!--  <small class="text-muted">** Search for the Tenders by Country AND Industry Category</small> -->
               </div>          


             </div>


           </div>
         </div>
         <!-- Event Listing // -->
       </div>



       @endsection
       @section('scripts')


       <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
       <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
       <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
       <!-- <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.js"></script>


       @if ($errors->any())
       <script type="text/javascript">
        $('#loginForm').modal('show');
      </script>
      @endif

      <script>
        $('.from').datepicker({
          autoclose: true,
          minViewMode: 1,
          format: 'mm/yyyy'
        })
      </script>
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

    <!-- <script src="assets/js/jquery-1.11.1.min.js"></script>  -->
    <!-- <script src="{{ asset('industry/js/multiselect.js')}}"></script> -->
    <script>
      $(document).ready(function() {

       $('#filter_country').multiselect({
        nonSelectedText: 'By Country'
      });

       $('#filter_year').multiselect({
        nonSelectedText: 'By Year'
      });
     });





   </script>
   <script type="text/javascript">
    $(document).ready(function()
    {
     $("#filter_year").change(function(){
      var year = $('#filter_year').val();

      var dataString = 'year='+year;
      $.ajax({
        type: "GET",
        url: "{{url('/tendercountryfilter')}}",
        data: dataString,
        cache: false,
        success: function(data)
        {

          $('#filter_country').empty();
          $.each( data, function( key, value ) {                                          
            $('#filter_country').append("<option value='"+ value['id'] +"'>"+ value['country_name'] +"</option>");
          });             
          $('#filter_country').multiselect('destroy');          
          $('#filter_country').multiselect({
            nonSelectedText: 'By Country'
          });
        }
      });

    });
     $("#filter_year, #filter_country, #filter_category").change(function()
     {
      var year=$('#filter_year').val();

      var country =  $('#filter_country').val();
      var category = $('#filter_category').val();
      var dataString = 'year='+year+'&country='+country+'&category='+category;
      console.log(year);
      console.log(dataString);

      $.ajax
      ({
        type: "GET",
        url: "{{url('/tenderfilter')}}",
        data: dataString,
        cache: false,
        success: function(data)
        {
         $('#tenders-list').empty();
         $('#tenders-list').append(data);

       } 
     });

    });

   });
 </script>

 @endsection