@extends('../layouts/eventorg')
@section('style')
 
@endsection
@section('content')
 <!-- // Profile Body -->
      <div class="container pt-4 pb-3">
        <div class="row">
          
        
          <div class="col-lg-9">
            <div class="row">
                @foreach($interviews as $cp)
              <div class="col-lg-6 text-center mb-4">
                <div class="border border-secondary div-shadow p-3 min-height-240">
                  <h2 class="display-5">{{$cp->title}}</h2>
                  <img class="img-fluid rounded-circle mb-2" src="{{config('app.url').'event/organiser/interview/'.$cp->image}}" alt="" width="120">
                  <p>{!!$cp->description!!}</p>
                  <h3 class="display-5 text-blue">{{$cp->name}}</h3>
                  <small>{{$cp->designation}}</small>
                </div>
              </div>            
                 @endforeach  
            </div>            
          </div>
          
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
                {!! Form::open(['url' => 'company-enquiry']) !!}
                  <div class="form-group">
                    {{Form::text('name', null,['required'=>'required','class'=>'form-control','placeholder'=>'Name*'])}}
                    <input type="hidden" name="page" value="event organiser interviews">
                    <input type="hidden" name="slug" value="{{'event-organiser/'.\Request::segment(2).'/'.\Request::segment(3)}}">
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