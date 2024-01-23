
{{-- <form name="company_postrequirement" method="post" class="contact-form justify-content-center" id="company_postrequirement"> --}}
  <form action="{{url('company-postrequirement')}}" method="post" class="contact-form justify-content-center" id="company_postrequirement">
<div class="form-group">
  {{Form::text('firstname', null,['required'=>'required','class'=>'form-control','placeholder'=>'First Name*'])}}
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="cf_leads_page" value="profile view / requirement">
  <input type="hidden" name="cf_leads_product" value="{{@$prod->title}}">
  <input type="hidden" name="client_company" value="{{@$cp->title}}">
  <input type="hidden" name="formtype" value="modal-form">
  <input type="hidden" name="formid" value="postRequirement">
  <input type="hidden" name="publicid" value="6f6fbad2e8a0e3fd79096e13acb09486">
  <input type="hidden" name="name" value="plantautomation-product-enquiry">
  <input type="hidden" name="slug" value="{{'products/'.\Request::segment(2).'/'.\Request::segment(3)}}">
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
<input type="hidden" id="g-recaptcha-post-response" name="g-recaptcha-post-response">
<input type="hidden" name="post" value="{{url('company-postrequirement')}}">
<!-- <div class="form-group mb-1">
 {!! Form::captcha() !!}
 @if ($errors->has('g-recaptcha-response'))
 <div class="error text-danger">{{ $errors->first('g-recaptcha-response') }}</div>
 @endif

 <div class="error text-danger verifi"></div>
</div>
 --> <button type="submit"  class="btn btn-primary btn-block">Submit</button>
 <!-- <input type="button" class="btn btn-primary" value="Submit" name=button1 onclick="return checkform();">  -->
</form>
<img src="{{ config('app.url') }}/img/ssl-logo.png" alt="SSL Secure Connection" width="100" class="img-fluid pull-right mt-1 mb-1" />
<div class="clearfix"></div>



