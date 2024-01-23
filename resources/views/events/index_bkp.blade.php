@extends('../layouts/pages')
@section('style')
<div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-success">success</h4>
              <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
              
            </div>
            <div class="modal-body">
                <p class="">Thank You. You have successfully registered for our newsletter.</p>
            </div>
            <div class="modal-footer">            	
              <a href="{{ url('events') }}" class="btn btn-info modal-close">Close</a>
            </div>
          </div>
        </div>
      </div>
      <div id="modalSuccess" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-success">success</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              
            </div>
            <div class="modal-body">
                <p class="">Thank You. You have successfully registered for our newsletter.</p>
            </div>
            <div class="modal-footer">
            	<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>             
            </div>
          </div>
        </div>
      </div>
      <div id="myModal1" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-success">Event News letter</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              
            </div>
            <div class="modal-body">
              <ul class="error" style="list-style-type: none;"></ul>
              <form id="newsLetterForm">

                   <div class="form-group"> 
                    {{Form::text('name', null,['placeholder'=>"Enter Your Name...",'required'=>'required','class'=> 'form-control'])}}
                  </div> 

                   <div class="form-group"> 
                    {{Form::text('email', null,['placeholder'=>"Enter Your Email...",'required'=>'required','class'=> 'form-control'])}}
                  </div> 

                   <div class="form-group"> 
                    {{Form::text('company', null,['placeholder'=>"Enter Your Company name...",'required'=>'required','class'=> 'form-control'])}}
                  </div> 

                   <!-- <div class="form-group"> 
                    {{Form::text('phone', null,['placeholder'=>"Enter Your Phone Number...",'required'=>'required','class'=> 'form-control'])}}
                  </div> --> 

                   <div class="form-group"> 
                    <select id="select2" name="country" class="form-control"> 
                      <option value="">Select Your Country</option> 
                     @foreach($countries as $country)
                      <option value="{{$country->country_name}}"> {{$country->country_name}}</option> 
                     @endforeach
                    </select> 
                  </div> 

                   <!-- <div class="form-group"> 
                    {{Form::textarea('message', null,['placeholder'=>'Your Message ...','rows'=>5,'class'=> 'form-control'])}}
                  </div>  -->

                  <div class="mt-4"></div> 

                  <div class="text-left form-group mb-0 text-black" > 
                    <label class="checkbox-inline "> 
                    <input type="checkbox" name="newsletter" id="newsletter" checked> &nbsp;<small>Plant Automation Technology e-Newsletters</small>
                    </label> 
                  </div> 
                  <div class="text-left form-group mb-0 text-black" > 
                    <label class="checkbox-inline "> 
                    <input type="checkbox" name="agree" id="agree" checked> &nbsp;<small>I have read and accept the Terms &amp; Conditions &amp; Disclaimer.</small>
                    </label> 
                  </div> 
                  <div class="text-left form-group mb-0 text-black" > 
                    <label class="checkbox-inline "> 
                    <input type="checkbox" name="promotions" id="promotions" checked> &nbsp;<small>You will receive the relevant promotions, products &amp; services.</small>
                    </label> 
                  </div> 
                  <div class="text-left form-group">                  
                   {!! Form::captcha() !!}
                  </div> 
                
                
            {{Form::close()}}
              <div class="submit-row"> 
                    <button type="submit" class="btn btn-block submit-form submit-btn">Submit</button> 
                  </div> 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
   
 <style type="text/css">
  
 	.event-bg {
    background-image: url("{{config('app.url')}}img/events/event-list/event-listing-bg.jpg");
	}
  #ui-datepicker-div{z-index: 99999999999999999;}
 </style>
@endsection
@section('content')

 <!-- Begin page content -->
    <div role="main" id="company-profile">

      <div class="container">

        <div class="text-center pt-2"> 
         @if(count($banner1516)==1)
            
                <?php $count=12 ?>             
              @else
                <?php $count=6 ?>
              @endif
              @foreach($banner1516 as $k=>$homebanner12)           
                 
              @if($homebanner12->positions[0]->id == 14)
                <div class="col-lg-<?php echo $count ?> text-center mt-4 mb-4">
                  <a href="{{$homebanner12->url}}" target="_blank" title="{{$homebanner12->title}}"><img class="img-fluid div-shadow" src="<?php echo config('app.url'); ?>slider/<?php echo $homebanner12->image;?>" alt="" /></a>
                </div>            
                @else
                
                @endif  
           
              @endforeach 
          <h2 class="main-title"><span class="font-weight-bold">TRENDING EVENTS</span></h2>
           
            </div>
         </div>
              <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title text-success">Events Post</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      
                    </div>
                    <div class="modal-body">
                        {{@session('message')}}
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
 
      <div class="container">
        <div class="row">
          <div class="col-lg-9 pt-3">
            <form>
              <div class="form-row">
                <div class="col-md-6 col-lg-3 mt-1">
                  <div class="input-group">
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
                 </div>
                <div class="col-md-6 col-lg-3 mt-1">
                  <div class="input-group">
                   {{ Form::selectMonth('month[]',null,['class'=>'form-control','multiple'=>'multiple','id'=>'filter_month']) }}
                  </div>
                </div>

                <div class="col-md-6 col-lg-3 mt-1">
                  <div class="form-group">
                    <div class="input-group">
                      {{ Form::select('country[]', $countrylist, null, ['id'=>'filter_country','multiple'=>'multiple']) }}
                    </div>
                  </div>
                </div>

               <!--  <div class="form-group col-lg-4">
                   {!! \App\EventCategory::attr(['name' => 'parent_id','class'=>'form-control','placeholder'=>'Selcet One','id'=>'filter_category'])
                   ->renderAsDropdown() !!}
                </div> -->
                 <div class="col-md-6 col-lg-3 mt-1">
            <a href="{{ route('event.archives')}}" class="btn btn-primary btn-block">Archive Events</a>  
            </div>
              </div>
            </form>
           
            
          </div>

          <div class="col-lg-3 pt-3">
             <a href="{{url('events-newsletters')}}"><button type="button" class="btn btn-block btn-primary"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;Events Newsletter
              </button></a>
             <!--   <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#myModal1"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;Events Newsletter</button> -->
          </div>
        </div>    
      </div>

        <!-- // Event Listing -->
      <div class="container pt-1 pb-3">
        <div class="row">

          <div class="col-lg-9" id="event-lists">
               @foreach($eventprofiles as $cp)
              <div class="col-lg-12 div-shadow mb-4">
                <div class="row">
                  <div class="col-lg-4 pl-0">
                    <img class="img-fluid p-3" src="{{ config('app.url') }}event/{{$cp->big_image}}" alt="{{$cp->img_alt}}"/>
                  </div>
                  <div class="col-lg-8">
                    <h2 class="display-6 mt-2">
                      @if($cp->event_url)
                      <a href="{{url('events/'.$cp->event_url)}}"><strong>{{$cp->name}}</strong></a>
                      @else
                      <a href="{{url($cp->web_link)}}" target="_blank"><strong>{{$cp->name}}</strong></a>
                      @endif
                    </h2>
                    <p class="mb-2">{{$cp->venue}}</p>
                    <p class="mb-2">For more information, contact:{{$cp->organiser }}</p>
                    <p class="mb-2">{{$cp->phone}}</p>
                    <p class="mb-2 text-lowercase">{{$cp->email}}</p>
                    <p class="mb-2 text-lowercase"><a href="{{$cp->web_link}}" target="_blank">{{$cp->web_link}}</a></p>

                    <div class="row pt-1">
                      <div class="col-lg-3 text-center">
                        <p class="mb-1"><strong><i class="fa mr-2 fa-calendar text-primary" aria-hidden="true"></i> Start Date</strong></p>
                        <p class="mb-2">{!! date('j F Y', strtotime($cp->start_date)) !!}</p>
                      </div>
                      <div class="col-lg-3 text-center">
                        <p class="mb-1"><strong><i class="fa mr-2 fa-calendar text-primary" aria-hidden="true"></i> End Date</strong></p>
                        <p class="mb-2">{!! date('j F Y', strtotime($cp->end_date))!!}</p>
                      </div>
                      <div class="col-lg-3 text-center">
                        <p class="mb-1"><strong><i class="fa mr-2 fa-map-marker text-primary" aria-hidden="true"></i> Country</strong></p>
                        <p class="mb-2">{{$cp->country}}</p>
                      </div>
                      <div class="col-lg-3 text-center pt-2 pb-2">
                        @if($cp->event_url)
                        <a class="btn btn-sm btn-primary btn-radius" role="button" href="{{url('events/'.$cp->event_url)}}">View More</a>
                        @else
                        <a class="btn btn-sm btn-primary btn-radius" role="button" href="{{url($cp->web_link)}}" target="_blank">View More</a>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
              </div>
               @endforeach 
          </div>
     
          <!--  Event Listing form // -->
          <div class="col-lg-3 pb-3">            
            <div id="">
              <div class="bg-light p-2 border border-secondary"> 
                <!-- <h3 class="text-center title mb-3">Post Your Event</h3> -->
                <h3 class="text-center title mb-3 pb-2 pt-1 bg-primary text-white">Post Your Event</h3>
                 
			               {!! Form::Open(array('url' => 'postevent-success', 'method' => 'post'))!!}
                     {{ csrf_field() }}
			                  <div class="form-group">
			                    {{Form::text('event_name', null,['required'=>'required','class'=>'form-control','placeholder'=>'Event Name*'])}}
			                    <input type="hidden" name="page" value="Events">
                          <input type="hidden" name="url" value="<?php echo url()->current();?>">
			                    <input type="hidden" name="slug" value="{{\Request::segment(2)}}">
                          @if ($errors->has('event_name'))
                            <div class="error text-danger">{{ $errors->first('event_name') }}</div>
                          @endif
			                  </div>
                        <div class="form-group">
                          {{Form::text('event_venue',null,['required'=>'required','class'=>'form-control','placeholder'=>'Event Venue*'])}}
                          @if ($errors->has('event_venue'))
                            <div class="error text-danger">{{ $errors->first('event_venue') }}</div>
                          @endif
                        </div>
                        <div class="form-gropup">
                          {{Form::textarea('event_address',null,['rows'=>3,'required'=>'required',
                          'class'=>'form-control mb-3','placeholder'=>'Event Address*'])}}
                          @if ($errors->has('event_address'))
                            <div class="error text-danger">{{ $errors->first('event_address') }}</div>
                          @endif
                        </div>
                        <div class="form-group">
                          {{Form::text('start_date',null,['id'=>'datepick','class'=>'form-control','placeholder'=>'MM/DD/YYYY'])}}
                          @if ($errors->has('start_date'))
                            <div class="error text-danger">{{ $errors->first('start_date') }}</div>
                          @endif
                        </div>
                        <div class="form-group">
                          {{Form::text('end_date',null,['id'=>'datepick1','class'=>'form-control','placeholder'=>'MM/DD/YYYY'])}}
                        @if ($errors->has('end_date'))
                            <div class="error text-danger">{{ $errors->first('end_date') }}</div>
                          @endif
                        </div>
			                  <div class="form-group">
			                   {{Form::text('organiser', null,['required'=>'required','class'=>'form-control','placeholder'=>'Event Organizer*'])}}
                         @if ($errors->has('organiser'))
                            <div class="error text-danger">{{ $errors->first('organiser') }}</div>
                          @endif
			                  </div>
                        <div class="form-group">
                         {{Form::text('email', null,['class'=>'form-control','placeholder'=>'Email'])}}
                         @if ($errors->has('email'))
                            <div class="error text-danger">{{ $errors->first('email') }}</div>
                          @endif
                        </div>
                        <div class="form-group">
                          {{Form::text('web_link', null,['required'=>'required','class'=>'form-control','placeholder'=>'Event Weblink*'])}}
                          @if ($errors->has('web_link'))
                            <div class="error text-danger">{{ $errors->first('web_link') }}</div>
                          @endif
                        </div>
			                  <div class="form-group">
			                    <select class="form-control" name="country">
			                      <option>Select Country</option>
			                    @foreach($countries as $country)
			                      <option value="{{$country->country_name}}">{{$country->country_name}}</option> 
			                    @endforeach
			                    </select>
                          @if ($errors->has('country'))
                            <div class="error text-danger">{{ $errors->first('country') }}</div>
                          @endif
			                  </div>
			                  
			                  
			                 <div class="form-group">
			                   {!! Form::captcha() !!}
                         @if ($errors->has('g-recaptcha-response'))
                            <div class="error text-danger">{{ $errors->first('g-recaptcha-response') }}</div>
                          @endif
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
            </div>
          </div>
        </div>
      </div>
      <!-- Event Listing // -->
    </div>
  @endsection
 
  @section('scripts')
  
 @if(session('message'))
    
          <script type="text/javascript">
          $(document).ready(function(){ 
          	 var url = window.location.href.toString().split(window.location.host)[1];
            window.history.pushState("object or string", "Title",url+"/postevent-success");
              $('#modalSuccess').modal('show');
          });
         </script>
      @endif


    <!-- // Form Sticky  -->
    <!-- <script>      
      $(window).scroll(function() {
        var y = $(window).scrollTop();
        if (y > 0) {
          $("#form-sticky").addClass('sticky-top').addClass('pt-180');
        } else {
          $("#form-sticky").removeClass('sticky-top').removeClass('pt-180');
        }
      });
    </script> -->

  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.js"></script>
  <script>
    $('#datepick').datepicker({
      autoclose: true,
      minViewMode: 1,
       changeMonth: true, 
      changeYear: true, 
      format: 'mm/yyyy'
    })
    $('#datepick1').datepicker({
      autoclose: true,
      minViewMode: 1,
       changeMonth: true, 
      changeYear: true, 
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
      $('#filter_month').multiselect({
         nonSelectedText: 'By Month'
      });
      $('#filter_year').multiselect({
        nonSelectedText: 'By Year'
      });

    });


  </script>

   <script type="text/javascript">
$(document).ready(function()
{
  var months = [
    'January', 'February', 'March', 'April', 'May',
    'June', 'July', 'August', 'September',
    'October', 'November', 'December'
    ];
 $("#filter_year").change(function(){
      var year = $('#filter_year').val();
      var dataString = 'year='+year;
        $.ajax({
        type: "GET",
        url: "{{url('/eventdatefilter')}}",
        data: dataString,
        cache: false,
        success: function(data)
        {
           $('#filter_month').empty();
          $('#filter_country').empty();
           $.each( data, function( key, value ) {
                $.each( value, function( keyl, val ) {
                    
                    if(val.month != null){
                      $('#filter_month').append('<option value='+val.month+'>'+ months[val.month - 1] || '' +'</option>');
                    }
                    if(val.country != null){
                      $('#filter_country').append('<option value='+val.country+'>'+ val.country +'</option>');
                    }
                });

                // $('#filter_month').append('<option value='+value['month']+'>'+ monthNumToName(value['month']) +'</option>');
                // $('#filter_month').append('<option value='+data['month_list']['month']+'>'+ months[data['mont_list']['month'] - 1] || '' +'</option>');
              // $(".error").append('<li class="text-danger">'+value+'</li>');             
          });
              $('#filter_month').multiselect('destroy');          
              $('#filter_month').multiselect({
                  nonSelectedText: 'By Month'
              });
              $('#filter_country').multiselect('destroy');          
              $('#filter_country').multiselect({
                  nonSelectedText: 'By Country'
              });
        }
        });
     
      });
  $("#filter_month").change(function(){
      var year = $('#filter_year').val();
      var month=$('#filter_month').val();
      var dataString = 'month='+month+'&year='+year;
        $.ajax({
        type: "GET",
        url: "{{url('/eventcountryfilter')}}",
        data: dataString,
        cache: false,
        success: function(data)
        {
         
          $('#filter_country').empty();
           $.each( data, function( key, value ) {  
            var country =  value['country'];            
            var tag = "<option value='"+ country +"'>"+ country +"</option>";
                // $('#filter_country').append('<option value='+ country +'>'+ country +'</option>');
                $('#filter_country').append(tag);
            });
             
              $('#filter_country').multiselect('destroy');          
              $('#filter_country').multiselect({
                  nonSelectedText: 'By Country'
              });
        }
        });
     
      });

$("#filter_month, #filter_country, #filter_year").change(function()
{
var month=$('#filter_month').val();

var country =  $('#filter_country').val();
var year = $('#filter_year').val();
var dataString = 'month='+month+'&country='+country+'&year='+year;


$.ajax
({
type: "GET",
url: "{{url('/eventfilter')}}",
data: dataString,
cache: false,
success: function(data)
{
   $('#event-lists').empty();
   $('#event-lists').append(data);
   return data; 
}
});

});

});
</script>
<script >
  function Multiselect(select, options) {
  Multiselect.prototype = {
  defaults: {
    nonSelectedText: 'Select Month'
  }
}
}
</script>

<script type="text/javascript">
   $('.submit-btn').on('click',function(e) {  
     
            // if (grecaptcha.getResponse() == ""){

            //     $('#basic_getlist').find('.verifi').html("We can't proceed request with out captcha verification!");
            //     return false;
            // }
  
       var dataString = $('#newsLetterForm').serialize();

      
       $.ajax({
            type: 'POST',
            url: "{{url('newsletter-signup-success-ajax')}}",
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: dataString,       
            success:function(data){
              window.history.pushState("object or string", "Title", "events/news-letter/success");                                         
              $('#myModal1').modal('hide');                          
                $(".error").empty();
              $('#myModal').modal('show');            
               $('form')[0].reset();
          
            },
              error: function (data) {
                $(".error").empty();
                  $.each( data.responseJSON.errors, function( key, value ) {
                      $(".error").append('<li class="text-danger">'+value+'</li>');
                    });
                }
        });
    });
    $('body').on('click','.close,.modal-close',function(){

      // $('.modal-backdrop').remove();
   });
</script>
@endsection