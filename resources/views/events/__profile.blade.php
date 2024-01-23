@extends('../layouts/event')
@section('style')
 
@endsection
@section('content')
 <!-- // Profile Body -->
 {!! Form::open(['url' => 'company-enquiry']) !!}
      <div class="container pt-4 pb-3">
        <div class="row">
          
          @foreach($eventprofile as $cp)
           <div class="col-lg-9">
            <div class="row">
              <div class="col-lg-4">
               <img class="img-fluid" src="{{ config('app.url') }}event/{{@$cp->big_image}}" alt="{{$cp->img_alt}}"/> 
              </div>
              <input type="hidden" name="event_name_display" value="{{$cp->name}}">
              <div class="col-lg-8">
                <h1 class="title text-blue"><b>{{$cp->name}}</b></h1></br>
                <h2 class="title2 pt-1"><i class="fa fa-clock-o text-blue" aria-hidden="true"></i> &nbsp; <b>{!! date('j F', strtotime($cp->start_date))  !!} - {!! date('j F', strtotime($cp->end_date))  !!}, {!! date('Y', strtotime($cp->start_date))  !!}</b></h2>
                <p class="mb-2"><i class="fa fa-envelope text-blue" aria-hidden="true"></i> &nbsp; {{$cp->email}}</p>
                <p class="mb-2"><i class="fa fa-phone text-blue" aria-hidden="true"></i> &nbsp; {{$cp->phone}}</p>
                <p class="mb-2"><i class="fa fa-globe text-blue" aria-hidden="true"></i> &nbsp; {{$cp->web_link}}</p>
                <p class="mb-2"><i class="fa fa-map-marker text-blue fa-lg" aria-hidden="true"></i> &nbsp; {{$cp->venue}}</p>
              </div>
            </div>
            
            <div class="pt-3">
              {{$cp->description}}
            </div>
          </div>
           @endforeach  
          <div class="col-lg-3 pb-3">
            <div id="form-sticky">
              <div class="bg-white p-2 border border-secondary"> 
                <h3 class="text-center title mb-3">Register <small class="text-muted">( for this Event )</small></h3>
                 @if(session('message'))
                    <div class="alert alert-{{ session('message_type') }} alert-dismissible" id="success-alert" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{@session('message')}}
                    </div>
                @endif
                
                  <div class="form-group">
                    {{Form::text('name', null,['required'=>'required','class'=>'form-control','placeholder'=>'Name*'])}}
                    <input type="hidden" name="page" value="event_profile">
                    <input type="hidden" name="slug" value="{{\Request::segment(2)}}">
                    <input type="hidden" name="url" value="<?php echo url()->current();?>">
                    
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
                {!! Form::close() !!}
              </div>  
            </div>
          </div>
        </div>
      </div>  
      <!-- Profile Body // -->
    </div>
@endsection
@section('scripts')

   
@endsection