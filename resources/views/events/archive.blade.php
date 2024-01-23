@extends('../layouts/pages')
<script src="https://www.google.com/recaptcha/api.js?render=6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle"></script>
<script> 
    grecaptcha.ready(function() {
      grecaptcha.execute('6Lcggi0aAAAAAJb4bPsZN-3y8lVeT8IhhC1xgSle', {action: 'action'}).then(function(token) {
        document.getElementById("g-recaptcha-response").value=token
      });
    });
</script>
@section('style')

      <div id="myModal1" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-success">Event News letter</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              
            </div>
            <div class="modal-body">
              <form method="POST" name="event_form" id="formcount1">
               <input type="hidden" name="name" value="plantautomation-Event Archive News letter">

               <input type="hidden" name="formType" value="returnback">               

                  {{csrf_field()}}
                
                   <div class="form-group"> 
                    {{Form::text('firstname', null,['placeholder'=>"Enter Your First Name...",'required'=>'required','class'=> 'form-control'])}}
                  </div> 

                   <div class="form-group"> 
                    {{Form::text('lastname', null,['placeholder'=>"Enter Your Last Name...",'required'=>'required','class'=> 'form-control'])}}
                  </div> 

                   <div class="form-group"> 
                    {{Form::text('email', null,['placeholder'=>"Enter Your Email...",'required'=>'required','class'=> 'form-control'])}}
                  </div> 

                   <div class="form-group"> 
                    {{Form::text('company', null,['placeholder'=>"Enter Your Company name...",'required'=>'required','class'=> 'form-control'])}}
                  </div> 

                   <!-- <div class="form-group"> 
                    {{Form::text('mobile', null,['placeholder'=>"Enter Your Phone Number...",'required'=>'required','class'=> 'form-control'])}}
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
               

                  <!-- <div class="text-left form-group">                  
                   {!! Form::captcha() !!}
                  </div>  -->
                  <div class="submit-row"> 
                    <input  type="button" class="btn contact-btn" value="Submit" name=button1 onclick="return checkform1();">
                  </div> 
                </form>
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
     
      <h1 class="main-title"><span class="font-weight-bold">ARCHIVE EVENTS</span></h1>
      
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
          <button type="button" class="btn btn-info" onClick="location.href=location.href">Close</button>
        </div>
      </div>
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
                  
                 <?php
                 $starting_year  =date('Y', strtotime('-1 year'));
                 $ending_year = date('Y');
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
                  <div class="col-lg-4">
                    <div class="input-group">
                     {{ Form::selectMonth('month[]',null,['class'=>'form-control','multiple'=>'multiple','id'=>'filter_month']) }}
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
             <a href="{{url('newsletter-signup')}}"><button type="button" class="btn btn-block btn-primary"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;Events Newsletter
             </button></a>
             <!-- <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#myModal1"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;Events Newsletter</button> -->
           </div>
         </div>    
       </div>

       <!-- // Event Listing -->
       <div class="container pt-3 pb-3">
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
           @include('layouts/partials/_loadmorehtml') 
        </div>
        
        <!--  Event Listing form // -->
        <div class="col-lg-3 pb-3">            
          <div id="">
            <div class="bg-light p-2 border border-secondary"> 
              <!-- <h3 class="text-center title mb-3">Post Your Event</h3> -->
              <h3 class="text-center title mb-3 pb-2 pt-1 bg-primary text-white">Post Your Event</h3>
              
              <form action="{{ url('postevent-success') }}"  method="post">
              {{ csrf_field() }}
                <input type="hidden" name="name" value="plantautomation-events-archives">
              <div class="form-group">
                {{Form::text('cf_leads_eventname', null,['required'=>'required','class'=>'form-control','placeholder'=>'Event Name*'])}}
                <input type="hidden" name="page" value="Events">
                <input type="hidden" name="url" value="<?php echo url()->current();?>">
                <input type="hidden" name="slug" value="{{\Request::segment(2)}}">
              </div>
              <div class="form-group">
                {{Form::text('cf_leads_eventvenue',null,['required'=>'required','class'=>'form-control','placeholder'=>'Event Venue*'])}}
              </div>
              <div class="form-gropup">
                {{Form::textarea('cf_leads_eventaddress',null,['rows'=>3,'required'=>'required',
                'class'=>'form-control mb-3','placeholder'=>'Event Address*'])}}
                
              </div>
              <div class="form-group">
                {{Form::text('cf_leads_startdate',null,['required'=>'required','id'=>'datepick','class'=>'form-control','placeholder'=>'Start Date'])}}
                
              </div>
              <div class="form-group">
                {{Form::text('cf_leads_enddate',null,['required'=>'required','id'=>'datepick1','class'=>'form-control','placeholder'=>'End Date'])}}
              </div>
              <div class="form-group">
               {{Form::text('cf_leads_organiser', null,['required'=>'required','class'=>'form-control','placeholder'=>'Event Organizer*'])}}
             </div>
             <div class="form-group">
               {{Form::text('cf_leads_jobtitle', null,['required'=>'required','class'=>'form-control','placeholder'=>'Event Job Title*'])}}
             </div>
             <div class="form-group">
               {{Form::text('email', null,['required'=>'required','class'=>'form-control','placeholder'=>'Email'])}}
             </div>
             <div class="form-group">
              {{Form::text('cf_leads_weblink', null,['required'=>'required','class'=>'form-control','placeholder'=>'Event Weblink*'])}}
            </div>
            <div class="form-group">
              <select class="form-control" name="cf_leads_countryname">
                <option>Select Country</option>
                @foreach($countries as $country)
                <option value="{{$country->country_name}}">{{$country->country_name}}</option> 
                @endforeach
              </select>
            </div>
             <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
             <input type="hidden" name="action" value="{{ url('postevent-success') }}">
            
            <!-- <div class="form-group">
             {!! Form::captcha() !!}
           </div> -->
           <button type="submit" class="btn btn-primary btn-block">Submit</button>  
         </form>                      
         </div>  
         <img src="{{ config('app.url') }}/img/ssl-logo.png" alt="SSL Secure Connection" width="100" class="img-fluid pull-right mt-1 mb-1" />  
         <div class="clearfix"></div>
       </div>
     </div>
   </div>
 </div>
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
              $('#myModal').modal('show');
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


     
 //  function OnButton1(){
 //   var url = "{{ url('newsletter-signup-success') }}";
 //   setTimeout(function(){
 //    document.event_form.action =url;
 //    document.event_form.submit();  

 //  },200);
 // }

    
      // function OnButton2(){
      //   var url = "{{ url('postevent-success') }}";
      //  setTimeout(function(){
      //     document.postevent_form.action = url;
      //     document.postevent_form.submit();  
      //   },200);
      // }

      //validations


// function checkform1() {      
//    var flag = true;
//     var form = $('#form_count1');
//     $("#form_count input").each(function(){
//       if($(this)[0].hasAttribute("required")){
//         if($(this)[0].value == ""){
//           $('#alertModal').modal('show');                 
//            flag = false;
//         }else{
//            OnButton1()();
//            return true
//         }
//       }
//     });
//   }

  // function checkposteventform() {
  //          var flag = true;
  //          var form = $('#postevent');
  //          $("#postevent input").each(function(){
  //             if($(this)[0].hasAttribute("required")){
  //               if($(this)[0].value == ""){
  //                 $('#alertModal').modal('show');
  //                   flag = false;
  //                   return false;
  //               }else{
  //                  OnButton2();
  //                  return true;
  //               }
  //             }
  //         });      
   // var flag = true;
   //  var form = $('#postevent');
   //  $("#postevent input").each(function(){
   //    if($(this)[0].hasAttribute("required")){
   //      if($(this)[0].value == ""){
   //        $('#alertModal').modal('show');                 
   //         flag = false;
   //      }else{
   //        OnButton2();
   //        return true
   //      }
   //    }
   //  });
 // }
  </script>
   @if(session('success'))
    
    <script type="text/javascript">
      history.pushState(null, null, "/events/archives/signup-success");           
       @if ( Request::segment(3) == 'signup-success')
         $('#myModal').modal('show'); 
      @endif
    
      
    </script>
  @endif
<script type="text/javascript">
  var url = "{{ url('events/archives/more') }}";
 @include('layouts/partials/_loadmorejs')
</script>
@endsection