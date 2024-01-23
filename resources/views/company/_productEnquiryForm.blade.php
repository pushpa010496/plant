 <div id="form-sticky">
  <div class="bg-light p-2 border border-secondary"> 
    <h3 class="text-center title mb-3 font-20 font-weight-bold">Product Enquiry</h3>
      <!-- @if(session('message'))
          <div class="alert alert-{{ session('message_type') }} alert-dismissible" id="success-alert" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              {{@session('message')}}
          </div>
      @endif -->
      {{-- {!! Form::open(['url' => 'company-enquiry']) !!} --}}
     
      <div class="form-group">
        {{Form::text('firstname', null,['required'=>'required','class'=>'form-control','placeholder'=>'First Name*'])}}
         
 
      <input type="hidden" name="cf_leads_product" value="{{@$prod->title}}">
      <input type="hidden" name="cmpslug" value="{{ \Request::segment(2) }}">
      <input type="hidden" name="view_page" value="profile view">
      <input type="hidden" name="cf_leads_companyenq" value="{{@$companyprofile->first()->title}}">      
      <input type="hidden" name="slug" value="{{'products/'.\Request::segment(2).'/'.\Request::segment(3)}}">
      <input type="hidden" name="url_seg" value="{{ucwords(\Request::segment(1))}}">
      @if ($errors->has('firstname'))
          <div class="error text-danger">{{ $errors->first('firstname') }}</div>
        @endif
      </div>
      <div class="form-group">
        {{Form::text('lastname', null,['required'=>'required','class'=>'form-control','placeholder'=>'Last Name*'])}}
     
      @if ($errors->has('lastname'))
          <div class="error text-danger">{{ $errors->first('lastname') }}</div>
        @endif
      </div>
    
      <div class="form-group">
       {{Form::text('company', null,['required'=>'required','class'=>'form-control','placeholder'=>'Company Name*'])}}
       @if ($errors->has('company'))
          <div class="error text-danger">{{ $errors->first('company') }}</div>
        @endif
      </div>
      <div class="form-group">
       {{Form::text('cf_leads_jobtitle', null,['required'=>'required','class'=>'form-control','placeholder'=>'Job Title'])}}
       @if ($errors->has('cf_leads_jobtitle'))
          <div class="error text-danger">{{ $errors->first('cf_leads_jobtitle') }}</div>
        @endif
      </div>
      <div class="form-group">
      {!! Form::select('cf_leads_countryname', $countries, old('cf_leads_countryname'),['class'=>'form-control']) !!}
      
        @if ($errors->has('cf_leads_countryname'))
          <div class="error text-danger">{{ $errors->first('cf_leads_countryname') }}</div>
        @endif
      </div>
      <div class="form-group">
       {{Form::text('email', null,['required'=>'required','class'=>'form-control','placeholder'=>'Email*'])}}
       @if ($errors->has('email'))
          <div class="error text-danger">{{ $errors->first('email') }}</div>
        @endif
      </div>
      <div class="form-group">
        {{Form::text('mobile', null,['required'=>'required','class'=>'form-control','placeholder'=>'Telephone*'])}}
        @if ($errors->has('mobile'))
          <div class="error text-danger">{{ $errors->first('mobile') }}</div>
        @endif
      </div>
      <div class="form-group">
        {{Form::textarea('description', null,['rows'=>3,'class'=>'form-control','placeholder'=>'Write Message...'])}}

        @if ($errors->has('description'))
          <div class="error text-danger">{{ $errors->first('description') }}</div>
        @endif
      </div>
      
     <div class="form-group">
       {!! Form::captcha() !!}
        @if ($errors->has('g-recaptcha-response'))
          <div class="error text-danger">{{ $errors->first('g-recaptcha-response') }}</div>
        @endif

        <div class="error text-danger verifi"></div>
    </div>
   {{--  <button type="submit"  class="btn btn-primary btn-block">Submit</button> --}}
    <input type="button" class="btn btn-primary btn-block" value="Submit" name=button1 onclick="return checkform();">
    

  </div>  
  <img src="{{ config('app.url') }}/img/ssl-logo.png" alt="SSL Secure Connection" width="100" class="img-fluid pull-right mt-1 mb-1" />
  <div class="clearfix"></div>
</div>

 <!-- success modal -->
 <div id="myModal1" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-success">{!!session('message_type')!!}</h4>
              <button type="button" class="close" onClick="location.href=location.href">&times;</button>
              
            </div>
            <div class="modal-body">
                <p class="">{!!session('message')!!}</p>
                <p>Sincerely Planautomation Technology</p>
            <p class="mb-0">Regards,</p>
            <p class="mb-0">Client Success Team (CRM),</p>
            <img src="{{ config('app.url')}}img/main-logo.png" width="150px">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" onClick="location.href=location.href">Close</button>
                

              {{-- <a href="{{Request::url()}}" class="btn btn-info text-right">Close</a> --}}
            </div>
          </div>
        </div>
      </div>

     