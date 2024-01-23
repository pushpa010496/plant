@extends('../layouts/eventorg')
@section('style')
 <style type="text/css">
 	.event-bg {
    background-image: url("{{config('app.url')}}img/events/event-list/event-listing-bg.jpg");
	}
 </style>
@endsection
@section('content')
     <!-- // Profile Body -->
      <div class="container pt-4 pb-3">
        <div class="row">
          <div class="col-lg-9">
              <div class="row" id="product"> 
            @foreach($eventorg as $cp)
              <div class="col-lg-4 mb-4">
                <div class="product div-shadow">
                  <div class="check">                       
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" name="productname[]" id="check{{$cp->event->id}}" class="custom-control-input" value="{{$cp->event->name}}">
                      <span class="custom-control-indicator"></span>
                    </label>                      
                  </div> 
                  <div id="prodimage{{$cp->event->id}}">
                    <a href="{{url('events/'.$cp->event->event_url)}}"><img class="img-fluid" src="{{config('app.url').'event/'.$cp->event->image}}" alt="{{$cp->event->img_alt}}"/></a>                                           
                    <h2><a href="{{url('events/'.$cp->event->event_url)}}">{{$cp->event->name}}</a></h2>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            </div>
            <!--  Event Listing // -->

          <div class="col-lg-3 pt-4 pb-3">
            
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
 <script type="text/javascript">
     @foreach($eventorg as $cp)
    $('#check{{$cp->event->id}}').change(function()
        {
          if($(this).is(":checked"))
          {  
            $('#prodimage{{$cp->event->id}}').addClass('unselectable');
            $('#prodimage{{$cp->event->id}}').addClass('overlay');     
          } 
          else {
            // $('div.prodimage{{$cp->event->id}}').removeClass("unselectable").addClass("div-shadow");
            $('#prodimage{{$cp->event->id}}').removeClass('unselectable');
            $('#prodimage{{$cp->event->id}}').removeClass('overlay');
          }
        });
        @endforeach
  </script>
@endsection