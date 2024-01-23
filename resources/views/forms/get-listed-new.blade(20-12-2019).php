@extends('../layouts/pages')


@section('style')
<style type="text/css">
  .font-14 {font-size: 14px; line-height: 1.5;}
  #form-tabs .nav-link{
    padding: 0.6rem 0.6rem;
  }
  #form-tabs .nav-tabs .nav-link { border: 1px solid #fff; }
  #form-tabs .card-body {padding: 0px;}
  #form-tabs .card-body a:hover {color: #fff !important;}
  #form-tabs .nav-tabs .nav-item.show .nav-link, #form-tabs .nav-tabs .nav-link.active{color: #fff !important; border-top-left-radius: 10px; border-top-right-radius: 10px; transition: 0.2s;}

  #form-tabs .card-deck .card .card-body {height: auto; }

  .form-control {border-radius: 0px; font-size: 13px;}

  ::placeholder { color: #b1b1b1 !important; opacity: 1; }
  :-ms-input-placeholder { color: #b1b1b1 !important; }
  ::-ms-input-placeholder { color: #b1b1b1 !important; }

  select.form-control:not([size]):not([multiple]) { height: calc(1.95rem + 2px);}

  .custom-select { height: calc(2rem + 2px); border-radius: 0px;}

  select { color: #b1b1b1 !important; }
  option:not(:checked) { color: #555 !important; }
  option:checked { color: #555 !important; }
  select option:first-child { color: #c9c9c9 !important; }
  
  .custom-checkbox .custom-control-label::before {padding: 0; top: 0; border: 1px solid #ccc;}
  .custom-checkbox .custom-control-label::after { top: 0px; left: 0px;}
  .Brdr-Dash{border: 1px dashed #ccc;}
  .cust-title { font-size: 18px; padding: 5px 30px; background-color: #7A0E77; color: #fff; font-weight: bold;}
  .testi-desc::before {
    content: "\f10d";
    font-family: FontAwesome;
    position: relative;
    color: #cecece;
    left: 0px;
    bottom: 0px;
    font-size: 30px;
    padding-right: 10px;
  }

  .testi-desc::after {
    content: "\f10e";
    font-family: FontAwesome;
    position: relative;
    color: #cecece;
    right: 0px;
    bottom: -10px;
    font-size: 30px;
    padding-left: 10px;
  }
  .shadow { box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important; }

  .txt-yellow{color: #fee61f;}
  .bg-transp{background-color: rgba(0,0,0,0.6);}
  .carousel-caption {   
    top: 20%;
    left: 20%;
    right: 20%;    
  }
  .carousel-caption h2{   
    padding-left: 20px;
    padding-right: 20px;
  }
  .carousel-caption h2{font-family: 'Poppins', sans-serif !important;}

  @media (min-width: 0px) and (max-width: 575.98px) { 
    .carousel-caption{   
      top: -41%;
      left: 5%;
      right: 5%;
    }
    .carousel-caption h2{   
      font-size: 20px;
      padding-left: 20px;
      padding-right: 20px;
    }
  }

  @media (min-width: 576px) and (max-width: 767.98px) { 
    .carousel-caption{   
      top: 0% !important;
      left: 5%;
      right: 5%;
    }
    .carousel-caption h2{   
      font-size: 20px;
      padding-left: 20px;
      padding-right: 20px;
    }
  }
  @media (min-width: 768px) and (max-width: 991.98px) { 
    .carousel-caption{   
      top: 10% !important;
      left: 5%;
      right: 5%;
    }
    .carousel-caption h2{   
      font-size: 26px;
      padding-left: 20px;
      padding-right: 20px;
    }
  }

  @media (min-width: 992px) and (max-width: 1200px) { 
    .carousel-caption {   
      top: 10%;
      left: 10%;
      right: 10%;    
    }
    .carousel-caption h2{   
      padding-left: 20px;
      padding-right: 20px;
    }
  }  

  .media img { width: auto; }

  .alert-warning {
    color: #333;
    background-color: #fff3cd;
    border-color: #b59000 !important;
  }
</style>


@endsection


@section('content')
<div class="mt-80 pt-4"></div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-success success-title">Successfully submitted
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </h4>
      </div>
      <div class="modal-body">
        <p>Thank you. Your registration was successful. An acknowledging email with details has been sent to your registered email-id. If you did not received the email or have problems opening it, please get in touch with us at <strong>enquiry@plantautomation-technology.com.</strong></h4></p></p>
      </div>
      <div class="modal-footer">
        <!--   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
        <a class="btn btn-seconadry" role="button" id="aa" name="aa"  href="{{url('get-listed-new')}}" aria-expanded="false">
          Close
        </a>

      </div>
    </div>
  </div>
</div>


<!-- <div class="container-fluid text-center">
  <div class="row">
    <img src="{{ config('app.url')}}images/get-listed-new-banner.jpg" alt="Get Listed" class="img-fluid" />
  </div>
</div> -->

<div class="carousel" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 pl-0 pr-0 text-center">
          <img src="{{ config('app.url')}}images/get-listed-new-banner.jpg" class="img-fluid" alt="Get Listed">
        </div>
      </div>

      <div class="carousel-caption">
        <h2 class="font-30 bg-transp pt-3 pb-3 mb-4"><strong class="txt-yellow">Reach out to 10K+</strong> In-Market & Active Buyers Daily on Plant Automation Platform.</h2>
        <!-- <button type="button" class="btn btn-info modal-btn" data-id="get-listed" data-toggle="modal" data-target="#myModal0">List Your Business</button> -->
      </div>
    </div>
  </div>
</div>

<div class="pt-4"></div> 

<div class="container-fluid" id="form-tabs">
  <div class="card-deck">

    <!--  From Left Section // -->
    <div class="card">      
      <div class="card-body shadow bg-light border">
        <nav class="nav-justified">
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link text-left active tab-btn-1" id="nav-manufacturer-tab" data-toggle="tab" href="#nav-manufacturer" role="tab" aria-controls="nav-manufacturer" aria-selected="true">
              <small class="text-light">Are you a</small><br>
              <strong class="font-20 text-white">Manufacturer?</strong><br>
              <small class="text-light">Showcase your products</small>
            </a>

            <a class="nav-item nav-link text-left tab-btn-2" id="nav-distributor-tab" data-toggle="tab" href="#nav-distributor" role="tab" aria-controls="nav-distributor" aria-selected="false">
              <small class="text-light">Are you a</small><br>
              <strong class="font-20 text-white">Distributor?</strong><br>
              <small class="text-light">Join our Distributor Network</small>
            </a>

            <a class="nav-item nav-link text-left tab-btn-3" id="nav-buyer-tab" data-toggle="tab" href="#nav-buyer" role="tab" aria-controls="nav-buyer" aria-selected="false">
              <small class="text-light">Are you a</small><br>
              <strong class="font-20 text-white">Buyer?</strong><br>
              <small class="text-light">Post your requirement</small>
            </a>
          </div>
        </nav>

        <div class="tab-content pl-3 pr-3" id="nav-tabContent">

          <div class="tab-pane fade show active" id="nav-manufacturer" role="tabpanel" aria-labelledby="nav-manufacturer-tab">
            <h2 class="font-weight-bold display-4 pt-3 pb-2 text-center text-secondary">Register and Know More</h2>

            <form method="post" action="{{ route('getlisted.post')}}">
              @csrf()
              <input type="hidden" name="form_type" value="manufacture">       
              <input type="hidden" id="thank_message" name="thank_message" value="Thank you. Your registration was successful. An acknowledging email with details has been sent to your registered email-id. If you did not received the email or have problems opening it, please get in touch with us at enquiry@plantautomation-technology.com.">    
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="manufacturer-1" name="type" class="custom-control-input" checked="checked" value="free-inclusion">
                <label class="custom-control-label font-weight-bold font-14 pt-1" for="manufacturer-1">Free Inclusion</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="manufacturer-2" name="type" class="custom-control-input" value="premium-inclusion">
                <label class="custom-control-label font-weight-bold font-14 pt-1" for="manufacturer-2">Premium Inclusion</label>
              </div>

              <div class="form-row mt-3">
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Firstname*" required>
                </div>
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Lastname*" required>
                </div>
              </div>

              <div class="form-row">                   
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" name="company" id="company" placeholder="Company Name*" required>
                </div>                   
                <div class="col-md-6 mb-3">
                  <select class="form-control" name="company_type" required>
                    <option disabled selected value="">Company Type*</option> 
                    <option value="Manufacturer">Manufacturer</option>
                    <option value="Custom Manufacturer">Custom Manufacturer</option>
                    <option value="Turnkey System Integrators">Turnkey System Integrators</option>
                    <option value="Service Company">Service Company</option>
                  </select>
                </div>
              </div>

              <div class="form-row">  
                <div class="col-md-6 mb-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email*" required>
                </div>              
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" name="website" id="website" placeholder="Website URL*" required>
                </div>
              </div>

              <div class="form-row">  
                <div class="col-md-6 mb-3">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">                      
                      <select class="custom-select" id="country_code" name="country_code">
                        <option>Code *</option>
                        @foreach($countries as $country)
                        <option value="{{$country->country_code}}" selected="">{{$country->calling_code}}</option> 
                        @endforeach
                      </select> 
                    </div>
                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile*" required>
                    <input type="hidden" name="calling_code" id="calling_code" value="">
                  </div>                
                </div>

                <div class="col-md-6 mb-3">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <select class="custom-select" id="country_code" name="country_code">
                        <option selected disabled>Code *</option>
                        @foreach($countries as $country)
                        <option value="{{$country->country_code}}" selected="">{{$country->calling_code}}</option> 
                        @endforeach
                      </select>
                    </div>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone*" required>
                  </div>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" name="street_address" id="street_address" placeholder="Street Address*" required>
                </div> 
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" name="city" id="city" placeholder="City*" required>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-6 mb-3">                      
                  <select class="form-control" name="country" id="country" required>
                    <option>Select Country*</option>
                    @foreach($countries as $country)
                    <option value="{{$country->country_name}}">{{$country->country_name}}</option> 
                    @endforeach
                  </select>
                </div>
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" name="postal_code" id="postal_code" placeholder="Postal Code*" required>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <textarea class="form-control" name="message"  id="message" rows="2" placeholder="Enter your message..."></textarea>
                </div>
              </div>

              <div class="form-group mb-0">
                {!! Form::captcha() !!}
              </div>
              

              <div class="text-danger verifi"></div>   

              <div class="form-group">
                <div class="col-md-4 offset-md-4 text-center">
                  <button type="submit" class="btn btn-success btn-block mt-1" id="sub">Submit</button>
                </div>
              </div>
            </form>
          </div>


          <div class="tab-pane fade" id="nav-distributor" role="tabpanel" aria-labelledby="nav-distributor-tab">
            <h2 class="font-weight-bold display-4 pt-3 pb-2 text-center text-secondary">Register and Know More</h2>

            <!-- <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="distributor-1" name="Radio-tab-2" class="custom-control-input" checked="checked">
              <label class="custom-control-label font-weight-bold font-14 pt-1" for="distributor-1">Free Inclusion</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="distributor-2" name="Radio-tab-2" class="custom-control-input">
              <label class="custom-control-label font-weight-bold font-14 pt-1" for="distributor-2">Premium Inclusion</label>
            </div> -->

            <form method="post" action="{{ route('getlisted.post')}}">
              @csrf()

              
              <input type="hidden" name="form_type" value="distributor">       
              <input type="hidden" id="thank_message" name="thank_message" value="Thank you for your interest in becoming our partner. A staff member will get in touch with you in next 48 hours.Sincerely ">    
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="distributor-1" name="type" class="custom-control-input" checked="checked" value="free-inclusion">
                <label class="custom-control-label font-weight-bold font-14 pt-1" for="distributor-1">Free Inclusion</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="distributor-2" name="type" class="custom-control-input" value="premium-inclusion">
                <label class="custom-control-label font-weight-bold font-14 pt-1" for="distributor-2">Premium Inclusion</label>
              </div>


              <div class="form-row mt-3">

                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Firstname*" required>
                </div>
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Lastname*" required>
                </div>
              </div>

              <div class="form-row">                   
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" name="distributorship" id="distributorship" placeholder="Distributorship Name*" required>
                </div>                   
                <div class="col-md-6 mb-3">
                  <select class="form-control" id="distributorship_type" name="distributorship_type" required>
                    <option disabled="" selected="">Distributorship Type*</option> 
                    <option value="Multi Brand">Multi Brand</option>
                    <option value="Single Brand">Single Brand</option>
                  </select>
                </div>
              </div>

              <div class="form-row">  
                <div class="col-md-6 mb-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email*" required>
                </div>              
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" name="website" id="website" placeholder="Website URL*" required>
                </div>
              </div>

              <!-- <div class="form-row">  
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile*" required>
                </div>                
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone*" required>
                </div>
              </div> -->

              <div class="form-row">  
                <div class="col-md-6 mb-3">
                  <div class="input-group mb-3">
                   <div class="input-group-prepend">                      
                    <select class="custom-select" id="country_code" name="country_code">
                      <option>Code *</option>
                      @foreach($countries as $country)
                      <option value="{{$country->country_code}}" selected="">{{$country->calling_code}}</option> 
                      @endforeach
                    </select> </div>
                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile*" required>
                    <input type="hidden" name="calling_code1" id="calling_code1" value="">
                  </div>                
                </div>
                <div class="col-md-6 mb-3">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">                      


                      <select class="custom-select" id="country_code" name="country_code">
                        <option>Code *</option>
                        @foreach($countries as $country)
                        <option value="{{$country->country_code}}" selected="">{{$country->calling_code}}</option> 
                        @endforeach
                      </select>


                    </div>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone*" required>
                  </div>
                </div>
              </div>



              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" name="street_address" id="street_address" placeholder="Street Address*" required>
                </div> 
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" name="city" id="city" placeholder="City*" required>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-6 mb-3">                      
                  <select class="form-control" name="country" id="country" required>
                    <option>Select Country*</option>
                    @foreach($countries as $country)
                    <option value="{{$country->country_name}}">{{$country->country_name}}</option> 
                    @endforeach
                  </select>
                </div>
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" name="postal_code" id="postal_code" placeholder="Postal Code*" required>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <textarea class="form-control" name="message"  id="message" rows="2" placeholder="Enter your message..."></textarea>
                </div>
              </div>

              <div class="form-group mb-0">
                {!! Form::captcha() !!}
              </div>

              <div class="text-danger verifi"></div>                       

              <div class="form-group">
                <div class="col-md-4 offset-md-4 text-center">
                  <button type="submit" class="btn btn-success btn-block mt-1" id="sub">Submit</button>
                </div>
              </div>
            </form>
          </div>


          <div class="tab-pane fade" id="nav-buyer" role="tabpanel" aria-labelledby="nav-buyer-tab">
            <h2 class="font-weight-bold display-4 pt-3 pb-2 text-center text-secondary">Register and Post your Requirement</h2>

            <form method="post" action="{{ route('getlisted.post')}}">
              @csrf()

              
              <input type="hidden" name="form_type" value="buyer"> 
              <div class="form-row">
                <input type="hidden" name="member_type" class="mem_type" value="get-listed">

                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Firstname*" required>
                </div>
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Lastname*" required>
                </div>
              </div>

              <div class="form-row">                   
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" name="company" id="company" placeholder="Company Name*" required>
                </div>                   
                <div class="col-md-6 mb-3">
                  <select class="form-control" name="company_type" required>
                    <option disabled="" selected="">Company Type*</option> 
                    <option value="Manufacturer">Manufacturer</option>
                    <option value="Custom Manufacturer">Custom Manufacturer</option>
                    <option value="Turnkey System Integrators">Turnkey System Integrators</option>
                    <option value="Service Company">Service Company</option>
                  </select>
                </div>
              </div>

              <div class="form-row">  
                <div class="col-md-6 mb-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email*" required>
                </div>              
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" name="website" id="website" placeholder="Website URL*" required>
                </div>
              </div>

             <!--  <div class="form-row">  
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile*" required>
                </div>                
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone*" required>
                </div>
              </div> -->

              <div class="form-row">  
                <div class="col-md-6 mb-3">
                  <div class="input-group mb-3">
                   <div class="input-group-prepend">                      
                    <select class="custom-select" id="country_code" name="country_code">
                      <option>Code *</option>
                      @foreach($countries as $country)
                      <option value="{{$country->country_code}}" selected="">{{$country->calling_code}}</option> 
                      @endforeach
                    </select> </div>
                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile*" required>
                    <input type="hidden" name="calling_code2" id="calling_code2" value="">
                  </div>                
                </div>
                <div class="col-md-6 mb-3">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">                      


                      <select class="custom-select" id="country_code" name="country_code">
                        <option>Code *</option>
                        @foreach($countries as $country)
                        <option value="{{$country->country_code}}" selected="">{{$country->calling_code}}</option> 
                        @endforeach
                      </select>


                    </div>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone*" required>
                  </div>
                </div>
              </div>



              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" name="street_address" id="street_address" placeholder="Street Address*" required>
                </div> 
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" name="city" id="city" placeholder="City*" required>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-6 mb-3">                      
                  <select class="form-control" name="country" id="country" required>
                    <option>Select Country*</option>
                    @foreach($countries as $country)
                    <option value="{{$country->country_name}}">{{$country->country_name}}</option> 
                    @endforeach
                  </select>
                </div>
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" name="postal_code" id="postal_code" placeholder="Postal Code*" required>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <textarea class="form-control" name="message"  id="message" rows="" placeholder="Describe your project..."></textarea>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <div class="custom-control custom-checkbox  custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="price_check" name="buyer_request[]" value="Price/Quote">
                    <label class="custom-control-label" for="price_check">Price/Quote</label>
                  </div>
                  <div class="custom-control custom-checkbox  custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="doc_check" name="buyer_request[]" value="Documentation">
                    <label class="custom-control-label" for="doc_check">Documentation</label>
                  </div>
                </div>
              </div>

              <div class="form-group mb-0">
                {!! Form::captcha() !!}
              </div>

              <div class="text-danger verifi"></div>    

              <div class="form-group">
                <div class="col-md-4 offset-md-4 text-center">
                  <button type="submit" class="btn btn-success btn-block mt-1" id="sub">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- // From Left Section -->



    <!-- // From Right Section -->
    <div class="card">      
      <div class="card-body pt-2 tab-1">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <h3 class="mb-4"><span class="cust-title">WHY US ?</span></h3>
          </div>          

          <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-3">
            <div class="bg-white">
              <div class="media">
                <!-- <i class="fa fa-3x fa-cubes text-blue mr-3" aria-hidden="true"></i> -->
                <img src="{{ config('app.url')}}images/get-listed-brand-augmentation-icon.png" class="img-fluid mr-3" alt="">
                <div class="media-body align-self-center">
                  <p><span class="font-weight-bold">Brand Augmentation</span> - <br>Quantifiable brand awareness and brand promotions.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-3">
            <div class="bg-white">
              <div class="media">
                <img src="{{ config('app.url')}}images/get-listed-global-reach-icon.png" class="img-fluid mr-3" alt="">
                <div class="media-body align-self-center">
                  <p><span class="font-weight-bold">Global Reach</span> - <br>Business promotions in the region/s of your choice globally.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-3">
            <div class="bg-white">
              <div class="media">
                <img src="{{ config('app.url')}}images/get-listed-b2b-lead-icon.png" class="img-fluid mr-3" alt="">
                <div class="media-body align-self-center">
                  <p><span class="font-weight-bold">B2B Leads</span> - <br>Experience relevant and quality checked product leads on a steady basis.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-3">
            <div class="bg-white">
              <div class="media">
                <img src="{{ config('app.url')}}images/get-listed-distribution-network-icon.png" class="img-fluid mr-3" alt="">
                <div class="media-body align-self-center">
                  <p><span class="font-weight-bold">Distribution Network</span> - <br>Get engaged with relevant distributor network from the market of your choice.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-3">
            <div class="bg-white">
              <div class="media">
                <img src="{{ config('app.url')}}images/get-listed-project-icon.png" class="img-fluid mr-3" alt="">
                <div class="media-body align-self-center">
                  <p><span class="font-weight-bold">Projects and Tenders</span> - <br>Stay tuned with upcoming and relevant industrial projects/tenders.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-3">
            <div class="bg-white">
              <div class="media">
                <img src="{{ config('app.url')}}images/get-listed-industrial-events-icon.png" class="img-fluid mr-3" alt="">
                <div class="media-body align-self-center">
                  <p><span class="font-weight-bold">Industrial Events</span> - <br>Stay updated with upcoming industrial events in the regions of your choice.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-3">
            <div class="bg-white">
              <div class="media">
                <img src="{{ config('app.url')}}images/get-listed-rfi-rfq-icon.png" class="img-fluid mr-3" alt="">
                <div class="media-body align-self-center">
                  <p><span class="font-weight-bold">RFIs and RFQs</span> - <br>Address RFIs and RFQs directly</p>
                </div>
              </div>
            </div>
          </div> -->

          <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-3">
            <div class="bg-white">
              <div class="media">
                <img src="{{ config('app.url')}}images/get-listed-analytics-icon.png" class="img-fluid mr-3" alt="">
                <div class="media-body align-self-center">
                  <p><span class="font-weight-bold">Analytics</span> - <br>Get regular product and profile page performance reports for future actions.</p>
                </div>
              </div>
            </div>
          </div>          

          <div class="col-lg-12 col-md-12 col-sm-12 col-12 pt-2 pb-2">
            <div class="alert alert-warning font-14 shadow">
              Sail through enhanced business promotions and sales activity using our services which comes with crystal clear analytics and precise marketing actions.
            </div>
          </div>

        </div>
      </div>

      <div class="card-body pt-2 tab-2" style="display: none;">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <h3 class="mb-4"><span class="cust-title">WHY US ?</span></h3>
          </div>          

          <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-3">
            <div class="bg-white">
              <div class="media">
                <!-- <i class="fa fa-3x fa-cubes text-blue mr-3" aria-hidden="true"></i> -->
                <img src="{{ config('app.url')}}images/get-listed-brand-augmentation-icon.png" class="img-fluid mr-3" alt="">
                <div class="media-body align-self-center">
                  <p><span class="font-weight-bold">Brand Augmentation</span> - <br>Quantifiable brand awareness and brand promotions.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-3">
            <div class="bg-white">
              <div class="media">
                <img src="{{ config('app.url')}}images/get-listed-global-reach-icon.png" class="img-fluid mr-3" alt="">
                <div class="media-body align-self-center">
                  <p><span class="font-weight-bold">Global Reach</span> - <br>Business promotions in the region/s of your choice globally.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-3">
            <div class="bg-white">
              <div class="media">
                <img src="{{ config('app.url')}}images/get-listed-b2b-lead-icon.png" class="img-fluid mr-3" alt="">
                <div class="media-body align-self-center">
                  <p><span class="font-weight-bold">B2B Leads</span> - <br>Experience relevant and quality checked product leads on a steady basis.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-3">
            <div class="bg-white">
              <div class="media">
                <img src="{{ config('app.url')}}images/get-listed-project-icon.png" class="img-fluid mr-3" alt="">
                <div class="media-body align-self-center">
                  <p><span class="font-weight-bold">Projects and Tenders</span> - <br>Stay tuned with upcoming and relevant industrial projects/tenders that suites you.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-3">
            <div class="bg-white">
              <div class="media">
                <img src="{{ config('app.url')}}images/get-listed-industrial-events-icon.png" class="img-fluid mr-3" alt="">
                <div class="media-body align-self-center">
                  <p><span class="font-weight-bold">Industrial Events</span> - <br>Stay updated with upcoming industrial events in the regions of your choice.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-3">
            <div class="bg-white">
              <div class="media">
                <img src="{{ config('app.url')}}images/get-listed-analytics-icon.png" class="img-fluid mr-3" alt="">
                <div class="media-body align-self-center">
                  <p><span class="font-weight-bold">Analytics</span> - <br>Get regular product and profile page performance reports for future actions.</p>
                </div>
              </div>
            </div>
          </div>          

          <div class="col-lg-12 col-md-12 col-sm-12 col-12 pt-2 pb-2">
            <div class="alert alert-warning font-14 shadow">
              Sail through enhanced business promotions and sales activity using our services which comes with crystal clear analytics and precise marketing actions.
            </div>
          </div>

        </div>
      </div>  

      <div class="card-body pt-2 tab-3" style="display: none;">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <h3 class="mb-4"><span class="cust-title">WHY US ?</span></h3>
          </div>          

          <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-3">
            <div class="bg-white">
              <div class="media">
                <!-- <i class="fa fa-3x fa-cubes text-blue mr-3" aria-hidden="true"></i> -->
                <img src="{{ config('app.url')}}images/get-listed-verified-icon.png" class="img-fluid mr-3" alt="">
                <div class="media-body align-self-center">
                  <p><span class="font-weight-bold">Verified Manufacturers</span> - <br>Get pricing/quotes from a list of verified manufacturers/distributors.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-3">
            <div class="bg-white">
              <div class="media">
                <img src="{{ config('app.url')}}images/get-listed-product-document.png" class="img-fluid mr-3" alt="">
                <div class="media-body align-self-center">
                  <p><span class="font-weight-bold">Product Document</span> - <br>Access premium product documentations for your project.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-3">
            <div class="bg-white">
              <div class="media">
                <img src="{{ config('app.url')}}images/get-listed-fast-fulfillment-icon.png" class="img-fluid mr-3" alt="">
                <div class="media-body align-self-center">
                  <p><span class="font-weight-bold">Fast Fulfillment</span> - <br>24x7 requirement fulfillment cycle.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-3">
            <div class="bg-white">
              <div class="media">
                <img src="{{ config('app.url')}}images/get-listed-priority-icon.png" class="img-fluid mr-3" alt="">
                <div class="media-body align-self-center">
                  <p><span class="font-weight-bold">Priority Programs</span> - <br>Priority project programs.</p>
                </div>
              </div>
            </div>
          </div>          

          <div class="col-lg-12 col-md-12 col-sm-12 col-12 pt-2 pb-2">
            <div class="alert alert-warning font-14 shadow">Get a chance to experience our active buyer network. Get your project requirement filfilled in a giffy, create a wider supplier list with diversified criteria. Get actionable responses from selected suppliers fast.
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- From Right Section // -->

  </div>
</div>


<div class="pt-3 pb-3"></div> 

<div class="container" id="form-tabs">
  <div class="card-deck">
    <div class="card">
      <div class="card-body bg-light border">
        <div class="pt-3 text-center">
          <h2 class="font-weight-bold text-blue font-20">What our clients say</h2>
        </div>

        <div class="col-md-12 col-12 pt-2 pb-2">
          <div class="bg-white shadow p-3">
            <p class="testi-desc">Superb network of buyers...really! What amazed me is that within 15 days of us going live on their website we actually received more product enquiries than we got in total that quarter.</p>
            <p class="mt-3 mb-0 mb-0 font-weight-bold">Juan Douglas  - Business Partner</p>
            <small class="font-14 font-italic">Metro Tools Inc.</small>
          </div>
        </div> 

        <div class="col-md-12 col-12 pt-3 pb-3">
          <div class="bg-white shadow p-3">
            <p class="testi-desc">I have a very active relationship with them. Their platform helps me in directly contacting material suppliers, raise RFIs and deal with those in batches. Plant Automation platform is a very important tool in my work life that I use. Keep up the good work.</p>
            <p class="mt-3 mb-0 mb-0 font-weight-bold">Brian Blevans  - Unicorn Industrial Services</p>
            <small class="font-14 font-italic">Plant Maintenance Consultant</small>
          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-body bg-light border">
        <div class="col-md-12 pt-3 text-center">
          <h2 class="text-blue font-20"><span class="font-weight-bold">Our Reach</span> (% of companies listed with us)</h2>
          <img src="{{ config('app.url')}}images/get-listed-piechart.png" alt="Get Listed" class="img-fluid mt-2 mb-3" />
        </div>
      </div>
    </div>

  </div>
</div>


<div class="pt-3 pb-3"></div> 


<div class="container">
  <h2 class="text-center font-weight-bold font-20 mb-3">Our Clients</h2>
  <div class="row">
    <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">
      <img src="{{ config('app.url')}}suppliers/scaglia-indeva-spa/1517398922-indeva.jpg" alt="" class="img-fluid border p-1" />
    </div>
    <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">
      <img src="{{ config('app.url')}}suppliers/hydro-znphs-sp-z-oo/1517401846-logo.jpg" alt="" class="img-fluid border p-1" />
    </div>
    <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">
      <img src="{{ config('app.url')}}suppliers/festo-ag-co-kg/1517462331-festo-logo.jpg" alt="" class="img-fluid border p-1" />
    </div>
    <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">
      <img src="{{ config('app.url')}}suppliers/dfi-inc/1517494967-dfi-logo.jpg" alt="" class="img-fluid border p-1" />
    </div>
    <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">
      <img src="{{ config('app.url')}}suppliers/horiba-ltd/1517500480-horiba-logo.jpg" alt="" class="img-fluid border p-1" />
    </div>
    <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">
      <img src="{{ config('app.url')}}suppliers/mitsubishi-electric-corporation/1517555519-mitsubishi.jpg" alt="" class="img-fluid border p-1" />
    </div>

    <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">
      <img src="{{ config('app.url')}}suppliers/3s-smart-software-solutions/1517566224-3s-smart.jpg" alt="" class="img-fluid border p-1" />
    </div>
    <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">
      <img src="{{ config('app.url')}}suppliers/advantech-co-ltd/1517570217-advantech.jpg" alt="" class="img-fluid border p-1" />
    </div>
    <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">
      <img src="{{ config('app.url')}}suppliers/gem-gebr-mller-apparatebau-gmbh-co-kg/1517635954-gemu.jpg" alt="" class="img-fluid border p-1" />
    </div>
    <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">
      <img src="{{ config('app.url')}}suppliers/syslogic-gmbh/1517648473-syslogic.jpg" alt="" class="img-fluid border p-1" />
    </div>
    <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">
      <img src="{{ config('app.url')}}suppliers/yokogawa-europe/1517657613-yokogawa.jpg" alt="" class="img-fluid border p-1" />
    </div>
    <div class="col-lg-2 col-mg-2 col-sm-3 col-6 text-center pb-4">
      <p class="mb-0 border p-4 text-blue font-weight-bold">
        <a href="{{url('clientele')}}" target="_blank"><i class="fa fa-plus" aria-hidden="true"></i> More</a>
      </p>
    </div>
  </div>
  <?php //echo phpinfo();?>
</div> 

@endsection    


@section('scripts')
<script>
  $(document).ready(function() {
    $(".tab-3").hide();
    $(".tab-2").hide();
    $(".tab-1").show();
  });

  $(".tab-btn-1").click(function() {
    $(".tab-2").hide();
    $(".tab-3").hide();
    $(".tab-1").show();
  });

  $(".tab-btn-2").click(function() {
    $(".tab-1").hide();
    $(".tab-3").hide();
    $(".tab-2").show();
  });

  $(".tab-btn-3").click(function() { 
    $(".tab-1").hide();
    $(".tab-3").show();
    $(".tab-2").hide();
  });



  @if (Request::segment(1) =="get-listed-manufacturer-success")
  $('#myModal').modal('show'); 
  @endif

  @if (Request::segment(1) =="get-listed-distributor-success")
  $('#myModal').modal('show'); 
  @endif
  

  @if (Request::segment(1) =="get-listed-buyer-success")
  $('#myModal').modal('show'); 
  @endif  

</script>



<script language="Javascript">
 @php
 $ip_address= $_SERVER['REMOTE_ADDR'];
    //$_SERVER['REMOTE_ADDR']
    //'14.102.144.0'

   // $ip_address="162.243.108.161";


    // $ip_address="103.61.219.255";
    $hostname = gethostbyaddr($ip_address);

    $country = geoip_country_name_by_name($hostname);

    $countrycode = geoip_country_code_by_name($hostname);

   //$countrycode="GI";

/*if ($countrycode) {

    echo 'This host is located in: ' . $country;

  }*/

  @endphp
  var country = "{{$country}}";

  var countryc="{{$countrycode}}"
  console.log("{{$ip_address}}");
  console.log(country);
  console.log(countryc);


  $('#country_code option[value="' + countryc + '"]').attr("selected", "selected");

  $('#country_code option').filter(function(){
    return this.value == countryc;
  }).prop("selected", true);


  $('#country option[value="' + country + '"]').attr("selected", "selected");


  $('#country option').filter(function(){
    return this.value == country;
  }).prop("selected", true);

  var selectedText = $("#country_code option:selected").html();
//alert(selectedText);

$("#calling_code").val(selectedText);
$("#calling_code1").val(selectedText);
$("#calling_code2").val(selectedText);

</script>



@endsection





