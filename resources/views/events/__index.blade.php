@extends('../layouts/pages')
@section('style')
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
          <h2 class="main-title"><span class="font-weight-bold">TRENDING EVENTS</span></h2>
        </div>
      </div>
      
      <div class="container">
        <div class="row">
          <div class="col-lg-9 pt-3">
            <form>
              <div class="form-row">
                <div class="col-lg-4">
                  <div class="input-group">
                <select name="year" id="filter_year" class="form-control">
                  <option value="" multiple="multiple">Select Year</option>
                    <?php
                    $starting_year  =date('Y', strtotime('-1 year'));
                      $ending_year = date('Y', strtotime('+1 year'));
                      for($starting_year; $starting_year <= $ending_year; $starting_year++) {
                         /*if(date('Y')==$starting_year) { //is the loop currently processing this year?
                            $selected='selected'; //if so, save the word "selected" into a variable
                         } else {  
                            $selected='' ; //otherwise, ensure the variable is empty
                         }*/
                         //then include the variable inside the option element
                         echo '<option   value="'.$starting_year.'">'.$starting_year.'</option>';
                      }

                       ?>            
                     </select>
                   </div>
                 </div>
                <div class="col-lg-4">
                  <div class="input-group">
                    {{ Form::selectMonth('month[]',null,['class'=>'form-control','multiple'=>'multiple','placeholder'=>'Select Month','id'=>'filter_month']) }}
                  </div>
                </div>

                <div class="col-lg-4">
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
              </div>
            </form>
          </div>

          <div class="col-lg-3 pt-3">
             <a href="{{url('newsletter-signup')}}"><button type="button" class="btn btn-block btn-primary"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;Event Newsletter
              </button></a>
          </div>
        </div>    
      </div>

        <!-- // Event Listing -->
      <div class="container pt-3 pb-3">
        <div class="row">
          <div class="col-lg-9">  
            <div class="row" id="event-list">  
                @foreach($eventprofiles as $cp)              
                <div class="col-lg-4 mb-4">
                <div class="event-list event-disc div-shadow">
                  
                  <img class="img-fluid" src="{{ config('app.url') }}event/{{$cp->big_image}}" alt="{{$cp->img_alt}}"/> 
                  <h2>
                    @if($cp->event_url)
                    <a href="{{url('events/'.$cp->event_url)}}">{{$cp->name}}</a>
                    @else
                    <a href="{{url($cp->web_link)}}" target="_blank">{{$cp->name}}</a>
                    @endif
                  </h2>
                  <div class="overlay">
                    <div class="text text-white">                                         
                      <p class="lead">{{$cp->country}}</p>
                      <p>{!! date('j F Y', strtotime($cp->start_date))  !!}<br/>
                        <small>to</small><br/>
                        {!! date('j F Y', strtotime($cp->end_date))!!}</p>
                        
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
     
            <!--  Event Listing // -->

          <div class="col-lg-3 pb-3">
            
            <div id="form-sticky">
              <div class="bg-light p-2 border border-secondary"> 
                <h3 class="text-center title mb-3">Post Your Event</h3>
                 @if(session('message'))
                    <div class="alert alert-{{ session('message_type') }} alert-dismissible" id="success-alert" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
			                        {{@session('message')}}
			                    </div>
			                @endif
			               {!! Form::Open(array('url' => 'postevent-success', 'method' => 'post'))!!}
                     {{ csrf_field() }}
			                  <div class="form-group">
			                    {{Form::text('event_name', null,['required'=>'required','class'=>'form-control','placeholder'=>'Event Name*'])}}
			                    <input type="hidden" name="page" value="Events">
                          <input type="hidden" name="url" value="<?php echo url()->current();?>">
			                    <input type="hidden" name="slug" value="{{\Request::segment(2)}}">
			                  </div>
                        <div class="form-group">
                          {{Form::text('event_venue',null,['required'=>'required','class'=>'form-control','placeholder'=>'Event Venue*'])}}
                        </div>
                        <div class="form-gropup">
                          {{Form::textarea('event_address',null,['rows'=>3,'required'=>'required',
                          'class'=>'form-control mb-3','placeholder'=>'Event Address*'])}}
                          
                        </div>
                        <div class="form-group">
                          {{Form::text('start_date',null,['id'=>'datepick','class'=>'form-control','placeholder'=>'MM/DD/YYYY'])}}
                          
                        </div>
                        <div class="form-group">
                          {{Form::text('end_date',null,['id'=>'datepick1','class'=>'form-control','placeholder'=>'MM/DD/YYYY'])}}
                        </div>
			                  <div class="form-group">
			                   {{Form::text('organiser', null,['required'=>'required','class'=>'form-control','placeholder'=>'Event Organizer*'])}}
			                  </div>
                        <div class="form-group">
                         {{Form::text('email', null,['class'=>'form-control','placeholder'=>'Email'])}}
                        </div>
                        <div class="form-group">
                          {{Form::text('web_link', null,['required'=>'required','class'=>'form-control','placeholder'=>'Event Weblink*'])}}
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
            </div>
          </div>
        </div>
      </div>
      <!-- Event Listing // -->
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
  <script src="{{ asset('industry/js/multiselect.js')}}"></script>
  <script>
    $(document).ready(function() {
      $('#filter_country').multiselect();
      $('#filter_month').multiselect();
      $('#filter_year').multiselect();

    });


  </script>

   <script type="text/javascript">
$(document).ready(function()
{

$("#filter_month, #filter_country, #filter_year").change(function()
{
var month=$('#filter_month').val();

var country =  $('#filter_country').val();
var year = $('#filter_year').val();
var dataString = 'month='+month+'&country='+country+'&year='+year;
console.log(month);
console.log(dataString);

$.ajax
({
type: "GET",
url: "{{url('/eventfilter')}}",
data: dataString,
cache: false,
success: function(data)
{
   $('#event-list').empty();
   $('#event-list').append(data);
   
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
@endsection