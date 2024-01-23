           <div id="form-sticky">
              <div class="bg-light p-2 border border-secondary"> 
                <h3 class="text-center mb-3 font-20 font-weight-bold">Product Enquiry</h3>
                  <div class="form-group">
                    {{Form::text('firstname', null,['required'=>'required','class'=>'form-control','placeholder'=>'First Name*'])}}
                    <input type="hidden" name="cmpslug" value="{{ \Request::segment(2) }}">
                    <input type="hidden" name="cf_leads_companyenq" value="{{@$companyprofile->first()->company->comp_name}}">    <input type="hidden" name="source" value="{{ \Request::segment(1) == 'im' ?'Marketing':'Direct'  }}">
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
                   {{Form::text('cf_leads_jobtitle', null,['required'=>'required','class'=>'form-control','placeholder'=>'Job Title*'])}}
                   @if ($errors->has('cf_leads_jobtitle'))
                      <div class="error text-danger">{{ $errors->first('cf_leads_jobtitle') }}</div>
                    @endif
                  </div>
                  

                   @if(\Request::segment(1) == 'products' && count(Request::segments()) == 3 && Request::segment(3) != 'enquiry-success' || \Request::segment(4) == 'enquiry-success')
                    
                      <input type="hidden" name="product_id" value="{{@$prod->id}}">
                      <input type="hidden" name="cf_leads_product" value="{{@$prod->title}}">

                    @else
                      @php
                        $products = $companyprofile->first()->pproduct->where('active_flag',1)->where('stage',1)->pluck('title','id')->prepend('-- select product* --',''); 
                      @endphp
                      <div class="form-group">
                        {!! Form::select('product_id', $products, old('product_id'),['class'=>'form-control','required'=>true]) !!}

                        @if ($errors->has('product_id'))
                        <div class="error text-danger">{{ $errors->first('product_id') }}</div>
                        @endif
                      </div>

                    @endif

                  <div class="form-group">
                    {!! Form::select('cf_leads_countryname', $countries, old('cf_leads_countryname'),['required'=>'required','class'=>'form-control']) !!}
                
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
                    <textarea rows="3" class="form-control" placeholder="Write Message..." name="description" cols="50" required=""></textarea>
                  </div>
                <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                  <button type="submit"  class="btn btn-primary btn-block">Submit</button> 
                </form>
              </div>  
              <img src="{{ config('app.url') }}/img/ssl-logo.png" alt="SSL Secure Connection" width="100" class="img-fluid pull-right mt-1 mb-1" />
              <div class="clearfix"></div>
  </div>


 