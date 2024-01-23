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

          <div class="col-12 text-center mt-2" >

            <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" class="" title="{{$homebanner12->title}}"><img class="img-fluid div-shadow mb-2" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="{{$homebanner12->img_alt}}" title="{{$homebanner12->img_title}}" /></a>

          </div>

          @else

          @endif  

          @endforeach

          @endforeach

        </div>

      </div>

      <!-- End Leader Board Banner-->

      

 <!-- Begin page content -->

    <div role="main" id="company-profile">



      <div class="container">

        <div class="text-center pt-2">

          <h1 class="main-title"><span class="font-weight-bold">Projects</span></h1>

        </div>

      </div>



      <!-- // Event Listing -->

      <div class="container pb-3">

        <div class="row">

          <div class="col-lg-12"> 

            <div class="mt-3 mb-3 text-center">

              <form>

                <div class="row">

                  <div class="col-lg-3 col-md-3 col-sm-6 col-12">

                    <select name="year" id="filter_year" class="form-control">

                    <?php

                    $starting_year  =date('Y', strtotime('-1 year'));

                      $ending_year = date('Y', strtotime('+1 year'));

                      for($starting_year; $starting_year <= $ending_year; $starting_year++) {

                         if(date('Y')==$starting_year) { //is the loop currently processing this year?

                            $selected='selected'; //if so, save the word "selected" into a variable

                         } else {  

                            $selected='' ; //otherwise, ensure the variable is empty

                         }

                         //then include the variable inside the option element

                         echo '<option  '.$selected.' value="'.$starting_year.'">'.$starting_year.'</option>';

                      }



                       ?>            

                     </select>

                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-6 col-12">

                    <div class="form-group">

                      <div class="input-group">

                        {{ Form::select('country[]', $countrylist, null, ['id'=>'filter_country','multiple'=>'multiple']) }}

                      </div>

                    </div>

                  </div>                   

                </form>



                <div class="col-lg-3 col-md-3 col-sm-6 col-12">

                  <a href="{{ route('project.archives')}}" class="btn btn-primary btn-block">Archive Projects</a>

                </div>



                <!--<div class="col-lg-3 col-md-3 col-sm-6 col-12">  -->

                <!--  <a class="btn btn-block btn-primary" href="{{url('registration')}}" role="button">-->

                <!--    <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; Latest Newsletter-->

                <!--  </a>-->

                <!--</div>-->

                </div>

                  <!-- <div class="form-group col-lg-4 mb-1">

                    {!! \App\Category::attr(['name' => 'parent_id','class'=>'form-control','placeholder'=>'Selcet One','id'=>'filter_category'])

                   ->renderAsDropdown() !!}

                  </div> -->

               

             <!--  <small class="text-muted">** Search for the Industrial Projects by Country AND Category</small> -->

            </div>          



            <div class="row"> 

              <div class="col-lg-12 mb-2">

                <h2 class="display-5 text-muted">Projects Search Results</h2>

              </div> 



              <div class="col-lg-9 mb-4">

                <div class="row" id="projects-list">  

                  @foreach ($projects as $project)

                  <div class="col-lg-4 col-md-4 col-sm-4 col-12 mb-4">

                    <div class="projects-list projects-disc div-shadow">

                      <a href="{{url('projects/'.$project->  project_url)}}"><img class="img-fluid" src="{{config('app.url')}}project/{{$project->image}}" alt="{{$project->img_alt}}"/></a>

                      <div class="overlay">

                        <div class="text text-white">   

                          <h2 class="pb-1"><a href="{{url('projects/'.$project->  project_url)}}">{{$project->company}}</a></h2>

                          <p class="display-6"><i class="fa fa-map-marker fa-lg mr-1 text-muted" aria-hidden="true"></i> {{$project->location}}</p>

                          <p class="display-6 text-warning font-weight-bold"><small>Project Cost :</small> {{$project->cost}}</p>                           

                        </div>

                      </div>

                    </div>

                  </div>

                  @endforeach                  

                </div>        

              </div>
<!-- square banners -->
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



          <!-- <div class="col-lg-3 pt-2 pb-3">

            <div class="pt-2 pb-4">

              <a class="btn btn-block btn-primary" href="{{url('registration')}}" role="button">

                <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; Latest Newsletter

              </a>

            </div> -->



            <!-- <div id="form-sticky">

              <div class="bg-light p-2 border border-secondary"> 

                <h3 class="text-center title mb-3">Post Your Project</h3>

                 @if(session('message'))

                    <div class="alert alert-{{ session('message_type') }} alert-dismissible" id="success-alert" role="alert">

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                            <span aria-hidden="true">&times;</span>

                        </button>

                              {{@session('message')}}

                          </div>

                      @endif

                      {!! Form::open(['url' => 'company-enquiry']) !!}

                     

                        <div class="form-group">

                          {{Form::text('name', null,['required'=>'required','class'=>'form-control','placeholder'=>'Name*'])}}

                          <input type="hidden" name="page" value="Projects">

                          <input type="hidden" name="slug" value="{{\Request::segment(1)}}">

                        </div>

                        <div class="form-group">

                         {{Form::text('company', null,['required'=>'required','class'=>'form-control','placeholder'=>'Company Name*'])}}

                        </div>

                        <div class="form-group">

                          <select class="form-control" name="country">

                            <option>Select Country</option>

                          @foreach($countries as $country)

                            <option value="{{$country->country_name}}">{{$country->country_name}}</option> 

                          @endforeach

                          </select>

                        </div>

                        <div class="form-group">

                         {{Form::text('email', null,['required'=>'required','class'=>'form-control','placeholder'=>'Email*'])}}

                        </div>

                        <div class="form-group">

                          {{Form::text('telephone', null,['required'=>'required','class'=>'form-control','placeholder'=>'Telephone*'])}}

                        </div>

                        <div class="form-group">

                          {{Form::textarea('message', null,['rows'=>3,'class'=>'form-control','placeholder'=>'Write Message...'])}}

                        </div>

                       <div class="form-group">

                         {!! Form::captcha() !!}

                      </div>

                      <button type="submit"  class="btn btn-primary btn-block">Submit</button>                      

                    </div>  

                    <img src="{{ config('app.url') }}/img/ssl-logo.png" alt="SSL Secure Connection" width="100" class="img-fluid pull-right mt-1 mb-1" />  

                    <div class="clearfix"></div>

                  </div>

                </div>

              </div>

              </div>

              {!! Form::close() !!}

              </div>  

            </div> -->

            <!-- <div id="form-sticky">

              <a href="{{url('events')}}"><img src="{{ config('app.url') }}/img/skyscraper-banner.jpg" alt="" class="img-fluid mt-1 mb-1" /></a>

            </div>

          </div> -->

        </div>

      </div>

      <!-- Event Listing // -->

    </div>

@endsection

@section('scripts')



<!-- <script src="{{ asset('industry/js/multiselect.js')}}"></script> -->

    





   <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />

  <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.js"></script>

  <script>

    $('.from').datepicker({

      autoclose: true,

      minViewMode: 1,

      format: 'mm/yyyy'

    })

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

  <script>

    $(document).ready(function() {



  $("#filter_year").change(function(){

      var year = $('#filter_year').val();

     

      var dataString = 'year='+year;

        $.ajax({

        type: "GET",

        url: "{{url('/productcountryfilter')}}",

        data: dataString,

        cache: false,

        success: function(data)

        {

         

          $('#filter_country').empty();

           $.each( data, function( key, value ) {                                          

                $('#filter_country').append("<option value='"+ value['country'] +"'>"+ value['country'] +"</option>");

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

url: "{{url('/projectfilter')}}",

data: dataString,

cache: false,

success: function(data)

{

   $('#projects-list').empty();

   $('#projects-list').append(data);

   

} 

});



});

      $('#example-getting-started').multiselect();

    });





  </script>



   

@endsection