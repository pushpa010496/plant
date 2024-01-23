@extends('../layouts/eventorg')
@section('style')
 
@endsection
@section('content')
 <!-- // Profile Body -->
      <div class="container pt-4 pb-3">
        <div class="row">
            <div class="col-lg-9">           
              @foreach($pressreleases as $cp)
                <div class="col-lg-4 text-center mb-4">
                <a target="_blank" href="{{ config('app.url') }}event/organiser/pressrealese/{{$cp->pdf}}"><img class="img-fluid div-scal" src="{{ config('app.url') }}event/organiser/pressrealese/{{$cp->image}}" alt="{{$cp->img_alt}}"></a>
              </div>
              @endforeach      
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
                    <input type="hidden" name="page" value="event exhibitors">
                    <input type="hidden" name="slug" value="{{'events/'.\Request::segment(2).'/'.\Request::segment(3)}}">
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

