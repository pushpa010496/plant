@extends('../layouts/event')
@section('style')
 
@endsection
@section('content')
 <!-- // Profile Body -->
 {!! Form::open(['url' => 'company-enquiry']) !!}
      <div class="container pt-4 pb-3">
        <div class="row">
            <div class="col-lg-9">  
              <div class="row">
              @foreach($galleries as $cp)
                  <div class="col-lg-4 mb-4">
                <a href="{{ config('app.url') }}event/gallery/{{$cp->big_img}}" data-toggle="lightbox" data-gallery="example-gallery">
                  <img src="{{ config('app.url') }}event/gallery/{{$cp->small_img}}" class="img-fluid div-scal">
                </a>
              </div>

              @endforeach 
              @foreach($eventprofile as $cp)
               <input type="hidden" name="event_name_display" value="{{$cp->name}}">   
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
                
                  <div class="form-group">
                    {{Form::text('name', null,['required'=>'required','class'=>'form-control','placeholder'=>'Name*'])}}
                    <input type="hidden" name="page" value="event-Gallery">
                    <input type="hidden" name="slug" value="{{'events/'.\Request::segment(2).'/'.\Request::segment(3)}}">
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
    <script src="{{ asset('industry/js/ekko-lightbox.min.js')}}"></script>

 <script type="text/javascript">
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });    
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

   
@endsection

